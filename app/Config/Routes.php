<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'HomeController::index',['as' => 'home']);
$routes->get('profile', 'UserController::profile', ['as' => 'profile']); 
$routes->get('account-settings', 'UserController::accountSettings', ['as' => 'account_settings']);
$routes->post('user/update_account_settings', 'UserController::update_account_settings');
$routes->post('user/update_password_account_settings', 'UserController::update_password_account_settings');