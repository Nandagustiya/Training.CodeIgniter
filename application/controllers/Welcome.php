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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
		//echo "Hello, CI";
	}
	public function __construct(){
			parent::__construct();
			$this->load->model('User_model');
		}
	public function cek_login(){
			$email=$this->input->post("email");
			$password=$this->input->post("password");
			$cek_login=$this->User_model->login($email,$password);

			if (empty($cek_login)){
				redirect('/');
			}
			else{
				$this->session->set_userdata('user', $cek_login);
				redirect('Welcome/home');
			}
		}

	public function home(){
			$this->load->view('home');
		}

	public function register(){
			$this->load->view('register');
		}

	public function register_action(){
			$nama_user=$this->input->post("nama_user");
			$email=$this->input->post("email");
			$password=$this->input->post("password");
			$confirm=$this->input->post("confirm");
			$data=array('nama_user'=>$nama_user, 'email'=>$email, 'password'=>$password);

			if ($password!=$confirm){
				redirect('Welcome/register');
			}
			else{
				$this->User_model->insert_user($data);
				redirect('/');
			}

			
		}
		public function logout(){
			$this->session->sess_destroy();
			$this->load->view('login');

		}
	

	}
