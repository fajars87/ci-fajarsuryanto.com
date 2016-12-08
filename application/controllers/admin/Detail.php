<?php if (!defined('BASEPATH')) exit('No dirrect script access allowed');

/**
* Author : Fajar Suryanto
*/
class Detail extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/user_model');
		$this->load->model('admin/detail_model');
	}

	public function index()
	{
		// Berfungsi untuk mengecek apakah ada session user yang login
		if ($this->session->userdata('email')) {
			$query = $this->user_model->login_user($this->session->userdata('email'));
			$data = array('title' => 'Detail - Fajar Suryanto',
			'user_det' 	=> $query,
			'avatar'	=> md5($this->session->userdata('email')),
			'detail'	=> $this->detail_model->get(),
			'isi' => 'admin/detail/detail_view'
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
            $this->form_validation->set_rules('w-title','Work Title','required');

            if ($this->form_validation->run() === FALSE) {
                $data = array('title' 	=> 'Detail - Fajar Suryanto',
                                'user_det' 	=> $queryuser,
								'avatar'	=> md5($this->session->userdata('email')),
								'detail'	=> $this->detail_model->get(),
                                'isi'		=> 'admin/detail/detail_view'
                                );
                $this->load->view('admin/layout/wrapper', $data);
            } else {
                $data = array (
                	'id'			=> $this->input->post('id'),
                    'w-title'	 	=> $this->input->post('w-title'),
                    'w-detail'		=> $this->input->post('w-detail'),
                    's-title'		=> $this->input->post('s-title'),
                    's-detail'	 	=> $this->input->post('s-detail'),
                    'em-title'		=> $this->input->post('em-title'),
                    'em-detail'		=> $this->input->post('em-detail'),
                    'sk-title'	 	=> $this->input->post('sk-title'),
                    'sk-detail'		=> $this->input->post('sk-detail'),
                    'ed-title'		=> $this->input->post('ed-title'),
                    'ed-detail'	 	=> $this->input->post('ed-detail'),
                    'b-title'		=> $this->input->post('b-title'),
                    'b-detail'		=> $this->input->post('b-detail'),
                    'c-title'	 	=> $this->input->post('c-title'),
                    'c-detail'		=> $this->input->post('c-detail')
                    );
                $this->detail_model->edit($data);
                redirect(base_url().'admin/detail/');
            }
        }
		else{
			// jika tidak ada maka akan dikembalikan ke halaman login
			redirect('admin/login');
		}
	}
}