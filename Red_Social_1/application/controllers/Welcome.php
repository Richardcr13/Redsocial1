<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->model('Usuario_model');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('usuario', 'Usuario', 'required');
        $this->form_validation->set_rules('contrasena', 'Contraseña', 'required');

        if ($this->form_validation->run()) {
            // true
            $usuario    = $this->input->post('usuario');
            $contrasena = $this->input->post('contrasena');

            $check_user = $this->Usuario_model->login($usuario, $contrasena);

            if ($check_user == true) {
                $data = array(
                    'is_loged_in' => true,
                    'idusuario'   => $check_user->idusuario);
                $this->session->set_userdata($data);
                if (isset($this->session->idusuario)) {
                    echo "Bienvenido";
                    redirect('Pagina_inicio');
                } else {echo "string";}

            } else {
                echo "Datos incorrectos";
            }

        }

        $this->load->view('welcome_message');

    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Welcome');
    }
}
