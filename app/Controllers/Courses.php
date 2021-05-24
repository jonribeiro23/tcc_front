<?php

namespace App\Controllers;

class Courses extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function courses(){
        echo view('templates/header');
        echo view('pages/courses/courses');
        echo view('templates/footer_scripts');
    }

	public function classes(){
        echo view('templates/header');
        echo view('pages/courses/classes');
        echo view('templates/footer_scripts');
    }
}
