<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prestamos_model extends CI_Model
{
    public function getPrestamos()
    {
        $db2 = $this->load->database('db2', TRUE);
    $db2->select("p.*, le.*, nombre as nombres, rut_completo as dni, estadoAsignacion as estado, id as id_lector");
    $this->db->select("p.*,li.*, le.*");
    $this->db->join("ccr.dotacion le", "le.id = p.id_lector");
    $this->db->join("libros li", "li.id_libro= p.id_libro");
    $resultados = $this->db->get("prestamos p");
    if ($resultados->num_rows() > 0) {
        return $resultados->result();
    } else {
        return false;
    }
    }

    public function getPrestamo($id)
    {

        $this->db->select("*");
        $this->db->where("id_lector", $id);
        $resultados = $this->db->get("prestamos");
        if ($resultados->num_rows() > 0) {
            return $resultados->row();
        } else {
            return false;
        }

    }

    public function guardar($datos)
    {
        return $this->db->insert("prestamos", $datos);
    }

    public function update($id, $data)
    {
        $this->db->where("id_lector", $id);
        return $this->db->update("prestamos", $data);
    }

    public function delete($id)
    {
        $this->db->where("id_libro", $id);
        return $this->db->delete("libros");
    }
    
       public function Doc_cargados($rut)
	{
          $db3 = $this->load->database('db3', TRUE);
        $db3->insert('doc_firmados_sillas',$rut);
        return true;
	}
    
      public function Documentos_cargados()
	{
          
          $db3 = $this->load->database('db3', TRUE);
            $db3->select("*");
        $resultados = $db3->get("doc_firmados_sillas");
        if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
	}

}
