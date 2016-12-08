<?php
class User_model extends CI_Model{
	function __construct(){
		$this->load->database(); // Berfungsi untuk memanggil database
	}

	// Berfungsi untuk mengambil data pada tabel user yang ada di database kita
	public function login_user($email = FALSE) {
		if ($email === FALSE) {
			$query = $this->db->get('users');
			return $query->result_array();
		}
		$query = $this->db->get_where('users', array('email' => $email));
		return $query->row_array();
	}

	public function get()
	{
		$query = $this->db->get_where('users', array('id' => 1));
		return $query->row_array();
	}

	public function edit($data)
	{
		$this->db->where('id',$data['id']);
		return $this->db->update('users',$data);
	}
}