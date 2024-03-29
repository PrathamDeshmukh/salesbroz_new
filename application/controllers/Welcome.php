<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */


     public function __construct() {
        parent::__construct();
        // Load necessary models
        $this->load->model('CommonModal');
    }
	public function index()
	{
		$page_data['page_name'] = 'home';
		$this->load->view('front/template', $page_data);

	}
	public function login()
	{
		$page_data['page_name'] = 'login';
		$this->load->view('front/login.php', $page_data);

	}

    public function adminlogin(){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('phone', 'phone', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_error_delimiters('<div style="color: red;">', '</div>');
        if ($this->form_validation->run()) {
            $username = $_POST['username'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
           
            $data = $this->CommonModal->getRowById('user', 'username', $username);
            $data = $this->CommonModal->getRowById('user', 'phone', $phone);
            if ($data) {

                $id = $data[0]['id'];
                $f_username = $data[0]['username'];
                $phone = $data[0]['phone'];
                $f_password = $data[0]['password'];

                if ($password != $f_password) {
                //     echo "error" ;
                // exit();
                $this->session->set_flashdata('msg', 'Your Password is Incorrect!!!!!!');
				$this->session->set_flashdata('msg_class', 'alert-danger');
				
                } else {
                    $this->session->set_userdata(array('id' => $id, 'username' => $username, 'phone' => $phone));
                    redirect('welcome');
                }
            
            } else {
                // echo "error" ;
                // exit();
                $this->session->set_flashdata('msg', 'Your Contact or  Username is Incorrect!!!!!!');
				$this->session->set_flashdata('msg_class', 'alert-danger');
            }
        }
        // $this->load->view('admin/login');
        redirect('welcome/login');
    }

    public function logout()
    {
        $this->load->library('session');
        $this->session->unset_userdata('id');
        redirect(base_url('welcome/login'));
    }





	public function signup()
	{
		$page_data['page_name'] = 'signup';
		$this->load->view('front/signup.php', $page_data);

	}
	public function invoice()
	{
		$page_data['page_name'] = 'invoice';
		$this->load->view('front/template', $page_data);

	}


	
}
