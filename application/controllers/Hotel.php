<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

	public function index()
	{
		$data['title']= "Sarana Hotel";
		$data['wisata'] = $this->Model_user->Allwisata();
		$data['sarana'] = $this->Model_user->Allsarana();
		$data['media'] = $this->Model_user->Allmedia();
		$data['budaya'] = $this->Model_user->Allbudaya();
		$data['data_wstg']= $this->Model_user->listwstg();
		$data['data_srng']= $this->Model_user->listsrng();
		$data['data_brtg']= $this->Model_user->listbrtg();
		$data['data_srnh']= $this->Model_user->listsrnh();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['data_kec']= $this->Model_user->listkec();
		$this->load->view('users/temp/header',$data);
		$this->load->view('users/temp/head',$data);
		$this->load->view('users/sarana/Hotel',$data);
		$this->load->view('users/temp/foot',$data);
		$this->load->view('users/temp/footer');
	}
	public function detail($id_sarana)
	{
		$data['title']= "Sarana Hotel";
		$data['wisata'] = $this->Model_user->Allwisata();
		$data['sarana'] = $this->Model_user->Allsarana();
		$data['media'] = $this->Model_user->Allmedia();
		$data['budaya'] = $this->Model_user->Allbudaya();
		$data['data_wstg']= $this->Model_user->listwstg();
		$data['data_srng']= $this->Model_user->listsrng();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['data_brtg']= $this->Model_user->listbrtg();
		$data['data_srn']= $this->Model_user->getlistsrn($id_sarana);
		$this->load->view('users/temp/header',$data);
		$this->load->view('users/temp/head',$data);
		$this->load->view('users/sarana/Detail',$data);
		$this->load->view('users/temp/foot',$data);
		$this->load->view('users/temp/footer');
	}
	public function cari()
	{
		$data['title']= "Cari Hotel";

		//ambil data dari cari
		$cari = $this->input->post('cari');

		$data['wisata'] = $this->Model_user->Allwisata();
		$data['sarana'] = $this->Model_user->Allsarana();
		$data['media'] = $this->Model_user->Allmedia();
		$data['budaya'] = $this->Model_user->Allbudaya();
		$data['data_wstg']= $this->Model_user->listwstg();
		$data['data_srng']= $this->Model_user->listsrng();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['data_brtg']= $this->Model_user->listbrtg();
		$data['data_srnh']= $this->Model_user->allcarihotel($cari);
		$data['data_kec']= $this->Model_user->listkec();
		$this->load->view('users/temp/header',$data);
		$this->load->view('users/temp/head',$data);
		$this->load->view('users/sarana/Hotelcari',$data);
		$this->load->view('users/temp/foot',$data);
		$this->load->view('users/temp/footer');
	}
}
