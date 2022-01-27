<?php
defined('BASEPATH') or exit('No direct script access allowed');


   
class Usuario_model extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }
   public function usuario_por_nombre_contrasena($nombre, $contrasena){
       $db3 = $this->load->database('db3', TRUE);
      $db3->select('id, correo, contrasena, nombre, rut_completo, nombre_servicio, horas, fecha_ingreso, sexo, estado, user_auris, anexo, fecha_nacimiento');
      $db3->from('dotacion');
      $db3->where('correo', $nombre);
      $db3->where('contrasena', $contrasena);
      $consulta = $db3->get();
      $resultado = $consulta->row();
      return $resultado;
   }
    
    
}
    
    

    
    