<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('Ciqrcode');

	}

	public function index()
	{
		$data['title']= "Dinas Pariwisata Ogan Komering Ilir";
		$data['wisata'] = $this->Model_user->Allwisata();
		$data['sarana'] = $this->Model_user->Allsarana();
		$data['media'] = $this->Model_user->Allmedia();
		$data['budaya'] = $this->Model_user->Allbudaya();
		$data['data_asp']= $this->Model_user->listasp();
		$data['data_wst']= $this->Model_user->listwst();
		$data['data_bdy']= $this->Model_user->listbdy();
		$data['data_brt']= $this->Model_user->listbrt();
		$data['data_srn']= $this->Model_user->listsrn();
		$data['data_wstg']= $this->Model_user->listwstg();
		$data['data_srng']= $this->Model_user->listsrng();
		$data['data_brtg']= $this->Model_user->listbrtg();
		$data['data_wstmap']= $this->Model_user->listwstmap();
		$data['data_srnmap']= $this->Model_user->listsrnmap();
		$data['data_bdymap']= $this->Model_user->listbdymap();
		$data['data_info']= $this->Model_user->listinfo();
		$data['video']= $this->Model_user->listwstv();
		$data['data_kec']= $this->Model_user->listkec();
		$data['data_joinkecdes']= $this->Model_user->listdes();
		$data['kode'] = $this->Model_user->kode();
		$data['video_sar']= $this->Model_user->listsrnv();
		$data['video_bud']= $this->Model_user->listbdyv();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$this->load->view('users/temp/header',$data);
		$this->load->view('users/temp/head',$data);
		$this->load->view('users/home/index',$data);
		$this->load->view('users/temp/foot',$data);
		$this->load->view('users/temp/footer');
	}
	public function listwstmap()
	{
		$this->db->select('*');
		$this->db->from('tbl_master_wisata');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_wisata.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_wisata.kode_desa');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_master_wisata.kode_wisata','left');
		$query = $this->db->get()->result();
 		echo json_encode($query);
	}
	public function detail_wst($id_master_wisata)
	{
		
		$data['title']= "Destinasi Wisata";
		$data['wisata'] = $this->Model_user->Allwisata();
		$data['sarana'] = $this->Model_user->Allsarana();
		$data['media'] = $this->Model_user->Allmedia();
		$data['budaya'] = $this->Model_user->Allbudaya();
		$data['data_wstg']= $this->Model_user->listwstg();
		$data['data_srng']= $this->Model_user->listsrng();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['data_brtg']= $this->Model_user->listbrtg();
		$data['dwisata'] = $this->Model_user->getAllwisata($id_master_wisata);
		$this->load->view('users/temp/header',$data);
		$this->load->view('users/temp/head',$data);
		$this->load->view('users/destinasi/Detail',$data);
		$this->load->view('users/temp/foot',$data);
		$this->load->view('users/temp/footer');
	}
	public function detail_bdy($id_master_budaya)
	{
		$data['title']= "Detail Tradisi Lisan";
		$data['wisata'] = $this->Model_user->Allwisata();
		$data['sarana'] = $this->Model_user->Allsarana();
		$data['media'] = $this->Model_user->Allmedia();
		$data['budaya'] = $this->Model_user->Allbudaya();
		$data['data_wstg']= $this->Model_user->listwstg();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['data_srng']= $this->Model_user->listsrng();
		$data['data_brtg']= $this->Model_user->listbrtg();
		$data['data_bdy']= $this->Model_user->getlistbdy($id_master_budaya);
		$this->load->view('users/temp/header',$data);
		$this->load->view('users/temp/head',$data);
		$this->load->view('users/budaya/Detail',$data);
		$this->load->view('users/temp/foot',$data);
		$this->load->view('users/temp/footer');
	}
	public function detail_brt($id_berita)
	{
		$data['title']= "Detail Berita Dinas Pariwisata Ogan Komering Ilir";
		$data['wisata'] = $this->Model_user->Allwisata();
		$data['sarana'] = $this->Model_user->Allsarana();
		$data['media'] = $this->Model_user->Allmedia();
		$data['budaya'] = $this->Model_user->Allbudaya();
		$data['data_wstg']= $this->Model_user->listwstg();
		$data['data_srng']= $this->Model_user->listsrng();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
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
	public function tambahpgj()
	{
		$data = array(
				'kode_pengajuan' => $this->input->post('kode_pengajuan'),
				'kode_kecamatan'=> $this->input->post('kode_kecamatan'),
				'kode_desa'=> $this->input->post('kode_desa'),
				'nama_pengajuan'=> $this->input->post('nama_pengajuan'),
				'photo_pengajuan'=> $this->input->post('photo_pengajuan'),
				'deskripsi_pengajuan'=> $this->input->post('deskripsi_pengajuan'),
				'alamat_pengajuan'=> $this->input->post('alamat_pengajuan'),
				'kontak_pengajuan'=> $this->input->post('kontak_pengajuan'),
				'status_pengajuan'=> 0
			);
		if (!empty($_FILES['photo_pengajuan']['name'])) 
			{
				$upload = $this->_do_upload_pengajuan();
				$data['photo_pengajuan'] = $upload;
			}
		$this->Model_user->tambahpgj($data);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
		redirect('Home',$data);
	}
	//upload foto
	private function _do_upload_pengajuan()
	{
		$config['upload_path'] 		= './assets/admin/img/pengajuan';
		$config['allowed_types'] 	= 'jpeg|jpg|png';
		$config['max_size'] 		= 3000;
		$config['max_width'] 		= 3000;
		$config['max_height']  		= 3000;
		$config['file_name'] 		= $this->input->post('photo_aspirasi');
 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('photo_pengajuan')) {
			$data = $this->session->set_flashdata('pesan','Photo Gagal Upload');
			redirect('Home',$data);
		}
		return $this->upload->data('file_name');
	}
	public function tambahasp()
	{
		$data = array(
				'judul_aspirasi' => $this->input->post('judul_aspirasi'),
				'photo_aspirasi'=> $this->input->post('photo_aspirasi'),
				'aspirasi'=> $this->input->post('aspirasi')
			);
		if (!empty($_FILES['photo_aspirasi']['name'])) 
			{
				$upload = $this->_do_upload_aspirasi();
				$data['photo_aspirasi'] = $upload;
			}
		$this->Model_user->tambahasp($data);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
		redirect('Home',$data);
	}
	//upload foto
	private function _do_upload_aspirasi()
	{
		$config['upload_path'] 		= './assets/users/gambar';
		$config['allowed_types'] 	= 'jpeg|jpg|png';
		$config['max_size'] 		= 3000;
		$config['max_width'] 		= 3000;
		$config['max_height']  		= 3000;
		$config['file_name'] 		= $this->input->post('photo_aspirasi');
 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('photo_aspirasi')) {
			$data = $this->session->set_flashdata('pesan','Photo Gagal Upload');
			redirect('Home',$data);
		}
		return $this->upload->data('file_name');
	}
	public function detail_srn($id_sarana)
	{
		$data['title']= "Sarana Karoke";
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

		//AMBIL DATA DARI
		$cari = $this->input->post('cari');

		//menandai teks
		$data['high'] = $cari;

		$data['title']= "Dinas Pariwisata Ogan Komering Ilir";
		$data['wisata'] = $this->Model_user->Allwisata();
		$data['sarana'] = $this->Model_user->Allsarana();
		$data['media'] = $this->Model_user->Allmedia();
		$data['budaya'] = $this->Model_user->Allbudaya();
		$data['data_asp']= $this->Model_user->listasp();
		$data['data_wst']= $this->Model_user->listwst();
		$data['data_bdy']= $this->Model_user->listbdy();
		$data['data_brt']= $this->Model_user->listbrt();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['data_srn']= $this->Model_user->listsrn();
		$data['data_wstg']= $this->Model_user->listwstg();
		$data['data_srng']= $this->Model_user->listsrng();
		$data['data_brtg']= $this->Model_user->listbrtg();
		$data['data_wstmap']= $this->Model_user->listwstmap();
		$data['data_srnmap']= $this->Model_user->listsrnmap();
		$data['data_bdymap']= $this->Model_user->listbdymap();
		$data['data_info']= $this->Model_user->listinfo();
		$data['video']= $this->Model_user->listwstv();
		$data['data_kec']= $this->Model_user->listkec();
		$data['data_joinkecdes']= $this->Model_user->listdes();
		$data['kode'] = $this->Model_user->kode();
		$data['video_sar']= $this->Model_user->listsrnv();
		$data['video_bud']= $this->Model_user->listbdyv();
		$data['listwst']=$this->Model_user->cariwisata($cari);
		$data['listbdy']=$this->Model_user->caribudaya($cari);
		$data['listsrn']=$this->Model_user->carisarana($cari);
		$data['listbrt']=$this->Model_user->cariberita($cari);
		$this->load->view('users/temp/header',$data);
		$this->load->view('users/temp/head',$data);
		$this->load->view('users/home/cari',$data);
		$this->load->view('users/temp/foot',$data);
		$this->load->view('users/temp/footer');
	}
	//Generate QRCode
	public function QRcode($id_master_wisata)
	{
		$data['wisata']= $this->db->get_where('tbl_master_wisata', ['id_master_wisata' => $id_master_wisata])->row_array();

		$isi = $data['wisata']['link_google'];
		$nama = $data['wisata']['nama_master_wisata'];
		
		//prameter
		$params['data'] = $isi;
		$params['level'] = 'H';
		$params['size'] = 10;
		$params['savename'] = FCPATH.'tes.png';
		$this->ciqrcode->generate($params);

		echo '<center><h4>'.$nama.'</h4>Scan Alamat : '.$isi.'<br><img src="'.base_url().'tes.png" />';
		
	}
	public function QRcodesar($id_sarana)
	{
		$data['sarana']= $this->db->get_where('tbl_master_sarana', ['id_sarana' => $id_sarana])->row_array();

		$isi = $data['sarana']['link_google'];
		$nama = $data['sarana']['nama_master_sarana'];
		
		//prameter
		$params['data'] = $isi;
		$params['level'] = 'H';
		$params['size'] = 10;
		$params['savename'] = FCPATH.'tes.png';
		$this->ciqrcode->generate($params);

		echo '<center><h4>'.$nama.'</h4>Scan Alamat : '.$isi.'<br><img src="'.base_url().'tes.png" />';
		
	}
	public function QRcodebud($id_master_budaya)
	{
		$data['budaya']= $this->db->get_where('tbl_master_budaya', ['id_master_budaya' => $id_master_budaya])->row_array();

		$isi = $data['budaya']['link_google'];
		$nama = $data['budaya']['nama_master_budaya'];
		
		//prameter
		$params['data'] = $isi;
		$params['level'] = 'H';
		$params['size'] = 10;
		$params['savename'] = FCPATH.'tes.png';
		$this->ciqrcode->generate($params);

		echo '<center><h4>'.$nama.'</h4>Scan Alamat : '.$isi.'<br><img src="'.base_url().'tes.png" />';
		
	}
}
