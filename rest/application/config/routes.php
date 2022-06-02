<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller']   = 'welcome';
// $route['404_override'] 		   = '';

$route['404_override'] 		   = 'my404'; //my404 is class name. 
$route['translate_uri_dashes'] = TRUE;


/**custom URLS**/
$route['menu']				= 'welcome/fc_menu';


$route['login']				= 'auth/login';
$route['register']			= 'auth/register';



$route['my-profile']		= 'user/profile';
$route['my-orders']			= 'my_orders/index';
$route['my-points']			= 'user/my_points';
$route['address']			= 'user/my_addresses';
$route['change-password']	= 'user/change_password';




$route['about-us']			= 'welcome/about_us';
$route['contact-us']		= 'welcome/contact_us';
$route['site-map']			= 'welcome/site_map';
$route['how-it-works']		= 'welcome/how_it_works';
$route['terms-conditions']	= 'welcome/terms_conditions';
$route['career']	= 'welcome/career';
$route['faqs']				= 'welcome/faqs';
$route['download-app']		= 'welcome/download_app';
