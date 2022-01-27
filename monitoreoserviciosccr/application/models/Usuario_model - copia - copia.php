<?php
class Test_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    public function cariOrang()
    {
        
        $db3 = $this->load->database('db3', TRUE);
        $cari = $this->input->GET('cari', TRUE);
        $data = $db3->query("SELECT * from tb_book where Name like '%$cari%' ");
        return $data->result();
    }
}