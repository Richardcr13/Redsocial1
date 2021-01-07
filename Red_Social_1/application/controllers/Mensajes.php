<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mensajes extends CI_Controller
{

    public function index()
    {
        $this->load->model('Post');
        $result = $this->db->get('usuarios');
        $data   = array('consulta' => $result);

        $this->load->view('templates/inicio/header');
        $this->load->view('templates/mensajes', $data);
        $this->load->view('templates/inicio/footer');

    }

    public function mensaje()
    {
        $this->load->model('mensajeria');

        $datosMensaje = array(
            "usuarios_idusuario" => $this->input->post('usuarios_idusuario', true),
            "usuarioMando"       => $this->input->post('usuarioMando', true),
            "contenido"          => $this->input->post('contenido', true)
        );

        if ($this->mensajeria->enviarMensaje($datosMensaje)) {
            redirection('Mensajes');
        } else {
            redirection('Mensajes');
        }
    }
}
