<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pagina_inicio extends CI_Controller
{

    public function index()
    {
        $this->load->model('Publicaciones');

        $post     = $this->Publicaciones->getPosts();
        $coment   = $this->Publicaciones->getComent();
        $usuarios = $this->Publicaciones->getUsuarios($this->session->idusuario);

        $this->load->view('templates/inicio/header', compact('usuarios'));
        $this->load->view('templates/inicio', compact('post', 'coment'));
        $this->load->view('templates/inicio/footer');
        if (isset($this->session->idusuario)) {
            print_r($this->session->idusuario);
            echo "Bienvenido...";

        }
        $this->guardar_archivo();

    }
    public function publicar()
    {
        $this->load->model('Publicaciones');
        $this->load->library('form_validation');

        if ($this->input->post()) {

            $this->form_validation->set_rules('contenidoPublicacion', 'Contenido', 'required|min_length[1]|max_length[1000]');

            if ($this->form_validation->run() == false) {
                echo json_encode(array('error' => true, 'mensaje' => validation_errors()));
                exit();
            }
            $datos = array('idUserPublico' => $this->session->idusuario,
                'idpublicacion'                => $_POST['idpublicacion'],
                'contenidoPublicacion'         => $_POST['contenidoPublicacion']);
            $this->Publicaciones->setComentario($datos);
            echo json_encode(array('error' => false, 'mensaje' => 'La publicación se ha realizado con éxito'));
        }
    }
    public function comentar()
    {

        $this->load->model('Publicaciones');
        $this->load->library('form_validation');
/*
if ($this->input->post()) {

$this->form_validation->set_rules('contenidoComentario', 'Contenido', 'required|min_length[1]|max_length[1000]');

if ($this->form_validation->run() == false) {
echo json_encode(array('error' => true, 'mensaje' => validation_errors()));
exit();
}
$datos = array('idUser' => $this->session->idusuario,
'contenidoComentario'   => $_POST['contenidoComentario']);
$this->Publicaciones->setComentario($datos);
echo json_encode(array('error' => false, 'mensaje' => 'La publicación se ha realizado con éxito'));
}*/
        print_r($this->input->post());

    }

    public function guardar_archivo()
    {
        $archivo               = 'imagen';
        $config['upload_path'] = "images/publicaciones";
        //$config['file_name'] = "nombre_archivo/";
        $config['allowed_types'] = "jpg|png";
        $config['max_size']      = "5000";
        $config['max_width']     = "2000";
        $config['max_heigth']    = "2000";

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($archivo)) {
            $this->upload->display_errors();
            return;
        }
        $this->upload->data();
    }

    public function key()
    {
        echo md5("red_social");
    }

}
