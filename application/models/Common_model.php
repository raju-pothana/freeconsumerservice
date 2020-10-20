<?php
class Common_model extends CI_Model {

  public function get_conpanies()
    {
            $query = $this->db->get('company_details');
            return $query->result_array();
    }

}
?>
