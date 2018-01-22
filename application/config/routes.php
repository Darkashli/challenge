<?php
defined('BASEPATH') or exit('No direct script access allowed');

// $route['admins'] = 'admins/index';
$route['students/plan'] = 'students/plan';
$route['students'] = 'students/index';
$route['students/(:any)'] = 'students/$1';
$route['homepages/login'] = 'homepages/login';
$route['options/update'] = 'options/update';
$route['homepages/register'] = 'homepages/register';
$route['homepages/logout'] = 'homepages/logout';
$route['options'] = 'options/index';
$route['options/(:any)'] = 'options/view/$1';
$route['(:any)'] = 'homepages/view/$1';
$route['default_controller'] = 'homepages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;
// $route['sessionex'] = 'Session_Controller';
