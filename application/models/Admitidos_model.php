<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admitidos_model extends CI_Model
{

    public function saveRegistroIntroductorio($data, $cedula)
    {
        $this->db->where("cedula", $cedula);
        return $this->db->update("admitidos", $data);
    }

    public function getAdmtido($cedula)
    {
        $this->db->where("cedula", $cedula);
        $resultados = $this->db->get("admitidos");
        return $resultados->row();
    }
}
