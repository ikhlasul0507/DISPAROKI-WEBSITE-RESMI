<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengetahuanTradisional extends CI_Controller {

	public function index()
	{
		$data['title']= "Pengetahuan Tradisional";
		$data['wisata'] = $this->Model_user->Allwisata();
		$data['sarana'] = $this->Model_user->Allsarana();
		$data['media'] = $this->Model_user->Allmedia();
		$data['budaya'] = $this->Model_user->Allbudaya();
		$data['data_wstg']= $this->Model_user->listwstg();
		$data['data_srng']= $this->Model_user->listsrng();
		$data['data_brtg']= $this->Model_user->listbrtg();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['data_bdypt']= $this->Model_user->listbdypt();
		$data['data_kec']= $this->Model_user->listkec();
		$this->load->view('users/temp/header',$data);
		$this->load->view('users/temp/head',$data);
		$this->load->view('users/budaya/pengetahuantradisional',$data);
		$this->load->view('users/temp/foot',$data);
		$this->load->view('users/temp/footer');
	}
	public function detail($id_master_budaya)
	{
		$data['title']= "Detail Ritus";
		$data['wisata'] = $this->Model_user->Allwisata();
		$data['sarana'] = $this->Model_user->Allsarana();
		$data['media'] = $this->Model_user->Allmedia();
		$data['budaya'] = $this->Model_user->Allbudaya();
		$data['data_wstg']= $this->Model_user->listwstg();
		$data['data_srng']= $this->Model_user->listsrng();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['data_brtg']= $this->Model_user->listbrtg();
		$data['data_bdy']= $this->Model_user->getlistbdy($id_master_budaya);
		$this->load->view('users/temp/header',$data);
		$this->load->view('users/temp/head',$data);
		$this->load->view('users/budaya/Detail',$data);
		$this->load->view('users/temp/foot',$data);
		$this->load->view('users/temp/footer');
	}
	public function cari()
	{
		$data['title']= "Cari Pengetahuan Tradisional";

		//ambil data dari cari
		$cari = $this->input->post('cari');

		$data['wisata'] = $this->Model_user->Allwisata();
		$data['sarana'] = $this->Model_user->Allsarana();
		$data['media'] = $this->Model_user->Allmedia();
		$data['budaya'] = $this->Model_user->Allbudaya();
		$data['data_wstg']= $this->Model_user->listwstg();
		$data['data_srng']= $this->Model_user->listsrng();
		$data['data_brtg']= $this->Model_user->listbrtg();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['data_bdypt']= $this->Model_user->allcaripengetahuan($cari);
		$data['data_kec']= $this->Model_user->listkec();
		$this->load->view('users/temp/header',$data);
		$this->load->view('users/temp/head',$data);
		$this->load->view('users/budaya/pengetahuantradisionalcari',$data);
		$this->load->view('users/temp/foot',$data);
		$this->load->view('users/temp/footer');
	}
}
