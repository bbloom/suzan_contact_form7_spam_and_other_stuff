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
    if ( ! is_user_logged_in() ) {
        
        if ( is_admin() ) {
             wp_redirect("https://ra-docs.creativeraven.com/wp-admin/");
             exit;
        } else {
             wp_redirect("https://ra-docs.creativeraven.com/");
             exit;
        }
    }

    if ( is_user_logged_in() }


            

        
   wp_redirect("https://ra-docs.creativeraven.com/wp-admin/");
  exit;
  } else {
  wp_redirect("https://ra-docs.creativeraven.com/wp-admin/");
  exit;
 }

    // do something

    // https://developer.wordpress.org/reference/functions/wp_redirect/
    //$url = "https://nfl.com";
    //wp_redirect( $url );
    //exit;
    $user = wp_get_current_user();
    $roles = ( array ) $user->roles;

    return;
}
add_filter( 'login_redirect', 'bob_login_redirect' );


/**
 * Redirect user after successful login.
 *
 * @param string $redirect_to URL to redirect to.
 * @param string $request URL the user is coming from.
 * @param object $user Logged user's data.
 * @return string
 */
function my_login_redirect( $redirect_to, $request, $user ) {
	//is there a user to check?
	if ( isset( $user->roles ) && is_array( $user->roles ) ) {
		//check for admins
		if ( in_array( 'administrator', $user->roles ) ) {
			// redirect them to the default place
			return $redirect_to;
		} else {
			return home_url();
		}
	} else {
		return $redirect_to;
	}
}

add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );

/**
 * Logout redirect to user specific URL.
 */
function bob_logout_redirect( $user ){
    // do something
}
add_action('wp_logout', 'bob_logout_redirect');

