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

}
