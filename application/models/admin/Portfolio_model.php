<?php if (!defined('BASEPATH')) exit('No dirrect script access allowed');

/**
* Author : Fajar Suryanto
*/
class Portfolio_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	public function get()
	{
		$query = $this->db->get('portfolio');
		return $query->result_array();
	}

	public function find($id)
	{
		$query = $this->db->get_where('portfolio', array('id' => $id));
		return $query->row_array();
	}

	public function add($data)
	{
		return $this->db->insert('portfolio',$data);
	}

	public function edit($data)
	{
		$this->db->where('id',$data['id']);
		return $this->db->update('portfolio',$data);
	}

	public function delete($id)
	{
		$this->db->where('id',$id);
		return $this->db->delete('portfolio');
	}
}