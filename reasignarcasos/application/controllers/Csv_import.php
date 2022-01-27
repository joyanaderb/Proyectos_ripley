<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Csv_import extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('csv_import_model');
		$this->load->library('csvimport');
        
         if (!$this->session->userdata("logueado")) {
            redirect(base_url() . "index.php/usuarios/iniciar_sesion");
        }
	}

	function index()
	{
        
         $contenido_interno = array(
           
            'casosamarcar' => $this->csv_import_model->getCasosamarcar(),
             'resultadocargado'  => $this->csv_import_model->select2(),


        );
        
		$this->load->view('revision_casos_ccr',$contenido_interno);
	}
    
    
    function casosamarcarvista()
	{
        
         $contenido_interno = array(
           
            'casosamarcar' => $this->csv_import_model->getCasosamarcar(),
             'resultado'  => $this->csv_import_model->mostrarcasosamarcar(),
                          



        );
        
		$this->load->view('casosamarcar',$contenido_interno);
	}
    
    

	function load_data()
	{
		$result = $this->csv_import_model->select();
		$output = '
        
        
        
		 <h3 align="center">últimos ticket reasignados</h3>
        <div class="table-responsive">
        	<table id="data" class="table table-bordered table-striped">
        		<tr>
        			<th>id</th>
        			<th>Rut</th>
        			<th>Nombre</th>
        
        		</tr>
		';
		$count = 0;
		if($result->num_rows() > 0)
		{
			foreach($result->result() as $row)
			{
				$count = $count + 1;
				$output .= '
				<tr>
					<td>'.$row->Nticket.'</td>
					<td>'.$row->nuevo_usuario.'</td>
					</tr>
				';
			}
		}
		else
		{
			$output .= '
			<tr>
	    		<td colspan="10" align="center">Sin datos</td>
	    	</tr>
			';
		}
		$output .= '</table></div>';
		echo $output;
	}

	function import()
	{
		$file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
		foreach($file_data as $row)
		{
			$data[] = array(
                'Nticket'		=>	$row["Nticket"],
        		'nuevo_usuario'		=>	$row["nuevo_usuario"], 
                'Supervisor' => $this->session->userdata("nombre"),
                
			);
            
            $data2[] = array(
                'Nticket'		=>	$row["Nticket"],
        		'nuevo_usuario'		=>	$row["nuevo_usuario"],  
                'Supervisor' => $this->session->userdata("nombre"),
                'Fecha' => date('Y-m-d H:m:s'),

			);
		}
    
		$this->csv_import_model->insert($data);
        $this->csv_import_model->insert_historico($data);
        		//$this->csv_import_model->insertMail($data2);
        $this->csv_import_model->MarcarCasos();
             //  $this->csv_import_model->MarcarCasos2();
redirect('csv_import/index');
        
	}
    
    function load_vistacasosacargar()
	{
		$result = $this->csv_import_model->mostrarcasosamarcar();
		$output = '
		 <h3 align="center">últimos casos marcados</h3>
        <div class="table-responsive">
        	<table class="table table-bordered table-striped">
        		<tr>
        			<th>id</th>
        			<th>Rut</th>
        			<th>Nombre</th>
        		
        		</tr>
		';
		$count = 0;
		if($result->num_rows() > 0)
		{
			foreach($result->result() as $row)
			{
				$count = $count + 1;
				$output .= '
				<tr>
					<td>'.$row->id.'</td>
					<td>'.$row->nombre_cli.'</td>
                    <td>'.$row->rut.'</td>
					<td>'.$row->telefono.'</td>
					<td>'.$row->correo.'</td>
                    <td>'.$row->oc.'</td>
					<td>'.$row->fecha_ingreso.'</td>
					<td>'.$row->hora_ingreso.'</td>
					<td>'.$row->comentario.'</td>
					</tr>
				';
			}
		}
		else
		{
			$output .= '
			<tr>
	    		<td colspan="10" align="center">Sin datos</td>
	    	</tr>
			';
		}
		$output .= '</table></div>';
		echo $output;
	}


}
