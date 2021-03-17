<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Publicaciones extends CI_Model
{

    public function getPosts()
    {
        return $this->db->select('publicaciones.*,usuarios.idusuario, usuarios.correo')->from('publicaciones,usuarios')->where('publicaciones.idUserPublico = usuarios.idusuario')->get()->result();
    }
    public function getComent()
    {
        return $this->db->select('comentarios.*,usuarios.idusuario, usuarios.usuario')->from('comentarios,usuarios')->where('comentarios.idUser = usuarios.idusuario')->get()->result();
    }

    public function getPost(int $id_post)
    {
        return $this->db->select('publicaciones.*,usuarios.idusuario, usuarios.correo')->from('publicaciones,usuarios')->where('publicaciones.idUserPublico = usuarios.idusuario')->get()->result();
    }

    public function setPost(array $datos)
    {
        return $this->db->insert('publicaciones', $datos);
    }

    public function setComentario(array $datos)
    {
        return $this->db->insert('comentarios', $datos);
    }

    public function deletePost(int $id_usuario, int $id_post)
    {
        $this->db->where('idusuario', $id_usuario);
        $this->db->where('idpublicacion', $id_post);
        return $this->db->delete('publicaciones');
    }

//usuarios

    public function getUsuarios(int $idusuario)
    {
        $this->db->where('idusuario !=', $idusuario);
        return $this->db->select('idusuario, usuario')->from('usuarios')->get()->result();

    }

}
