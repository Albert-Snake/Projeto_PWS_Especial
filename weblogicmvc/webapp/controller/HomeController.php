<?php
use ArmoredCore\Controllers\BaseController;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\Session;
use ArmoredCore\WebObjects\View;

/**
 * Created by PhpStorm.
 * User: smendes
 * Date: 09-05-2016
 * Time: 11:30
 */
class HomeController extends BaseController
{

    public function index(){

        return View::make('user.register');
    }



    public function start(){

        View::attachSubView('titlecontainer', 'layout.pagetitle', ['title' => 'Quick Start']);
        return View::make('home.start');
    }

    public function login(){
        /*Throw new Exception('Method not implemented. Do it yourself!');*/
          return View::make('home.login');
    }


    public function worksheet(){

        //View::attachSubView('titlecontainer', 'layout.pagetitle', ['title' => 'MVC Worksheet']);

        return View::make('home.worksheet');
    }

    public function setsession(){
        $dataObject = MetaArmCoreModel::getComponents();
        Session::set('object', $dataObject);

        Redirect::toRoute('home/worksheet');
    }

    public function showsession(){
        $res = Session::get('object');
        var_dump($res);
    }

    public function destroysession(){

        Session::destroy();
        Redirect::toRoute('home/worksheet');
    }
    public function insert(){

        return View::make('manager.insert');
    }
    public function read(){

        return View::make('manager.read');
    }
    public function scales(){

        return View::make('manager.scales');
    }
    public function flights(){

        return View::make('manager.flights');

    }
    public function airplanes(){

        return View::make('manager.airplanes');
    }
    public function airports(){

        return View::make('administrator.airports');
    }
    public function indexairports(){

        return View::make('administrator.indexairports');
    }
    public function indexcheckin(){

        return View::make('checkin.indexcheckin');
    }
    public function checkin(){

        return View::make('checkin.newcheckin');
    }



}