<?php
   class HomePages extends CI_Controller
   {
       public function __construct()
       {
           parent::__construct();
           $this->load->model('user_model');
           $this->load->library('session');
           $this->load->library('encryption');
           $this->load->helper('security');
           $this->load->model('navModel');
           $this->navdata = $this->navModel->getNav();
       }

       public function view($page = 'register')
       {
           if (!file_exists(APPPATH . 'views/homepage/' . $page . '.php')) {
               show_404();
           }
           $this->load->view('templates/header', ['navData' => $this->navdata]);
           $this->load->view('homepage/' . $page, [
            'title' => 'You have to register here',
            'title2' => 'Support services'
        ]);
           $this->load->view('templates/footer');
       }

       public function register()
       {
           if ($this->session->userdata('user_registered')) {
               redirect('login');
           }
           $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
           $this->form_validation->set_rules('gender', 'Gender', 'required');
           $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
           $this->form_validation->set_rules('password', 'Password', 'required');
           $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]', 'required');
           $this->form_validation->set_rules('function', 'Function', 'required');

           if ($this->form_validation->run() === false) {
               $this->load->view('templates/header', ['navData' => $this->navdata]);
               $this->load->view('homepage/register', [
                'function' => $this->user_model->get_function(),
                'gender' => $this->user_model->get_gender(),
                'title' => 'You have to register here'
            ]);
               $this->load->view('templates/footer');
           } else {
               $options = ['cost' => 12];
               $enc_password = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);
               $this->user_model->register_user($enc_password);
               $this->session->set_flashdata('user_registered', 'Thanks for your registration');
               redirect('homepages/login');
           }
       }

       public function check_username_exists($username)
       {
           $this->form_validation->set_message('check_username_exists', 'That username is taken! please choose a different one');
           if ($this->user_model->check_username_exists($username)) {
               return true;
           } else {
               return false;
           }
       }

       public function check_email_exists($email)
       {
           $this->form_validation->set_message('check_email_exists', 'That email is taken! please choose a different one');
           if ($this->user_model->check_email_exists($email)) {
               return true;
           } else {
               return false;
           }
       }

       public function login()
       {
           $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
           $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

           if ($this->form_validation->run() === false) {
               $this->load->view('templates/header', [
                'navData' => $this->navdata]);
               $this->load->view('homepage/login', [
                  'title3' => 'You have to sign in here']);
               $this->load->view('templates/footer');
           } else {
               $username = $this->input->post('username');
               $user_row = $this->user_model->login($username, $this->input->post('password'));

               $user_id = $user_row->Id;
               $user_role = $user_row->RoleName;

               if ($user_id) {
                   //$this->session->set_userdata($user_row);
                   //$name = this->session->userdata("username");
                   //isset(this->session->userdata("username"));

                   $this->session->set_userdata('user_id', $user_id);
                   $this->session->set_userdata('username', $username);
                   $this->session->set_userdata('is_admin', ($user_role == 'Admin'));
                   $this->session->set_userdata('is_student', ($user_role == 'Student'));
                   $this->session->set_userdata('is_docent', ($user_role == 'Docent'));
                   $this->session->set_userdata('logged_in', true);
                   $this->session->set_flashdata('user_loggedin', 'You are now successfully logged in');
                   redirect('options');
               } else {
                   $this->session->set_flashdata('login_failed', 'Login is invalid');
                   redirect('homepages/login');
               }
           }
       }

       public function logout()
       {
           $this->session->unset_userdata('logged_in');
           $this->session->unset_userdata('username');
           $this->session->unset_userdata('user_role');
           $this->session->unset_userdata('user_id');
           $this->session->set_flashdata('user_loggedout', 'You are now logged out');
           redirect('homepages/login');
       }
   }
