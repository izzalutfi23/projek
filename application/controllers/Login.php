<?php 
	class Login extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model('Model');
		}

		public function index(){
			$data=array(
				'title'=>'Login'
			);
			$this->load->view('admin/login');
		}

		public function auth(){
			$user=$_POST['username'];
			$pass=md5($_POST['password']);
			$cek=$this->Model->cek_login($user, $pass);
			$num=$cek->num_rows();
			if($num>0){
				$this->session->set_userdata('username', $user);
				redirect('admin');
			}
			else{
				redirect('login');
			}
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect('home');
		}
	}
 ?>