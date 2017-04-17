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
      'template': '<header>{{avatar}}<span class="screen-name">{{screen_name}}</span><span class="username">{{user_name}}</span> <span class="date">{{date}}</span></header><div class="tweet-content">{{tweet}}</div>'
    }
    console.log(options);
    $('.twitter-grid').twittie(options);
  });
})(jQuery, this);
