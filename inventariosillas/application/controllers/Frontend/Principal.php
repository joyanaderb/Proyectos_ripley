<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Principal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Libros_model");
     
    }

    public function index()
    {

        $data = array(
            'title' => "Sistema de biblioteca",
        );
        $this->load->view('backend/login', $data);
    }

    
}
