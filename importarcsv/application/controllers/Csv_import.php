<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Csv_import extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('csv_import_model');
		$this->load->library('csvimport');
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
        
        
        
		 <h3 align="center">últimos casos marcados</h3>
        <div class="table-responsive">
        	<table id="data" class="table table-bordered table-striped">
        		<tr>
        			<th>id</th>
        			<th>Rut</th>
        			<th>Nombre</th>
        			<th>Telefono</th>
        			<th>Correo</th>
                    <th>OC</th>
        			<th>fecha ingreso</th>
        			<th>hora ingreso</th>
                    <th>comentario</th>
                    <th>clasificacion</th>
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
					<td>'.$row->nombre_cliente.'</td>
                    <td>'.$row->rut.'</td>
					<td>'.$row->telefono.'</td>
					<td>'.$row->correo.'</td>
                    <td>'.$row->OC.'</td>
					<td>'.$row->fecha_ingreso.'</td>
					<td>'.$row->hora_ingreso.'</td>
					<td>'.$row->comentario.'</td>
                    <td>'.$row->clasificacion.'</td>
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
                'id'		=>	$row["id"],
        		'nombre_cliente'		=>	$row["nombre_cliente"],
                'rut'		=>	$row["rut"],
        		'telefono'			=>	$row["telefono"],
        		'correo'			=>	$row["correo"],
                'OC'	=>	$row["OC"],
        		'fecha_ingreso'		=>	$row["fecha_ingreso"],
        		'hora_ingreso'			=>	$row["hora_ingreso"],
        		'comentario'			=>	$row["comentario"],
                'clasificacion'			=>	$row["clasificacion"],
			);
            
            $data2[] = array(
                'id'		=>	$row["id"],
        		'nombre_cli'		=>	$row["nombre_cliente"],
                'rut'		=>	$row["rut"],
        		'telefono'			=>	$row["telefono"],
        		'correo'			=>	$row["correo"],
                'OC'	=>	$row["OC"],
        		'fecha_ingreso'		=>	$row["fecha_ingreso"],
        		'hora_ingreso'			=>	$row["hora_ingreso"],
        		'comentario'			=>	$row["comentario"],
                'clasificacion'			=>	$row["clasificacion"],
			);
		}
    
		$this->csv_import_model->insert($data);
        		$this->csv_import_model->insertMail($data2);
         $this->csv_import_model->MarcarCasos();
               $this->csv_import_model->MarcarCasos2();
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
        			<th>Telefono</th>
        			<th>Correo</th>
                    <th>OC</th>
        			<th>fecha ingreso</th>
        			<th>hora ingreso</th>
                    <th>comentario</th>
                    <th>clasificacion</th>
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
