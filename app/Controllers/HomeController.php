<?php

namespace App\Controllers;

class HomeController extends Controller
{


    public function index ($request, $response) {

        $user = \App\Models\User::find(1);
        var_dump($user->name);
        die();

        return $this->view->render($response, "home.twig");
    }


}