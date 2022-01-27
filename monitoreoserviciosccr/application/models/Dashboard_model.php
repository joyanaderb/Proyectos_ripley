<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    
    
    
    public function getTraerTicket()
     
      {
       
         $this->db->limit(1);
         $this->db->select("Fecha_Hora");
        $this->db->where('GES - Nº Gestión','94636226');
         $resultados =  $this->db->get("TBL_HISTORIAL_ABIERTOS2");
          if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
    }


     public function getFechaHoraUltimaCarga()
     
      {
       
         $this->db->limit(1);
         $this->db->select("Fecha_Hora");
         $this->db->order_by('Fecha_Hora', 'DESC');
         $resultados =  $this->db->get("bitacora_cargas_masivas_formulario");
          if ($resultados->num_rows() > 0) {
            return $resultados->result();
        } else {
            return false;
        }
    }


    public function getTotalCasosCampanaFormularioRetail()
    {
        
   
             $this->db->select('*'); // OTHER CONDITIONS IF ANY
$this->db->from('informar_formulario_masivo'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
     public function getTotalCasosCampanaATCVIRTUAL()
    {
        
   
             $this->db->select('*'); // OTHER CONDITIONS IF ANY
$this->db->from('informar_virtual_masivo'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
     public function getTotalCampanaMERCADORIPLEY()
    {
        
   
             $this->db->select('*'); // OTHER CONDITIONS IF ANY
$this->db->from('informar_MKP_masivo'); //TABLE NAME
$contador1 = $this->db->count_all_results();
 
        

         
           $this->db->select('*'); // OTHER CONDITIONS IF ANY
$this->db->from('informar_mkp_form_masivo'); //TABLE NAME
$contador2 = $this->db->count_all_results();
         
       
 
    return $contador1+$contador2;
    }
    
    public function getTotalCasosCargaFormulario()
    {
        
   
             $this->db->select('*'); // OTHER CONDITIONS IF ANY
$this->db->from('vt_bitacora_formulario_actual'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
    
     public function getCFormularioCFRetailTotalSolicitud()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo3', 'Solicitud'); 
            $this->db->where('campana', 'FORMULARIO RETAIL'); // OTHER CONDITIONS IF ANY
$this->db->from('informar_formulario_masivo'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
   
   
     public function getCFormularioCFRetailsolicitudCambioProducto()
    {
        
   
             $this->db->select('*'); 
                $this->db->where('Motivo2', 'cambio de Producto');
         $this->db->where('Motivo1', 'cambio de Producto');
         $this->db->where('Motivo3', 'Solicitud'); 
            $this->db->where('campana', 'FORMULARIO RETAIL');// OTHER CONDITIONS IF ANY
$this->db->from('informar_formulario_masivo'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
     public function getCFormularioCFRetailCancelacionCompra()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo1', 'Cancelacion de mi compra');
         $this->db->where('Motivo3', 'Solicitud'); 
            $this->db->where('campana', 'FORMULARIO RETAIL');// OTHER CONDITIONS IF ANY
$this->db->from('informar_campana_formulario'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
    
       public function getCFormularioCFRetailCencelaciondemicomprasubcategoria()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo1', 'Cancelacion de mi compra');
        $this->db->where('Motivo2', 'Cancelacion de mi compra');
         $this->db->where('Motivo3', 'Solicitud'); 
            $this->db->where('campana', 'FORMULARIO RETAIL');// OTHER CONDITIONS IF ANY
$this->db->from('informar_campana_formulario'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
     public function getCFormularioCFRetailSolicitudDespacho()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo1', 'Despacho');
         $this->db->where('Motivo3', 'Solicitud'); 
            $this->db->where('campana', 'FORMULARIO RETAIL');/// OTHER CONDITIONS IF ANY
$this->db->from('informar_campana_formulario'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
    
     public function getCFormularioCFRetailSolicitudDespachoCobroSilverGold()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo1', 'Despacho');
         $this->db->where('Motivo3', 'Solicitud');
         $this->db->where('Motivo2', 'Autorizar a un tercero a retirar mi producto');
            $this->db->where('campana', 'FORMULARIO RETAIL');/// OTHER CONDITIONS IF ANY
$this->db->from('informar_campana_formulario'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
       public function getCFormularioCFRetailSolicitudGiftCard()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo1', 'Gift Card');
         $this->db->where('Motivo3', 'Solicitud');
            $this->db->where('campana', 'FORMULARIO RETAIL');/// OTHER CONDITIONS IF ANY
$this->db->from('informar_campana_formulario'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
       public function getCFormularioCFRetailSolicitudGiftCardExternerVigenciaGC()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo1', 'Gift Card');
         $this->db->where('Motivo3', 'Solicitud');
           $this->db->where('Motivo2', 'Extender vigencia Gift Card');
            $this->db->where('campana', 'FORMULARIO RETAIL');/// OTHER CONDITIONS IF ANY
$this->db->from('informar_campana_formulario'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
      public function getCFormularioCFRetailSolicitudCambioProductoprincipal()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo1', 'Cambio de producto');
         $this->db->where('Motivo3', 'Solicitud');
            $this->db->where('campana', 'FORMULARIO RETAIL');/// OTHER CONDITIONS IF ANY
$this->db->from('informar_formulario_masivo'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
          public function getCFormularioCFRetailSolicitudCambioProductoSubCategoria()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo1', 'Cambio de producto');
         $this->db->where('Motivo3', 'Solicitud');
               $this->db->where('Motivo2', 'Cambio de producto');
            $this->db->where('campana', 'FORMULARIO RETAIL');/// OTHER CONDITIONS IF ANY
$this->db->from('informar_formulario_masivo'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
     public function getCFormularioCFRetailSolicitudCancelaciondemiCompraPrincipal()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo1', 'Cancelacion de mi compra');
         $this->db->where('Motivo3', 'Solicitud');
            $this->db->where('campana', 'FORMULARIO RETAIL');/// OTHER CONDITIONS IF ANY
$this->db->from('informar_formulario_masivo'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
      public function getCFormularioCFRetailSolicitudCancelaciondemiCompraSubcategoria()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo1', 'Cancelacion de mi compra');
         $this->db->where('Motivo3', 'Solicitud');
               $this->db->where('Motivo2', 'Cancelacion de mi compra');
            $this->db->where('campana', 'FORMULARIO RETAIL');/// OTHER CONDITIONS IF ANY
$this->db->from('informar_formulario_masivo'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
          public function getCFormularioCFRetailSolicitudDespachoPrincipal()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo1', 'Despacho');
         $this->db->where('Motivo3', 'Solicitud');
            $this->db->where('campana', 'FORMULARIO RETAIL');/// OTHER CONDITIONS IF ANY
$this->db->from('informar_formulario_masivo'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
              public function getCFormularioCFRetailSolicitudDespachoAutorizarAunTeceroRetiroProducto()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo1', 'Despacho');
         $this->db->where('Motivo3', 'Solicitud');
                                 $this->db->where('Motivo2', 'Autorizar a un tercero a retirar mi producto');
            $this->db->where('campana', 'FORMULARIO RETAIL');/// OTHER CONDITIONS IF ANY
$this->db->from('informar_formulario_masivo'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
         public function getCFormularioCFRetailSolicitudDespachoCambiarDirecciondemiDespacho()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo1', 'Despacho');
         $this->db->where('Motivo3', 'Solicitud');
                                 $this->db->where('Motivo2', 'Cambiar direccion de mi despacho');
            $this->db->where('campana', 'FORMULARIO RETAIL');/// OTHER CONDITIONS IF ANY
$this->db->from('informar_formulario_masivo'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
             public function getCFormularioCFRetailSolicitudDespachoCobroDespachoSilverGold()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo1', 'Despacho');
         $this->db->where('Motivo3', 'Solicitud');
                                 $this->db->where('Motivo2', 'Cobro despacho Silver/Gold');
            $this->db->where('campana', 'FORMULARIO RETAIL');/// OTHER CONDITIONS IF ANY
$this->db->from('informar_formulario_masivo'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
                 public function getCATCvirtualtotalReclamos()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo3', 'Reclamo');
            $this->db->where('campana', 'ATC VIRTUAL CCR');/// OTHER CONDITIONS IF ANY
$this->db->from('informar_virtual_masivo'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
                  public function getCATCvirtualtotalReclamosDespachoPrincipal()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo3', 'Reclamo');
                      $this->db->where('Motivo1', 'Despacho');
            $this->db->where('campana', 'ATC VIRTUAL CCR');/// OTHER CONDITIONS IF ANY
$this->db->from('informar_virtual_masivo'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
      public function getCATCvirtualtotalReclamosDespachoDesconocimientoSubcat()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo3', 'Reclamo');
                      $this->db->where('Motivo1', 'Despacho');
            $this->db->where('campana', 'ATC VIRTUAL CCR');/// OTHER CONDITIONS IF ANY
          $this->db->where('Motivo2', 'Desconocimiento');
$this->db->from('informar_virtual_masivo'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
      public function getCATCvirtualtotalReclamosDespachoDespachoRetrasadoCat()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo3', 'Reclamo');
                      $this->db->where('Motivo1', 'Despacho');
            $this->db->where('campana', 'ATC VIRTUAL CCR');/// OTHER CONDITIONS IF ANY
          $this->db->where('Motivo2', 'Despacho retrasado');
$this->db->from('informar_virtual_masivo'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
      public function getCATCvirtualtotalReclamosPostVenta()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo3', 'Reclamo');
                      $this->db->where('Motivo1', 'Post-Venta');
            $this->db->where('campana', 'ATC VIRTUAL CCR');/// OTHER CONDITIONS IF ANY
$this->db->from('informar_virtual_masivo'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
       public function getCATCvirtualtotalReclamosPostVentaEntregaConFaltante()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo3', 'Reclamo');
                      $this->db->where('Motivo1', 'Post-Venta');
            $this->db->where('campana', 'ATC VIRTUAL CCR');/// OTHER CONDITIONS IF ANY
                     $this->db->where('Motivo2', 'Entrega con faltante');
$this->db->from('informar_virtual_masivo'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
    
      public function getCATCvirtualtotalReclamosPostVentaEntregaErronea()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo3', 'Reclamo');
                      $this->db->where('Motivo1', 'Post-Venta');
            $this->db->where('campana', 'ATC VIRTUAL CCR');/// OTHER CONDITIONS IF ANY
                     $this->db->where('Motivo2', 'Entrega Erronea');
$this->db->from('informar_virtual_masivo'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
     public function getCATCvirtualtotalReclamosPostVentaProductoDanado()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo3', 'Reclamo');
                      $this->db->where('Motivo1', 'Post-Venta');
            $this->db->where('campana', 'ATC VIRTUAL CCR');/// OTHER CONDITIONS IF ANY
                     $this->db->where('Motivo2', 'Producto Dañado');
$this->db->from('informar_virtual_masivo'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
         public function getCATCvirtualtotalReclamosPostVentaProductoFallado()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo3', 'Reclamo');
                      $this->db->where('Motivo1', 'Post-Venta');
            $this->db->where('campana', 'ATC VIRTUAL CCR');/// OTHER CONDITIONS IF ANY
                     $this->db->where('Motivo2', 'Producto Fallado');
$this->db->from('informar_virtual_masivo'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
     public function getCATCvirtualtotalReclamosGiftcardTRE()
    {
        
   
             $this->db->select('*'); 
         $this->db->where('Motivo3', 'Reclamo');
                      $this->db->where('Motivo1', 'GiftCard/TRE');
            $this->db->where('campana', 'ATC VIRTUAL CCR');/// OTHER CONDITIONS IF ANY
$this->db->from('informar_virtual_masivo'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
     public function getCFormularioCFRetailSolicitudErrorComprasEnRipleycom()
    {
        
   
             $this->db->select('*'); 
               $this->db->where('Motivo2', 'Error de pagina');
            $this->db->where('campana', 'FORMULARIO RETAIL');/// OTHER CONDITIONS IF ANY
$this->db->from('informar_campana_formulario'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
       public function getCFormularioCFRetailTotalCasosFormularioRetail()
    {
        
   
             $this->db->select('*'); 
            $this->db->where('campana', 'FORMULARIO RETAIL');/// OTHER CONDITIONS IF ANY
$this->db->from('informar_campana_formulario'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }
    
    //CAMPAÑA FORMULARIO RETAIL - MERCADO RIPLEY
          public function getCMercadoRipleyTotalSolicitud()
    {
        
   
             $this->db->select('*'); 
            $this->db->where('campana', 'MERCADO RIPLEY');
                       $this->db->where('Motivo3', 'Solicitud');
/// OTHER CONDITIONS IF ANY
$this->db->from('informar_campana_formulario'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    } 
    
      public function getCMercadoRipleySolicitudArrepentimientoCompra()
    {
        
   
             $this->db->select('*'); 
            $this->db->where('campana', 'MERCADO RIPLEY');
                   $this->db->where('Motivo2', 'Arrepentimiento de Compra');
                       $this->db->where('Motivo3', 'Solicitud');
/// OTHER CONDITIONS IF ANY
$this->db->from('informar_campana_formulario'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    } 
    
    
      public function getCMercadoRipleySolicitudArrepentimientoCompraPostVenta()
    {
        
   
             $this->db->select('*'); 
            $this->db->where('campana', 'MERCADO RIPLEY');
                   $this->db->where('Motivo2', 'Arrepentimiento de Compra');
          $this->db->where('Motivo1', 'Post-Venta');
                       $this->db->where('Motivo3', 'Solicitud');
/// OTHER CONDITIONS IF ANY
$this->db->from('informar_campana_formulario'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    } 
    
   public function getCMercadoRipleyTotal()
    {
        
   
             $this->db->select('*'); 
            $this->db->where('campana', 'MERCADO RIPLEY');
/// OTHER CONDITIONS IF ANY
$this->db->from('informar_campana_formulario'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    } 
    
    
    
    
    //CASOS FORMULARIO CAMPAÑA ATC VIRTUAL CCR
    
     public function getCFormularioTotalReclamos()
    {
        
   
             $this->db->select('*'); 
            $this->db->where('Motivo3', 'Reclamo');
 $this->db->where('campana', 'ATC VIRTUAL CCR');
/// OTHER CONDITIONS IF ANY
$this->db->from('informar_sss'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    } 
    
    public function getCFormularioTotalReclamosDespacho()
    {
        
   
             $this->db->select('*'); 
            $this->db->where('Motivo3', 'Reclamo');
        $this->db->where('Motivo1', 'Despacho');
 $this->db->where('campana', 'ATC VIRTUAL CCR');
/// OTHER CONDITIONS IF ANY
$this->db->from('vt_bitacora_formulario_actual'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    } 
    
       public function getCFormularioTotalReclamosDespachoDesconocimiento()
    {
        
   
             $this->db->select('*'); 
            $this->db->where('Motivo3', 'Reclamo');
        $this->db->where('Motivo1', 'Despacho');
            $this->db->where('Motivo2', 'Desconocimiento');
 $this->db->where('campana', 'ATC VIRTUAL CCR');
/// OTHER CONDITIONS IF ANY
$this->db->from('vt_bitacora_formulario_actual'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    } 
    
           public function getCFormularioTotalReclamosDespachoDespachoRetrasado()
    {
        
   
             $this->db->select('*'); 
            $this->db->where('Motivo3', 'Reclamo');
        $this->db->where('Motivo1', 'Despacho');
            $this->db->where('Motivo2', 'Despacho Retrasado');
 $this->db->where('campana', 'ATC VIRTUAL CCR');
/// OTHER CONDITIONS IF ANY
$this->db->from('vt_bitacora_formulario_actual'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    } 
    
     
    
         public function getCFormularioTotalReclamosPostVenta()
    {
        
   
             $this->db->select('*'); 
            $this->db->where('Motivo3', 'Reclamo');
        $this->db->where('Motivo1', 'Post-Venta');
 $this->db->where('campana', 'ATC VIRTUAL CCR');
/// OTHER CONDITIONS IF ANY
$this->db->from('vt_bitacora_formulario_actual'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    } 
    
         public function getCFormularioTotalReclamosPostVentaEntregaconFaltante()
    {
        
   
             $this->db->select('*'); 
            $this->db->where('Motivo3', 'Reclamo');
        $this->db->where('Motivo1', 'Post-Venta');
             $this->db->where('Motivo2', 'Entrega con faltante');
 $this->db->where('campana', 'ATC VIRTUAL CCR');
/// OTHER CONDITIONS IF ANY
$this->db->from('vt_bitacora_formulario_actual'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    } 
    
     public function getCFormularioTotalReclamosPostVentaEntregaErronea()
    {
        
   
             $this->db->select('*'); 
            $this->db->where('Motivo3', 'Reclamo');
        $this->db->where('Motivo1', 'Post-Venta');
             $this->db->where('Motivo2', 'Entrega Erronea');
 $this->db->where('campana', 'ATC VIRTUAL CCR');
/// OTHER CONDITIONS IF ANY
$this->db->from('vt_bitacora_formulario_actual'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    } 
    
      public function getCFormularioTotalReclamosPostVentaProductoDanado()
    {
        
   
             $this->db->select('*'); 
            $this->db->where('Motivo3', 'Reclamo');
        $this->db->where('Motivo1', 'Post-Venta');
             $this->db->where('Motivo2', 'Producto Dañado');
 $this->db->where('campana', 'ATC VIRTUAL CCR');
/// OTHER CONDITIONS IF ANY
$this->db->from('vt_bitacora_formulario_actual'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    } 
    
       public function getCFormularioTotalReclamosPostVentaProductoFallado()
    {
        
   
             $this->db->select('*'); 
            $this->db->where('Motivo3', 'Reclamo');
        $this->db->where('Motivo1', 'Post-Venta');
             $this->db->where('Motivo2', 'Producto Fallado');
 $this->db->where('campana', 'ATC VIRTUAL CCR');
/// OTHER CONDITIONS IF ANY
$this->db->from('vt_bitacora_formulario_actual'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    } 
    
 
        //CASOS FORMULARIO CAMPAÑA MERCADO RIPLEY
    
    public function getCFormularioMercadoRipleyTotalReclamos()
    {
        
   
             $this->db->select('*'); 
            $this->db->where('Motivo3', 'Reclamo');
 $this->db->where('campana', 'MERCADO RIPLEY');
/// OTHER CONDITIONS IF ANY
$this->db->from('vt_bitacora_formulario_actual'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    }   
    
     public function getCFormularioMercadoRipleyReclamoDespachoRetrasado()
    {
        
   
             $this->db->select('*'); 
            $this->db->where('Motivo3', 'Reclamo');
 $this->db->where('campana', 'MERCADO RIPLEY');
$this->db->where('Motivo1', 'Despacho');
    $this->db->where('Motivo2', 'Despacho Retrasado');


/// OTHER CONDITIONS IF ANY
$this->db->from('vt_bitacora_formulario_actual'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    } 
    
        public function getCFormularioMercadoRipleyReclamoPostVenta()
    {
        
   
             $this->db->select('*'); 
            $this->db->where('Motivo3', 'Reclamo');
 $this->db->where('campana', 'MERCADO RIPLEY');
$this->db->where('Motivo1', 'Post-Venta');
  


/// OTHER CONDITIONS IF ANY
$this->db->from('vt_bitacora_formulario_actual'); //TABLE NAME
$contador = $this->db->count_all_results();
 
    return $contador;
    } 

    }


 