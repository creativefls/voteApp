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
    $data['workshop']   = $this->MainModel->getRowData('users','count(id_workshop) as jumlah');
    $data['komunitas']  = $this->MainModel->getRowData('users','count(id_komunitas) as jumlah');

		$data['title'] 			= 'Selamat Datang Rangers!';
		$data['content'] 		= 'contents/admin/adminDashboard';
		// load file main
		$this->load->view('main', $data);
	}

  function bukaTutupKelas()
  {
    // funtion data
    $data['user']				= $this->ion_auth->user()->row();
    // lihat kelas sekarang
    $data['is_buka']    = $this->MainModel->getListData('waktu_buka',null,null,null);

		$data['title'] 			= 'Buka-Tutup Kelas';
		$data['content'] 		= 'contents/admin/is_buka';
		// load file main
		$this->load->view('main', $data);
  }

  // function untuk update buka-tutup kelas
  function buka_tutup($id_buka, $key)
  {
    // update ciee ciee
    $data = array(
      'is_buka' => $key
    );
    $this->MainModel->updateData('waktu_buka',$data,'id_buka = '.$id_buka.'');
    if ($this->db->affected_rows()) {
      // jika berhasil ada perubahan
      $this->session->set_flashdata('pesan','Berhasil melakukan perubahan.');
    }
    else {
      $this->session->set_flashdata('pesan','Tidak ada perubahan. Periksa Kembali');
    }
    redirect('rangers/bukaTutupKelas');
  }

  // ***************************************************************
  function list_workshop()
  {
    // funtion data
    $data['user']				= $this->ion_auth->user()->row();
    // lihat kelas sekarang
    $data['workshop']   = $this->MainModel->getListData('kelas_workshop',null,null,null);

		$data['title'] 			= 'List Kelas Workshop';
		$data['content'] 		= 'contents/admin/workshop_list';
		// load file main
		$this->load->view('main', $data);
  }

  function peserta_workshop($id_workshop)
  {
    $data['user']				= $this->ion_auth->user()->row();
    // lihat kelas sekarang
    $data['peserta']    = $this->MainModel->getListData('users','id_workshop = '.$id_workshop.'',null,null);
    $data['workshop']   = $this->MainModel->getRowDataWhere('kelas_workshop','*','id_workshop = '.$id_workshop.'');

		$data['title'] 			= 'Peserta Workshop';
		$data['content'] 		= 'contents/admin/workshop_peserta';
		// load file main
		$this->load->view('main', $data);
  }

  // ***************************************************************
  function list_komunitas()
  {
    $data['user']				= $this->ion_auth->user()->row();
    // lihat kelas sekarang
    $data['komunitas']  = $this->MainModel->getListKomunitas();

		$data['title'] 			= 'Hasil Vote Komunitas';
		$data['content'] 		= 'contents/admin/komunitas_list';
		// load file main
		$this->load->view('main', $data);
  }

}
