<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prestamos extends CI_Controller
{

    private $permisos;
	public function __construct(){
		parent::__construct();
		$this->permisos = $this->backend_lib->control();
        $this->load->model("Prestamos_model");
        $this->load->model("Libros_model");
        $this->load->model("Lectores_model");
        if (!$this->session->userdata("login")) {
            redirect(base_url() . "cpanel");
        }
    }
    public function index()
    {
        redirect(base_url() . "backend/prestamos/all");
    }

    public function pending()
    {
        $contenido_interno = array(
            'permisos' => $this->permisos,
            'prestamos' => $this->Prestamos_model->getPrestamos(),
        );

        $contenido_exterior = array(
            'permisos' => $this->permisos,
            'title'     => 'Prestamos Pendientes',
            'contenido' => $this->load->view('backend/prestamos/pending', $contenido_interno, true),
             //print_r($contenido_interno),
        );

        $this->load->view('backend/template', $contenido_exterior);

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

    public function add()
    {
        $contenido_interno = array(
            'permisos' => $this->permisos,
            'libros' => $this->Libros_model->getLibros(),
        );
        $contenido_exterior = array(
           'permisos' => $this->permisos,
            'title'     => 'Agregar Prestamos',
            'contenido' => $this->load->view('backend/prestamos/add', $contenido_interno, true),
        );

        $this->load->view('backend/template', $contenido_exterior);
    }
    
      public function ActaAsignacion()
    {
          
        
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
         $rut_completo = $this->input->post("rut_completo");
         $direccion = $this->input->post("direccion");
        $ceco = $this->input->post("ceco");
        $infolibro   = $this->Libros_model->getLibro($idLibro);
        $datos       = array(
            "id_libro"        => $idLibro,
            "id_lector"       => $idLector,
            "fechaprestamo"   => $fecprestamo,
            "estado_prestamo" => 0
        );
        if ($this->Prestamos_model->guardar($datos)) {
            $dataLibro = array(
                'prestados_libro' => $infolibro->prestados_libro + 1,
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
            $rut_completo = $this->input->post('rut_completo');
            $direccion = $this->input->post('direccion');
             $ceco = $this->input->post('ceco');
            
         $data = array('planet' => $planet, 'nombre_cargo' => $nombre_cargo, 'nombreSuper' => $nombreSuper, 'region' => $region, 'titulo_libro' => $titulo_libro, 'autor_libro' => $autor_libro, 'isbn_libro' => $isbn_libro, 'subtitulo_libro' => $subtitulo_libro, 'editorial_libro' => $editorial_libro, 'rut_completo' => $rut_completo, 'direccion' => $direccion, 'ceco' => $ceco);
$this->load->view('backend/prestamos/actaasignacion', $data);
            
        } else {
            //$this->session->set_flashdata("msg_error","La categoria ".$name." no pudo registrarse");
            redirect(base_url() . "backend/facultades/add");
        }
        
       
    }
    
     public function store2()
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
         $rut_completo = $this->input->post("rut_completo");
         $direccion = $this->input->post("direccion");
        $ceco = $this->input->post("ceco");
        $infolibro   = $this->Libros_model->getLibro($idLibro);
        
        
            //$this->session->set_flashdata("msg_success","La categoria ".$nombre." ha sido registrado");
            
            
  $planet = $this->input->post('nombres');
            $nombre_cargo = $this->input->post('nombre_cargo');
            $nombreSuper = $this->input->post('nombreSuper');
             $region = $this->input->post('region');
             $titulo_libro = $this->input->post('titulo_libro');
            $isbn_libro = $this->input->post('isbn_libro');
            $subtitulo_libro = $this->input->post('subtitulo_libro');
            $rut_completo = $this->input->post('rut_completo');
            $direccion = $this->input->post('direccion');
             $ceco = $this->input->post('ceco');
            
         $data = array('planet' => $planet, 'nombre_cargo' => $nombre_cargo, 'nombreSuper' => $nombreSuper, 'region' => $region, 'titulo_libro' => $titulo_libro, 'autor_libro' => $autor_libro, 'isbn_libro' => $isbn_libro, 'subtitulo_libro' => $subtitulo_libro, 'editorial_libro' => $editorial_libro, 'rut_completo' => $rut_completo, 'direccion' => $direccion, 'ceco' => $ceco);
$this->load->view('backend/prestamos/actaasignacion', $data);
            
       
        
       
    }

    public function update($idprestamo)
    {
        date_default_timezone_set('America/Lima');
        $res       = $this->Prestamos_model->getPrestamo($idprestamo);
        $infolibro = $this->Libros_model->getLibro($res->id_libro);

        $dataPrestamo = array(
            'fechadevolucion' => date('d/m/Y'),
            'estado_prestamo' => 1,
        );
        if ($this->Prestamos_model->update($idprestamo, $dataPrestamo)) {
            $dataLibro = array(
                'prestados_libro' => $infolibro->prestados_libro = 0,
            );
            $dataLector = array(
                'estado' => 1,
            );

            if ($this->Libros_model->update($res->id_libro, $dataLibro) && $this->Lectores_model->update($res->id_lector, $dataLector)) {
                //$this->session->set_flashdata("msg_success","La informacion de la categoria  ".$name." se actualizo correctamente");
                redirect(base_url() . "backend/prestamos");
            } else {
                //$this->session->set_flashdata("msg_error","La informacion de la categoria ".$name." no pudo actualizarse");
                redirect(base_url() . "backend/prestamos");
            }
        } else {
            redirect(base_url() . "backend/prestamos");
        }

    }
    
    //DESDE ACÁ ABAJO ES SOLO TESTEO DE CONFIGURACIONES
    
    function testpdf()
	{



		$this->load->library('pdf');
        
		  

   

           

    
	
   
        		$dompdf = new PDF();
$html = "<style>@page {
			    margin-top: 0.5cm;
			    margin-bottom: 0.5cm;
			    margin-left: 0.5cm;
			    margin-right: 0.5cm;
			}
			</style>".
        "<body>
        	
<p>DOCUMENTO DE ENTREGA DE EQUIPAMIENTO.</p>



        </body>";

    $dompdf->loadHtml($html);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');

    // Render the HTML as PDF
    $dompdf->render();
    $time = time();

    // Output the generated PDF to Browser
    $dompdf->stream("welcome-". $time);
	
}
    
    
       function formulario() {

     $this->load->view('formulario');
        $this->guardar_archivo();
    }
    
    private function guardar_archivo(){
        
        
        $rut  = $this->input->post("rut");
        
           $mi_imagen = 'upload';
    $config['upload_path'] = "uploads/";
    $config['file_name'] = $rut;
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
}
