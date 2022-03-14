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

    public function getAspiranteRegi($id)
    {
        $this->db->where("id", $id);
        $resultados = $this->db->get("aspirante");
        return $resultados->row();
    }

    public function lastID()
    {
        $maxid = 0;
        $row = $this->db->query('SELECT MAX(id) AS `maxid` FROM `aspirante`')->row();
        if ($row) {
            $maxid = $row->maxid;
        }

        return (int) $maxid;
    }

    public function numeroPlanilla()
    {
        $maxplanilla = 0;
        $row = $this->db->query('SELECT MAX(planilla) AS `maxplanilla` FROM `aspirante`')->row();
        if ($row) {
            $maxplanilla = $row->maxplanilla;
        }

        return (int) $maxplanilla;
    }

    public function comprobarCedulaAspirante($cedula)
    { 
        $this->db->where("cedula", $cedula);
        $resultado = $this->db->get("aspirante");

        return $resultado->num_rows();
    }
}
