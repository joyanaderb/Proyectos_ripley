<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Creacionacta_model extends CI_Model
{
    
    


    public function saverecords($data)
	{
         $db3 = $this->load->database('db3', TRUE);
        
        
        $db3->insert('actas_creadas',$data);
        return true;
	}
    
public function obtenerActaCreada($NroContacto)
    {

        $db3 = $this->load->database('db3', TRUE);
        $db3->select("*");
        $db3->where("NroContacto", $NroContacto);
        $resultados = $db3->get("actas_creadas");
        if ($resultados->num_rows() > 0) {
            return $resultados->row();
        } else {
            return false;
        }

    }
    
    
    public function CheckIfExist ($NroContacto) {
        
$db3 = $this->load->database('db3', TRUE);
$db3->select("*");
$db3->where("NroContacto", $NroContacto);

$qur = 'SELECT * FROM actas_creadas where NroContacto='.$NroContacto;
$query = $this->db->query($qur);
return $query->result();}

    
    public function getActasCreadas()
    {
        $db3 = $this->load->database('db3', TRUE);
        $db3->select("*");
        $resultados = $db3->get("actas_creadas");
        if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
    }
    
    
        public function update($id, $data)
    {
        $db3 = $this->load->database('db3', TRUE);
        $db3->where("NroContacto", $id);
        return $db3->update("actas_creadas", $data);
             if($db3->affected_rows() == 1){    
        return TRUE;    
    } else {
        return FALSE;
    }
    }
    

    
   public function update3($data) {
    $db3 = $this->load->database('db3', TRUE);
    extract($data);
    $db3->where('NroContacto', $NroContacto);
    $db3->update($table_name, array('estadoActa' => $estadoActa, 'fechaRealCumplimiento' => $fechaRealCumplimiento, 'fechaRetiroCambioAuris' => $fechaRetiroCambioAuris));
    return true;
}
    
     public function HistorialCambios($dataHistorial)
	{
         
         $db3 = $this->load->database('db3', TRUE);
         extract($dataHistorial);
        
        $db3->insert($table_name, array('NroContacto' => $NroContacto, 'fechaGeneracion' => $fechaGeneracion, 'estadoActa' => $estadoActa, 'tipoGestion' => $tipoGestion, 'Comuna1' => $Comuna1, 'fechaRealCumplimiento' => $fechaRealCumplimiento, 'FechaUltimaModificacion' => $FechaUltimaModificacion, 'nombreModificador' => $nombreModificador));
        return true;
	}

    
     public function update2($id, $data)
    {
        $db3 = $this->load->database('db3', TRUE);
        $db3->where("NroContacto", $id);
        return $db3->update("actas_creadas", $data);
    }
    
   public function motivoReclamo()
    {
        
        $Motivo1 = $this->input->GET('Motivo1', TRUE);
        $Motivo2 = $this->input->GET('Motivo2', TRUE);
        $NumCampana = $this->input->GET('NumCampana', TRUE);
        $data = $this->db->query("SELECT distinct [mot_desmot2] as motivo FROM [dbo].[motivo] as motivo inner join [dbo].[campana] as campana on motivo.[mot_numcam]=campana.[cam_numcam] where motivo.[mot_nummot1]= '$Motivo1' and motivo.[mot_nummot2]= '$Motivo2' and campana.[cam_numcam]= '$NumCampana'");
if ($data->num_rows() > 0) {
            return $data->result();
        } else {
            return false; 
        }
    }
    
      public function getBuscadordehistoricopornumeroticket($NroContacto='default')
    {
        
      {
        $db3 = $this->load->database('db3', TRUE);
         $db3->select("*");
            $db3->where("NroContacto", $NroContacto);
 $resultados = $db3->get("historial_actas");
          if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
    }

    }
    
    
      public function geteditarActaAdmin($NroContacto='default')
    {
        
      {
        $db3 = $this->load->database('db3', TRUE);
         $db3->select("*");
            $db3->where("NroContacto", $NroContacto);
 $resultados = $db3->get("actas_creadas");
          if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
    }

    }
    
    
}

    
  



     