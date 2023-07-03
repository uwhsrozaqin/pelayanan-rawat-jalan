<?php
/**
 * 
 */
class Login extends CI_Controller
{
	function index(){
		$this->load->view('login');
	}
	function checkLogin(){
		$this->load->model('model_dashboard');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
    	    
		$q = array('username' => $username,'password'=>$password); 
		$val = $this->model_dashboard->checkDatabase($q);
		if ($val) {
			$this->session->set_userdata($val[0]);
			redirect('dashboard','refresh');
		} else {
			$this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan passwrod benar!');
			$this->load->view('login');
		}
		
	}
	function logout()
	{
		$this->session->unset_userdata('username');
		redirect('home','refresh');
	}

}
?>