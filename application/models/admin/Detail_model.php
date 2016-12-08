<?php if (!defined('BASEPATH')) exit('No dirrect script access allowed');

/**
* Author : Fajar Suryanto
*/
class Detail_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	public function get()
	{
		$query = $this->db->get_where('detail', array('id' => 1));
		return $query->row_array();
	}

	public function edit($data)
	{
		$this->db->where('id',$data['id']);
		return $this->db->update('detail',$data);
	}
}