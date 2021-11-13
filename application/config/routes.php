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


//Supplier
$route['supplier'] = 'home/masterSupplier';
$route['newSupp'] = 'home/newSupplier';
$route['edSupp/(:any)'] = 'home/editSupplier/$1';
$route['delSupp/(:any)'] = 'home/deleteSupplier/$1';
//Category
$route['category'] = 'home/masterCategory';
$route['newCat'] = 'home/newCategory';
$route['edCat/(:any)'] = 'home/editCategory/$1';
$route['delCat/(:any)'] = 'home/deleteCategory/$1';
//Brand
$route['brand'] = 'home/masterBrand';
$route['newBr'] = 'home/newBrand';
$route['edBr/(:any)'] = 'home/editBrand/$1';
$route['delBr/(:any)'] = 'home/deleteBrand/$1';
//Rusak
$route['rusak'] = 'home/masterRusak';
$route['newRu'] = 'home/newRusak';
$route['edRu/(:any)'] = 'home/editRusak/$1';
$route['delRu/(:any)'] = 'home/deleteRusak/$1';
//Jenis
$route['jenis'] = 'home/masterJenis';
$route['newJe'] = 'home/newJenis';
$route['edJe/(:any)'] = 'home/editJenis/$1';
$route['delJe/(:any)'] = 'home/deleteJenis/$1';
//Part
$route['part'] = 'home/masterPart';
$route['newPart'] = 'home/newPart';
$route['edPart/(:any)'] = 'home/editPart/$1';
$route['delPart/(:any)'] = 'home/deletePart/$1';
//CatPart
$route['catpart'] = 'home/masterCatPart';
$route['newCatPart'] = 'home/newCatPart';
$route['edCatPart/(:any)'] = 'home/editCatPart/$1';
$route['delCatPart/(:any)'] = 'home/deleteCatPart/$1';
//Type
$route['type'] = 'home/masterType';
$route['newType'] = 'home/newType';
$route['edType/(:any)'] = 'home/editType/$1';
$route['delType/(:any)'] = 'home/deleteType/$1';
//Order Spare Part
$route['order'] = 'home/orderpart';
$route['orderDone/(:any)'] = 'home/orderDone/$1';

