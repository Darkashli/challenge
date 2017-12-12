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
        $query = $this->db->get_where('Dranken', array('slug' => $slug));
         return $query->row_array();
      }

      // public function confirm($id){

           // $data = array(
             // 'wordgehaald' => $this->input->post('confirm'),
             // 'user_id' => $id
           // );

             // $this->db->set($data);
             // return this->db->insert('Bestellingen', $data);

  // }
}

       // public function delete_option($id){
        // $this->db->where('wordgehaald', $id);
        // $this->db->delete('bestellingen');
        // return true;
     // }
