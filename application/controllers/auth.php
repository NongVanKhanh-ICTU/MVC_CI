<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('url', 'form'));	
		$this->load->library("session");
	}
	public function login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('pass', 'Mật khẩu', 'required|min_length[6]');
		if($this->form_validation->run() == FALSE){
			$this->load->view('v_auth');
			$view = new V_Auth();
			$view->show_login();
		}
		else{
			$this->login_submit();
		}
	}
	public function login_submit()
	{
		if ($this->input->post('login') == 'login') {
			$email = $this->input->post('email');
			$pass = md5($this->input->post('pass'));
			$this->load->model('m_auth');
			$model = new M_Auth();
			$model->login($email, $pass);
		}
		else{
			header('Location: login');
		}
	}
	public function register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Họ và tên', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('pass', 'Mật khẩu', 'required|min_length[6]');
		if($this->form_validation->run() == FALSE){
			$this->load->view('v_auth');
			$view = new V_Auth();
			$view->show_register();
		}
		else{
			$this->register_submit();
		}
		
	}
	public function register_submit()
	{
		if ($this->input->post('register') == 'register') {
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$pass = md5($this->input->post('pass'));
			$this->load->model('m_auth');
			$model = new M_Auth();
			$model->register($username, $email, $pass);
		}
		else{
			header('Location: register');
		}
	}
}