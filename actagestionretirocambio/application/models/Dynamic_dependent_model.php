
<?php
class Dynamic_dependent_model extends CI_Model
{
 function fetch_country()
 {
     $db4 = $this->load->database('db4', TRUE);
  $db4->order_by("country_name", "ASC");
  $query = $db4->get("country");
  return $query->result();
 }

 function fetch_state($country_id)
 {
     $db4 = $this->load->database('db4', TRUE);
  $db4->where('country_id', $country_id);
  $db4->order_by('state_name', 'ASC');
  $query = $db4->get('state');
  $output = '<option value="">Select State</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->state_id.'">'.$row->state_name.'</option>';
  }
  return $output;
 }

 function fetch_city($state_id)
 {
     $db4 = $this->load->database('db4', TRUE);
  $db4->where('state_id', $state_id);
  $db4->order_by('city_name', 'ASC');
  $query = $db4->get('city');
  $output = '<option value="">Select City</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->city_id.'">'.$row->city_name.'</option>';
  }
  return $output;
 }
}

?>
