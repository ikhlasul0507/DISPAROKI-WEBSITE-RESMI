<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function index()
	{
		$data['title']= "Kontak Dinas Pariwisata Ogan Komering Ilir";
		$data['wisata'] = $this->Model_user->Allwisata();
		$data['sarana'] = $this->Model_user->Allsarana();
		$data['media'] = $this->Model_user->Allmedia();
		$data['budaya'] = $this->Model_user->Allbudaya();
		$data['data_wstg']= $this->Model_user->listwstg();
		$data['data_srng']= $this->Model_user->listsrng();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['data_brtg']= $this->Model_user->listbrtg();
		$data['data_info']= $this->Model_user->listinfo();
		$this->load->view('users/temp/header',$data);
		$this->load->view('users/temp/head',$data);
		$this->load->view('users/kontak/index',$data);
		$this->load->view('users/temp/foot',$data);
		$this->load->view('users/temp/footer');
	}
	public function tambahknt()
	{
		
		$waktu= date("d-m-Y h:i:s");
		$data = array(
			'nama_kontak' => $this->input->post('nama_kontak'),
			'email_kontak' => $this->input->post('email_kontak'),
			'judul_kontak' => $this->input->post('judul_kontak'),
			'pesan_kontak' => $this->input->post('pesan_kontak'),
			'waktu'=> $waktu
			);
		$this->Model_user->tambahknt($data);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
		redirect('Kontak',$data);
	}
	
}
