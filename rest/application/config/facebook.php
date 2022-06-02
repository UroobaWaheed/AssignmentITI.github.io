<?php defined('BASEPATH') OR exit('No direct script access allowed');

$CI =& get_instance();
$config['facebook_app_id']              = $CI->config->item('site_settings')->facebook_app_id;
$config['facebook_app_secret']          = $CI->config->item('site_settings')->facebook_app_secret;
$config['facebook_login_type']          = 'web';
$config['facebook_login_redirect_url']  = 'user_authentication_facebook';
$config['facebook_logout_redirect_url'] = 'user_authentication_facebook/logout';
$config['facebook_permissions']         = array('email');
$config['facebook_graph_version']       = 'v2.6';
$config['facebook_auth_on_load']        = TRUE;