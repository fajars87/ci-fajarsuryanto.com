<?php if (!defined('BASEPATH')) exit('No dirrect script access allowed');

/**
* Author : Fajar Suryanto
*/
class Profile extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/user_model');
	}

	public function index()
	{
		// Berfungsi untuk mengecek apakah ada session user yang login
		if ($this->session->userdata('email')) {
			$query = $this->user_model->login_user($this->session->userdata('email'));
			$data = array('title' => 'Profile - Fajar Suryanto',
			'user_det' 	=> $query,
			'avatar'	=> md5($this->session->userdata('email')),
			'detail'	=> $this->user_model->get(),
			'isi' => 'admin/profile/profile_view'
			);

		// Jika ada session user yang login maka akan dialihkan ke halaman dashboard
		$this->load->view('admin/layout/wrapper', $data);
		}
		else{
			// jika tidak ada maka akan dikembalikan ke halaman login
			redirect('admin/login');
		}
	}

	public function update($id) {
        // Berfungsi untuk mengecek apakah ada session user yang login
		if ($this->session->userdata('email')) {
			$queryuser = $this->user_model->login_user($this->session->userdata('email'));
            $this->form_validation->set_rules('email','Email','required');

            if ($this->form_validation->run() === FALSE) {
                $data = array('title' 	=> 'Profile - Fajar Suryanto',
                                'user_det' 	=> $queryuser,
								'avatar'	=> md5($this->session->userdata('email')),
								'detail'	=> $this->user_model->get(),
                                'isi'		=> 'admin/profile/profile_view'
                                );
                $this->load->view('admin/layout/wrapper', $data);
            } else {
            	if($this->input->post('password')==''){
	                $data = array (
	                	'id'			=> $this->input->post('id'),
	                    'name'		 	=> $this->input->post('name'),
	                    'email'			=> $this->input->post('email'),
	                    'phone'	 		=> $this->input->post('phone'),
	                    'address'		=> $this->input->post('address'),
	                    'about'			=> $this->input->post('about')
	                    );
	                $this->user_model->edit($data);
	                redirect(base_url().'admin/profile/');
                }else{
                	$salt = substr(md5($this->input->post('password')),10);
                	$data = array (
	                	'id'			=> $this->input->post('id'),
	                    'name'		 	=> $this->input->post('name'),
	                    'email'			=> $this->input->post('email'),
	                    'password'		=> crypt($this->input->post('password'),$salt),
	                    'phone'	 		=> $this->input->post('phone'),
	                    'address'		=> $this->input->post('address'),
	                    'about'			=> $this->input->post('about')
	                    );
	                $this->user_model->edit($data);
	                redirect(base_url().'admin/profile/');
	            }
            }
        }
		else{
			// jika tidak ada maka akan dikembalikan ke halaman login
			redirect('admin/login');
		}
	}
}