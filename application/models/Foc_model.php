<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Foc_model extends CI_Model
{
     public function getDataParticipante($cedula_foc)
     {
          $this->db->select(
               'id,
                semestre
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
               'c.*,
                d.nombre_d
               '
          );
          $this->db->from('cursos_foc c');
          $this->db->join('dimension_foc d', 'd.id = c.id_dimension');
          if ($data_estudiante->semestre == '1') {
               $this->db->where('semestre_1', '1');
          } else if ($data_estudiante->semestre == '2') {
               $this->db->where('semestre_2', '1');
          } else if ($data_estudiante->semestre == '3') {
               $this->db->where('semestre_3', '1');
          } else if ($data_estudiante->semestre == '4') {
               $this->db->where('semestre_4', '1');
          } else if ($data_estudiante->semestre == '5') {
               $this->db->where('semestre_5', '1');
          } else if ($data_estudiante->semestre == '6') {
               $this->db->where('semestre_6', '1');
          }

          $resultado = $this->db->get();
          return $resultado->result();
     }

     public function saveCursoEstudiante($data, $data2)
     {
          $this->db->trans_start();
          $this->db->insert('estudiante_curso_foc', $data);
          $this->db->insert('estudiante_curso_foc', $data2);
          $this->db->trans_complete();
          return $this->db->trans_status();
     }

     public function getInscriptoPorCarrera($carrera)
     {
          $this->db->select(
               '   mf.*
            '
          );
          $this->db->from('matricula_foc mf');
          $this->db->join('estudiante_curso_foc ec','ec.id_estudiante = mf.id');
          $this->db->join('registros_magis_humano rm', 'rm.id_estudiante = mf.id');
          $this->db->join('cursos_foc cf', 'cf.id = mf.id_curso');
          $this->db->join('cursos_foc cfh', 'cfh.id = rm.id_curso');
          if ($carrera != 'todas') {
               $this->db->where('carrera', $carrera);
          }
          $this->db->where('status', '1');
          $resultado = $this->db->get();
          return $resultado->result();
     }
}
