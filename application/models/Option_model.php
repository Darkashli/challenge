<?php 
   Class Option_model extends CI_Model { 
	
      public function __construct() {  
         $this->load->database();
      } 

      public function get_drink($slug = FALSE){
         if ($slug === FALSE) {

             $this->db->order_by('id', 'ASC');
             $query = $this->db->get('dranken');
         return $query->result_array();
            
         }
             $query = $this->db->get_where('dranken', array('slug' => $slug));
         return $query->row_array();
      }

      public function confirm($slug = FALSE){
         if ($slug === FALSE) {

             $this->db->order_by('id', 'ASC');
             $query = $this->db->get('bestellingen');
         return $query->result_array();
            
         }
             $query = $this->db->get_where('bestellingen', array('wordgehaald' => $slug));
         return $query->row_array();
      }

      public function update_order(){

        $slug = url_title($this->input->post('id'));
        $data = array(
          'wordgehaald' => $this->input->post('confirm'),
          'slug' => $slug
        );
    
        $this->db->set($data);
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('bestellingen', $data);
      }

       public function delete_option($id){
        $this->db->where('wordgehaald', $id);
        $this->db->delete('bestellingen');
        return true;
     }
    }