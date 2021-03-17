<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 */
class Usuario_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();

    }

    public function login($usuario, $contrasena)
    {

        $this->db->where('usuario', $usuario);
        //$this->db->where('contrasena', $contrasena);

        $query = $this->db->get('usuarios');

        $row = $query->row();
        //return $row ? password_verify($contrasena, $row->contrasena) : false;
        if ($row && password_verify($contrasena, $row->contrasena)) {

            return $row;
        } else {
            return false;
        }

    }

    public function getUsuario(int $id_usuario)
    {
        return $this->db->select('*')->from('usuario')->where('idusuario', $id_usuario)->get()->result();
    }

    public function setUsuario(array $datos)
    {
        return $this->db->insert('usuarios', $datos);
    }

    public function updateUsuario()
    {
        return $this->db->update('usuarios', $datos);
    }

}
