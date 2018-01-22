<?php
   class Student_model extends CI_Model
   {
       public function __construct()
       {
           $this->load->database();
       }

       public function register_studentnummer($studentnummer)
       {
           $data = [
        'studentnummer' => $studentnummer
      ];

           return $this->db->insert('studentnummer', $data);
       }

       public function check_studentnummer_exists($studentnummer)
       {
           $query = $this->db->get_where('studentnummer', ['studentnummer' => $studentnummer]);
           if (empty($query->row_array())) {
               return true;
           } else {
               return false;
           }
       }

       public function get_plan($slug = false)
       {
           if ($slug === false) {
               $this->db->order_by('id', 'ASC');
               $query = $this->db->get('plan');
               return $query->result_array();
           }
           $query = $this->db->get_where('plan', ['slug' => $slug]);
           return $query->row_array();
       }
   }
