<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipolectores_model extends CI_Model {

	public function getTipolectores(){
		$resultados = $this->db->get("tipolector");
		return $resultados->result();
	}

	public function getTipousuario($id){
		$this->db->where("id",$id);
		$consulta = $this->db->get("roles");
		return $consulta->row();
	}

	public function guardar($datos){
		return $this->db->insert("roles",$datos);
	}

	public function update($id,$datos){
		$this->db->where("id",$id);
		return $this->db->update("roles",$datos);
	}

	public function delete($id){
		$this->db->where("id",$id);
		return $this->db->delete("roles");
	}
}
