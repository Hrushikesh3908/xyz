<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Register/index';

//$route['(:any)']='pages/view/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['students']="students/index";  

$route['event']="data/index";  

$route['formValidate']="home/formValidate";  

$route['phone']="phone/index";  
$route['popup_modal']="popUp/index"; 

$route['emailSent']="register/emailSent";  

//$route['productsCreate']['post'] ="products/store";
//$route['productsEdit/(:any)'] = "products/edit/$1";
//$route['productsUpdate/(:any)']['put'] = "products/update/$1";
//$route['productsDelete/(:any)']['delete'] = "products/delete/$1";

