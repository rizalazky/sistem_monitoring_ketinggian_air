<?php
class Login extends CI_Controller{

	
	public function index(){
		$this->load->view('form_login');
	}

	public function login_proses(){
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('url');

		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run()==FALSE){
			$this->load->view('form_login');
		}else{
			$email=$this->input->post('email');
			$password=$this->input->post('password');

			if($email=="admin@gmail.com" && $password=="admin"){
				$this->session->set_userdata('email',$email);
				redirect('sensor_gas');
			}else{
				$this->session->set_flashdata('info','Gagal Login');
				redirect('login');
			}
		}

	}
	function logout(){
		$this->session->sess_destroy($this->session->userdata('data_login','user_login'));
		redirect('Login','refresh');
	}
}
?>