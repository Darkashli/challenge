<?php
class Options extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('option_model');
        $this->load->model('navModel');
        $this->load->model('user_model');
        $this->navdata = $this->navModel->getNav();
    }

    public function index()
    {
        if ($this->session->userdata('is_student')) {
            redirect('students');
        }

        $this->load->view('templates/header', ['navData' => $this->navdata]);

        $this->load->view('drink/index', [
            'title' => 'What would you like to drink today',
            'drink' => $this->option_model->get_drink()
        ]);
        $this->load->view('templates/footer');
    }

    public function view($slug = null)
    {
        $drinkOption = $this->option_model->get_drink($slug);
        if (empty($drinkOption)) {
            show_404();
        }

        $this->load->view('templates/header', ['navData' => $this->navdata]);

        $this->load->view('drink/view', [
            'drink' => $drinkOption
        ]);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $this->users_model->confirm($id);
        redirect('homepages');
    }

    // public function update(){
    // $this->option_model->update_order();
    // redirect('homepages');
    // }

    public function delete($id)
    {
        $this->option_model->delete_option($id);
        redirect('homepages');
    }
}
