<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Cart extends CI_Model
{
	public function show_all_cart()
	{
		#SELECT * FROM course WHERE id_cs IN (SELECT id_cs FROM cart WHERE id_user = 1)
		$id_user = $this->session->userdata('id_user');
		$this->db->where('id_cs IN (SELECT id_cs FROM cart WHERE id_user = 1)', NULL, FALSE);
		$query = $this->db->get('course');
		return $query->result_array();
		#SELECT * FROM course WHERE id_cs IN (SELECT id_cs FROM cart WHERE id_user = 1)
	}
	public function count()
	{
		$id_user = $this->session->userdata('id_user');
		$this->db->from('cart')->where('id_user', $id_user);
		return $this->db->count_all_results();
	}
}

