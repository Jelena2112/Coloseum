<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome_controller';
$route['home'] = 'welcome_controller';

$route['apartmani'] = "apartmani_controller";
$route['apartmani/(:any)'] = "apartmani_controller/poseban_apartman/$1";

$route['contact'] = 'contact_controller';

$route["about"] = "about_controller";

/* Activities rute */
$route["activities"] = "activities_controller";

$route["comment"] = "comment_controller";

/* Admin rute */
$route['admin'] = "admin_controller";
$route["admin/apartman/dodaj"] = "admin_controller/dodaj_apartman";
$route["admin/apartman/obrisi"] = "admin_controller/obrisi_apartman";
$route["admin/activity/dodaj"] = "admin_controller/dodaj_activity";
$route["admin/activity/obrisi"] = "admin_controller/obrisi_activity";

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
