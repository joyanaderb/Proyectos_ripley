<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Search_model extends CI_Model {

    public function get_results($search_term='default')
    {
        // Use the Active Record class for safer queries.
        $db3 = $this->load->database('db3', TRUE);
        $db3->select('*');
        $db3->from('tb_book');
        $db3->like('title_book',$search_term);

        // Execute the query.
        $query = $db3->get();

        // Return the results.
        return $query->result_array();
    }

}
    