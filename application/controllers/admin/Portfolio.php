<?php if (!defined('BASEPATH')) exit('No dirrect script access allowed');

/**
* Author : Fajar Suryanto
*/
class Portfolio extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/user_model');
		$this->load->model('admin/portfolio_model');
	}

	public function index()
	{
		// Berfungsi untuk mengecek apakah ada session user yang login
		if ($this->session->userdata('email')) {
			$query = $this->user_model->login_user($this->session->userdata('email'));
			$data = array('title' => 'Portfolio - Fajar Suryanto',
			'user_det' 	=> $query,
			'avatar'	=> md5($this->session->userdata('email')),
			'detail'	=> $this->portfolio_model->get(),
			'isi' => 'admin/portfolio/portfolio_view'
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
                $data = array('title' 	=> 'Portfolio - Fajar Suryanto',
                                'user_det' 	=> $queryuser,
								'avatar'	=> md5($this->session->userdata('email')),
								'detail'	=> $this->portfolio_model->get(),
                                'isi'		=> 'admin/portfolio/portfolio_view'
                                );
                $this->load->view('admin/layout/wrapper', $data);
            } else {
                $data = array (
                    'title' 		=> $this->input->post('title'),
                    'detail' 		=> $this->input->post('detail'),
                    'link'	 		=> $this->input->post('link'),
                    'date' 			=> $this->input->post('date'),
                    );
                $this->portfolio_model->add($data);
                redirect(base_url().'admin/portfolio/');
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
			$data['portfolio'] = $this->portfolio_model->find($id);
            $this->form_validation->set_rules('title','Title','required');

            if ($this->form_validation->run() === FALSE) {
                $data = array('title' 	=> 'Update Portfolio: '.$data['portfolio']['title'].' - Fajar Suryanto',
                                'user_det' 		=> $queryuser,
								'avatar'		=> md5($this->session->userdata('email')),
								'detail'		=> $this->portfolio_model->get(),
								'portfolio'		=> $this->portfolio_model->find($id),
                                'isi'			=> 'admin/portfolio/portfolio_update'
                                );
                $this->load->view('admin/layout/wrapper', $data);
            } else {
                $data = array (
                	'id'			=> $this->input->post('id'),
                    'title' 		=> $this->input->post('title'),
                    'detail' 		=> $this->input->post('detail'),
                    'link'	 		=> $this->input->post('link'),
                    'date' 			=> $this->input->post('date'),
                    );
                $this->portfolio_model->edit($data);
                redirect(base_url().'admin/portfolio/');
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
			$this->portfolio_model->delete($id);
			redirect(base_url().'admin/portfolio/');
        }
		else{
			// jika tidak ada maka akan dikembalikan ke halaman login
			redirect('admin/login');
		}
	}
}