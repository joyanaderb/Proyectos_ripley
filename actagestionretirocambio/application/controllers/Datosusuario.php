<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datosusuario extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	


    public function __construct(){
		parent::__construct();
		$this->load->model("Cumpleanoscolaboradores_model");
        
        if (!$this->session->userdata("logueado")) {
            redirect(base_url() . "index.php/usuarios/iniciar_sesion");
        }
	}

    public function index()
    {

        $contenido_interno = array(
            'cumpleanoscolaboradores' => $this->Cumpleanoscolaboradores_model->getCumpleanosColaboradores(),
             'prestamos' => $this->Cumpleanoscolaboradores_model->getPrestamos(),
        );

        $contenido_exterior = array(
            'title'     => 'datosusuario',
            'contenido' => $this->load->view('datosusuario', $contenido_interno, true),
        );

        $this->load->view('', $contenido_exterior);
    }
    
 public function all()
    {
        $contenido_interno = array(
            'prestamos' => $this->Prestamos_model->getPrestamos(),
        );

        $contenido_exterior = array(
            'title'     => 'Todos los Prestamos ',
            'contenido' => $this->load->view('backend/prestamos/all', $contenido_interno, true),
        );

        $this->load->view('backend/template', $contenido_exterior);

    }
    
    
   public function savedata()
	{
		/*load registration view form*/
	
	
		/*Check submit button */
		if($this->input->post('save'))
		{
		    $data['nombre']=$this->input->post('nombre');
			$data['rut_completo']=$this->input->post('rut_completo');
			$data['nombre_servicio']=$this->input->post('nombre_servicio');
			$response=$this->Cumpleanoscolaboradores_model->saverecords($data);
			if($response==true){
			   $this->load->view('recepcionrecibida');
                            $this->enviarCorreo();

                
			}
			else{
					echo "Insert error !";
			}
		}
        
  
        
	

        
        
	}


   
    
  
   public function enviarCorreo(){
          $atch= $this->session->userdata("rut_completo"); 
    $correo = $this->session->userdata("correo");

      /*
       * Cuando cargamos una librería
       * es similar a hacer en PHP puro esto:
       * require_once("libreria.php");
       * $lib=new Libreria();
       */
        
            $config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'j.oyanaderbascur@gmail.com',
    'smtp_pass' => 'ignacio01.',
    'mailtype'  => 'html', 
    'charset'   => 'iso-8859-1'
);
$this->load->library('email', $config);
$this->email->set_newline("\r\n");

        
      //Establecemos esta configuración
        $this->email->initialize($config);
 
      //Ponemos la dirección de correo que enviará el email y un nombre
     $fromemail="g-turnosretail@ripley.com";
$subject = $this->session->userdata("nombre");
$data=array();
       
      //Establecemos esta configuración
        $this->email->initialize($config);
$mesg = $this->load->view('templatecorreoturnos','',true);


$config=array(
'charset'=>'utf-8',
'wordwrap'=> TRUE,
'mailtype' => 'html'
);

$this->email->initialize($config);


$this->email->to("sgranadosc@ripley.com, $correo");
$this->email->from($fromemail, "Confirmación de recepción de turnos recibida");
$this->email->subject($subject);
$this->email->message($mesg);
$this->email->attach("assets/img/download/turnosejecutivos/$atch.pdf"); 
$mail = $this->email->send();

   
    }
    
}