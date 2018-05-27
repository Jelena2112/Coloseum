<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome_controller';
$route['home'] = 'welcome_controller';
$route['apartmani'] = "apartmani_controller";
$route['contact'] = 'contact_controller';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
