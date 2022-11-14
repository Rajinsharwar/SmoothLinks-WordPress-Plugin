<?php
/**
 * Plugin Name: SmoothLinks
 * Description: A super light-weight WordPress plugin to automatically open the links sent as a private message in a new tab. Currently this plugin only supports the private messaging of BuddyBoss and BuddyPress. No configurations needed. Just activate it, and you are good to go.
 * Author: Rajin Sharwar
 * Author URI: https://linkedin.com/in/rajinsharwar
 * Version: 1.0.0
 * Text Domain: smoothlinks
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_filter( 'bp_get_the_thread_message_content', 'bp_message_link_clickable_with_target', 99 ); 
function bp_message_link_clickable_with_target( $message ) {
     $message = preg_replace( '/<a /','<a target="_blank" ', make_clickable( $message ) );
return $message;
}