<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seguimiento_model extends CI_Model
{
    public function getCarreras()
    {
        $this->db->select(
            'nombre AS nombre_carrera
            '
    );
    $this->db->from('carreras');

    $resultado = $this->db->get();
    return $resultado->result();
    }
    
    public function getCantidadPreinscriptos()
    {
        $this->db->select(
            'count(*) AS total
            '
    );
    $this->db->from('aspirante');

    $resultado = $this->db->get();
    return $resultado->row();
    }

    public function getCantidadEducacionPreescolar()
    {
        $this->db->select(
            'count(*) AS preescolar
            '
    );
    $this->db->from('aspirante');
    $this->db->where('carrera','Educación preescolar');

    $resultado = $this->db->get();
    return $resultado->row();
    }

    public function getCantidadEducacionIntegral()
    {
        $this->db->select(
            'count(*) AS integral
            '
    );
    $this->db->from('aspirante');
    $this->db->where('carrera','Educación integral');

    $resultado = $this->db->get();
    return $resultado->row();
    }

    public function getCantidadEducacionEspecial()
    {
        $this->db->select(
            'count(*) AS especial
            '
    );
    $this->db->from('aspirante');
    $this->db->where('carrera','Educación especial');

    $resultado = $this->db->get();
    return $resultado->row();
    }

    public function getInscriptoPorCarrera($carrera)
    {
        $this->db->select(
            '   cedula,
                nombre1,
                nombre2,
                apellido1,
                apellido2,
                telefono,
                direccion,
                email,
                fechanac,
                carrera,
                sexo
            '
    );
    $this->db->from('aspirante');
    if ($carrera !='todas') {
        $this->db->where('carrera',$carrera);
    }    

    $resultado = $this->db->get();
    return $resultado->result();
    }   
  

}
