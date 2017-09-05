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
    // kelas dibuka ? 1 untuk kelas_workshop | 2 untuk vote kelas
    $data['is_buka']    = $this->MainModel->getRowDataWhere('waktu_buka','is_buka as hasil','id_buka = 1');
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
    // cek apakah admin ? kalau admin gak boleh isis
    if ($this->ion_auth->is_admin()) {
      redirect('MainController');
    }
    // cek dulu apakah user udah memilih kelas.. kalau udah TOLAK AJA!!!!
    $isFill = $this->MainModel->getRowDataWhere('users','id_workshop as hasil','id = '.$user_id.'');
    // cek hasilnya..
    if ($isFill['hasil'] != NULL) {
      // jika hasilnya tidak sama dengan NULL maka..
      $this->session->set_flashdata('pesan','Mohon maaf Young Leader, kamu sudah memilih kelas workshop. Berikut kelas yang kamu pilih..');
      redirect('members/kelas_workshop');
    }
    // jika ternyata belum memilih..
    else {
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
  }

  function voting_komunitas()
  {
    $data['user']				     = $this->ion_auth->user()->row();
    $data['list_organisasi'] = $this->MainModel->getListData('komunitas',null,null,null);
    // kelas dibuka ? 1 untuk kelas_workshop | 2 untuk vote kelas
    $data['is_buka']    = $this->MainModel->getRowDataWhere('waktu_buka','is_buka as hasil','id_buka = 2');

		$data['title'] 			= 'Voting Komunitas';
		$data['content'] 		= 'contents/vote_organisasi';
		// load file main
		$this->load->view('main', $data);
  }

  function vote($user_id, $id_komunitas)
  {
    // cek admin --> jika iya tolak
    if ($this->ion_auth->is_admin()) {
      redirect('MainController');
    }
    // check apakah user sudah voting
    $isFill = $this->MainModel->getRowDataWhere('users','id_komunitas as hasil','id = '.$user_id.'');
    // cek hasilnya..
    if ($isFill['hasil'] != NULL) {
      // jika hasilnya tidak sama dengan NULL maka..
      $this->session->set_flashdata('pesan','Mohon maaf Young Leader, kamu sudah melakukan voting komunitas. Berikut komunitas yang kamu vote..');
      redirect('members/voting_komunitas');
    }
    // jika hasilnya NULL bisa melakukan voting..
    else {
      $data = array(
        'id_komunitas' => $id_komunitas
      );

      $this->MainModel->updateData('users',$data, 'id = '.$user_id.'');
      // cek apakah berhasil melakukan update...
      if ($this->db->affected_rows()) {
        // jika berhasil..
        $this->session->set_flashdata('pesan','Yey! Kamu berhasil melakukan voting untuk komunitas pilihanmu. Berikut merupakan komunitas pilihanmu..');
        redirect('members/voting_komunitas');
      }
      // jika gagal melakukan proses update..
      else {
        $this->session->set_flashdata('pesan','Oppp! ada kesalahan dalam proses voting. Mohon coba beberapa saat lagi');
        redirect('members/voting_komunitas');
      }
    }
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
