<?php

namespace App\Controllers;

use function App\Helpers\toDelete;
use function App\Helpers\toGet;
use function App\Helpers\toPost;
use function App\Helpers\toPut;

class User extends BaseController{
    protected $session;

    function __construct(){
        helper('requests');
        $this->session = \Config\Services::session();
    }
	public function login(){
        //TODO
        // Testar login sem a senha
        helper(['form']);
        $data = [];

        $rules = [
            'email' 		=> 'required|valid_email',
            'senha' 		=> 'required'
        ];

        $errors = [
            'senha' => [
                'validateUser' => 'Email or password don\'t match'
            ]
        ];

        if(!$this->validate($rules, $errors)){
            $data['validation'] = $this->validator;
        }else{
            $login_data = json_encode([
                'email' => $this->request->getVar('email'),
                'senha' => hash('gost', $this->request->getVar('senha'))
            ]);

            $user_data = toPost($login_data, '/login', null, true);

            if($user_data->status == 'ok'){
                $this->setUserMethod($user_data);
                return redirect()->to(base_url('home'));
            }

            $this->session->setFlashdata('mensagem', $user_data->message);
            return redirect()->to('/');
        }
    }

    public function logout(){
        session()->destroy();
        return redirect()->to(base_url().'/');
    }

    public function editar(){
        $data = json_encode([
            'bio' => $this->request->getVar('bio'),
            'habilidades' => $this->request->getVar('habilidades'),
            'biografia' => $this->request->getVar('biografia'),
            'website' => $this->request->getVar('website'),
            'instagram' => $this->request->getVar('instagram'),
            'youtube' => $this->request->getVar('youtube'),
            'facebook' => $this->request->getVar('facebook'),
            'email' => session()->get('email')
        ]);

        $res = toPut($data,'/user/'.session()->get('id'), session()->get('access_token'));
        $this->session->setFlashdata('mensagem', $res->mensagem);
        return redirect()->to(base_url('home'));
    }

    public function profile($id){
        $res = toGet('/profile/'.$id, session()->get('access_token'));

        if(!$res){
            return redirect()->to(base_url().'/logout');
        }

        $data['perfil'] = $res->perfil;
        $data['instructor'] = explode(' ', $res->perfil[0]->nome);
        $data['is_following'] = toGet('is-following/'.$id, session()->get('access_token'));

        echo view('templates/header');
        echo view('pages/dashboard/profile', $data);
        echo view('templates/footer');
        echo view('templates/footer_scripts');
    }

    public function follow($id){

        $data = toGet('follow/'.$id, session()->get('access_token'));

        if(!$data){
            return redirect()->to(base_url().'/logout');
        }

        $res = json_encode($data);
        echo $res;
    }

    public function unfollow($id){

        $data = toDelete('follow/'.$id, session()->get('access_token'));

        if(!$data){
            return redirect()->to(base_url().'/logout');
        }

        $res = json_encode($data);
        echo $res;
    }

    private function setUserMethod($user_data){
        $data = [
            'id' => $user_data->id,
            'nome' => $user_data->nome,
            'email' => $user_data->email,
            'access_token' => $user_data->access_token,
            'refresh_token' => $user_data->refresh_token,
            'is_logged_in' => true
        ];

        session()->set($data);
        return true;
    }
}
