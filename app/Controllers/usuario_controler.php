<?php
namespace App\Controllers;
Use App\Models\usuario_Model;
use CodeIgniter\Controller;

class usuario_controler extends Controller{

	public function __construct(){
		helper(['form', 'url']);
	}

	public function create(){

		$dato['titulo']= 'registro';
        echo view('front/head_views', $dato);
        echo view('front/navbar_views');
        echo view('back/usuario/registro');
        echo view('front/footer');

	}

	public function formValidation() {

		$input = $this->validate([
				'nombre' => 'required|min_length[3]',
				'apellido' => 'required|min_length[3]|max_length[25]',
				'usuario' => 'required|min_length[3]',
				'email' =>  'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
				'pass' => 'required|min_length[3]|max_length[10]',

		],
		); 

		$formModel = new usuario_Model();

		if(!$input){
			$data['titulo']='Registro';
			echo view('front/head_views',$data);
			echo view('front/navbar_views');
			echo view('back/usuario/registro', ['validation' => $this->validator]);
			echo view('front/footer');
		} else{
			$formModel->save([
				'nombre' => $this->request->getVar('nombre'),
				'apellido' => $this->request->getVar('apellido'),
				'usuario' => $this->request->getVar('usuario'),
				'email' =>  $this->request->getVar('email'),
				'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
			]);

				session()->setFlashData('success', 'Usuario registrado con exito');
				return $this->response->redirect('/Pro_RT3_45760030/registro');
		}
	}
}