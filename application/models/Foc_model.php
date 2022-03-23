<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Foc_model extends CI_Model
{
    public function getDataParticipante($cedula_foc)
    {
        $this->db->select(
            'semestre
            '
        );
        $this->db->from('estudiantes_foc');
        $this->db->where('cedula', $cedula_foc);

        $resultado = $this->db->get();
        return $resultado->row();
    }

     public function getCursosFoc($data_estudiante)
    {
        $this->db->select(
            '*,
            d.nombre_d
            '
        );
        $this->db->from('cursos_foc c');
        $this->db->join('dimension_foc d','d.id = c.id_dimension');
        if ($data_estudiante == '1') {
             $this->db->where('semestre_1', '1');
        }else if($data_estudiante == '2'){
             $this->db->where('semestre_2', '1');
        }else if($data_estudiante == '3'){
             $this->db->where('semestre_3', '1');
        }else if($data_estudiante == '4'){
             $this->db->where('semestre_4', '1');
        }else if($data_estudiante == '5'){
             $this->db->where('semestre_5', '1');
        }else if($data_estudiante == '6'){
             $this->db->where('semestre_6', '1');
        }    

        $resultado = $this->db->get();
        return $resultado->result();
    }

 
}
