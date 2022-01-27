<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos extends CI_Controller {

		private $permisoss;
	public function __construct(){
		parent::__construct();
		$this->permisoss = $this->backend_lib->control();
		$this->load->model("Permisos_model");
		$this->load->model("Usuarios_model");
	}

	
       
          public function index()
    {

        $contenido_interno = array(
            'permisos' => $this->Permisos_model->getPermisos(), 
          
        );

        $contenido_exterior = array(

            'title'     => 'Permisos',
            'contenido' => $this->load->view('admin/permisos/list', $contenido_interno, true),
        );

        $this->load->view('backend/template', $contenido_exterior);
    }

    
	public function add(){
		$data  = array(
			'roles' => $this->Usuarios_model->getRoles(), 
			'menus' => $this->Permisos_model->getMenus(), 
		);
		$this->load->view("backend/template");
		$this->load->view("admin/permisos/add",$data);
	}

	public function store(){
		$menu = $this->input->post("menu");
		$rol = $this->input->post("rol");
		$insert = $this->input->post("insert");
		$read = $this->input->post("read");
		$update = $this->input->post("update");
		$delete = $this->input->post("delete");

		$data = array(
			"menu_id" => $menu,
			"rol_id" => $rol,
			"read" => $read,
			"insert" => $insert,
			"update" => $update,
			"delete" => $delete,
		);

		if ($this->Permisos_model->save($data)) {
			redirect(base_url()."backend/permisos");
		}else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."backend/permisos/add");
		}
		
	}

	public function edit($id){
		$data  = array(
			'roles' => $this->Usuarios_model->getRoles(), 
			'menus' => $this->Permisos_model->getMenus(), 
			'permiso' => $this->Permisos_model->getPermiso($id)
		);
     	$this->load->view("backend/template");

		$this->load->view("admin/permisos/edit",$data);
	}

	public function update(){
		$idpermiso = $this->input->post("idpermiso");
		$menu = $this->input->post("menu");
		$rol = $this->input->post("rol");
		$insert = $this->input->post("insert");
		$read = $this->input->post("read");
		$update = $this->input->post("update");
		$delete = $this->input->post("delete");

		$data = array(
			"read" => $read,
			"insert" => $insert,
			"update" => $update,
			"delete" => $delete,
		);

		if ($this->Permisos_model->update($idpermiso,$data)) {
			redirect(base_url()."backend/permisos");
		}else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."backend/permisos/edit/".$idpermiso);
		}
	}

	public function delete($id){
		$this->Permisos_model->delete($id);
		redirect(base_url()."backend/permisos");
	}
}