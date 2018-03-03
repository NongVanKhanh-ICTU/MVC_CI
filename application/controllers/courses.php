<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->helper(array('url', 'form'));	
		$this->load->library("session");
		$this->load->library('pagination');
		
	}
	public function index()
	{
//Số bài trong 1 trang
		$limit= 9;
//Số bài trong 1 trang

		$this->load->model('m_courses');
		$model = new M_Courses();
		$query_poster = $model->showall($limit);
		$countrow = $model->countrow();
// pagination        
		$config['base_url'] = base_url() . '/courses/';
		$config['total_rows'] = $countrow;
		$config['uri_segment']  = 2;
		$config['per_page'] = $limit;
		$config['prev_link']  = '&laquo;';
		$config['next_link']  = '&raquo;';
		$config['last_link']  = FALSE;
		$config['first_link'] = FALSE;
		$num_pages = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = round($num_pages);
		$config['next_tag_open'] =  '<li>';
		$config['next_tag_close'] =  '</li>';
		$config['prev_tag_open'] =  '<li>';
		$config['prev_tag_close'] =  '</li>';
		$config['num_tag_open'] =  '<li>';
		$config['num_tag_close'] =  '</li>';
		$config['cur_tag_open'] =  '<li class="active"><a href="#">';
		$config['cur_tag_close'] =  '<span class="sr-only"></span></a></li>';
		$this->pagination->initialize($config);
		$paginator = $this->pagination->create_links();  
// End pagination  
		$category = array(
			array('key' => 'cntt', 'count' => $model->row_cntt(), 'name' => 'Công nghệ thông tin', ),
			array('key' => 'tk', 'count' => $model->row_tk(), 'name' => 'Thiết kế',),
			array('key' => 'ndc', 'count' => $model->row_ndc(), 'name' => 'Nuôi dạy con', ),
			array('key' => 'ptbt', 	'count' => $model->row_ptbt(), 'name' => 'Phát triển bản thân', ),
			array('key' => 'kdkn', 'count' => $model->row_kdkn(), 'name' => 'Kinh doanh khởi nghiệp', ),
			array('key' => 'nn', 'count' => $model->row_nn(), 'name' => 'Ngoại ngữ', ),
			array('key' => 'mkt', 'count' => $model->row_mkt(), 'name' => 'Marketing', ),
			array('key' => 'thvp', 'count' => $model->row_thvp(), 'name' => 'Tin học văn phòng', ), 
		);    
		$fee = array('free' => $model->row_free(), 'fee' => $model->row_fee(), ); 
		$this->load->view('v_courses'); 
		$view = new V_Courses();
		$view->index($query_poster, $paginator, $category, $fee);
	}
	public function search()
	{
		if ($this->input->get('search') == 'search') {
			echo "string";
		}
		else echo "none";
		die();
		$this->load->model('m_search');
		$model = new M_Search();
		$query_poster = $model->show_with_key($key, $limit);
		$countrow = $model->countrow();

		// $this->load->view('v_courses'); 
		// $view = new V_Courses();
		// $view->index($query_poster, $paginator, $category, $fee);
	}
}