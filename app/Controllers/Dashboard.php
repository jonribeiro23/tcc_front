<?php

namespace App\Controllers;

use function App\Helpers\toGet;
use function App\Helpers\toPost;

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

    public function myFriends(){

        $data = toGet('users/0', session()->get('access_token'));
        if(!$data){
            return redirect()->to(base_url().'/logout');
        }

        echo view('templates/header');
        echo view('pages/dashboard/people', [ 'data' => $data->users]);
        echo view('templates/footer_scripts');
    }

    public function searchPeople(){
        echo view('templates/header');
        echo view('pages/dashboard/search-people');
        echo view('templates/footer_scripts');
    }

    public function search(){
        //TODO - logout when token expire
        $data = file_get_contents('php://input');
        $res = toPost($data, '/search', session()->get('access_token'));

        if(!$res){
            echo json_encode(["status" => false]);
        }

        $res = json_encode($res);
        echo $res;
    }

    public function seeMore($skip){

        $data = toGet('users/'.$skip, session()->get('access_token'));
        if(!$data){
            return redirect()->to(base_url().'/logout');
        }

//        echo '<pre>';
//        var_dump($data);
//        die();

        $res = json_encode($data);
        echo $res;
    }
}
