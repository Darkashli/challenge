<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['options/update'] = 'options/update';
$route['homepages/register'] = 'homepages/register';
$route['homepages/login'] = 'homepages/login';
$route['options'] = 'options/index';
$route['options/(:any)'] = 'options/view/$1';
$route['(:any)'] = 'homepages/view/$1';
$route['default_controller'] = 'homepages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
