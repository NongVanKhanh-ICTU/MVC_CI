<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}
	public function login()
	{
		if ($this->input->post('login')) {
			echo "string";
		}
		$this->load->view('v_auth', isset($data)?$data:NULL);
		$view = new V_Auth();
        $view->show_login();
	}
}
