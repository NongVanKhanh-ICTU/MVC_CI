<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->helper(array('url', 'form'));	
		$this->load->library("session");
		// Kiểm tra đăng nhập
		if ($this->session->has_userdata('id_user') == false) {
			redirect(base_url('auth/login'));
		}
	}
	public function index()
	{
		$this->load->model('m_cart');
		$model = new M_Cart();
		$result = $model->show_all_cart();
		$count = $model->count();

		$this->load->view('v_cart');
		$view = new V_Cart();
		$view->index($result, $count);
	}
}