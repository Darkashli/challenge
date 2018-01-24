<?php
   class User_model extends CI_Model
   {
       public function __construct()
       {
           $this->load->database();
       }

       public function register_user($enc_password)
       {
           $data = [
          'gebruikersnaam' => $this->security->xss_clean($this->input->post('username')),
          'gender' => $this->input->post('gender'),
          'email' => $this->input->security->xss_clean($this->input->post('email')),
          'wachtwoord' => $this->security->xss_clean($enc_password),
          'rolename' => $this->input->post('function')
        ];

           return $this->db->insert('gebruikers', $data);
       }

       public function check_username_exists($username)
       {
           $query = $this->db->get_where('gebruikers', ['gebruikersnaam' => $username]);
           if (empty($query->row_array())) {
               return true;
           } else {
               return false;
           }
       }

       public function check_email_exists($email)
       {
           $query = $this->db->get_where('gebruikers', ['email' => $email]);
           if (empty($query->row_array())) {
               return true;
           } else {
               return false;
           }
       }

       public function login($username, $password)
       {
           $result = $this->db->get_where('gebruikers', ['Gebruikersnaam' => $username]);
           if ($result->num_rows() == 1) {
               if (password_verify($password, $result->row(0)->Wachtwoord)) {
                   return $result->row(0);
               } else {
                   return false;
               }
           } else {
               return false;
           }
       }

       public function delete_post($id)
       {
           $this->db->where('id', $id);
           $this->db->delete('posts');
           return true;
       }

       public function confrim($id)
       {
           $data = [
          'wordgehaald' => $this->input->post('confirm'),
          'user_id' => $id
        ];
           $this->db->set($data);
           $this->db->where('user_id', $this->input->post('id'));
           return $this->db->update('Bestellingen', $data);
       }

       public function get_function()
       {
           $this->db->order_by('name');
           $query = $this->db->get('function');
           return $query->result_array();
       }

       public function get_gender()
       {
           $query = $this->db->get('Gender');
           return $query->result_array();
       }
   }
