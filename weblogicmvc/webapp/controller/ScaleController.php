<?php

use ArmoredCore\Controllers\BaseController;
use \ArmoredCore\Interfaces\ResourceControllerInterface;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\Session;
use ArmoredCore\WebObjects\View;
use ArmoredCore\WebObjects\Post;
use ActiveRecord\Model;


class ScaleController extends BaseController implements ResourceControllerInterface
{

    public function index(){

    }
//função que guarda e grava os dados depois do registo/introdução da escala
    public function store()
    {
    $dados = [
        'originairport'=> Post::get('originairport'),
        'destinyairport'=> Post::get('destinyairport'),
        'origindate'=> Post::get('origindate'),
        'origintime'=> Post::get('origintime'),
        'destinydate'=> Post::get('destinydate'),
        'destinytime'=> Post::get('destinytime'),
        'distance' =>  Post::get('distance')
        ];

        $escala = new scales ($dados);
        $escala->save();

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