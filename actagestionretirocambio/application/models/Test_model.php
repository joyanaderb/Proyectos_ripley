<?php
class Test_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    public function cariOrang()
    {
        
        $cari = $this->input->GET('cari', TRUE);
        $data = $this->db->query("select * from dbo.actagestion where numerogestion like '%$cari%'");
        return $data->result();
    }
}

