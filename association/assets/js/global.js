// SVGs to inject
var svgInjection = document.querySelectorAll('img.inline-svg');

// Do the injection
SVGInjector(svgInjection);

(function ($) {
  // Load in proper header image for the given breakpoint
  function custom_header_switcher() {
    var small =  Modernizr.mq('(max-width: 719px)'),
        medium = Modernizr.mq('(min-width: 720px)'),
        large =  Modernizr.mq('(min-width: 1400px)'),
        image_size = 'che_header_image';

        if ( small ) {
          image_size = 'association-hero-image--phone';
        } else if ( medium ) {
          image_size = 'association-hero-image';
        } else if ( large ) {
          image_size = 'che_header_image';
        }
      return image_size;
  }

  // Object-fit fallback
  /**
    * helper function to check whether an element has a specific class
    * @param {HTMLElement} el the element
    * @param {string} className the class
    * @return {boolean} whether the element has the class
    */
    function hasClass(el, className) {
    	return el.classList ? el.classList.contains(className) : new RegExp('\\b' + className + '\\b').test(el.className);
    }

    /**
    * helper function to add a class to an element
    * @param {HTMLElement} el the element
    * @param {string} className the class
    */
    function addClass(el, className) {
    	if (el.classList) {
    		el.classList.add(className);
    	} else if (!hasClass(el, className)) {
    		el.className += ' ' + className;
    	}
    }

    var imgContainers;
    var len;

    if (!Modernizr.objectfit) {
    	imgContainers = document.querySelectorAll('.image--fit-container');
    	len = imgContainers.length;

    	for (var i=0; i<len; i++) {
    		var $container = imgContainers[i],
    				imgUrl = $container.querySelector('img').getAttribute('src');
    		if (imgUrl) {
    			$container.style.backgroundImage = 'url(' + imgUrl + ')';
    			addClass($container, 'compat-object-fit');
    		}
    	}
    }

  // Store page JSON
  function association_page_json( type ) {
    var type = type,
        id = $('body').data('pageid');
        rest_url = '//' + window.location.host + '/wp-json/wp/v2/' + type + '/' + id;

    $.ajax({
      url: rest_url,
      dataType: 'JSON',
      success: function(data, status) {

          var localData = JSON.stringify(data);

          // If it's not stored yet... store it
          if (sessionStorage.getItem(type + id) === null) {
            window.sessionStorage.setItem(type + id, localData);
          }
      },
      error: function() {
          window.sessionStorage.removeItem(type + id);
      }
    });
  }


  $(document).ready( function() {
    var postType = 'pages',
        pageID = $('body').data('pageid'),
        storedDataObject = window.sessionStorage.getItem( postType + pageID ),
        localData,
        heroContainer = $('.page-header');

    if ( $('body').hasClass('page') ) {
      postType = 'pages';
    } else if ( $('body').hasClass('post') ) {
      postType = 'posts';
    }

    // run our ajax storage
    association_page_json(postType);

    // Parse our Data Object
    if ( storedDataObject != null ) {
        localData = JSON.parse(storedDataObject);
    }
    if (!Modernizr.objectfit) {
      // Load in Custom Header image
      if ( $('body').hasClass('has-header-image') ) {
        var image_size = custom_header_switcher(),
            hero_path = localData.custom_header[image_size];
        $('header.page-header').css('background-image', 'url('+hero_path+')'  );
        // $(window).on( 'resize', custom_header_switcher() );
      }
    }

    $('.menu-toggle').on('click', function(){
        $('body').toggleClass('menu-open');
    });

  });
})(jQuery, this);
