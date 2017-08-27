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
		/*
		* ROLE user
		* 1 for Administrator
		* 2 for Member / Delegates
		*/
		if ($this->ion_auth->in_group(1))
		{
			redirect('AdminController');
			// echo "admin";
		}
		else if($this->ion_auth->in_group(2))
		{
			redirect('MemberController');
			// echo "delegates";
		}
	}

	function login()
	{
		$this->load->view('login');
	}

}

/* End of file MainController.php */
/* Location: ./application/controllers/MainController.php */
