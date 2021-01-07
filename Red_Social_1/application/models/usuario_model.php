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

    public function login($username, $password)
    {
        //$this->load->database();
        $this->db->where('usuario', $username);
        $this->db->where('contrasena', $password);
        $q = $this->db->get('usuarios');

        if ($q->num_rows() > 0) {

            return true;

        } else {
            return false;
        }
    }

}
