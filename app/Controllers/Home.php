<?php

namespace App\Controllers;

use function App\Helpers\toPost;

class Home extends BaseController
{
    protected $session;
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
	    //TODO
        // traduzir mensagens
        helper(['form', 'requests']);
        $data = [];

        $this->session = \Config\Services::session();

        if($this->request->getMethod() == 'post'){
            $rules = [
                'nome' 	        => 'required|min_length[3]|max_length[20]',
                'sobrenome' 	=> 'required|min_length[3]|max_length[20]',
                'email' 		=> 'required|valid_email',
                'senha' 		=> 'required|min_length[8]|max_length[255]',
                'csenha' 	    => 'matches[senha]',
                'sexo'        => 'required'
            ];

            if(!$this->validate($rules)){
                $data['validation'] = $this->validator;
            }else{
                $save_data = json_encode([
                    'nome' 	=> $this->request->getVar('nome'),
                    'sobrenome' 	=> $this->request->getVar('sobrenome'),
                    'email' 		=> $this->request->getVar('email'),
                    'senha' 		=> hash('gost', $this->request->getVar('senha')),
                    'sexo'   		=> $this->request->getVar('sexo')
                ]);

                $res = toPost($save_data, '/register', null);
                $this->session->setFlashdata('mensagem', $res->message);
                return redirect()->to('/');
            }
        }

        echo view('templates/header');
        echo view('pages/home/subscribe', $data);
        echo view('templates/footer_scripts');
    }
}
