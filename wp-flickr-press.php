<?php
/*
Plugin Name: wp-flickr-press
Plugin URI: http://fukata.org/dev/wp-plugin/wp-flickr-press/
Description: Flickr integration for wordpress plugin.
Version: 1.3.0
Author: Tatsuya Fukata
Author URI: http://fukata.org
*/

require_once(dirname(__FILE__).'/FlickrPress.php');

FlickrPress::init();
?>
