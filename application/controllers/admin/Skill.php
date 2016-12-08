<?php if (!defined('BASEPATH')) exit('No dirrect script access allowed');

/**
* Author : Fajar Suryanto
*/
class Skill extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/user_model');
		$this->load->model('admin/skill_model');
	}

	public function index()
	{
		// Berfungsi untuk mengecek apakah ada session user yang login
		if ($this->session->userdata('email')) {
			$query = $this->user_model->login_user($this->session->userdata('email'));
			$data = array('title' => 'Skill - Fajar Suryanto',
			'user_det' 	=> $query,
			'avatar'	=> md5($this->session->userdata('email')),
			'detail'	=> $this->skill_model->get(),
			'isi' => 'admin/skill/skill_view'
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
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('progress','Progress','required');

            if ($this->form_validation->run() === FALSE) {
                $data = array('title' 	=> 'Skill - Fajar Suryanto',
                                'user_det' 	=> $queryuser,
								'avatar'	=> md5($this->session->userdata('email')),
								'detail'	=> $this->skill_model->get(),
                                'isi'		=> 'admin/skill/skill_view'
                                );
                $this->load->view('admin/layout/wrapper', $data);
            } else {
                $data = array (
                    'name' 	=> $this->input->post('name'),
                    'progress' 		=> $this->input->post('progress')
                    );
                $this->skill_model->add($data);
                redirect(base_url().'admin/skill/');
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
			$data['skill'] = $this->skill_model->find($id);
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('progress','Progress','required');

            if ($this->form_validation->run() === FALSE) {
                $data = array('title' 	=> 'Update Skill: '.$data['skill']['name'].' - Fajar Suryanto',
                                'user_det' 	=> $queryuser,
								'avatar'	=> md5($this->session->userdata('email')),
								'detail'	=> $this->skill_model->get(),
								'skill'		=> $this->skill_model->find($id),
                                'isi'		=> 'admin/skill/skill_update'
                                );
                $this->load->view('admin/layout/wrapper', $data);
            } else {
                $data = array (
                	'id'		=> $this->input->post('id'),
                    'name'	 	=> $this->input->post('name'),
                    'progress'	=> $this->input->post('progress')
                    );
                $this->skill_model->edit($data);
                redirect(base_url().'admin/skill/');
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
			$this->skill_model->delete($id);
			redirect(base_url().'admin/skill/');
        }
		else{
			// jika tidak ada maka akan dikembalikan ke halaman login
			redirect('admin/login');
		}
	}
}