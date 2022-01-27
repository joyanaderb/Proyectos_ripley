<?php
defined('BASEPATH') or exit('No direct script access allowed');


   
class Usuario_model extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }
   public function usuario_por_nombre_contrasena($nombre, $contrasena){
       $db2 = $this->load->database('db2', TRUE);
      $db2->select('id, correo, contrasena, nombre, rut_completo, nombre_servicio, horas, fecha_ingreso, sexo, estado, user_auris, anexo, fecha_nacimiento');
      $db2->from('dotacion');
      $db2->where('correo', $nombre);
      $db2->where('contrasena', $contrasena);
      $consulta = $db2->get();
      $resultado = $consulta->row();
      return $resultado;
   }
    
    
}
    
    

    
    