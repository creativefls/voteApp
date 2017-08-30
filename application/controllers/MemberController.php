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

    $data['title'] 			= 'Selamat Datang Delegates';
    $data['content'] 		= 'contents/delegatesDashboard';
    // load file main
    $this->load->view('main', $data);
  }

  function kelas_workshop()
  {
    $data['user']				= $this->ion_auth->user()->row();
    $data['list_kelas'] = $this->MainModel->getListData('kelas_workshop',null,null,null);
    //cek ketersediaan kelas
    $data['branding']   = $this->MainModel->countObject('users','id_workshop','id_workshop = 3');
    $data['presentation_skill'] = $this->MainModel->countObject('users','id_workshop','id_workshop = 4');
    $data['kelas_content']      = $this->MainModel->countObject('users','id_workshop','id_workshop = 2');
    $data['idea_develop']       = $this->MainModel->countObject('users','id_workshop','id_workshop = 1');
    $data['customer_insight']   = $this->MainModel->countObject('users','id_workshop','id_workshop = 4');

		$data['title'] 			= 'Kelas Workshop';
		$data['content'] 		= 'contents/kelas_workshop';
		// load file main
		$this->load->view('main', $data);
  }

  // pilih kelas
  function pilih_kelas($user_id, $id_workshop)
  {
    // cek kuota kelas terlebih dulu
    $kuota = $this->MainModel->countObject('users','id_workshop','id_workshop = '.$id_workshop.'');
    $nilai = $kuota['jumlah'];

    if ($nilai >= 50) {
      $this->session->set_flashdata('pesan','Maaf Young Leaders!, Kamu kurang cepet.. :( <br> Pilih kelas lain ya..');
      redirect('members/kelas_workshop');
    }
    else if($nilai >= 0 && $nilai <= 49){
      // tambahkan user ke kelas tersebut
      // dengan cara update data id_workshop pada table users
      $data = array(
        'id_workshop' => $id_workshop
      );
      $this->MainModel->updateData('users', $data, 'id = '.$user_id.'');
      // periksa apakah terjadi update didatabase
      if ($this->db->affected_rows()) {
        $this->session->set_flashdata('pesan','Yey! Kamu berhasil ikut kelas');
        redirect('members/kelas_workshop');
      }
    }
  }

  function voting_komunitas()
  {
    $data['user']				= $this->ion_auth->user()->row();

		$data['title'] 			= 'Voting Komunitas';
		$data['content'] 		= 'contents/vote_komunitas';
		// load file main
		$this->load->view('main', $data);
  }

  function informasi()
  {
    $data['user']				= $this->ion_auth->user()->row();
    $data['list_kelas'] = $this->MainModel->getListData('kelas_workshop',null,null,null);

		$data['title'] 			= 'Informasi';
		$data['content'] 		= 'contents/informasi';
		// load file main
		$this->load->view('main', $data);
  }

}
