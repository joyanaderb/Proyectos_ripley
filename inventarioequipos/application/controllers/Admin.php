<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function index(){ 
        $this->load->view('subir_fichero');
   }
    
    

    function formulario() {

     $this->load->view('formulario');
        $this->guardar_archivo();
    }
    
    private function guardar_archivo(){
        
           $mi_imagen = 'upload';
    $config['upload_path'] = "uploads/";
    $config['file_name'] = "nombre_archivo";
    $config['allowed_types'] = "pdf";
    $config['max_size'] = "50000";
    $config['max_width'] = "2000";
    $config['max_height'] = "2000";

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload($mi_imagen)) {
        //*** ocurrio un error
        $data['uploadError'] = $this->upload->display_errors();
        return;
    }

    $data['uploadSuccess'] = $this->upload->data();
    }
    
    
    public function store()
    {
        $idLibro     = $this->input->post("idLibro");
        $idLector    = $this->input->post("idLector");
        $fecprestamo = $this->input->post("fecprestamo");
        $nombres = $this->input->post("nombres");
        $nombre_cargo = $this->input->post("nombre_cargo");
         $nombreSuper = $this->input->post("nombreSuper");
         $region = $this->input->post("region");
         $titulo_libro = $this->input->post("titulo_libro");
        $autor_libro = $this->input->post("autor_libro");
         $isbn_libro = $this->input->post("isbn_libro");
         $subtitulo_libro = $this->input->post("subtitulo_libro");
        $editorial_libro = $this->input->post("editorial_libro");
        $prestamoAudifono = $this->input->post("prestamoAudifono");
        $infolibro   = $this->Libros_model->getLibro($idLibro);
        $datos       = array(
            "id_libro"        => $idLibro,
            "id_lector"       => $idLector,
            "fechaprestamo"   => $fecprestamo,
            "prestamoAudifono"   => $prestamoAudifono,
            "estado_prestamo" => 0
        );
        if ($this->Prestamos_model->guardar($datos)) {
            $dataLibro = array(
                'prestados_libro' => $infolibro->prestados_libro = 1,
            );
            $dataLector = array(
                'estado' => 0,
                
            );
            $this->Lectores_model->update($idLector, $dataLector);
            $this->Libros_model->update($idLibro, $dataLibro);
            //$this->session->set_flashdata("msg_success","La categoria ".$nombre." ha sido registrado");
            
            
  $planet = $this->input->post('nombres');
            $nombre_cargo = $this->input->post('nombre_cargo');
            $nombreSuper = $this->input->post('nombreSuper');
             $region = $this->input->post('region');
             $titulo_libro = $this->input->post('titulo_libro');
            $isbn_libro = $this->input->post('isbn_libro');
            $subtitulo_libro = $this->input->post('subtitulo_libro');
        
         $data = array('planet' => $planet, 'nombre_cargo' => $nombre_cargo, 'nombreSuper' => $nombreSuper, 'region' => $region, 'titulo_libro' => $titulo_libro, 'autor_libro' => $autor_libro, 'isbn_libro' => $isbn_libro, 'subtitulo_libro' => $subtitulo_libro, 'editorial_libro' => $editorial_libro);
$this->load->view('backend/prestamos/actaasignacion', $data);
            
        } else {
            //$this->session->set_flashdata("msg_error","La categoria ".$name." no pudo registrarse");
            redirect(base_url() . "backend/facultades/add");
        }
        
       
    }
        
    
}