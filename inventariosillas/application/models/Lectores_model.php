<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lectores_model extends CI_Model
{
    public function getLectores()
    {
        $db2 = $this->load->database('db2', TRUE);
        $db2->select("l.*, nombre as nombres, rut_completo as dni, estadoAsignacion as estado, id as id_lector, estado as estado");
         $db2->where("estado", 'Activo');
        $resultados = $db2->get("dotacion l");
        if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
    }

    public function getLector($id)
    {
        $db2 = $this->load->database('db2', TRUE);
        $db2->select("l.*, nombre as nombres, rut_completo as dni, estadoAsignacion as estado, id as id_lector");
        $this->db->where("id_lector", $id);
        $resultados = $db2->get("dotacion l");
        if ($resultados->num_rows() > 0) {
            return $resultados->row();
        } else {
            return false;
        }

    }

    public function guardar($datos)
    {
        return $this->db->insert("dotacion", $datos);
    }

    public function update($id, $data)
    {
        $db2 = $this->load->database('db2', TRUE);
        $db2->select("*, nombre as nombres, rut_completo as dni, estadoAsignacion as estado, id as id_lector");
        $this->db->where("id_lector", $id);
        return $this->db->update("lectores", $data);
    }

    public function delete($id)
    {
        $db2 = $this->load->database('db2', TRUE);
        $db2->select("*, nombre as nombres, rut_completo as dni, estadoAsignacion as estado, id as id_lector");
        $this->db->where("id_lector", $id);
        return $this->db->delete("lectores");
    }

    public function comprobardni($dni)
    {
        $db2 = $this->load->database('db2', TRUE);
        $db2->select("*, nombre as nombres, rut_completo as dni, estadoAsignacion as estado, id as id_lector, NomCargo as nombre_cargo, nombre_super as nombreSuper, region as region");
        $db2->where('rut_completo', $dni);
        $resultados = $db2->get('dotacion_inner3');
        if ($resultados->num_rows() > 0) {
            return $resultados->row();
        } else {
            return false;
        }
    }
}
