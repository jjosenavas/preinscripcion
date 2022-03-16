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
        $this->db->where('carrera', 'Educación preescolar');

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
        $this->db->where('carrera', 'Educación integral');

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
        $this->db->where('carrera', 'Educación especial');

        $resultado = $this->db->get();
        return $resultado->row();
    }

    public function getInscriptoPorCarrera($carrera)
    {
        $this->db->select(
            '   id,
                cedula,
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
        if ($carrera != 'todas') {
            $this->db->where('carrera', $carrera);
            $this->db->where('status', '1');
        }
        $this->db->where('status', '1');
        $resultado = $this->db->get();
        return $resultado->result();
    }

    public function getValidarDataAspirante($id)
    {
        $this->db->select(
            '   *
            '
        );
        $this->db->from('aspirante');
        $this->db->where('id', $id);

        $resultado = $this->db->get();
        return $resultado->row();
    }

    public function saveAdmitido($data, $data_update, $id_aspirante)
    {
        $this->db->trans_start();
        $this->db->insert('admitidos', $data);
        $this->db->where("id", $id_aspirante);
        $this->db->update('aspirante', $data_update);
        $this->db->trans_complete();
      return $this->db->trans_status();
       
    }

    public function getCantidadAdmitidos($lapso)
    {
        $this->db->select(
            'count(*) AS total
            '
        );
        $this->db->from('admitidos');
        $this->db->where("lapso", $lapso);
        $resultado = $this->db->get();
        return $resultado->row();
    }

    public function getAdmitidosPorCarrera($carrera)
    {
        $this->db->select(
            '   id,
                cedula,
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
        $this->db->from('admitidos');
        if ($carrera != 'todas') {
            $this->db->where('carrera', $carrera);
            //$this->db->where('status', '1');
        }
       // $this->db->where('status', '1');
        $resultado = $this->db->get();
        return $resultado->result();
    }
    
}
