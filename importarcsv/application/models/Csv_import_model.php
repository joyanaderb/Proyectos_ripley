<?php
class Csv_import_model extends CI_Model
{
	function select2()
	{
		$this->db->order_by('id', 'DESC');
		$resultados = $this->db->get('base_carga_macarena');
		if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
	}
    
    function select()
	{
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get('base_carga_macarena');
		return $query;
	}
    
    function mostrarcasosamarcar()
	{
		$this->db->order_by('id', 'DESC');
		$resultados = $this->db->get('base_macarena');
		 if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
	}
    
    
  

	function insert($data)
	{ 
        $this->db->truncate('base_carga_macarena');
		$this->db->insert_batch('base_carga_macarena', $data);
	}
    
    	function insertMail($data2)
	{ 
        $db6 = $this->load->database('db6', TRUE);
		$db6->insert_batch('base_macarena_excel', $data2);
	}
    
    
    function MarcarCasos()
	{ 
          $sql='update registros as a inner join form_ripley.vt_actualizar_macarena as b on a.id=b.id_form
set
a.ga_accion=b.ga_accion_b,
a.sms_cliente=b.sms_cliente_b,
a.fecha_gestion=b.fecha_gestion_b,
a.tv=b.tv_b,
a.ga_comentario=b.ga_comentario_b
where b.ga_accion_b not like "%Manual%";'; 
        
    $query = $this->db->query($sql);
        
   
	}
    
     function MarcarCasos2()
	{ 
           
        $sql2='update registros as a inner join form_ripley.vt_actualizar_macarena as b on a.id=b.id_form
set
a.ga_accion=b.ga_accion_b,
a.tv=b.tv_b
where b.ga_accion_b like "%Manual%"'; 
    $query = $this->db->query($sql2);
        
   
	}
    
   public function getCasosamarcar()
    {
             $this->db->select("*"); // OTHER CONDITIONS IF ANY
$this->db->from('base_macarena'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
}
