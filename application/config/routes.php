<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['options/update'] = 'options/update';
$route['homepages/register'] = 'homepages/register';
$route['homepages/login'] = 'homepages/login';
$route['homepages/logout'] = 'homepages/logout';
$route['options'] = 'options/index';
$route['options/update'] = 'options/update';
$route['options/(:any)'] = 'options/view/$1';
$route['(:any)'] = 'homepages/view/$1';
$route['default_controller'] = 'homepages/view';
$route['admin/index'] = 'admin/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// $route['sessionex'] = 'Session_Controller';
