(function ($) {
  $(document).ready( function(){
    var apidata = $('section.flex-twitter').data('twitterapi');
    if ( apidata.hashtag ) {
      apidata.name = null;
    }
    var options = {
      'username': apidata.name,
      'count': apidata.count,
      'hashtag': apidata.hashtag,
      'hideReplies': true,
      'apiPath': tweetie_api.apiPath,
      'dateFormat': '%d %B %Y',
      'template': '<header>{{avatar}}<div class="u-name"><span class="username">{{user_name}}</span> <span class="screen-name">{{screen_name}}</span></div> <div class="date"><svg class="icon icon-twitter-bird" aria-hidden="true" role="img"> <use href="#icon-twitter-bird" xlink:href="#icon-twitter-bird"></use> </svg> <span class="date"><a href="{{url}}">{{date}}</a></span></div></header><div class="tweet-content">{{tweet}}</div>'
    }
    $('#twitter-grid').twittie(options);
  });
})(jQuery, this);
