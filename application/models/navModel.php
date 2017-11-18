<?php 
   Class NavModel extends CI_Model { 
	
      public function __construct() {  
         $this->load->database();
      }

      public function getNav()
      {
        $query = $this->db->get('navigation');
        return $query->result_array();
      }
   } 

