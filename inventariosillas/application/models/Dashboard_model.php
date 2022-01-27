<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
      public function getIrreparable()
    {
             $this->db->where('libros.id_facultad', 13); // OTHER CONDITIONS IF ANY
$this->db->from('libros'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
    public function getEnServicioTecnico()
    {
             $this->db->where('libros.id_facultad', 9); // OTHER CONDITIONS IF ANY
$this->db->from('libros'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
   
    public function getEnProcesoDeFormateo()
    {
             $this->db->where('libros.id_facultad', 11); // OTHER CONDITIONS IF ANY
$this->db->from('libros'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
   
    
    public function getAlaEsperaDeServicioTecnico()
    {
             $this->db->where('libros.id_facultad', 12); // OTHER CONDITIONS IF ANY
$this->db->from('libros'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
      public function getRobado()
    {
             $this->db->where('libros.id_facultad', 14); // OTHER CONDITIONS IF ANY
$this->db->from('libros'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
       public function getPrestados()
    {
            $this->db->select("prestados_libro");
        $resultados = $this->db->get("libros");
        if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
 
    return $contador;
    }
  
      public function getDisponiblesParaPrestamo()
    {
           
$this->db->select("total");
        $resultados = $this->db->get("sillasdisponibles");
        if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
    
}
    
  
    
    
}
