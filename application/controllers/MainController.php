<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// check sudah login belum
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['title'] 			= '';
		$data['custom_css'] = '';
		$data['custom_js'] 	= '';
		$data['content'] 		= '';
		// load file main
		$this->load->view('main', $data);
	}

}

/* End of file MainController.php */
/* Location: ./application/controllers/MainController.php */
