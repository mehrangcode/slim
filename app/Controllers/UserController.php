<?php

namespace App\Controllers;
use \App\Models\User;
class UserController extends Controller
{


    public function create ($request, $response) {

        User::create([
            'name'=> 'Mehran Ganjgahi',
            'email'=> 'Mehran@mail.com',
            'password'=> 'Moorche64',
            'avatar'=> 'avatar',
        ]);

        return $this->view->render($response, "home.twig");
    }

    public function registerForm ($request, $response) {
        return $this->view->render($response, "auth/register.twig");
    }

    public function register ($request, $response) {

        User::create([
            'name'=> $request->getParam('name'), 
            'email'=>  $request->getParam('email'), 
            'password'=>  password_hash($request->getParam('password'), PASSWORD_DEFAULT),
        ]);

        return $response->withRedirect($this->router->pathFor('homePage'));
    }


}