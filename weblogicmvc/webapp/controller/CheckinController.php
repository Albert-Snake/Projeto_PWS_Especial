<?php

use ArmoredCore\Controllers\BaseController;
use \ArmoredCore\Interfaces\ResourceControllerInterface;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\Session;
use ArmoredCore\WebObjects\View;
use ArmoredCore\WebObjects\Post;
use ActiveRecord\Model;


class CheckinController extends BaseController implements ResourceControllerInterface
{

    public function index(){

    }
//função que guarda e grava os dados depois do registo/introdução da escala
    public function store()
    {
    $dados = [
        'passengername'=> Post::get('passengername'),
        'nif'=> Post::get('nif'),
        'ticketnumber'=> Post::get('ticketnumber'),
        'flightnumber'=> Post::get('flightnumber')
        ];

        $checkin = new checkin ($dados);
        $checkin->save();

 //redireciona para a pagina gestor de voo onde mostra as funções do gestor de voo  após ter inserido os dados
       Redirect::toRoute('checkin/indexcheckin');

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