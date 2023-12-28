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
function wplalr_wp_login_redirect( $redirect_to, $request, $user ) {
    $redirect_to =  get_option('wplalr_login_redirect');

    if(empty($redirect_to)){
        $redirect_to = admin_url();
    }

    return $redirect_to;
}
add_filter( 'login_redirect', 'wplalr_wp_login_redirect', 10, 3 );

/**
 * Logout redirect to user specific URL.
 */
function wplalr_wp_logout_redirect(){
    $wplalr_logout_redirect =  get_option('wplalr_logout_redirect');

    if(empty($wplalr_logout_redirect)){
        $wplalr_logout_redirect = home_url();
    }

    wp_redirect( $wplalr_logout_redirect );
    exit();
}
add_action('wp_logout', 'wplalr_wp_logout_redirect');

