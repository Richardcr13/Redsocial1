<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post2 extends CI_Model
{
    public function getPost()
    {
        return $this->db->get('usuarios');
    }

    public function getPostByName($name = '')
    {
        $this->db->query('SELECT usuario FROM usuarios');

        return $result->row();
    }
}