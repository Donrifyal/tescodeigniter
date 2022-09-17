<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['news/create'] = 'news/create';
$route['news/(:any)'] = 'news/view/$1';
$route['about/(:any)'] = 'about/view/$1';
$route['news'] = 'news';
$route['about'] = 'about';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';
