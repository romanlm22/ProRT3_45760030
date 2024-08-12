<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']= 'pagina principal';
        echo view('front/head_views', $data);
        echo view('front/navbar_views');
        echo view('front/principal_ultimo');
        echo view('front/footer');
    }
    public function login()
    {
        $data['titulo']= 'login';
        echo view('front/head_views', $data);
        echo view('front/navbar_views');
        echo view('back/usuario/login');
        echo view('front/footer');
    }
    public function registro()
    {
        $data['titulo']= 'registro';
        echo view('front/head_views', $data);
        echo view('front/navbar_views');
        echo view('back/usuario/registro');
        echo view('front/footer');
    }
     public function acerca_de()
    {
        $data['titulo']= 'Contacto';
        echo view('front/head_views', $data);
        echo view('front/navbar_views');
        echo view('front/acerca_de');
        echo view('front/footer');
    }
     public function alpha_romero()
    {
        $data['titulo']= 'Alpha Romero Teams';
        echo view('front/head_views', $data);
        echo view('front/navbar_views');
        echo view('front/alpha_romero');
        echo view('front/footer');
    }
     public function alpha_tauri()
    {
        $data['titulo']= 'Alpha Tauri Teams';
        echo view('front/head_views', $data);
        echo view('front/navbar_views');
        echo view('front/alpha_tauri');
        echo view('front/footer');
    }
}
