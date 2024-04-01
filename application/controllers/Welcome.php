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
		$page_data['page_name'] = 'login';
		$this->load->view('front/login.php', $page_data);

	}
	public function home()
	{
		
        $page_data['page_name'] = 'home';
		$this->load->view('front/template', $page_data);

	}
    public function adminlogin(){
            $username = $_POST['username'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $data = $this->CommonModal->login($username, $phone, $password);
            if ($data) 
            {
                redirect('welcome/home');
            }
            else {
                // echo "error" ;
                // exit();
                $this->session->set_flashdata('msg', 'Somethig Went Wrong Please Check !!!!!!');
				$this->session->set_flashdata('msg_class', 'alert-danger');
                redirect('welcome');
            }
        }
       

    public function logout()
    {
        $this->load->library('session');
        $this->session->unset_userdata('id');
        redirect(base_url('welcome'));
    } 
    
	public function signup()
	{
		$page_data['page_name'] = 'signup';
		$this->load->view('front/signup.php', $page_data);

	}

    public function registration()
    {
        
        $post = $this->input->post();
        if ($post) {
             $pass = $post['password'];
             $c_pass = $post['c_pass'];
             if($pass === $c_pass){
                $password = $pass;
                
                // If validation passes, check if phone number already exists
                $phone = $this->input->post('phone');
                if ($this->CommonModal->check_phone_exists($phone)) {
                    // If phone number already exists, set error message and redirect back to signup page
                   
                    $this->session->set_flashdata('msg', 'Phone number already exists. ');
                    $this->session->set_flashdata('msg_class', 'alert-danger');
                    redirect('signup');
                } else 
                // If phone number is unique, proceed with registration
                $data = array(
                    'username' =>$post['username'],
                    'password' => $password,
                    'phone' => $phone,
                );
                // Insert user into database

                //  print_r($data);
                //  exit();
                $this->load->model('CommonModal');
                 $pst = $this->CommonModal->insertdata('user',$data);

                 if( $pst){

                    $this->session->set_flashdata('msg', 'Data Insertes Succesfully!!!');
                    $this->session->set_flashdata('msg_class', 'alert-success');
                     redirect(base_url('signup'));
                 }
                 else{
                    $this->session->set_flashdata('msg', 'something went wrong !!!');
                    $this->session->set_flashdata('msg_class', 'alert-danger');
                     redirect(base_url('signup'));
                 }
             }
        else{
            $this->session->set_flashdata('msg', 'Password Doest Match !!!');
           $this->session->set_flashdata('msg_class', 'alert-danger');
            redirect(base_url('signup'));
        }
   }
}


// 
	public function invoice()
	{
		$page_data['page_name'] = 'invoice';
		$this->load->view('front/template', $page_data);

	}


	
}
