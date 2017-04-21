<?php
  /**
   * Your Twitter App Info
   */

  // We're getting these from Advanced Custom Fields
  define( 'CONSUMER_KEY', get_field('consumer_key', 'option'));
  define( 'CONSUMER_SECRET', get_field('consumer_secret', 'option') );

  // User Access Token
  define( 'ACCESS_TOKEN', get_field('access_token', 'option') );
  define( 'ACCESS_SECRET', get_field('access_secret', 'option') );

	// Cache Settings
	define('CACHE_ENABLED', false);
	define('CACHE_LIFETIME', 3600); // in seconds
	define('HASH_SALT', md5(dirname(__FILE__)));
