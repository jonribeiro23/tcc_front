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

    public function following(){

        $data = toGet('who-i-follow', session()->get('access_token'));
        if(!$data){
            return redirect()->to(base_url().'/logout');
        }

        echo view('templates/header');
        echo view('pages/dashboard/following', [ 'data' => $data->users]);
        echo view('templates/footer_scripts');
    }

    public function followers(){

        $data = toGet('who-follow-me', session()->get('access_token'));
        if(!$data){
            return redirect()->to(base_url().'/logout');
        }

        echo view('templates/header');
        echo view('pages/dashboard/followers', [ 'data' => $data->users]);
        echo view('templates/footer_scripts');
    }

    public function followersOfFriend($id){

        $data = toGet('followers-of-friend/'.$id, session()->get('access_token'));
        $nome = toGet('user/'.$id, session()->get('access_token'));
        if(!$data){
            return redirect()->to(base_url().'/logout');
        }

        echo view('templates/header');
        echo view('pages/dashboard/followers-of-friend', [ 'data' => $data->users, 'nome' => $nome->usuario[0]->nome]);
        echo view('templates/footer_scripts');
    }

    public function whoFriendIsFollowing($id){

        $data = toGet('who-friend-is-following/'.$id, session()->get('access_token'));
        $nome = toGet('user/'.$id, session()->get('access_token'));
        if(!$data){
            return redirect()->to(base_url().'/logout');
        }

        echo view('templates/header');
        echo view('pages/dashboard/who-friend-is-following', [ 'data' => $data->users, 'nome' => $nome->usuario[0]->nome]);
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

}
