<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mensajes extends CI_Controller
{

    public function index()
    {
        $this->load->model('Mensajeria');
        $usuarios        = $this->Mensajeria->getUsuarios($this->session->idusuario);
        $mensajesEntrada = $this->Mensajeria->getMensajesEntrada($this->session->idusuario);
        $mensajesSalida  = $this->Mensajeria->getMensajesSalida($this->session->idusuario);
        $this->load->view('templates/inicio/header', compact('usuarios'));
        $this->load->view('templates/mensajes', compact(['usuarios', 'mensajesEntrada', 'mensajesSalida']));
        $this->load->view('templates/inicio/footer');

    }

    public function mensaje()
    {
        $this->load->model('Mensajeria');

        $datos = array(
            "usuarios_idusuario" => $this->input->post('usuarios_idusuario', true),
            "usuarioMando"       => $this->input->post('usuarioMando', true),
            "contenido"          => $this->input->post('contenido', true),
        );

        if ($this->Mensajeria->setMensaje($datos)) {
            redirect('Mensajes');
        } else {
            redirect('Mensajes');
        }
    }
}
