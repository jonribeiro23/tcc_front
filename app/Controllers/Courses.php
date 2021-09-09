<?php

namespace App\Controllers;

use function App\Helpers\toGet;
use function App\Helpers\toPost;

class Courses extends BaseController{
    protected $session;
	function __construct(){
        helper(['form', 'requests']);
        $this->session = \Config\Services::session();
	}

	public function courses(){
	    $cursos = toGet('/course', session()->get('access_token'));
	    if(!$cursos){
	        return redirect()->to(base_url().'/logout');
        }
	    $data['cursos'] = $cursos->courses;

        echo view('templates/header');
        echo view('pages/courses/courses', $data);
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

    public function criarAula($id){
        $rules = [
            'nome' 		=> 'required',
            'descricao' => 'required',
            'link'      => 'required'
        ];

        if(!$this->validate($rules)){
            $data['validation'] = $this->validator;
        }else{
            $data = json_encode([
                'nome_aula' => $this->request->getVar('nome'),
                'descricao_aula' => $this->request->getVar('descricao'),
                'link_aula' => $this->request->getVar('link')
            ]);

            $res = toPost($data, '/classes/'.$id, session()->get('access_token'));

            $this->session->setFlashdata('mensagem', $res->message);
            return redirect()->to(base_url('curso').'/'.$id);
        }
    }

    public function getCurso($id){
	    $data_id = json_encode([
	        'id_curso' => $id
        ]);

	    $res = toPost($data_id, 'list-courses', session()->get('access_token'));
        if(!$res){
            return redirect()->to(base_url().'/logout');
        }

        $data['curso'] = $res->courses;

        echo view('templates/header');
        echo view('pages/courses/classes', $data);
        echo view('templates/footer_scripts');
    }

    public function postComment($courseId){
        $data = file_get_contents('php://input');

        $res = toPost($data, '/comment', session()->get('access_token'));
        $res = json_encode($res);
        echo $res;

    }
}
