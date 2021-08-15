<?php
/**
 * Created by PhpStorm.
 * User: smendes
 * Date: 02-05-2016
 * Time: 11:18
 */
use ArmoredCore\Facades\Router;

/****************************************************************************
 *  URLEncoder/HTTPRouter Routing Rules
 *  Use convention: controllerName/methodActionName
 ****************************************************************************/

Router::get('/',			'HomeController/index');
Router::get('home/',		'HomeController/index');
Router::get('home/index',	'HomeController/index');


Router::get('home/login','HomeController/login');

Router::get('home/start','HomeController/start');


Router::get('manager/insert','HomeController/insert');
Router::get('manager/flights','HomeController/flights');
Router::get('manager/airplanes','HomeController/airplanes');
Router::get('manager/scales','HomeController/scales');


Router::get('administrator/indexairports','HomeController/indexairports');
Router::get('administrator/airports','HomeController/airports');

Router::get('checkin/indexcheckin','HomeController/indexcheckin');
Router::get('checkin/newcheckin','HomeController/checkin');

Router::post('manager/insert','ScaleController/insert');
Router::post('scales/store','ScaleController/store');
Router::post('flights/store','FlightController/store');
Router::post('airplanes/store','AirplaneController/store');
Router::post('airports/store','AirportController/store');

Router::post('newcheckin/store','CheckinController/store');


Router::get('user/register',	'HomeController/user');


Router::get('home/register','UserController/register');
Router::post('register/store','UserController/store');
Router::post('login/start','UserController/start');
Router::post('home/index','UserController/index');
Router::post('home/login','UserController/login');



Router::get('home/worksheet','HomeController/worksheet');


Router::resource('user', 'UserController');
Router::resource('scales', 'ScaleController');
Router::resource('flights', 'FlightController');
Router::resource('airport', 'AirportController');
Router::resource('airplanes', 'AirplaneController');


Router::get('plano/index','PlanoController/index');
Router::post('plano/show','PlanoController/show');













/************** End of URLEncoder Routing Rules ************************************/