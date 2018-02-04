<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model
{
	public function load_all_cate()
	{
		$sql = "SELECT * FROM category WHERE 1";
		$query = $this->db->query($sql);
		foreach ($query->result_array() as $row)
		{
			echo "<pre>";
			echo $row['stt_cate'];
			echo $row['id_cate'];
			echo $row['name_cate'];
			echo $row['icon_cate'];
		}
	}
}