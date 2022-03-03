<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aspirante_model extends CI_Model
{

    public function save($data)
    {
        return $this->db->insert("aspirante", $data);
    }

    public function getAspiranteNew($cedula)
    {
        $this->db->where("cedula", $cedula);
        $resultados = $this->db->get("aspirante");
        return $resultados->row();
    }
}
