<?php

use ArmoredCore\Controllers\BaseController;
use \ArmoredCore\Controllers\BeanController;
use \ArmoredCore\Interfaces\ResourceControllerInterface;
use ArmoredCore\WebObjects\Redirect;
use ArmoredCore\WebObjects\Session;
use ArmoredCore\WebObjects\View;
use ArmoredCore\WebObjects\Post;
use ActiveRecord\Model;


class UserController extends BaseController implements ResourceControllerInterface
{

    public function index(){

    }
//função que guarda e grava os dados depois do registo/introdução do utilizador/user
    public function store()
    {

    $dados = [
            'fullname' => Post::get('fullname'),
            'nif' => Post::get('nif'),
            'birthdate' => Post::get('birthdate'),
            'email' => Post::get('email'),
            'phone' => Post::get('phone'),
            'username'=>  Post::get('username'),
            'password' => Post::get('password')
            ];

        $utilizador = new user ($dados);
        $utilizador->save();

  //redireciona para a pagina de login/iniciar sessão após ter inserido os dados
       Redirect::toRoute('home/login');

    }
    public function start(){


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
    public function login($id)
    {
        if ($id == 'logged') {
            // Pesquisa se existe um utilizador com este nome
            $utilizadores = User::first(['username' => Post::get('username')]);
            if ($utilizadores != null) {

                // Verifica se a password inserida corresponde com a password da base de dados
                $verify = password_verify(Post::get('userpassword'), $utilizadores->userpassword);

                if ($verify) {
                    // Armazenar o nome do utilizador, o id e o seu tipo perfil(admin/passageiro...etc) em varivaeis super globais(Session)
                    //$_SESSION['username'] = Post::get('username');
                    //$_SESSION['userid'] = $utilizadores->users_id;
                    //$_SESSION['tipoUser'] = $utilizadores->userprofile;

                    //switch ($_SESSION['tipoUser']) {
                    //case "passageiro":
                    // Redirect::toRoute('flights/index');
                    // break;
                    //case "administrador":
                    //Redirect::toRoute('airports/index');
                    // break;
                    // case "gestordevoo":
                    //Redirect::toRoute('flights/index');
                    //break;
                    //case "operadordecheckin":
                    Redirect::toRoute('users_flights/index');
                    //break;
                }
            } else {
                session_unset();
                $_SERVER['mensagem'] = "Username ou Password incorreto";
                return View::make('users.index');
            }
        } else {
            session_unset();
            $_SERVER['mensagem'] = "Username ou Password incorreto";
            return View::make('users.index');
        }
    }
}