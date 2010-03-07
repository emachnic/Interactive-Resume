<?php
# First, select which blog you want to display here!
# You can find these numbers in the back-office under the Blogs section.
# You can also create new blogs over there. If you do, you may duplicate this file for the new blog.
$blog = 5;
 
# You could *force* a specific skin here with this setting: (otherwise, default will be used)
# $skin = 'basic';
 
# This setting retricts posts to those published, thus hiding drafts.
# You should not have to change this.
$show_statuses = array();
 
# Here you can set a limit before which posts will be ignored
# You can use a unix timestamp value or 'now' which will hide all posts in the past
$timestamp_min = '';
 
# Here you can set a limit after which posts will be ignored
# You can use a unix timestamp value or 'now' which will hide all posts in the future
$timestamp_max = 'now';
 
# Additionnaly, you can set other values (see URL params in the manual)...
# $order = 'ASC'; // This for example would display the blog in chronological order...
 
/**
 * That's it, now let b2evolution do the rest! :)
 */
require_once dirname(__FILE__).'/conf/_config.php';
 
require $inc_path.'_blog_main.inc.php';
?>