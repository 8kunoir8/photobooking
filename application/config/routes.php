<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Front';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = "login/index";
$route['check'] = "login/login_check";
$route['logout'] = "login/logout";
$route['dashboard'] = "home/index";
$route['userboard'] = "user/index";

//Auth Admin
$route['admin'] = 'home/authAdmin';
$route['newAd'] = 'home/newAdmin';
$route['edAd/(:any)'] = 'home/editAdmin/$1';
$route['delAd/(:any)'] = 'home/deleteAdmin/$1';
//Auth User
$route['user'] = 'home/authUser';
$route['newUs'] = 'home/newUser';
$route['edUs/(:any)'] = 'home/editUser/$1';
$route['delUs/(:any)'] = 'home/deleteUser/$1';
//Paket
$route['paket'] = 'home/masterPaket';
$route['newPaket'] = 'home/newPaket';
$route['edPaket/(:any)'] = 'home/editPaket/$1';
$route['delPaket/(:any)'] = 'home/deletePaket/$1';
//Photografer
$route['photografer'] = 'home/masterPhotografer';
$route['newPhogra'] = 'home/newPhotografer';
$route['edPhogra/(:any)'] = 'home/editPhotografer/$1';
$route['delPhogra/(:any)'] = 'home/deletePhotografer/$1';

//Order Spare Part
$route['order'] = 'home/orderpart';
$route['orderDone/(:any)'] = 'home/orderDone/$1';

