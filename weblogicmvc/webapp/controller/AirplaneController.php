<?php

use ArmoredCore\Controllers\BaseController;
use \ArmoredCore\Controllers\BeanController;
use \ArmoredCore\Interfaces\ResourceControllerInterface;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\Session;
use ArmoredCore\WebObjects\View;
use ArmoredCore\WebObjects\Post;
use ActiveRecord\Model;


class AirplaneController extends BaseController implements ResourceControllerInterface
{

    public function index(){

    }
//função que guarda e grava os dados depois do registo/introdução do avião
    public function store()
    {
    $dados = [
        'reference'=> Post::get('reference'),
        'capacity'=> Post::get('capacity'),
        'airplanetype'=> Post::get('airplanetype'),
        'airline'=> Post::get('airline')
        ];

        $aviao = new airplanes ($dados);
        $aviao->save();

        //redireciona para a pagina gestor de voo onde mostra as funções do gestor de voo  após ter inserido os dados
       Redirect::toRoute('manager/insert');

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