<?php
   class Option_model extends CI_Model
   {
       public function __construct()
       {
           $this->load->database();
       }

       public function get_drink($slug = false)
       {
           if ($slug === false) {
               $this->db->order_by('id', 'ASC');
               $query = $this->db->get('dranken');
               return $query->result_array();
           }
           $query = $this->db->get_where('Dranken', ['slug' => $slug]);
           return $query->row_array();
       }

       public function confirm()
       {
           $data = [
            'user_id' => $this->input->post('id'),
            'wordgehaald' => $this->input->post('confirm'),
          ];
           $this->db->set($data);
           $this->db->where('id', $this->input->post('id'));
           return $this->db->update('Bestellingen', $data);
       }
   }

    //    public function delete_option($id){
    //     $this->db->where('wordgehaald', $id);
    //     $this->db->delete('bestellingen');
    //     return true;
    //  }
