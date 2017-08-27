<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    if (!$this->ion_auth->logged_in()) {
			redirect('auth/login');
		}
    // next step...
    if (!$this->ion_auth->in_group(1))
		{
			redirect('MainController');
			// echo "admin";
		}
  }

  public function index()
	{
    // funtion data
    $data['user']				= $this->ion_auth->user()->row();
    $data['page']       = $this->uri->segment(2);
      
		$data['title'] 			= 'Selamat Datang Rangers!';
		$data['custom_css'] = '';
		$data['custom_js'] 	= '';
		$data['content'] 		= 'contents/adminDashboard';
		// load file main
		$this->load->view('main', $data);
	}

}
