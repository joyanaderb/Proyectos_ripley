<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Serviciostecnicos_model extends CI_Model
{
    public function getServiciosTecnicos()
    {
        
   {
             $this->db->select('*'); // OTHER CONDITIONS IF ANY
$this->db->from('informar_campana_formulario'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
    }


 