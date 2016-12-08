<?php if(!defined('BASEPATH')) exit('No direct access allowed');

/**
* Author : Fajar Suryanto
*/
class Home extends CI_Controller
{
	var $API ="";
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->API="http://blog.fajarsuryanto.com/wp-json";
	}

	public function index()
	{
		$data = array('title' => 'Fajar Suryanto',
			'user_det'			=> $this->home_model->get_user(),
			'detail'			=> $this->home_model->get_detail(),
			'service'			=> $this->home_model->get_services(),
			'work'				=> $this->home_model->get_work(),
			'edu'				=> $this->home_model->get_edu(),
			'skill'				=> $this->home_model->get_skill(),
			'blog'				=> json_decode($this->curl->simple_get($this->API.'/wp/v2/posts')),
			'portfolio'			=> $this->home_model->get_portfolio(),
			//'captcha' 			=> $this->recaptcha->getWidget(),
            //'script_captcha' 	=> $this->recaptcha->getScriptTag()
			);
		$this->load->view('home/index_home',$data);
	}

	public function contact()
	{
		$captcha_answer = $this->input->post('g-recaptcha-response');
        $response = $this->recaptcha->verifyResponse($captcha_answer);
        if ( !isset($response['success']) || $response['success'] <> true){
			$data = array (
                'name'		 		=> $this->input->post('name'),
                'email'				=> $this->input->post('email'),
                'message'			=> $this->input->post('message'),
                'status'			=> 'Open'
                );
            $this->home_model->add($data);
			redirect(base_url().'#contact');
		}
		redirect(base_url().'#contact');
	}
}