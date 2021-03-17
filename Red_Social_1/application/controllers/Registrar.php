<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrar extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/registrar/header');
        $this->load->view('templates/registrar');
        $this->load->view('templates/registrar/footer');

    }

    public function registrarusuario()
    {

        $this->load->model('Usuario_model');
        $this->load->library('form_validation');

        if ($this->input->post()) {
            if ($_POST['contrasena'] != $_POST['contrasena2']) {
                echo json_encode(array('error' => true, 'mensaje' => '¡Las contraseñas no coinciden!'));
                exit();
            }
            $mensajes = array('required' => 'El %s es requerido',
                'min_length'                 => 'El tamaño mínimo de %s es de 5 carateres',
                'max_length'                 => 'El tamaño máximo de %s es de 12 carateres',
                'is_unique'                  => 'Este %s  ya existe',
                'valid_email'                => 'El %s no es válido');

            $this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[2]|max_length[35]', $mensajes);
            $this->form_validation->set_rules('apellido', 'Apellido', 'required|min_length[5]|max_length[35]', $mensajes);
            $this->form_validation->set_rules('usuario', 'Usuario', 'required|min_length[5]|max_length[12]|is_unique[usuarios.usuario]', $mensajes);
            $this->form_validation->set_rules('contrasena', 'Contraseña', 'required|min_length[5]|max_length[35]', $mensajes);
            $this->form_validation->set_rules('correo', 'Correo', 'required|valid_email|is_unique[usuarios.correo]', $mensajes);

            if ($this->form_validation->run() == false) {
                echo json_encode(array('error' => true, 'mensaje' => validation_errors()));
                exit();
            } else {
                $_POST['contrasena'] = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
                unset($_POST['contrasena2']);
                if ($this->Usuario_model->setUsuario($_POST)) {
                    echo json_encode(array('error' => true, 'mensaje' => 'El usuario ha sido registrado'));
                    exit();
                } else {
                    echo json_encode(array('error' => true, 'mensaje' => 'El usuario no se ha podido registrar'));
                    exit();
                }

            }
        }
    }
}
