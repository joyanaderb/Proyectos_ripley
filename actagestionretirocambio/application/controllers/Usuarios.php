<?php
if (!defined('BASEPATH'))
   exit('No direct script access allowed');
class Usuarios extends CI_Controller {
   public function __construct() {
      parent::__construct();
   }
   public function iniciar_sesion() {
      $data = array();
        $data['error'] = $this->session->flashdata('error');
      $this->load->view('usuarios/iniciar_sesion', $data);
   }
   public function iniciar_sesion_post() {
      if ($this->input->post()) {
         $nombre = $this->input->post('nombre');
         $contrasena = $this->input->post('contrasena');
         $this->load->model('usuario_model');
         $usuario = $this->usuario_model->usuario_por_nombre_contrasena($nombre, $contrasena);
         if ($usuario) {
            $usuario_data = array(
               'id' => $usuario->id,
               'nombre' => $usuario->nombre,
                'correo' => $usuario->correo,
                'rut_completo' => $usuario->rut_completo,
                'nombre_servicio' =>$usuario->nombre_servicio,
                'horas' =>$usuario->horas,
                'fecha_ingreso' =>$usuario->fecha_ingreso,
                'sexo' =>$usuario->sexo,
                'fecha_nacimiento' =>$usuario->fecha_nacimiento,
                'estado' =>$usuario->estado,
                'user_auris' =>$usuario->user_auris,
                'anexo' =>$usuario->anexo,
               'logueado' => TRUE
            );
            $this->session->set_userdata($usuario_data);
            redirect('index.php/administradoractas');
         } else {
             $this->session->set_flashdata('error', 'El usuario o la contraseña son incorrectos.');
            redirect('index.php/usuarios/iniciar_sesion');
         }
      } else {
         $this->iniciar_sesion();
      }
   }
   public function logueado() {
      if($this->session->userdata('logueado')){
         $data = array();
         $data['nombre'] = $this->session->userdata('nombre');
         $this->load->view('usuarios/logueado', $data);
      }else{
         redirect('index.php/usuarios/iniciar_sesion');
      }
   }
   public function cerrar_sesion() {
      $usuario_data = array(
         'logueado' => FALSE
      );
       
        $this->load->helper('cookie');
delete_cookie('modal_sffddhdddodswn', '10.5.60.140', '/ayudaenlineaccr/index.php');        
      $this->session->set_userdata($usuario_data);
      redirect('index.php/usuarios/iniciar_sesion');
        $this->load->helper('cookie');
delete_cookie('modal_sffddhdddodswn', '$10.5.60.140', '/ayudaenlineaccr/index.php');         
   }
    
   
      

    
}