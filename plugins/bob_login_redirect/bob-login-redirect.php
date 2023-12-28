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
 * @param string $redirect_to URL to redirect to.
 * @param string $request URL the user is coming from.
 * @param object $user Logged user's data.
 * @return string
 */
function bob_login_redirect( $redirect_to, $request, $user ) {

	//is there a user to check?
	if ( isset( $user->roles ) && is_array( $user->roles ) ) {

		// if are the administrator AND are logging into the wp-admin, then continue into the wp-admin
		// https://developer.wordpress.org/reference/functions/is_admin/
		if ( in_array( 'administrator', $user->roles ) ) {
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
 * Logout redirect to user specific URL.
 */
function bob_logout_redirect( $user ){
    // do something
}
add_action('wp_logout', 'bob_logout_redirect');

