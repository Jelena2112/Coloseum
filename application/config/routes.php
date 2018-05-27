<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome_controller';
$route['home'] = 'welcome_controller';

$route['apartmani'] = "apartmani_controller";
$route['apartmani/(:any)'] = "apartmani_controller/poseban_apartman/$1";

$route['contact'] = 'contact_controller';

/* Admin rute */
$route['admin'] = "admin_controller";

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
