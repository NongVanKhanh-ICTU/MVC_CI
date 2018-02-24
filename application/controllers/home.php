<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->helper(array('url', 'form'));	
		$this->load->library("session");
	}
	public function index()
	{
		$this->load->model('m_home');
		$model = new M_Home();
		$bien = $model->load_all_cate();

		$this->load->view('v_home');
		$view = new V_Home();
		$view->index($bien);
	}
	
}
