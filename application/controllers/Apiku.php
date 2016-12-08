<?php if(!defined('BASEPATH')) exit('No direct access allowed');
Class Apiku extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://blog.fajarsuryanto.com/wp-json";
    }
    
    // menampilkan data mahasiswa
    function index(){
        $data['mahasiswa'] = json_decode($this->curl->simple_get($this->API.'/wp/v2/posts'));
        $this->load->view('test/test',$data);
    }
}