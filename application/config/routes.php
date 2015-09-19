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
|	http://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['verify-login']    = 'login/user';
$route['login-success']   = 'login/logins';
$route['logout']          = 'login/logout';
$route['project-site']    = 'construction/projectsite';
$route['supply']          = 'login/logins';
$route['add-material/(:num)']    = 'construction/addmaterialproject/$1';
$route['payroll']         = 'construction/payroll';
$route['report']          = 'construction/reports';
$route['unused_material'] = 'supply/unused_material';
$route['proposal_work/(:num)']   = 'construction/proposal_work/$1';
$route['add_scopework']   = 'construction/add_scopework';
$route['add_day']         = 'construction/add_day';
$route['evaluation']         = 'construction/evaluation';
$route['evaluation_list']         = 'construction/evaluation_list';
$route['bago']         = 'construction/bago';
$route['insert_projectsite']         = 'construction/insert_projectsite';
$route['insert_add_scopework'] = 'construction/insert_add_scopework';
$route['insert_add_material'] = 'construction/insert_add_material';
$route['insert_visual_monitoring'] = 'construction/insert_visual_monitoring';
$route['insert_independent_monitoring'] = 'construction/insert_independent_monitoring';
$route['del_independent_monitoring/(:num)'] = 'construction/del_independent_monitoring/$1';
$route['del_visual_monitoring/(:num)'] = 'construction/del_visual_monitoring/$1';
$route['del_scope_work/(:num)'] = 'construction/del_scope_work/$1';
$route['del_project_site/(:num)'] = 'construction/del_project_site/$1';
$route['down_pert/(:any)']  = 'construction/down_pert/$1';
