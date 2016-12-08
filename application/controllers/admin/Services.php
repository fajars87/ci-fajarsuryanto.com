<?php if (!defined('BASEPATH')) exit('No dirrect script access allowed');

/**
* Author : Fajar Suryanto
*/
class Services extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/user_model');
		$this->load->model('admin/service_model');
	}

	public function index()
	{
		// Berfungsi untuk mengecek apakah ada session user yang login
		if ($this->session->userdata('email')) {
			$query = $this->user_model->login_user($this->session->userdata('email'));
			$data = array('title' => 'Services - Fajar Suryanto',
			'user_det' 	=> $query,
			'avatar'	=> md5($this->session->userdata('email')),
			'detail'	=> $this->service_model->get(),
			'isi' => 'admin/service/service_view'
			);

		// Jika ada session user yang login maka akan dialihkan ke halaman dashboard
		$this->load->view('admin/layout/wrapper', $data);
		}
		else{
			// jika tidak ada maka akan dikembalikan ke halaman login
			redirect('admin/login');
		}
	}

	public function add() {
        // Berfungsi untuk mengecek apakah ada session user yang login
		if ($this->session->userdata('email')) {
			$queryuser = $this->user_model->login_user($this->session->userdata('email'));
            $this->form_validation->set_rules('title','Title','required');

            if ($this->form_validation->run() === FALSE) {
                $data = array('title' 	=> 'Services - Fajar Suryanto',
                                'user_det' 	=> $queryuser,
								'avatar'	=> md5($this->session->userdata('email')),
								'detail'	=> $this->service_model->get(),
                                'isi'		=> 'admin/service/service_view'
                                );
                $this->load->view('admin/layout/wrapper', $data);
            } else {
                $data = array (
                    'icon' 			=> $this->input->post('icon'),
                    'title' 		=> $this->input->post('title'),
                    'body'			=> $this->input->post('body')
                    );
                $this->service_model->add($data);
                redirect(base_url().'admin/services/');
            }
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
			$data['service'] = $this->service_model->find($id);
            $this->form_validation->set_rules('title','Title','required');

            if ($this->form_validation->run() === FALSE) {
                $data = array('title' 	=> 'Update Services: '.$data['service']['title'].' - Fajar Suryanto',
                                'user_det' 	=> $queryuser,
								'avatar'	=> md5($this->session->userdata('email')),
								'detail'	=> $this->service_model->get(),
								'service'	=> $this->service_model->find($id),
                                'isi'		=> 'admin/service/service_update'
                                );
                $this->load->view('admin/layout/wrapper', $data);
            } else {
                $data = array (
                	'id'		=> $this->input->post('id'),
                    'icon'	 	=> $this->input->post('icon'),
                    'title'		=> $this->input->post('title'),
                    'body'		=> $this->input->post('body')
                    );
                $this->service_model->edit($data);
                redirect(base_url().'admin/services/');
            }
        }
		else{
			// jika tidak ada maka akan dikembalikan ke halaman login
			redirect('admin/login');
		}
	}

	public function delete($id) {
        // Berfungsi untuk mengecek apakah ada session user yang login
		if ($this->session->userdata('email')) {
			$queryuser = $this->user_model->login_user($this->session->userdata('email'));
			$this->service_model->delete($id);
			redirect(base_url().'admin/services/');
        }
		else{
			// jika tidak ada maka akan dikembalikan ke halaman login
			redirect('admin/login');
		}
	}
}