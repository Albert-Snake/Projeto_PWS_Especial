<?php

use ArmoredCore\Controllers\BaseController;
use \ArmoredCore\Controllers\BeanController;
use \ArmoredCore\Interfaces\ResourceControllerInterface;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\Session;
use ArmoredCore\WebObjects\View;
use ArmoredCore\WebObjects\Post;
use ActiveRecord\Model;


class FlightController extends BaseController implements ResourceControllerInterface
{

    public function index(){

    }
//função que guarda e grava os dados depois do registo/introdução do voo
    public function store()
    {

    $dados = [
        'numberflight'=> Post::get('numberflight'),
        'price'=> Post::get('price'),
        'origin'=> Post::get('origin'),
        'destiny'=> Post::get('destiny'),
        'date'=> Post::get('date'),
        'departuretime'=> Post::get('departuretime'),
        'arrivaltime'=>  Post::get('arrivaltime'),
        'airplane'=> Post::get('airplane'),
        'originairport'=> Post::get('originairport'),
        'destinyairport'=> Post::get('destinyairport')
        ];

        $voo = new flights ($dados);
        $voo->save();
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
        $fta = flight::find([$id]);

        if (is_null($fta)) {
            //TODO redirect to standard error page
        } else {
            return View::make('book.show', ['ftaprojetopws' => $fta]);
        }

    }
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