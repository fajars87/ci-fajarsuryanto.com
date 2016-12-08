<?php if(!defined('BASEPATH')) exit('No direct access allowed');

/**
* Author : Fajar Suryanto
*/
class Home_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	public function get_user()
	{
		$query = $this->db->get_where('users', array('id' => '1'));
		return $query->row_array();
	}

	public function get_detail()
	{
		$query = $this->db->get_where('detail', array('id' => '1'));
		return $query->row_array();
	}

	public function get_services()
	{
		$query = $this->db->get('services');
		return $query->result_array();
	}

	public function get_work()
	{
		$query = $this->db->get_where('work-edu', array('type' => 'Works'));
		return $query->result_array();
	}

	public function get_edu()
	{
		$query = $this->db->get_where('work-edu', array('type' => 'Educations'));
		return $query->result_array();
	}

	public function get_skill()
	{
		$query = $this->db->get('skill');
		return $query->result_array();
	}

	public function get_portfolio()
	{
		$query = $this->db->query('SELECT * FROM portfolio ORDER BY portfolio.date DESC');
		return $query->result_array();
	}

	public function add($data)
	{
		return $this->db->insert('contact',$data);
	}
}