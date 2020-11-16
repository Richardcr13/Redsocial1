<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pagina_inicio extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/inicio/header');
        $this->load->view('templates/inicio');
        $this->load->view('templates/inicio/footer');

    }

    public function var_busq(){
        $this->load->model('usuario_model');
        $this->load->var_busq();
    }
}
