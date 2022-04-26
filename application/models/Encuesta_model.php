<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Encuesta_model extends CI_Model
{

    public function comprobarCedula($cedula)
    {
        $this->db->where("cedula", $cedula);
        $resultado = $this->db->get("encuesta");

        return $resultado->num_rows();
    }

    public function comprobarEstudiante($cedula)
    {
        $this->db->where("cedula", $cedula);
        $resultado = $this->db->get("matricula_actual");

        return $resultado->num_rows();
    }

    public function save($data)
    {
        return $this->db->insert("encuesta", $data);
    }
    
}
