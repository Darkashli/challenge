  <?php 
   class HomePages extends CI_Controller {

   	public function __construct(){ 
         parent::__construct(); 
         $this->load->model('user_model');
         $this->load->library('session');
    } 
	
	 public function view($page = 'register') {
		if (!file_exists(APPPATH. 'views/homepage/' .$page. '.php')) {
			show_404();
		}

		$this->load->model('navModel');
		$data = $this->navModel->getNav();
		$this->load->view('templates/header', array(
		'navData' => $data
		));

		$this->load->view('homepage/'.$page, array(
			'title' => 'You have to register here',
			'title2' => 'Support services',
			'title3' => 'You have to login here'
		));
		$this->load->view('templates/footer');

	}

	public function register(){
        
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
	    $this->form_validation->set_rules('password', 'Password', 'required');
	    $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]', 'required');
	    $this->form_validation->set_rules('function', 'Function', 'required');

		
        if ($this->form_validation->run() === FALSE) {
 
			$this->load->model('navModel');
			$data = $this->navModel->getNav();
			$this->load->view('templates/header', array(
				'navData' => $data 
			));

			$this->load->view('homepage/register', array(
				'title' => 'You have to register here',
				'functions' => $this->user_model->get_function()
			));
			
			$this->load->view('templates/footer');

       } else {
       	    $enc_password = md5($this->input->post('password'));
	       	$this->user_model->register_user($enc_password);
	       	$this->session->set_flashdata('user_registered', 'Thanks for your registration'); 
	       	redirect('options');
       }
	}

	public function login(){
        
		$this->form_validation->set_rules('username', 'Username', 'required');
	    $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
 
			$this->load->model('navModel');
			$data = $this->navModel->getNav();
			$this->load->view('templates/header', array(
				'navData' => $data 
			));

			$this->load->view('homepage/login', array(
				'title3' => 'You have to login here'
			));
			
			$this->load->view('templates/footer');

       } else {
       	    $enc_password = md5($this->input->post('password'));
	       	$this->user_model->register_user($enc_password);
	       	$this->session->set_flashdata('user_logged', 'You have been successfully logged in'); 
	       	redirect('options');
       }
	}
}


