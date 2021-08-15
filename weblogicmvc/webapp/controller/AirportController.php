<?php

use ArmoredCore\Controllers\BaseController;
use \ArmoredCore\Controllers\BeanController;
use \ArmoredCore\Interfaces\ResourceControllerInterface;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\Session;
use ArmoredCore\WebObjects\View;
use ArmoredCore\WebObjects\Post;
use ActiveRecord\Model;


class AirportController extends BaseController implements ResourceControllerInterface
{

    public function index(){

    }
//função que guarda e grava os dados depois do registo/introdução do aeroporto
    public function store()
    {

    $dados = [
        'name'=> Post::get('name'),
        'city'=> Post::get('city'),
        'address'=> Post::get('address'),
        'phonenumber'=> Post::get('phonenumber'),
        'email'=>  Post::get('email')
            ];

        $aeroporto= new airport ($dados);
        $aeroporto->save();
//redireciona para a pagina administrados onde mostra as funções de administrados após ter inserido os dados
       Redirect::toRoute('administrator/indexairports');

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