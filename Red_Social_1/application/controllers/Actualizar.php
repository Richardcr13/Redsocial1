<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Actualizar extends CI_Controller
{

    public function index()
    {
        $this->load->model('Actualizar_usuario');

        $update = $this->Actualizar_usuario->getUsuarios();

        $this->load->view('templates/actualizar/header');
        $this->load->view('templates/actualizar', $update);
        $this->load->view('templates/actualizar/footer');

    }

    public function actualizar2()
    {
        $this->load->view('templates/actualizar/header');
        $this->load->view('templates/actualizar');
        $this->load->view('templates/actualizar/footer');
    }

    public function update()
    {

        $this->load->model('Actualizar_usuario');
        $this->load->library('form_validation');

        if ($this->input->post()) {
            if ($_POST['contrasena'] != $_POST['contrasena2']) {
                echo json_encode(array('error' => true, 'mensaje' => '¡Las contraseñas no coinciden!'));
                exit();
            }
            $mensajes = array('required' => 'El %s es requerido',
                'min_length'                 => 'El tamaño mínimo de %s es de 5 carateres',
                'max_length'                 => 'El tamaño máximo de %s es de 12 carateres',
                'valid_email'                => 'El %s no es válido');

            $this->form_validation->set_rules('contrasena', 'Contraseña', 'required|min_length[5]|max_length[35]', $mensajes);

            if ($this->form_validation->run() == false) {
                echo json_encode(array('error' => true, 'mensaje' => validation_errors()));
                exit();
            } else {
                $_POST['contrasena'] = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
                unset($_POST['contrasena2']);

                if ($this->Actualizar_usuario->updateUsuario($_POST)) {
                    echo json_encode(array('error' => true, 'mensaje' => 'Se ha actualizado la contraña'));
                    exit();
                } else {
                    echo json_encode(array('error' => true, 'mensaje' => 'No se pudo actualizar la contraseña'));
                    exit();
                }

            }
        }
    }

    public function update2()
    {

        $this->load->model('Usuario_model');
        $this->load->library('form_validation');

        $mensajes = array('required' => 'El %s es requerido',
            'min_length'                 => 'El tamaño mínimo de %s es de 5 carateres',
            'max_length'                 => 'El tamaño máximo de %s es de 12 carateres',
            'valid_email'                => 'El %s no es válido');

        $this->form_validation->set_rules('correo', 'Correo', 'required|valid_email', $mensajes);

        if ($this->form_validation->run() == false) {
            echo json_encode(array('error' => true, 'mensaje' => validation_errors()));
            exit();
        } /*else {
    /*$_POST['contrasena'] = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
    unset($_POST['contrasena2']);
    if ($this->Usuario_model->updateUsuario($_POST)) {
    echo json_encode(array('error' => true, 'mensaje' => 'Se ha autualido la contraña'));
    exit();
    } else {
    echo json_encode(array('error' => true, 'mensaje' => 'No se pudo actualizar la contraseña'));
    exit();
    }

    }*
    redirect('actualizar2');
    }*/
    }

}
