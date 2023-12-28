<?php
/*
Plugin Name: Bob Custom Redirection Plugin for Login and Logout
suppress_Plugin URI: https://github.com/bbloom/suzan_contact_form7_spam_and_other_shit
Description: This plugin which enables you to redirect users to specific URL on login or logout or both.
Version: 1.0
Author: Bob Bloom
Author URI: https://lasallesoftware.ca
License: GPLv2 or later
Text Domain: bob-login-redirect
Domain Path: /
*/

/**
 * Restrict this file to call directly
*/
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Login redirect to user specific URL.
 */
function bob_login_redirect( $user ) {
    // do something

    // https://developer.wordpress.org/reference/functions/wp_redirect/
    //$url = "https://nfl.com";
    //wp_redirect( $url );
    //exit;
    return;
}
add_filter( 'login_redirect', 'bob_login_redirect' );

/**
 * Logout redirect to user specific URL.
 */
function bob_logout_redirect( $user ){
    // do something
}
add_action('wp_logout', 'bob_logout_redirect');

