<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model
{
	public function __construct(){
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->library("session");
    }
	public function qltv()
	{
		$query = $this->db->get('user');
		return $query->result_array();
	}
	public function delete_user($id)
	{
		$this->db->where('id_user', $id)->delete('user');
	}
	public function showone($id, $key, $table)
	{
		$this->db->from($table)->where($key, $id);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function update_user($data)
	{
		$this->db->set('name_user', $data['name']);
		$this->db->set('email_user', $data['email']);
		$this->db->set('job_user', $data['job']);
		$this->db->set('about_user', $data['about']);
		$this->db->set('permission_user', $data['permission']);
		$this->db->where('id_user', $data['id']);
		$this->db->update('user');
	}
	public function qlkh()
	{
		$query = $this->db->get('course');
		return $query->result_array();
	}
	public function delete_course($id)
	{
		$this->db->where('id_cs', $id)->delete('course');
	}
	public function add_course($item)
	{
		$this->db->insert('course', $item);
		echo "<script type='text/javascript'>alert('Thêm khóa học thành công!');</script>";
	}
	public function update_course($data)
	{
		$this->db->where('id_cs', $data['id_cs']);
		$this->db->update('course', $data);
	}
}