<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(){
        echo view('templates/header');
        echo view('pages/dashboard/home');
        echo view('templates/footer_scripts');
    }

    public function friends(){
        echo view('templates/header');
        echo view('pages/dashboard/friends');
        echo view('templates/footer_scripts');
    }
}
