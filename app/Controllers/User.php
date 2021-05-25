<?php

namespace App\Controllers;

use function App\Helpers\toPost;

class User extends BaseController{
    protected $session;

    function __construct(){
        helper('requests');
        $this->session = \Config\Services::session();
    }
	public function login(){
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

            $user_data = toPost($login_data, '/login', null);

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
