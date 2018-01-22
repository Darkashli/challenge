<?php
   class Students extends CI_Controller
   {
       public function __construct()
       {
           parent::__construct();
           $this->load->model('student_model');
           $this->load->library('session');
           $this->load->library('encryption');
           $this->load->helper('security');
           $this->load->model('navModel');
           $this->navdata = $this->navModel->getNav();
       }

       public function index()
       {
           $this->form_validation->set_rules('studentnummer', 'Studentnummer', 'required|callback_check_studentnummer_exists');

           if ($this->form_validation->run() === false) {
               $this->load->view('templates/header', ['navData' => $this->navdata]);
               $this->load->view('homepage/student', [
            'title4' => 'Welcome to our student webpage',
            'title5' => 'Now you have to register your studentnummer hier',
            ]);
               $this->load->view('templates/footer');
           } else {
               $studentnummer = $this->input->post('studentnummer');
               $this->student_model->register_studentnummer($studentnummer);
               $this->session->set_flashdata('studentnummer_registered', 'You have been successfully registered your student number');
               redirect('plan');
           }
       }

       public function check_studentnummer_exists($studentnummer)
       {
           $this->form_validation->set_message('check_studentnummer_exists', 'That studentnummer is not correct! please choose a different one');
           if ($this->student_model->check_studentnummer_exists($studentnummer)) {
               return true;
           } else {
               return false;
           }
       }

       public function plan()
       {
           $this->load->view('templates/header', ['navData' => $this->navdata]);
           $this->load->view('homepage/plan', [
       'title6' => 'This is the scheduale for this week',
       'plans' => $this->student_model->get_plan()
   ]);
           $this->load->view('templates/footer');
       }

       public function view($slug = null)
       {
           $schedule = $this->student_model->get_plan($slug);
           if (empty($schedule)) {
               show_404();
           }

           $this->load->view('templates/header', ['navData' => $this->navdata]);

           $this->load->view('homepage/plansview', [
               'plan' => $schedule
           ]);
           $this->load->view('templates/footer');
       }
   }
