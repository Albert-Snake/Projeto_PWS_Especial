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
class PlanoController extends BaseController
{
    public function show(){
       // return View::make('plano.show');
        $nome = Post::get ('nome');
        $Despesa = Post::get ('Despesa');
        $Credito = Post::get ('Credito');
        $NumPrestacoes = Post::get ('NumPrestacoes');

        $data = Data( "d-m-Y");

        var_dump(dados);
        Tracy\Dumper::dump($nome);
        }
       

    public function index(){

        return View::make('plano.index');
    }


}