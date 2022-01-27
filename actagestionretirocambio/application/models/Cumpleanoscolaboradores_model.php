<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cumpleanoscolaboradores_model extends CI_Model
{
    public function getCumpleanosColaboradores()
    {
        
      {
        $db2 = $this->load->database('db2', TRUE);
         $db2->select("nombre");
 $resultados = $db2->get("cumples2");
          if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
    }

    }
    
        public function getPrestamos()
    {
                    $db3 = $this->load->database('db3', TRUE);

        $db2 = $this->load->database('db2', TRUE);
    $db2->select("p.*, le.*, nombre as nombres, rut_completo as dni, estadoAsignacion as estado, id as id_lector");
    $db3->select("p.*,li.*, le.*");
    $db3->join("ccr.dotacion le", "le.id = p.id_lector");
    $db3->join("libros li", "li.id_libro= p.id_libro");
    $db3->where("p.id_lector", $this->session->userdata("id"));       
    $resultados = $db3->get("prestamos p");
    if ($resultados->num_rows() > 0) {
        return $resultados->result();
    } else {
        return false;
    }
    } 

    public function saverecords($data)
	{
        $this->db->insert('recepcionturnos',$data);
        return true;
	}
    
    
     public function getConfirmacionesRecepcionTurnos()
    {
        $this->db->select("id, rut_completo, nombre, nombre_servicio");
        $resultados = $this->db->get("recepcionturnos");
        if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }

    }
 
    }

     