<?php

use ArmoredCore\Controllers\BaseController;

use \ArmoredCore\Interfaces\ResourceControllerInterface;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\Session;
use ArmoredCore\WebObjects\View;
use ArmoredCore\WebObjects\Post;
use ActiveRecord\Model;


class AdministratorController extends BaseController implements ResourceControllerInterface
{

    public function index(){

    }

    public function store()
    {

    $dados = [
            'fullname' => Post::get('fullname'),
            'birthdate' => Post::get('birthdate'),
            'email' => Post::get('email'),
            'phone' => Post::get('phone'),
            'username'=>  Post::get('username'),
            'password' => Post::get('password')
            ];

        $utilizador = new user ($dados);
        $utilizador->save();



       Redirect::toRoute('home/login');

    }


    /**
     * @return mixed
     */
    public function create()
    {
        // TODO: Implement create() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        // TODO: Implement show() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {}
      /*  $book = R::load( 'book', $id );/*
    }

    /**
     * @param $id
     * @return mixed
     */
    public function update($id)
    {


    }
        /*$id = R::store( $car );



    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        /*

         = R::load( '', $id );
        R::trash(  );*/
    }
}