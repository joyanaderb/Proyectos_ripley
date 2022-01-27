<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Consulta_model extends CI_Model
    
      
    
{
    
    
     public function Datos()
  {
        
         
        $this->db->select("*");
        $this->db->order_by('hora_ejecucion', 'desc');
                $resultados = $this->db->get("vt_frontmonitoreo");   
        if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
    }
    
         public function Datos2()
  {
        
         
        $this->db->select("*");
               $this->db->order_by('hora_ejecucion', 'asc');
                $resultados = $this->db->get("vt_proximaejecucion");   
        if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
    }
    
             public function Datos3()
  {
        
         
        $this->db->select("*");
               $this->db->order_by('fecha_hora_inicio', 'desc');
              
                $resultados = $this->db->get("vt_fallidos_hoy");   
            return $resultados->result();
    }
    
 public function CargaMasivaFormulario()
  {
        
        $this->db->select("*");
            $this->db->where("nombre_proceso", 'Carga Masiva Formulario');
       $resultados = $this->db->get("vt_ultimas_ejecuciones_hoy_final");
      $this->db->limit(1);
        if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
    }
    
     public function CargaAurisProd()
  {
        
        $this->db->select("*");
            $this->db->where("nombre_proceso", 'Proceso AurisProd');
       $resultados = $this->db->get("vt_ultimas_ejecuciones_hoy_final");
        if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
    }
public function CasosCriticosDia()
{
        $this->db->select("*");
            $this->db->where("nombre_proceso", 'Proceso casos criticos dia');
   $this->db->limit(1);
       $resultados = $this->db->get("vt_ultimas_ejecuciones_hoy_final");
        if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
    }
    
   
    
       public function CargaBaseStock()
{
        $this->db->select("*");
            $this->db->where("nombre_proceso", 'Carga Base Stock');
   $this->db->limit(1);
       $resultados = $this->db->get("vt_ultimas_ejecuciones_hoy_final");
        if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
    }
    
     public function InformaCargaMasiva()
{
        $this->db->select("*");
            $this->db->where("nombre_proceso", 'Informa Carga Masiva');
   $this->db->limit(1);
       $resultados = $this->db->get("vt_ultimas_ejecuciones_hoy_final");
        if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
    }
    
     public function ProcesoAurisbtccr()
{
        $this->db->select("*");
            $this->db->where("nombre_proceso", 'Proceso BT AURIS CCR');
   $this->db->limit(1);
       $resultados = $this->db->get("vt_ultimas_ejecuciones_hoy_final");
        if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
    }
    
      public function ProcesoCancelacionCompra()
{
        $this->db->select("*");
            $this->db->where("nombre_proceso", 'Proceso Cancelacion Compra');
   $this->db->limit(1);
       $resultados = $this->db->get("vt_ultimas_ejecuciones_hoy_final");
        if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
    }
    
    public function CasosAbiertosPortal()
{
        $this->db->select("*");
            $this->db->where("nombre_proceso", 'Proceso Casos Abiertos Portal');
   $this->db->limit(1);
       $resultados = $this->db->get("vt_ultimas_ejecuciones_hoy_final");
        if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
    }
    
        public function ProcesoLogisticaPorHora()
{
        $this->db->select("*");
            $this->db->where("nombre_proceso", 'Proceso Logistica por hora');
   $this->db->limit(1);
       $resultados = $this->db->get("vt_ultimas_ejecuciones_hoy_final");
        if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
    }
    
    public function ProcesoRepCepeda()
{
        $this->db->select("*");
            $this->db->where("nombre_proceso", 'Proceso RepCepeda');
   $this->db->limit(1);
       $resultados = $this->db->get("vt_ultimas_ejecuciones_hoy_final");
        if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
    }
    
     public function ProcesoReporteCelulasHora()
{
        $this->db->select("*");
            $this->db->where("nombre_proceso", 'Proceso reporte celulas hora');
   $this->db->limit(1);
       $resultados = $this->db->get("vt_ultimas_ejecuciones_hoy_final");
        if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
    }
    
      public function ProcesoSernacNaguilar()
{
        $this->db->select("*");
            $this->db->where("nombre_proceso", 'Proceso SernacNaguilar');
   $this->db->limit(1);
       $resultados = $this->db->get("vt_ultimas_ejecuciones_hoy_final");
        if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
    }
    
     public function ProcesoSolicitudesdia()
{
        $this->db->select("*");
            $this->db->where("nombre_proceso", 'Proceso Solicitudes dia');
   $this->db->limit(1);
       $resultados = $this->db->get("vt_ultimas_ejecuciones_hoy_final");
        if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
    }

    

    }