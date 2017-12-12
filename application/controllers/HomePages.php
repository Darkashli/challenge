  <?php
   class HomePages extends CI_Controller {

   	public function __construct(){
         parent::__construct();
         	$this->load->model('user_model');
       	  $this->load->library('session');

          // load menu so it can be used in all functions
          $this->load->model('navModel');
    		  $this->navdata = $this->navModel->getNav();
    }

	public function view($page = 'register') {
		if (!file_exists(APPPATH. 'views/homepage/' .$page. '.php')) {
			show_404();
		}

			$this->load->view('templates/header', array('navData' => $this->navdata));

			$this->load->view('homepage/'.$page, array(
			'title' => 'You have to register here',
			'title2' => 'Support services',
 		));
			$this->load->view('templates/footer');
	}

	public function register(){

    if ($this->session->userdata('user_registered')) {
      redirect('options');
}

		 	$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
		 	$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
		  $this->form_validation->set_rules('password', 'Password', 'required');
		  $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]', 'required');
		  $this->form_validation->set_rules('function', 'Function', 'required');

        if ($this->form_validation->run() === FALSE) {

      $this->load->view('templates/header', array('navData' => $this->navdata));



			$this->load->view('homepage/register', array(
				'functions' => $this->user_model->get_function(),
				'title' => 'You have to register here'

			));

       } else {
       	  $enc_password = md5($this->input->post('password'));
	       	$this->user_model->register_user($enc_password);
	       	$this->session->set_flashdata('user_registered', 'Thanks for your registration');
	       	redirect('options');
       }
	}

	public function check_username_exists($username){

			$this->form_validation->set_message('check_username_exists', 'That username is taken! please choose a different one');
		if ($this->user_model->check_username_exists($username)) {
			return true;
		} else {
			return false;
		}
	}

	public function  check_email_exists($email){

			$this->form_validation->set_message('check_email_exists', 'That email is taken! please choose a different one');
		  if ($this->user_model->check_email_exists($email)) {
			return true;
		} else {
			return false;
		}
	}

	public function login(){

			$this->form_validation->set_rules('username', 'Username', 'required');
		  $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {

      $this->load->view('templates/header', array('navData' => $this->navdata));


			$this->load->view('homepage/login', array(
				'title3' => 'You have to sign in here',
			));

			$this->load->view('templates/footer');

       } else {

       	    $username = $this->input->post('username');
       	    $password = md5($this->input->post('password'));
       	    $user_row = $this->user_model->login($username, $password);
            //var_dump($user_row);
            //die();
            $user_id = $user_row->Id;
            $user_role = $user_row->RoleName;


       	    if ($user_id) {
       	    	$this->session->set_userdata('user_id', $user_id);
              $this->session->set_userdata('username', $username);
              $this->session->set_userdata('is_admin',  ($user_role == 'Admin'));
              $this->session->set_userdata('is_student', ($user_role == 'Student'));
              $this->session->set_userdata('is_docent', ($user_role == 'Docent'));   //
              $this->session->set_userdata('logged_in', true);
              // retrieve with $this->session->userdata('is_docent');
       	    	$this->session->set_flashdata('user_loggedin', 'You are now successfully logged in');
	       	redirect('options');

       	    } else {
       	    	$this->session->set_flashdata('login_failed', 'Login is invalid');
	       	redirect('homepages/login');
       	    }
       }
	}

	public function logout(){

			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('user_id');

			$this->session->set_flashdata('user_loggedout', 'You are now logged out');
	       	redirect('homepages/login');
       	    }
	}
