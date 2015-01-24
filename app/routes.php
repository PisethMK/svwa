<?php

/*
 * Home Page Of DVWA
 */
Route::get('/',[
	'as' => 'home',
	'uses' => 'HomeController@index',
]);

/*
 * Signin Section
 */
Route::get('signin',[
	'as' => 'signin_path',
	'uses' => 'SessionController@index'
]);

Route::post('signin',[
	'as' => 'signin_path',
	'uses' => 'SessionController@store'
]);

/*
 * Logout User
 */

Route::get('signout',[
	'as' => 'logout_path',
	'uses' => 'SessionController@destroy'
]);

/*
 * Sign Up Section
 */

Route::get('signup',[
	'as' => 'signup_path',
	'uses' => 'SignUpController@index'
]);

Route::post('signup',[
	'as' => 'signup_path',
	'uses' => 'SignUpController@store'
]);


/*
 * Pages Section
 * Instruction Section
 */

Route::get('instruction',[
	'as' => 'instruction_path',
	'uses' => 'PagesController@instruction'
]);

Route::get('vulnerabilitites',[
	'as' => 'vulnerability_path',
	'uses' => 'PagesController@vulnerabilitites'
]);

Route::get('about',[
	'as' => 'about_path',
	'uses' => 'PagesController@about'
]);


/*
 * Vulnerabilities List
 * Reflected Xss
 */

Route::get('Reflected-Xss',[
	'as' => 'reflected_xss_path',
	'uses' => 'XssController@ReflectedXss'
]);

/*
 * Stored Xss Via Blog Post
 */
Route::get('Stored-Xss',[
	'as' => 'stored_xss_path',
	'uses' => 'XssController@StoredIndex'
]);

Route::post('Stored-Xss',[
	'as' => 'stored_xss_path',
	'uses' => 'XssController@StoredXss'
]);

Route::delete('delete-comment/{id}',[
	'as' => 'delete_comment',
	'uses' => 'XssController@delete'
]);
/*
 * Browser xss
 */
Route::get('Browser-Xss',[
	'as' => 'browser_xss_path',
	'uses' => 'XssController@BrowserXssIndex'
]);

Route::post('Browser-Xss',[
	'as' => 'browser_xss_path',
	'uses' => 'XssController@BrowserXssStore'
]);

/*
 * CSRF Vulnerability
 * Update Profile Page
 */

Route::get('Profile',[
	'as' => 'csrf_profile_update_path',
	'uses' => 'ProfileController@index'
]);

Route::post('Profile',[
	'as' => 'csrf_profile_update_path',
	'uses' => 'ProfileController@update'
]);


/*
 * IDOR Vunerability
 */

Route::get('IDOR',[
	'as' => 'idor_path',
	'uses' => 'IdorController@index'
]);

Route::post('IDOR',[
	'as' => 'idor_path',
	'uses' => 'IdorController@store'
]);

/*
 * SQL Injection
 */

Route::get('Normal-Sql',[
	'as' => 'normal_injection_path',
	'uses' => 'SqlInjectionController@index'
]);

/*
 * Bruteforce Vulnerability
 */
Route::get('Bruteforce',[
	'as' => 'bruteforce_login_path',
	'uses' => 'BruteforceController@index'
]);

Route::post('Bruteforce',[
	'as' => 'bruteforce_login_path',
	'uses' => 'BruteforceController@store'
]);
/*
 * Redirection
 */

Route::get('redirection',[
	'as' => 'redirect_path',
	'uses' => 'OpenredirectionController@openRedirect'
]);



/*
 * File Inclusion
 */

Route::get('page',[
	'as' => 'get_page',
	'uses' => 'FileinclusionController@index'
]);

/*
 * Login Bypass
 */

Route::get('loginBypass',[
	'as' => 'login_bypass_path',
	'uses' => 'SqlInjectionController@loginBypassGet'
]);
Route::post('loginBypass',[
	'as' => 'login_bypass_path',
	'uses' => 'SqlInjectionController@loginBypass'
]);

/*
 * 404 Page
 */

Route::get('404','PagesController@error_404');