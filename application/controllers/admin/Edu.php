<?php if (!defined('BASEPATH')) exit('No dirrect script access allowed');

/**
* Author : Fajar Suryanto
*/
class Edu extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/user_model');
		$this->load->model('admin/we_model');
	}

	public function index()
	{
		// Berfungsi untuk mengecek apakah ada session user yang login
		if ($this->session->userdata('email')) {
			$query = $this->user_model->login_user($this->session->userdata('email'));
			$data = array('title' => 'Education - Fajar Suryanto',
			'user_det' 	=> $query,
			'avatar'	=> md5($this->session->userdata('email')),
			'detail'	=> $this->we_model->edu(),
			'isi' => 'admin/edu/edu_view'
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
            $this->form_validation->set_rules('period','Period','required');
            $this->form_validation->set_rules('job','Study Program','required');
            $this->form_validation->set_rules('company','University','required');

            if ($this->form_validation->run() === FALSE) {
                $data = array('title' 	=> 'Education - Fajar Suryanto',
                                'user_det' 	=> $queryuser,
								'avatar'	=> md5($this->session->userdata('email')),
								'detail'	=> $this->we_model->edu(),
                                'isi'		=> 'admin/edu/edu_view'
                                );
                $this->load->view('admin/layout/wrapper', $data);
            } else {
                $data = array (
                    'period' 	=> $this->input->post('period'),
                    'job' 		=> $this->input->post('job'),
                    'company'	=> $this->input->post('company'),
                    'detail'	=> $this->input->post('detail'),
					'type'		=> $this->input->post('type')
                    );
                $this->we_model->add($data);
                redirect(base_url().'admin/edu/');
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
			$data['work'] = $this->we_model->find($id);
            $this->form_validation->set_rules('period','Period','required');
            $this->form_validation->set_rules('job','Study Program','required');
            $this->form_validation->set_rules('company','University','required');

            if ($this->form_validation->run() === FALSE) {
                $data = array('title' 	=> 'Update Education: '.$data['work']['company'].' - Fajar Suryanto',
                                'user_det' 	=> $queryuser,
								'avatar'	=> md5($this->session->userdata('email')),
								'detail'	=> $this->we_model->edu(),
								'work'	=> $this->we_model->find($id),
                                'isi'		=> 'admin/edu/edu_update'
                                );
                $this->load->view('admin/layout/wrapper', $data);
            } else {
                $data = array (
                	'id'		=> $this->input->post('id'),
                    'period' 	=> $this->input->post('period'),
                    'job' 		=> $this->input->post('job'),
                    'company'	=> $this->input->post('company'),
                    'detail'	=> $this->input->post('detail'),
					'type'		=> $this->input->post('type')
                    );
                $this->we_model->edit($data);
                redirect(base_url().'admin/edu/');
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
			$this->we_model->delete($id);
			redirect(base_url().'admin/edu/');
        }
		else{
			// jika tidak ada maka akan dikembalikan ke halaman login
			redirect('admin/login');
		}
	}
}