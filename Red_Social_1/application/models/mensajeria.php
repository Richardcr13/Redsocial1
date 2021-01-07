<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mensajeria extends CI_Model
{

    public function __construct()
    {

    }

    public function enviarMensaje($datosMensaje)
    {
        $this->db->set($datosMensaje);
        $this->db->insert('mensajes');
    }

    public function getMensajes($id)
    {
        $this->db->query('SELECT U.usuario , P.fotoPerfil , M.contenido , M.fechaMensaje , M.idmensaje FROM mensajes M
        INNER JOIN usuarios U ON U.idusuario = M.usuarioMando
        INNER JOIN perfil P ON P.idUsuario = M.usuarioMando
         WHERE M.usuarios_idusuario = :id');
        $this->db->bind(':id', $id);
        return $this->db->registers();
    }

    public function eliminarMensaje($id)
    {
        $this->db->query('DELETE FROM mensajes WHERE idmensaje = :id');
        $this->db->bind(':id', $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
