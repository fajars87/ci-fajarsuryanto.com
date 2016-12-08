<?php if (!defined('BASEPATH')) exit('No dirrect script access allowed');

/**
* Author : Fajar Suryanto
*/
class We_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	public function work()
	{
		$query = $this->db->get_where('work-edu', array('type' => 'Works'));
		return $query->result_array();
	}

	public function edu()
	{
		$query = $this->db->get_where('work-edu', array('type' => 'Educations'));
		return $query->result_array();
	}

	public function find($id)
	{
		$query = $this->db->get_where('work-edu', array('id' => $id));
		return $query->row_array();
	}

	public function add($data)
	{
		return $this->db->insert('work-edu',$data);
	}

	public function edit($data)
	{
		$this->db->where('id',$data['id']);
		return $this->db->update('work-edu',$data);
	}

	public function delete($id)
	{
		$this->db->where('id',$id);
		return $this->db->delete('work-edu');
	}
}