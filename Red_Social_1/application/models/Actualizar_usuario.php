<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 */
class Actualizar_usuario extends CI_Model
{
    public function getUsuarios()
    {
        return $this->db->select('idusuario,correo,contrasena')->from('usuarios')->get()->result();
    }

    public function updateUsuario(string $idusuario, $contrasena)
    {

        $this->db->where('idusuario', $idusuario);
        $this->db->update('usuarios', $contrasena);
    }
}
