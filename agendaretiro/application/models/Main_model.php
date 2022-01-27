<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model {

    // Get cities
    function getCity(){

        $response = array();
        
        // Select record
        $db5 = $this->load->database('db5', TRUE);
        $db5->select('*');
        $q = $db5->get('city');
        $response = $q->result_array();

        return $response;
    }

    // Get City departments
    function getCityDepartment($postData){
        $response = array();
        
        // Select record
         $db5 = $this->load->database('db5', TRUE);
        $db5->select('id,depart_name');
        $db5->where('city', $postData['city']);
        $q = $db5->get('department');
        $response = $q->result_array();

        return $response;
    }

    // Get Department user
    function getDepartmentUsers($postData){
        $response = array();
        
        // Select record
        $db5 = $this->load->database('db5', TRUE);
        $db5->select('id,name,email');
        $db5->where('department', $postData['department']);
        $q = $db5->get('user_depart');
        $response = $q->result_array();

        return $response;
    }

}