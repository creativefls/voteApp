<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		/*
		* ROLE user
		* 1 for Administrator
		* 2 for Member / Delegates
		*/
		// check sudah login belum
		if (!$this->ion_auth->logged_in()) {
			redirect('auth/login');
		}
		else
		{
			if ($this->ion_auth->in_group(1))
			{
				redirect('rangers');
				// echo "admin";
			}
			else if($this->ion_auth->in_group(2))
			{
				redirect('members');
				// echo "delegates";
			}
		}
	}

	public function eror404()
	{
		$this->load->view('errors/404');
	}

	public function tambah_user()
	{
			$user = $this->MainModel->getListData('delegates',null,null,null);

			foreach ($user as $data) {
				$email = $data['email'];
				$password = 'delegates';
				$identity = $data['username'];
				$additional_data = array(
					'first_name' => $data['nama'],
					'last_name'  => 'FLS',
					'company'    => '2017',
					'phone'      => '0',
				);
				// insert data
				$this->ion_auth->register($identity, $password, $email, $additional_data);
			}
	}


}

/* End of file MainController.php */
/* Location: ./application/controllers/MainController.php */
