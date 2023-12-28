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
 * Redirect user after successful login.
 *
 * @url https://developer.wordpress.org/reference/hooks/login_redirect/
 *
 * @param string $redirect_to  Redirect destination URL
 * @param string $request      URL the user is coming from 
 * @param object $user         Logged user's data
 * @return string
 */
function bob_login_redirect( $redirect_to, $request, $user ) {

	//is there a user to check?
	if ( isset( $user->roles ) && is_array( $user->roles ) ) {

		// if are the administrator AND are logging into the wp-admin via wp-login.php, then continue into the wp-admin
		if ( (in_array( 'administrator', $user->roles )) && ($GLOBALS['pagenow'] == 'wp-login.php') ){
			// redirect to the default url
			return $redirect_to;
		} else {
			// not an administrator OR are an administrator who is logging in via the front-end
			// redirect to the front-end's home page
			return home_url();
		}

	} else {
		// there is no user
		return $redirect_to;
	}
}
add_filter( 'login_redirect', 'bob_login_redirect', 10, 3 );


/**
 * Redirect user after successful login.
 *
 * @url https://developer.wordpress.org/reference/hooks/logout_redirect/
 *
 * @param string $redirect_to           The redirect destination URL
 * @param string $request_redirect_to   The requested redirect destination URL passed as a parameter
 * @param object $user                  The WP_User object for the user that’s logging out
 * @return string
 */
function bob_logout_redirect( $redirect_to, $requested_redirect_to, $user ) {

	if ( isset( $user->roles ) && is_array( $user->roles ) ) {

		// if are the administrator AND are logging out of the wp-admin, then continue into the wp-admin
		// https://developer.wordpress.org/reference/functions/is_admin/
		if ( (in_array( 'administrator', $user->roles )) && (true === strpos( $_SERVER['HTTP_REFERER'], 'wp-admin') ) {
			// redirect to the default url
			return $redirect_to;
		} else {
			// not an administrator OR are an administrator who is logging out via the front-end
			// redirect to the front-end's home page
			return home_url();
		}

	}
}
add_filter( 'logout_redirect', 'bob_logout_redirect', 10, 3 );

