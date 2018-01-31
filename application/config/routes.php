<?php
defined('BASEPATH') or exit('No direct script access allowed');

// $route['admins'] = 'admins/index';
$route['options/update'] = 'options/update';
$route['students'] = 'students/index';
$route['default_controller'] = 'homepages/view';
$route['homepages/login'] = 'homepages/login';
$route['homepages/register'] = 'homepages/register';
$route['homepages/logout'] = 'homepages/logout';
$route['contact'] = 'homepages/view/contact';

$route['students/plan'] = 'students/plan';
$route['students/(:any)'] = 'students/view/$1';

$route['options'] = 'options/index';
$route['options/(:any)'] = 'options/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;
// $route['sessionex'] = 'Session_Controller';
// $route['homepages(:any)'] = 'homepages/view/$1';   // catch-all:koffieapparaat.dev/iets  ->  koffieapparaat.dev/homepages/view/iets
