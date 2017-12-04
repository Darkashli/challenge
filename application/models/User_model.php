<?php 
   Class User_model extends CI_Model { 
	
      public function __construct() {  
         $this->load->database();
      } 

      public function get_user($slug = FALSE){
         if ($slug === FALSE) {

             $this->db->order_by('id', 'ASC');
             $query = $this->db->get('gebruikers');
         return $query->result_array();
            
         }
             $query = $this->db->get_where('gebruikers', array('id' => $slug));
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

      public function register_user($enc_password){

        $data = array(
          'gebruikersnaam' => $this->input->post('username'),
          'email' => $this->input->post('email'),
          'wachtwoord' => $enc_password,
          'rolename' => $this->input->post('function')
        );

        return $this->db->insert('gebruikers', $data);
      }

      public function check_username_exists($username){

        $query = $this->db->get_where('gebruikers', array('gebruikersnaam' => $username));
        if (empty($query->row_array())) {
          return true;
        } else {
          return false;
        }
      }

        public function check_email_exists($email){

        $query = $this->db->get_where('gebruikers', array('email' => $email));
        if (empty($query->row_array())) {
          return true;
        } else {
          return false;
        }
      }

      public function login($username, $password){ 

        $result = $this->db->get_where('gebruikers', array("Gebruikersnaam" => $username, "Wachtwoord" => $password));

        if ($result->num_rows() == 1) {
          return $result->row(0)->Id;
        } else {
          return false;
        }
      }

      public function delete_post($id){
        $this->db->where('id', $id);
        $this->db->delete('posts');
        return true;
     }


      public function update_order($slug){
        $slug = url_title($this->input->post('title'));
        
        $data = array(
          'title' => $this->input->post('title'),
          'slug' => $slug,
          'body' => $this->input->post('body'),
          'category_id' => $this->input->post('category_id')
        );
        $this->db->set($data);
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('posts', $data);
      }


      public function get_function(){
        $this->db->order_by('name');
        $query = $this->db->get('function');
        return $query->result_array();
    }
   } 
   

