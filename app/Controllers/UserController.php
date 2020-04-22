<?php

namespace App\Controllers;
use \App\Models\User;
class UserController extends Controller
{


    public function create ($request, $response) {

        User::create([
            'name'=> 'Mehran Ganjgahi',
            'email'=> 'Mehran@mail.com',
            'username'=> 'Moorche',
            'password'=> 'Moorche64',
            'avatar'=> 'avatar',
        ]);

        return $this->view->render($response, "home.twig");
    }


}