<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class Panel_Controller extends Controller

{

public function index()
{
	$session = session();
	$nombre = $session->get('usuario');
	$perfil = $session->get('perfil_id');

	$data['perfil_id']=$perfil;


	$dato['titulo']='panel del usuario';
	echo view('front/head_views', $dato); echo view('front/navbar_views');
	echo view ('back/usuario/usuario_logueado', $data);
	echo view('front/footer');
	}
}