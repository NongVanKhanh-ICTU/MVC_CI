<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model
{
	public function load_all_cate()
	{
		$sql = "SELECT * FROM category WHERE 1 ORDER BY stt_cate ASC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
}