<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['do_login'] = 'Auth/do_login';

// IMPUTER
$route['imputer'] = 'Imputer/index';
$route['imputer/daily-activity/(:any)/(:any)'] = 'Imputer/daily_activity/$1/$2';
$route['imputer/edit-daily-activity/(:num)'] = 'Imputer/edit_daily_activity/$1';
$route['imputer/daily-report'] = 'Imputer/daily_report';

$route['imputer/setup'] = 'Imputer/setup';
$route['api/operator/get_nrp/(:num)'] = 'Imputer/get_nrp/$1';

$route['imputer/save_activity'] = 'Imputer/save_activity';
$route['imputer/update_activity'] = 'Imputer/update_activity';

$route['imputer/save_unit_status'] = 'Imputer/save_unit_status';
$route['imputer/update_unit_status'] = 'Imputer/update_unit_status';

$route['imputer/save_stanby'] = 'Imputer/save_stanby';
$route['imputer/update_stanby'] = 'Imputer/update_stanby';
$route['imputer/delete_stanby/(:num)/(:num)/(:any)'] = 'Imputer/delete_stanby/$1/$2/$3';

$route['imputer/save_breakdown'] = 'Imputer/save_breakdown';
$route['imputer/update_breakdown'] = 'Imputer/update_breakdown';
$route['imputer/delete_breakdown/(:num)/(:num)/(:any)'] = 'Imputer/delete_breakdown/$1/$2/$3';

$route['imputer/update_daily_report'] = 'Imputer/update_daily_report';
$route['imputer/delete_daily_report/(:num)'] = 'Imputer/delete_daily_report/$1';

// $route['imputer/daily-activity/(:num)/ritasi'] = 'Imputer/ritasi/$1';
$route['imputer/daily-activity/(:any)/ritasi/(:any)'] = 'Imputer/ritasi/$1/$2';
$route['imputer/save_ritasi'] = 'Imputer/save_ritasi';



// RADIO
$route['radio'] = 'Radio/index';

$route['radio/breakdown'] = 'Radio/breakdown';
$route['radio/breakdown/(:num)'] = 'Radio/add_breakdown/$1';
$route['radio/save_breakdown'] = 'Radio/save_breakdown';
$route['radio/breakdown/edit/(:num)'] = 'Radio/edit_breakdown/$1';
$route['radio/update_breakdown'] = 'Radio/update_breakdown';
$route['radio/breakdown/delete/(:num)'] = 'Radio/delete_breakdown/$1';


$route['radio/hourly_activity'] = 'Radio/hourly_activity';
$route['radio/hourly_report'] = 'Radio/hourly_report';