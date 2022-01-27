<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Search_Model extends CI_Model {
public function GetSearchdata()
  {
    $this->db->select("*");  
    $this->db->like('[GES - Nº Contacto]',$this->input->get('search'));
    $query = $this->db->get("TBL_HISTORIAL_ABIERTOS2"); 
    return $query->result();
  }
}
    
    