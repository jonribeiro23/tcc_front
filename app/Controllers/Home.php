<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index(){
		echo view('templates/header');
        echo view('pages/home/home');
        echo view('templates/footer_scripts');
	}

	public function aboutUs(){
        echo view('templates/header');
        echo view('pages/home/about-us');
        echo view('templates/footer_scripts');
    }

    public function faq(){
        echo view('templates/header');
        echo view('pages/home/faq');
        echo view('templates/footer_scripts');
    }

    public function contact(){
        echo view('templates/header');
        echo view('pages/home/contact');
        echo view('templates/footer_scripts');
    }

    public function subscribe(){
        echo view('templates/header');
        echo view('pages/home/subscribe');
        echo view('templates/footer_scripts');
    }
}
