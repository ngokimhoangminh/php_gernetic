<?php

/**
 * Front controller
 *
 * PHP version 7.0
 */

/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';
session_start();

/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


/**
 * Routing
 */
$router = new Core\Router();

// Add the routes
$router->add('/Gernetic/php-mvc/public/', ['controller' => 'Home', 'action' => 'index']);


// $router->add('/Gernetic/php-mvc/public/dashboard/{id:\d+}', ['controller' => 'Admin', 'action' => 'dashboard']);

$url='/Gernetic/php-mvc/public';

//Admin
$router->add('/Gernetic/php-mvc/public/admin', ['controller' => 'Admin', 'action' => 'admin']);
$router->add('/Gernetic/php-mvc/public/dashboard', ['controller' => 'Admin', 'action' => 'dashboard']);
$router->add('/Gernetic/php-mvc/public/login', ['controller' => 'Admin', 'action' => 'login']);
$router->add('/Gernetic/php-mvc/public/logout', ['controller' => 'Admin', 'action' => 'logout']);


//Category
$router->add('/Gernetic/php-mvc/public/list_category', ['controller' => 'Category', 'action' => 'list_category']);
$router->add('/Gernetic/php-mvc/public/add_category', ['controller' => 'Category', 'action' => 'add_category']);
$router->add('/Gernetic/php-mvc/public/save_category', ['controller' => 'Category', 'action' => 'save_category']);
$router->add('/Gernetic/php-mvc/public/update_category/{catid:\d+}', ['controller' => 'Category', 'action' => 'update_category']);
$router->add('/Gernetic/php-mvc/public/edit_category/{catid:\d+}', ['controller' => 'Category', 'action' => 'edit_category']);
$router->add('/Gernetic/php-mvc/public/delete_category/{catid:\d+}', ['controller' => 'Category', 'action' => 'delete_category']);
$router->add('/Gernetic/php-mvc/public/unactive_category/{catid:\d+}', ['controller' => 'Category', 'action' => 'unactive_category']);
$router->add('/Gernetic/php-mvc/public/active_category/{catid:\d+}', ['controller' => 'Category', 'action' => 'active_category']);

//Brand
$router->add($url.'/list_brand', ['controller' => 'Brand', 'action' => 'list_brand']);
$router->add($url.'/add_brand', ['controller' => 'Brand', 'action' => 'add_brand']);
$router->add($url.'/save_brand', ['controller' => 'Brand', 'action' => 'save_brand']);
$router->add($url.'/delete_brand/{brandid:\d+}', ['controller' => 'Brand', 'action' => 'delete_brand']);
$router->add($url.'/update_brand/{brandid:\d+}', ['controller' => 'Brand', 'action' => 'update_brand']);
$router->add($url.'/edit_brand/{brandid:\d+}', ['controller' => 'Brand', 'action' => 'edit_brand']);
$router->add($url.'/unactive_brand/{brandid:\d+}', ['controller' => 'Brand', 'action' => 'unactive_brand']);
$router->add($url.'/active_brand/{brandid:\d+}', ['controller' => 'Brand', 'action' => 'active_brand']);

//Product
$router->add($url.'/list_product', ['controller' => 'Product', 'action' => 'list_product']);
$router->add($url.'/add_product', ['controller' => 'Product', 'action' => 'add_product']);
$router->add($url.'/save_product', ['controller' => 'Product', 'action' => 'save_product']);
$router->add($url.'/update_product/{productid:\d+}', ['controller' => 'Product', 'action' => 'update_product']);
$router->add($url.'/edit_product/{productid:\d+}', ['controller' => 'Product', 'action' => 'edit_product']);
$router->add($url.'/delete_product/{productid:\d+}', ['controller' => 'Product', 'action' => 'delete_product']);
$router->add($url.'/unactive_product/{productid:\d+}', ['controller' => 'Product', 'action' => 'unactive_product']);
$router->add($url.'/active_product/{productid:\d+}', ['controller' => 'Product', 'action' => 'active_product']);



///Home
$router->add($url.'/product_list', ['controller' => 'Home', 'action' => 'product_list']);
$router->add($url.'/product_detail/{productid:\d+}', ['controller' => 'Product', 'action' => 'product_detail']);

//Card
$router->add($url.'/add_to_cart', ['controller' => 'CartController', 'action' => 'add_to_cart']);
$router->add($url.'/show_cart', ['controller' => 'CartController', 'action' => 'show_cart']);

$router->dispatch($_SERVER['REQUEST_URI']);
