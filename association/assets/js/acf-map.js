(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type        function
*  @date        8/11/2013
*  @since       4.3.0
*
*  @param       $el (jQuery element)
*  @return      n/a
*/

function new_map( $el ) {

        // var
        var $markers = $el.find('.marker');


        // vars
        var args = {
                zoom            : 14,
                center          : new google.maps.LatLng(0, 0),
                mapTypeId       : google.maps.MapTypeId.ROADMAP,
                mapTypeControl: false,
                scrollwheel: false,
                streetViewControl: false,
                styles: [
    {
        "featureType": "water",
        "stylers": [
            {
                "saturation": 43
            },
            {
                "lightness": -11
            },
            {
                "hue": "#0088ff"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "hue": "#ff0000"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 99
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#808080"
            },
            {
                "lightness": 54
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ece2d9"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ccdca1"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#767676"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "poi",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape.natural",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#b8cb93"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi.sports_complex",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi.medical",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi.business",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    }
]
        };


        // create map
        var map = new google.maps.Map( $el[0], args);


        // add a markers reference
        map.markers = [];


        // add markers
        $markers.each(function(){

        add_marker( $(this), map );

        });


        // center map
        center_map( map );


        // return
        return map;

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type        function
*  @date        8/11/2013
*  @since       4.3.0
*
*  @param       $marker (jQuery element)
*  @param       map (Google Map object)
*  @return      n/a
*/

function add_marker( $marker, map ) {

        // var
        var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

        var icon = $marker.attr('data-icon');
        // create marker
        var marker = new google.maps.Marker({
                position        : latlng,
                map                     : map,
                icon            : icon,
        });

        // add to array
        map.markers.push( marker );

        // if marker contains HTML, add it to an infoWindow
        if( $marker.html() )
        {
                // create info window
                var infowindow = new google.maps.InfoWindow({
                        content         : $marker.html()
                });

                // show info window when marker is clicked
                google.maps.event.addListener(marker, 'click', function() {

                        infowindow.open( map, marker );

                });
        }

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type        function
*  @date        8/11/2013
*  @since       4.3.0
*
*  @param       map (Google Map object)
*  @return      n/a
*/

function center_map( map ) {

        // vars
        var bounds = new google.maps.LatLngBounds();

        // loop through all markers and create bounds
        $.each( map.markers, function( i, marker ){

                var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

                bounds.extend( latlng );

        });

        // only 1 marker?
        if( map.markers.length == 1 )
        {
                // set center of map
            map.setCenter( bounds.getCenter() );
            map.setZoom( 15 );
        }
        else
        {
                // fit to bounds
                map.fitBounds( bounds );
        }

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type        function
*  @date        8/11/2013
*  @since       5.0.0
*
*  @param       n/a
*  @return      n/a
*/
  // global var
  var map = null;

  $(document).ready(function(){

          $('.acf-map').each(function(){

                  // create map
                  map = new_map( $(this) );

          });
  });

})(jQuery);
