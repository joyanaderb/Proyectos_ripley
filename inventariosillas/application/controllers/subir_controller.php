<?php
class subir_controller extends CI_Controller {
   public function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }
     
   public function index(){
        $this->load->view('subir_view');
   }
    
     public function Documentos_cargados(){
         
          $this->load->model('Prestamos_model');
         
       $contenido_interno = array(
            
                
            'datos'      => $this->Prestamos_model->Documentos_cargados(),
        );


        $this->load->view('documentos_cargados', $contenido_interno);
        }
   
    
   public function subir(){
       
        $this->load->model('Prestamos_model');
       
        $rut  = $this->input->post("rut");
               $nombres  = $this->input->post("nombres");
       $nombreSuper  = $this->input->post("nombreSuper");
         $nombre_cargo  = $this->input->post("nombre_cargo");
       
       $data['rut']=$this->input->post('rut');
        $data['nombres']=$this->input->post('nombres');
        $data['nombreSuper']=$this->input->post('nombreSuper');
        $data['nombre_cargo']=$this->input->post('nombre_cargo');
       
       $response=$this->Prestamos_model->Doc_cargados($data);
       //Ruta donde se guardan los ficheros
        $config['upload_path'] = './uploads/';
        $config['file_name'] = $rut;
        
       //Tipos de ficheros permitidos
        $config['allowed_types'] = 'pdf';
         
       //Se pueden configurar aun mas parámetros.
       //Cargamos la librería de subida y le pasamos la configuración
        $this->load->library('upload', $config);
 
        if(!$this->upload->do_upload()){
            /*Si al subirse hay algún error lo meto en un array para pasárselo a la vista*/
                $error=array('error' => $this->upload->display_errors());
                $this->load->view('subir_view', $error);
        }else{
            //Datos del fichero subido
            $datos["img"]=$this->upload->data();
             
            // Podemos acceder a todas las propiedades del fichero subido
            // $datos["img"]["file_name"]);
 
            //Cargamos la vista y le pasamos los datos
            $this->load->view('subir_view', $datos);
        }
    }  
}
?>
