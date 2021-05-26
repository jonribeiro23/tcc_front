<?php

namespace App\Controllers;

use function App\Helpers\toPost;

class Courses extends BaseController{
    protected $session;
	function __construct(){
        helper(['form', 'requests']);
        $this->session = \Config\Services::session();
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

    public function criarCurso(){

        $rules = [
            'nome' 		=> 'required',
            'descricao' 		=> 'required'
        ];

        if(!$this->validate($rules)){
            $data['validation'] = $this->validator;
        }else{
            $data = json_encode([
                'nome_curso' => $this->request->getVar('nome'),
                'descricao' => $this->request->getVar('descricao')
            ]);

            $res = toPost($data, '/course', session()->get('access_token'));

            $this->session->setFlashdata('mensagem', $res->message);
            return redirect()->to(base_url('cursos'));
        }
    }
}
