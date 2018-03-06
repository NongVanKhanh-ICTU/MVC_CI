<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Display extends CI_Model
{
	public function show_once_course($id)
	{
		$this->db->where('id_cs', $id);
		$query = $this->db->get('course');
		return $query->result_array();
	}
	public function add_to_cart($data)
	{
		$this->db->insert('cart', $data);
	}
}

