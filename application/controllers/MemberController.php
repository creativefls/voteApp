<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberController extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    if (!$this->ion_auth->logged_in()) {
			redirect('auth/login');
		}
    // next step...
    if (!$this->ion_auth->in_group(2))
		{
			redirect('MainController');
			// echo "admin";
		}
  }

  public function index()
  {
    $data['user']				= $this->ion_auth->user()->row();
    $data['page']       = $this->uri->segment(2);

    $data['title'] 			= 'Selamat Datang Delegates';
    $data['content'] 		= 'contents/delegatesDashboard';
    // load file main
    $this->load->view('main', $data);
  }

  function kelas_workshop()
  {
    $data['user']				= $this->ion_auth->user()->row();
    $data['page']       = $this->uri->segment(2);

		$data['title'] 			= 'Kelas Workshop';
		$data['content'] 		= 'contents/kelas_workshop';
		// load file main
		$this->load->view('main', $data);
  }

  function voting_komunitas()
  {
    $data['user']				= $this->ion_auth->user()->row();
    $data['page']       = $this->uri->segment(2);

		$data['title'] 			= 'Voting Komunitas';
		$data['content'] 		= 'contents/vote_komunitas';
		// load file main
		$this->load->view('main', $data);
  }

  function informasi()
  {
    $data['user']				= $this->ion_auth->user()->row();
    $data['page']       = $this->uri->segment(2);

		$data['title'] 			= 'Informasi';
		$data['content'] 		= 'contents/informasi';
		// load file main
		$this->load->view('main', $data);
  }

}
