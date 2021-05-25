<?php

namespace App\Controllers;

use function App\Helpers\toGet;

class Dashboard extends BaseController{
    function __construct(){
        helper('requests');
    }

    public function index(){
        $data = [];

        $data['perfil'] = toGet('/profile/'.session()->get('id'), session()->get('access_token'));
        $data['perfil'] = $data['perfil']->perfil[0];
        echo view('templates/header');
        echo view('pages/dashboard/home', $data);
        echo view('templates/footer_scripts');
    }

    public function friends(){
        echo view('templates/header');
        echo view('pages/dashboard/friends');
        echo view('templates/footer_scripts');
    }
}
