<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mensajeria extends CI_Model
{

    public function getMensajesSalida(int $idusuario)
    {
        return $this->db->select('*')->from('mensajes')->join('usuarios', 'idusuario = mensajes.usuarios_idusuario')->where('mensajes.usuarioMando', $idusuario)->get()->result();
    }

    public function getMensajesEntrada(int $idusuario)
    {
        return $this->db->select('*')->from('mensajes')->join('usuarios', 'idusuario = mensajes.usuarioMando')->where('mensajes.usuarios_idusuario', $idusuario)->get()->result();
    }

    public function setMensaje(array $datos)
    {
        return $this->db->insert('mensajes', $datos);
    }

    public function getUsuarios(int $idusuario)
    {
        $this->db->where('idusuario !=', $idusuario);
        return $this->db->select('idusuario, usuario')->from('usuarios')->get()->result();

    }

    public function deleteMensaje(int $idusuario, int $id_mensaje)
    {
        $this->db->where('usuario_mando', $idusuario);
        $this->db->where('idmensaje', $id_mensaje);
        return $this->db->delete('mensajes');
    }

    public function getMensaje(int $idusuario, int $idmensaje)
    {
        $this->db->where('idmensaje', $idmensaje);
        $this->db->where('usuario_mando', $idusuario);
        $this->db->or_where('usuarios_idusuario', $idusuario);
        return $this->db->select('*')->from('mensajes')->get()->result();
    }

}
