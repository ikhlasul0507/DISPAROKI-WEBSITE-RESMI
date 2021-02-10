<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function index()
	{
		$data['title']= "Berita Dinas Pariwisata Ogan Komering Ilir";
		$this->load->library('pagination');
		//config
				$config['base_url']= base_url().'Berita/index';
				$config['total_rows']= $this->Model_user->countAllBerita();
				$config['per_page']= 5;
				$config['num_links']= 3;
		//styling

				$config['full_tag_open']= '<nav>
  						<ul class="pagination justify-content-center">';
				$config['full_tag_close']= '</ul></nav>';

				$config['first_link']= 'First';
				$config['first_tag_open']= '<li class="page-item">';
				$config['first_tag_close']= '</li>';

				$config['last_link']= 'Last';
				$config['last_tag_open']= '<li class="page-item">';
				$config['last_tag_close']= '</li>';

				$config['next_link']= '&raquo';
				$config['next_tag_open']= '<li class="page-item">';
				$config['next_tag_close']= '</li>';

				$config['prev_link']= '&laquo';
				$config['prev_tag_open']= '<li class="page-item">';
				$config['prev_tag_close']= '</li>';

				$config['cur_tag_open']= '<li class="page-item active"><a class="page-link" href="#">';
				$config['cur_tag_close']= '</a></li>';

				$config['num_tag_open']= '<li class="page-item">';
				$config['num_tag_close']= '</li>';

				$config['attributes']= array('class'=> 'page-link');

				//inittialize
				$this->pagination->initialize($config);


				//segment pada link uri di web browser ppada folder berapa
		$data['start'] = $this->uri->segment(3);
		$data['data_brtgp']= $this->Model_user->getBerita( $config['per_page'], $data['start']);

		$data['wisata'] = $this->Model_user->Allwisata();
		$data['sarana'] = $this->Model_user->Allsarana();
		$data['media'] = $this->Model_user->Allmedia();
		$data['budaya'] = $this->Model_user->Allbudaya();
		$data['data_wstg']= $this->Model_user->listwstg();
		$data['data_srng']= $this->Model_user->listsrng();
		$data['data_brtg']= $this->Model_user->alllistbrt();
		$data['limit_brtg']= $this->Model_user->limitlistbrt();
		$this->load->view('users/temp/header',$data);
		$this->load->view('users/temp/head',$data);
		$this->load->view('users/berita/index',$data);
		$this->load->view('users/berita/sidebar',$data);
		$this->load->view('users/temp/foot',$data);
		$this->load->view('users/temp/footer');
	}
	public function detail($id_berita)
	{
		$data['title']= "Detail Berita Dinas Pariwisata Ogan Komering Ilir";
		$data['wisata'] = $this->Model_user->Allwisata();
		$data['sarana'] = $this->Model_user->Allsarana();
		$data['media'] = $this->Model_user->Allmedia();
		$data['budaya'] = $this->Model_user->Allbudaya();
		$data['data_wstg']= $this->Model_user->listwstg();
		$data['data_srng']= $this->Model_user->listsrng();
		$data['data_brtg']= $this->Model_user->listbrtg();
		$data['limit_brtg']= $this->Model_user->limitlistbrt();
		$data['berita'] = $this->Model_user->getAllberita($id_berita);
		$data['berita_prev'] = $this->Model_user->prevAllberita($id_berita);
		$data['berita_next'] = $this->Model_user->nextAllberita($id_berita);
		$this->load->view('users/temp/header',$data);
		$this->load->view('users/temp/head',$data);
		$this->load->view('users/berita/detail',$data);
		$this->load->view('users/berita/sidebar',$data);
		$this->load->view('users/temp/foot',$data);
		$this->load->view('users/temp/footer');
	}
	public function cari()
	{
		

		$data['title']= "Berita Dinas Pariwisata Ogan Komering Ilir";

		$cari = $this->input->post('cari');


		$data['high'] = $cari;
		$data['wisata'] = $this->Model_user->Allwisata();
		$data['sarana'] = $this->Model_user->Allsarana();
		$data['media'] = $this->Model_user->Allmedia();
		$data['budaya'] = $this->Model_user->Allbudaya();
		$data['data_wstg']= $this->Model_user->listwstg();
		$data['data_srng']= $this->Model_user->listsrng();
		$data['data_brtg']= $this->Model_user->cariAllberita($cari);
		$data['limit_brtg']= $this->Model_user->limitlistbrt();
		$this->load->view('users/temp/header',$data);
		$this->load->view('users/temp/head',$data);
		$this->load->view('users/berita/cari',$data);
		$this->load->view('users/berita/sidebar',$data);
		$this->load->view('users/temp/foot',$data);
		$this->load->view('users/temp/footer');
	}
}
