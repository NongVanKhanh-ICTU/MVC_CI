<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_Search extends CI_Model
{
	function __construct()
	{
        parent::__construct();
    }

    public function showall($limit)
    {
    	$offset=$this->uri->segment(2);    

    	$this->db->select('*');                  
		$this->db->from('course');
		$this->db->order_by('id_cs asc');          
		$this->db->limit($limit, $offset);

		$query_poster = $this->db->get();
		return $query_poster;
    }
    
    public function countrow()
    {
    	return $this->db->count_all('course');
    }

    # Count each catelogy
    public function row_cntt()
    {
        $this->db->from('course')->where('id_cate', 'cntt');
        return $this->db->count_all_results();
    }
    public function row_tk()
    {
        $this->db->from('course')->where('id_cate', 'tk');
        return $this->db->count_all_results();
    }
    public function row_ndc()
    {
        $this->db->from('course')->where('id_cate', 'ndc');
        return $this->db->count_all_results();
    }
    public function row_ptbt()
    {
        $this->db->from('course')->where('id_cate', 'ptbt');
        return $this->db->count_all_results();
    }
    public function row_kdkn()
    {
        $this->db->from('course')->where('id_cate', 'kdkn');
        return $this->db->count_all_results();
    }
    public function row_nn()
    {
        $this->db->from('course')->where('id_cate', 'nn');
        return $this->db->count_all_results();
    }
    public function row_mkt()
    {
        $this->db->from('course')->where('id_cate', 'mkt');
        return $this->db->count_all_results();
    }
    public function row_thvp()
    {
        $this->db->from('course')->where('id_cate', 'thvp');
        return $this->db->count_all_results();
    }

    // Free and Fee
    public function row_free()
    {
        $this->db->from('course')->where('gia_cs', 0);
        return $this->db->count_all_results();
    }
    public function row_fee()
    {
        $this->db->from('course')->where('gia_cs !=', 0);
        return $this->db->count_all_results();
    }

    // For search page
    public function show_with_key($key)
    {
        
    }
}