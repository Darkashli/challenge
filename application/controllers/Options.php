<?php 
class Options extends CI_Controller {

	public function __construct(){ 
         parent::__construct(); 
         $this->load->model('option_model');
    } 
	
	 public function index() {

		$this->load->model('navModel');
		$data = $this->navModel->getNav();
		$this->load->view('templates/header', array(
		'navData' => $data
		));

		$this->load->view('drink/index', array(
			'title' => 'What would you like to drink today',
			'drink' => $this->option_model->get_drink() 
		));
		$this->load->view('templates/footer');

	}

	 public function view($slug = NULL){

		$drinkOption = $this->option_model->get_drink($slug);
		if (empty($drinkOption)) {
		    show_404();
		}

		$this->load->model('navModel');
		$data = $this->navModel->getNav();
		$this->load->view('templates/header', array(
			'navData' => $data 
		));

		$this->load->view('drink/view', array(
			'drink' => $drinkOption
		));
		$this->load->view('templates/footer');
    }

    public function edit($slug){
		$order = $this->option_model->confirm($slug);
		if (empty($order)){
		    show_404();
		}

		$this->load->model('navModel');
		$data = $this->navModel->getNav();
		$this->load->view('templates/header', array(
			'navData' => $data 
		));
		$this->load->view('drink/view', array(
			'orders' => $order, 
			'title' => 'You have to confirm your order'
		));
		$this->load->view('templates/footer');
	}

	public function update(){
		$this->option_model->update_order();
		redirect('homepage');
	}

    public function delete($id){
		$this->option_model->delete_option($id);
		redirect('homepage');
	}
}
