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

    public function getCantidadPreinscriptos($lapso)
    {
        $this->db->select(
            'count(*) AS total
            '
        );
        $this->db->from('aspirante');
        $this->db->where('lapso', $lapso);

        $resultado = $this->db->get();
        return $resultado->row();
    }
    public function getCantidadPreinscriptosEducacion($lapso)
    {
        $this->db->select(
            'count(*) AS total
            '
        );
        $this->db->from('aspirante');
        $this->db->where('lapso', $lapso);
        $this->db->group_start();
        $this->db->where('carrera', 'Educación especial');
        $this->db->or_where('carrera', 'Educación preescolar');
        $this->db->or_where('carrera', 'Educación integral');
        $this->db->group_end();

        $resultado = $this->db->get();
        return $resultado->row();
    }

    public function getCantidadEducacionPreescolar($lapso)
    {
        $this->db->select(
            'count(*) AS preescolar
            '
        );
        $this->db->from('aspirante');
        $this->db->where('carrera', 'Educación preescolar');
        $this->db->where('lapso', $lapso);

        $resultado = $this->db->get();
        return $resultado->row();
    }

    public function getCantidadEducacionIntegral($lapso)
    {
        $this->db->select(
            'count(*) AS integral
            '
        );
        $this->db->from('aspirante');
        $this->db->where('carrera', 'Educación integral');
        $this->db->where('lapso', $lapso);

        $resultado = $this->db->get();
        return $resultado->row();
    }

    public function getCantidadEducacionEspecial($lapso)
    {
        $this->db->select(
            'count(*) AS especial
            '
        );
        $this->db->from('aspirante');
        $this->db->where('carrera', 'Educación especial');
        $this->db->where('lapso', $lapso);

        $resultado = $this->db->get();
        return $resultado->row();
    }

    public function getCantidadElectronica($lapso)
    {
        $this->db->select(
            'count(*) AS electronica
            '
        );
        $this->db->from('aspirante');
        $this->db->where('carrera', 'Electrónica');
        $this->db->where('lapso', $lapso);

        $resultado = $this->db->get();
        return $resultado->row();
    }
    public function getCantidadElectrotecnia($lapso)
    {
        $this->db->select(
            'count(*) AS electrotecnia
            '
        );
        $this->db->from('aspirante');
        $this->db->where('carrera', 'Electrotecnia');
        $this->db->where('lapso', $lapso);

        $resultado = $this->db->get();
        return $resultado->row();
    }
    public function getCantidadMecanica($lapso)
    {
        $this->db->select(
            'count(*) AS mecanica
            '
        );
        $this->db->from('aspirante');
        $this->db->where('carrera', 'Mecánica');
        $this->db->where('lapso', $lapso);

        $resultado = $this->db->get();
        return $resultado->row();
    }

    // monitoreo por carrera en el proceso de aceptacion
    public function getCantidadAceptadosElectronicaElectrotecnia($lapso)
    {
        $this->db->select(
            'count(*) AS total
            '
        );
        $this->db->from('admitidos');
        $this->db->where('lapso', $lapso);
        $this->db->group_start();
        $this->db->where('carrera', 'Electrónica');
        $this->db->or_where('carrera', 'Electrotecnia');
        $this->db->group_end();
       

        $resultado = $this->db->get();
        return $resultado->row();
    }

    public function getCantidadAceptadosEducacion($lapso)
    {
        $this->db->select(
            'count(*) AS total
            '
        );
        $this->db->from('admitidos');
        $this->db->where('lapso', $lapso);
       $this->db->group_start();
        $this->db->where('carrera', 'Educación especial');
        $this->db->or_where('carrera', 'Educación preescolar');
        $this->db->or_where('carrera', 'Educación integral');
        $this->db->group_end();        

        $resultado = $this->db->get();
        return $resultado->row();
    }

    public function getCantidadAceptadosMecanica($lapso)
    {
        $this->db->select(
            'count(*) AS total
            '
        );
        $this->db->from('admitidos');
        $this->db->where('lapso', $lapso);      
        $this->db->where('carrera', 'Mecánica');
       

        $resultado = $this->db->get();
        return $resultado->row();
    }

    public function getCantidadAceptadosInformatica($lapso)
    {
        $this->db->select(
            'count(*) AS total
            '
        );
        $this->db->from('admitidos');
        $this->db->where('lapso', $lapso);      
        $this->db->where('carrera', 'Informática');
        

        $resultado = $this->db->get();
        return $resultado->row();
    }

    public function getCantidadAceptadosAdministracionEmpresa($lapso)
    {
        $this->db->select(
            'count(*) AS total
            '
        );
        $this->db->from('admitidos');
        $this->db->where('lapso', $lapso);      
        $this->db->where('carrera', 'Administración de empresas');
        
        $resultado = $this->db->get();
        return $resultado->row();
    }

     public function getCantidadAceptadosContaduria($lapso)
    {
        $this->db->select(
            'count(*) AS total
            '
        );
        $this->db->from('admitidos');
        $this->db->where('lapso', $lapso);      
        $this->db->where('carrera', 'Contaduría');
        
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

    public function saveNoAceptado($data_update, $id_aspirante)
    {
        $this->db->trans_start();
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
        $this->db->where('lapso', $lapso);
        $resultado = $this->db->get();
        return $resultado->row();
    }

    public function getCantidadProcesadosElect($lapso, $electronica, $electrotecnia)
    {
        $this->db->select(
            'count(*) AS total
            '
        );
        $this->db->from('admitidos');
        $this->db->where('lapso', $lapso);
        $this->db->group_start();
        $this->db->where('carrera', $electronica);
        $this->db->or_where('carrera', $electrotecnia);
        $this->db->group_end();
        $resultado = $this->db->get();
        return $resultado->row();
    }

    public function getCantidadProcesadosMecanica($lapso, $mecanica)
    {
        $this->db->select(
            'count(*) AS total
            '
        );
        $this->db->from('admitidos');
        $this->db->where('lapso', $lapso);
        $this->db->group_start();
        $this->db->where('carrera', $mecanica);
        $this->db->group_end();
        $resultado = $this->db->get();
        return $resultado->row();
    }

    public function getCantidadProcesadosInformatica($lapso, $informatica)
    {
        $this->db->select(
            'count(*) AS total
            '
        );
        $this->db->from('admitidos');
        $this->db->where('lapso', $lapso);
        $this->db->group_start();
        $this->db->where('carrera', $informatica);
        $this->db->group_end();
        $resultado = $this->db->get();
        return $resultado->row();
    }

    public function getCantidadProcesadosAdministacionEmpresa($lapso, $adm_empresa)
    {
        $this->db->select(
            'count(*) AS total
            '
        );
        $this->db->from('admitidos');
        $this->db->where('lapso', $lapso);
        $this->db->group_start();
        $this->db->where('carrera', $adm_empresa);
        $this->db->group_end();
        $resultado = $this->db->get();
        return $resultado->row();
    }

    public function getCantidadProcesadosContaduria($lapso, $contaduria)
    {
        $this->db->select(
            'count(*) AS total
            '
        );
        $this->db->from('admitidos');
        $this->db->where('lapso', $lapso);
        $this->db->group_start();
        $this->db->where('carrera', $contaduria);
        $this->db->group_end();
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

    public function getNoAceptadosPorCarrera($carrera)
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
            $this->db->where('status', '2');
        }
        $this->db->where('status', '2');
        $resultado = $this->db->get();
        return $resultado->result();
    }
    
}
