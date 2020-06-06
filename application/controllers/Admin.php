<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_admin','MA');
		$this->load->library('Ciqrcode');

		if(!$this->session->userdata('email')){
			//jika ada user masuk sembarangan
        	$data = $this->session->set_flashdata('pesan', 'Anda Belum Login !');
			redirect('auth',$data);
		}
	}
	public function index()
	{
		$data['judul']='Beranda Admin';
		$data['link']='Beranda Utama';
		$data['link1']='';
		$data['data_kec']= $this->MA->listkec();
		$data['jabatan']= $this->MA->listjab();
		$data['data_str']= $this->MA->liststr();
		$data['data_brt']= $this->MA->listbrt();
		$data['pgj']= $this->MA->listpgj();
		$data['data_kon']= $this->MA->listkon();
		$data['data_asp']= $this->MA->listasp();
		$data['data_wstmap']= $this->MA->listwstmap();
		$data['data_srnmap']= $this->MA->listsrnmap();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['data_bdymap']= $this->MA->listbdymap();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/beranda/index',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
		
	}
	//data kecamatan
	public function namakec()
	{
		
		$data['judul']='Data Nama Kecamatan';
		$data['link']='Data';
		$data['link1']='Nama Kecamatan';
		$data['data_kec'] = $this->MA->listkec();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/data/namakec',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
	}
	//tambah data
	public function iboaxvbjvygadolazgrf()
	{

		$data = array(
				'kode_kecamatan' => $this->input->post('kode_kecamatan'),
				'nama_kecamatan' => $this->input->post('nama_kecamatan')
			);
		$this->MA->tambahkec($data);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
		redirect('admin/namakec',$data);
	}
	//hapus kec
	public function tfgdkceheokdksflgjye($id)
	{
		$this->MA->hapuskec($id);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus  !');
		redirect('admin/namakec',$data);
	}
	public function ubahkec($id)
	{
		$data = array(
				'kode_kecamatan' => $this->input->post('kode_kecamatan'),
				'nama_kecamatan' => $this->input->post('nama_kecamatan')
			);
		$pesan = $this->session->set_flashdata('pesan', 'Data Berhasil Di Ubah  !');
		$this->MA->ubahkec($id,$data);
		redirect('admin/namakec',$pesan);
	}
	//export excel data kecamatan
	public function csfmerhrgoyvvetwvlbe()
    {
    	$data = array( 'title' => 'Laporan Excel | Data Kecamatan','data_kec' => $this->MA->listkec());
    	$this->load->view('admin/data/excel_kec',$data);
    }
    //print data kecamatan
    public function pbrjlgxiukjwmzpfdpbw()
    {
    	$data['judul']='Cetak Data Kecamatan';
    	$data['data_kec']= $this->MA->listkec();
    	$this->load->view('admin/data/printkec',$data);
    }
    //data desa
	public function namades()
	{
		
		$data['judul']='Data Nama Desa';
		$data['link']='Data';
		$data['link1']='Nama Desa';
		$data['data_des']= $this->MA->listdes();
		$data['data_kec'] = $this->MA->listkec();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/data/namades',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
	}
	//tambah desa
	public function tqwmcwxvhpuuycwofohx()
	{

		$data = array(
				'kode_desa'=> $this->input->post('kode_desa'),
				'kode_kecamatan' => $this->input->post('kode_kecamatan'),
				'nama_desa' => $this->input->post('nama_desa')
			);
		$this->MA->tambahdes($data);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
		redirect('admin/namades',$data);
	}
	//hapus desa
	public function wsliqhoxiakdmfurzeac($kode_desa)
	{
		$this->MA->hapusdes($kode_desa);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus  !');
		redirect('admin/namades',$data);
	}
	//ubah desa
	public function ubahdes($id_desa)
	{
		$data = array(
				'kode_desa'=> $this->input->post('kode_desa'),
				'kode_kecamatan' => $this->input->post('kode_kecamatan'),
				'nama_desa' => $this->input->post('nama_desa')
			);
		$this->MA->ubahdes($id_desa,$data);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit  !');
		redirect('admin/namades',$data);
	}
	//export excel data desa
	public function jmzoclrmbehinbdafxtw()
    {
    	$data = array( 'title' => 'Laporan Excel | Data Desa','data_des' => $this->MA->listdes());
    	$this->load->view('admin/data/excel_des',$data);
    }
     //print data desa
    public function trmxbxfeszumgnfepjoz()
    {
    	$data['judul']='Cetak Data Desa';
    	$data['data_des']= $this->MA->listdes();
    	$this->load->view('admin/data/printdes',$data);
    }
    //data sarana
	public function namasar()
	{
		
		$data['judul']='Data Nama Sarana';
		$data['link']='Data';
		$data['link1']='Nama Sarana';
		$data['data_sar']= $this->MA->listsar();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/data/namasar',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
	}
	//tambah sarana
	public function rnaobnnflirmmoytxpvr()
	{

		$data = array(
				'kode_sarana'=> $this->input->post('kode_sarana'),
				'nama_sarana' => $this->input->post('nama_sarana'),
				'link' => $this->input->post('link')
			);
		$this->MA->tambahsar($data);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
		redirect('admin/namasar',$data);
	}
	//hapus sarana
	public function qsktzhefmplaifwadbet($id)
	{
		$this->MA->hapussar($id);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus  !');
		redirect('admin/namasar',$data);
	}
	//ubah sarana
	public function ubahsar($id)
	{
		$data = array(
				'kode_sarana'=> $this->input->post('kode_sarana'),
				'nama_sarana' => $this->input->post('nama_sarana'),
				'link' => $this->input->post('link')
			);
		$this->MA->ubahsar($id,$data);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit  !');
		redirect('admin/namasar',$data);
	}
	//export excel data sarana
	public function jdahjpfgssjzsfeutjtf()
    {
    	$data = array( 'title' => 'Laporan Excel | Data Sarana','data_sar' => $this->MA->listsar());
    	$this->load->view('admin/data/excel_sar',$data);
    }
     //print data sarana
    public function lvzrvvbnqfujwdkgmrld()
    {
    	$data['judul']='Cetak Data Sarana';
    	$data['data_sar']= $this->MA->listsar();
    	$this->load->view('admin/data/printsar',$data);
    }
    //data budaya
	public function namabud()
	{
		
		$data['judul']='Data Nama Budaya';
		$data['link']='Data';
		$data['link1']='Nama Budaya';
		$data['data_bud']= $this->MA->listbud();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/data/namabud',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
	}
	//tambah budaya
	public function tambahbud()
	{

		$data = array(
				'kode_budaya'=> $this->input->post('kode_budaya'),
				'nama_budaya' => $this->input->post('nama_budaya'),
				'link_budaya' => $this->input->post('link_budaya')
			);
		$this->MA->tambahbud($data);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
		redirect('admin/namabud',$data);
	}
	//hapus budaya
	public function hapusbud($id_budaya)
	{
		$this->MA->hapusbud($id_budaya);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus  !');
		redirect('admin/namabud',$data);
	}
	//ubah sarana
	public function ubahbud($id_budaya)
	{
		$data = array(
				'kode_budaya'=> $this->input->post('kode_budaya'),
				'nama_budaya' => $this->input->post('nama_budaya'),
				'link_budaya' => $this->input->post('link_budaya')
			);
		$this->MA->ubahbud($id_budaya,$data);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit  !');
		redirect('admin/namabud',$data);
	}
	//export excel data sarana
	public function excel_bud()
    {
    	$data = array( 'title' => 'Laporan Excel | Data Budaya','data_bud' => $this->MA->listbud());
    	$this->load->view('admin/data/excel_bud',$data);
    }
     //print data sarana
    public function print_bud()
    {
    	$data['judul']='Cetak Data Budaya';
    	$data['data_bud']= $this->MA->listbud();
    	$this->load->view('admin/data/printbud',$data);
    }
    //DATA WISATA
    public function namawis()
	{
		
		$data['judul']='Data Nama Wisata';
		$data['link']='Data';
		$data['link1']='Nama Wisata';
		$data['data_wis']= $this->MA->listwis();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/data/namawis',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
	}
	//tambah WISATA
	public function zjmmpfktuwxzsqcyfrvi()
	{

		$data = array(
				'kode_wisata'=> $this->input->post('kode_wisata'),
				'nama_wisata' => $this->input->post('nama_wisata'),
				'link' => $this->input->post('link')
			);
		$this->MA->tambahwis($data);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
		redirect('admin/namawis',$data);
	}
	//hapus WISATA
	public function fmzmsttqwkbztdelsqqs($id)
	{
		$this->MA->hapuswis($id);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus  !');
		redirect('admin/namawis',$data);
	}
	//ubah WISATA
	public function ubahwis($id)
	{
		$data = array(
				'kode_wisata'=> $this->input->post('kode_wisata'),
				'nama_wisata' => $this->input->post('nama_wisata'),
				'link' => $this->input->post('link')
			);
		$this->MA->ubahwis($id,$data);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit  !');
		redirect('admin/namawis',$data);
	}
	//export excel data WISATA
	public function ecmqvxistsgyaalahrgj()
    {
    	$data = array( 'title' => 'Laporan Excel | Data Wisata','data_wis' => $this->MA->listwis());
    	$this->load->view('admin/data/excel_wis',$data);
    }
     //print data WISATA
    public function jjffoqkhytvhffrypneb()
    {
    	$data['judul']='Cetak Data Wisata';
    	$data['data_wis']= $this->MA->listwis();
    	$this->load->view('admin/data/printwis',$data);
    }
    //DATA VISI
    public function namavis()
	{
		
		$data['judul']='Data Visi';
		$data['link']='Data';
		$data['link1']='Visi';
		$data['data_vis']= $this->MA->listvis();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/master/namavis',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
	}
	//tambah VISI
	public function fldnpugcitukwbdclulb()
	{

		$data = array(
				'id_visi' => $this->input->post('id_visi'),
				'visi' => $this->input->post('visi')
			);
		$this->MA->tambahvis($data);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
		redirect('admin/namavis',$data);
	}
	//hapus VISI
	public function vjxypokfgfajpqueznym($id_visi)
	{
		$this->MA->hapusvis($id_visi);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus  !');
		redirect('admin/namavis',$data);
	}
	//ubah VISI
	public function ubahvis($id_visi)
	{
		$data = array(
				'visi' => $this->input->post('visi')
			);
		$this->MA->ubahvis($id_visi,$data);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit  !');
		redirect('admin/namavis',$data);
	}
	//export excel data VISI
	public function whdeoymdsunibkgnjuoj()
    {
    	$data = array( 'title' => 'Laporan Excel | Visi','data_vis' => $this->MA->listvis());
    	$this->load->view('admin/master/excel_vis',$data);
    }
     //print data VISI
    public function qolonvzaneclmgkzbnes()
    {
    	$data['judul']='Cetak Data Visi';
    	$data['data_vis']= $this->MA->listvis();
    	$this->load->view('admin/master/printvis',$data);
    }
    //DATA MISI
    public function namamis()
	{
		
		$data['judul']='Data Misi';
		$data['link']='Data';
		$data['link1']='Misi';
		$data['data_mis']= $this->MA->listmis();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/master/namamis',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
	}
	//tambah VISI
	public function vqybybosgynmpwiozkcv()
	{

		$data = array(
				'id_misi' => $this->input->post('id_misi'),
				'misi' => $this->input->post('misi')
			);
		$this->MA->tambahmis($data);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
		redirect('admin/namamis',$data);
	}
	//hapus VISI
	public function vxcqzgeaobzlyywvjvfb($id_misi)
	{
		$this->MA->hapusmis($id_misi);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus  !');
		redirect('admin/namamis',$data);
	}
	//ubah VISI
	public function ubahmis($id_misi)
	{
		$data = array(
				'misi' => $this->input->post('misi')
			);
		$this->MA->ubahmis($id_misi,$data);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit  !');
		redirect('admin/namamis',$data);
	}
	//export excel data VISI
	public function kmvelmkgpadmvycwdgns()
    {
    	$data = array( 'title' => 'Laporan Excel | Misi','data_mis' => $this->MA->listmis());
    	$this->load->view('admin/master/excel_mis',$data);
    }
     //print data VISI
    public function zwwlpnlqynfapnlryqpv()
    {
    	$data['judul']='Cetak Data Misi';
    	$data['data_mis']= $this->MA->listmis();
    	$this->load->view('admin/master/printmis',$data);
    }
    //DATA VISI DAN MISI
    public function namavismis()
	{
		
		$data['judul']='Data Visi & Misi';
		$data['link']='Data';
		$data['link1']='Visi & Misi';
		$data['data_vis']= $this->MA->listvis();
		$data['data_mis'] = $this->MA->listmis();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/informasi/namavismis',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
	}
	//DATA MEDIA SOSIAL
    public function namamed()
	{
		
		$data['judul']='Data Media Sosial';
		$data['link']='Data';
		$data['link1']='Media Sosial';
		$data['data_med']= $this->MA->listmed();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/master/namamed',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
	}
	//tambah MEDIA SOSIAL
	public function zyamglajigxedsjthgyd()
	{

		$data = array(
				'nama' => $this->input->post('nama'),
				'icon' => $this->input->post('icon'),
				'link' => $this->input->post('link')
			);
		$this->MA->tambahmed($data);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
		redirect('admin/namamed',$data);
	}
	//hapus MEDIA SOSIAL
	public function ksqaxicfwsewqtpzygtj($id)
	{
		$this->MA->hapusmed($id);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus  !');
		redirect('admin/namamed',$data);
	}
	//ubah MEDIA SOSIAL
	public function ubahmed($id)
	{
		$data = array(
				'nama' => $this->input->post('nama'),
				'icon' => $this->input->post('icon'),
				'link' => $this->input->post('link')
			);
		$this->MA->ubahmed($id,$data);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit  !');
		redirect('admin/namamed',$data);
	}
	//export excel data MEDIA SOSIAL
	public function vkrgktqlcavlmfibkvah()
    {
    	$data = array( 'title' => 'Laporan Excel | Media Sosial','data_med' => $this->MA->listmed());
    	$this->load->view('admin/master/excel_med',$data);
    }
     //print data MEDIA SOSIAL
    public function ngyqbowyylgcbxbhrwlz()
    {
    	$data['judul']='Cetak Data Media Sosial';
    	$data['data_med']= $this->MA->listmed();
    	$this->load->view('admin/master/printmed',$data);
    }
    //DATA JABATAN
    public function namajab()
	{
		
		$data['judul']='Data Jabatan';
		$data['link']='Data';
		$data['link1']='Jabatan';
		$data['data_jab']= $this->MA->listjab();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/master/namajab',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
	}
	//tambah JABATAN
	public function qtukqddbyltnjcddogso()
	{

		$data = array(
				'kode_jabatan' => $this->input->post('kode_jabatan'),
				'nama_jabatan' => $this->input->post('nama_jabatan')
			);
		$this->MA->tambahjab($data);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
		redirect('admin/namajab',$data);
	}
	//hapus JABATAN
	public function dhkfrsftimphtrdmmsrd($id)
	{
		$this->MA->hapusjab($id);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus  !');
		redirect('admin/namajab',$data);
	}
	//ubah JABATAN
	public function ubahjab($id)
	{
		$data = array(
				'kode_jabatan' => $this->input->post('kode_jabatan'),
				'nama_jabatan' => $this->input->post('nama_jabatan')
			);
		$this->MA->ubahjab($id,$data);

		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit  !');
		redirect('admin/namajab',$data);
	}
	//export excel data JABATAN
	public function ncscohrhliioatozkjnj()
    {
    	$data = array( 'title' => 'Laporan Excel | Jabatan','data_jab' => $this->MA->listjab());
    	$this->load->view('admin/master/excel_jab',$data);
    }
     //print data JABATAN
    public function wlvlcgzdgpymiqpbsigt()
    {
    	$data['judul']='Cetak Data Jabatan';
    	$data['data_jab']= $this->MA->listjab();
    	$this->load->view('admin/master/printjab',$data);
    }
    //DATA STRUKTUR
    public function namastr()
	{
		
		$data['judul']='Data Struktur';
		$data['link']='Master';
		$data['link1']='Struktur';
		$data['data_str']= $this->MA->liststr();
		$data['data_jab']= $this->MA->listjab();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/master/namastr',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
	}
	//tambah STRUKTUR
	public function jkyfsehfvwmeqtdtkinp()
	{
		$data = array(
				'kode_jabatan' => $this->input->post('kode_jabatan'),
				'nama' => $this->input->post('nama'),
				'photo'=> $this->input->post('photo')
			);
		if (!empty($_FILES['photo']['name'])) 
			{
				$upload = $this->_do_upload();
				$data['photo'] = $upload;
			}
		$this->MA->tambahstr($data);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
		redirect('admin/namastr',$data);
	}
	//upload foto
	private function _do_upload()
	{
		$config['upload_path'] 		= './assets/admin/img/struktur';
		$config['allowed_types'] 	= 'jpeg|jpg|png';
		$config['max_size'] 		= 3000;
		$config['max_width'] 		= 3000;
		$config['max_height']  		= 3000;
		$config['file_name'] 		= $this->input->post('photo');
 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('photo')) {
			$data = $this->session->set_flashdata('pesan','Photo Gagal Upload');
			redirect('admin/namastr',$data);
		}
		return $this->upload->data('file_name');
	}
	//hapus STRUKTUR
	public function tkghmyozaftbcmhfupki($id_struktur)
	{	
		//ambil data by id
		$data = $this->MA->getid($id_struktur);
		//hapus photo di folder
		unlink(FCPATH.'/assets/admin/img/struktur/'.$data['photo']);
		//hapus data di database
     	$this->MA->hapusstr($id_struktur);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus  !');
		redirect('admin/namastr',$data);
	}
	//ubah STRUKTUR
	public function ubahstr($id_struktur)
	{
		//ambil data by id
		$row = $this->MA->getid($id_struktur);
		
		$data = array(
				'kode_jabatan' => $this->input->post('kode_jabatan'),
				'nama' => $this->input->post('nama'),
				//'photo'=> $this->input->post('photo')
			);
		if (!empty($_FILES['photo']['name'])) 
			{
				unlink(FCPATH .'assets/admin/img/struktur/'.$row['photo']);
				$upload = $this->_do_upload();
				$data['photo'] = $upload;
			}
		// var_dump($data);
		// die();
		$this->MA->ubahstr($id_struktur,$data);
		
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit  !');
		redirect('admin/namastr',$data);
	}
	
	//export excel data STRUKTUR
	public function urftiyxzpttztqcpcvyu()
    {
    	$data = array( 'title' => 'Laporan Excel | Struktur','data_str' => $this->MA->liststr());
    	$this->load->view('admin/master/excel_str',$data);
    }
     //print data STRUKTUR
    public function adlcgujuzaipqqmhstou()
    {
    	$data['judul']='Cetak Data Struktur';
    	$this->load->view('admin/asst/header',$data);
    	$data['data_str']= $this->MA->liststr();
    	$this->load->view('admin/master/printstr',$data);
    }
    //DATA MASTER SARANA
    public function namasrn()
	{
		
		$data['judul']='Master Sarana';
		$data['link']='Master';
		$data['link1']='Sarana';
		$data['data_sar']= $this->MA->listsar();
		$data['data_kec']= $this->MA->listkec();
		$data['data_srn']= $this->MA->listsrn();
		$data['data_joinkecdes']= $this->MA->listdes();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/master/namasrn',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
	}
	//tambah MASTER SARANA
	public function tambahmsar()
	{
		$data = array(
				'kode_master_sarana' => $this->input->post('kode_master_sarana'),
				'kode_sarana' => $this->input->post('kode_sarana'),
				'kode_kecamatan'=> $this->input->post('kode_kecamatan'),
				'kode_desa'=> $this->input->post('kode_desa'),
				'nama_master_sarana'=> $this->input->post('nama_master_sarana'),
				'deskripsi_sarana1'=> $this->input->post('deskripsi_sarana1'),
				'deskripsi_sarana2'=> $this->input->post('deskripsi_sarana2'),
				'deskripsi_sarana3'=> $this->input->post('deskripsi_sarana3'),
				'photo_sarana'=> $this->input->post('photo_sarana'),
				'link_video'=> $this->input->post('link_video'),
				'link_google'=> $this->input->post('link_google'),
				'latitude'=> $this->input->post('latitude'),
				'longtitude'=> $this->input->post('longtitude'),
				'status_sarana'=> $this->input->post('status_sarana')
			);
		if (!empty($_FILES['photo_sarana']['name'])) 
			{
				$upload = $this->_do_upload_sarana();
				$data['photo_sarana'] = $upload;
			}
		$this->MA->tambahmastersrn($data);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
		redirect('admin/namasrn',$data);
	}
	//upload foto
	private function _do_upload_sarana()
	{
		$config['upload_path'] 		= './assets/admin/img/master_sarana';
		$config['allowed_types'] 	= 'jpeg|jpg|png';
		$config['max_size'] 		= 3000;
		$config['max_width'] 		= 3000;
		$config['max_height']  		= 3000;
		$config['file_name'] 		= $this->input->post('photo_sarana');
 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('photo_sarana')) {
			$data = $this->session->set_flashdata('pesan','Photo Gagal Upload');
			redirect('admin/namasrn',$data);
		}
		return $this->upload->data('file_name');
	}
	//hapus SARANA
	public function hapussarana($id_sarana)
	{	
		//ambil data by id
		$data = $this->MA->getidsarana($id_sarana);
		//hapus photo di folder
		unlink(FCPATH.'/assets/admin/img/master_sarana/'.$data['photo_sarana']);
		//hapus data di database
     	$this->MA->hapussrn($id_sarana);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus  !');
		redirect('admin/namasrn',$data);
	}
	//Generate QRCode
	public function QRcode($kodenya)
	{
		//render ke bentuk png
		QRcode::png(
			$kodenya,
			$outfile = false,
			$level =QR_ECLEVEL_H,
			$size = 6,
			$margin = 2
		);
	}
	//tayang di lokal
	public function tayangdilok($id_sarana)
	{
		$vid = $this->MA->getidsarana($id_sarana);
		$data = array(
				'kode_master_sarana' =>$vid['kode_master_sarana'],
				'kode_sarana' => $vid['kode_sarana'],
				'kode_kecamatan'=> $vid['kode_kecamatan'],
				'kode_desa'=> $vid['kode_desa'],
				'nama_master_sarana'=> $vid['nama_master_sarana'],
				'deskripsi_sarana1'=> $vid['deskripsi_sarana1'],
				'deskripsi_sarana2'=> $vid['deskripsi_sarana2'],
				'deskripsi_sarana3'=> $vid['deskripsi_sarana3'],
				'photo_sarana'=> $vid['photo_sarana'],
				'link_video'=> $vid['link_video'],
				'link_google'=> $vid['link_google'],
				'latitude'=> $vid['latitude'],
				'longtitude'=> $vid['longtitude'],
				'status_sarana'=> 0
			);
		$this->MA->tayangdilok($id_sarana,$data);
		$data = $this->session->set_flashdata('pesan', 'Video Berhasil Tayang Dilokal !');
		redirect('admin/namasrn',$data);
	}
	//tayangkan
	public function tayangkan($id_sarana)
	{
		$vid = $this->MA->getidsarana($id_sarana);
		$data = array(
				'kode_master_sarana' =>$vid['kode_master_sarana'],
				'kode_sarana' => $vid['kode_sarana'],
				'kode_kecamatan'=> $vid['kode_kecamatan'],
				'kode_desa'=> $vid['kode_desa'],
				'nama_master_sarana'=> $vid['nama_master_sarana'],
				'deskripsi_sarana1'=> $vid['deskripsi_sarana1'],
				'deskripsi_sarana2'=> $vid['deskripsi_sarana2'],
				'deskripsi_sarana3'=> $vid['deskripsi_sarana3'],
				'photo_sarana'=> $vid['photo_sarana'],
				'link_video'=> $vid['link_video'],
				'link_google'=> $vid['link_google'],
				'latitude'=> $vid['latitude'],
				'longtitude'=> $vid['longtitude'],
				'status_sarana'=> 1
			);
		$this->MA->tayangdilok($id_sarana,$data);
		$data = $this->session->set_flashdata('pesan', 'Video Berhasil Ditayangkan !');
		redirect('admin/namasrn',$data);
	}
	//ubah SARANA
	public function ubahsrn($id_sarana)
	{
		//ambil data by id
		$row = $this->MA->getidsarana($id_sarana);
		
		$data = array(
				'kode_master_sarana' => $this->input->post('kode_master_sarana'),
				'kode_sarana' => $this->input->post('kode_sarana'),
				'kode_kecamatan'=> $this->input->post('kode_kecamatan'),
				'kode_desa'=> $this->input->post('kode_desa'),
				'nama_master_sarana'=> $this->input->post('nama_master_sarana'),
				'deskripsi_sarana1'=> $this->input->post('deskripsi_sarana1'),
				'deskripsi_sarana2'=> $this->input->post('deskripsi_sarana2'),
				'deskripsi_sarana3'=> $this->input->post('deskripsi_sarana3'),
				//'photo_sarana'=> $this->input->post('photo_sarana'),
				'link_video'=> $this->input->post('link_video'),
				'link_google'=> $this->input->post('link_google'),
				'latitude'=> $this->input->post('latitude'),
				'longtitude'=> $this->input->post('longtitude'),
				'status_sarana'=> $this->input->post('status_sarana')
			);
			
		if (!empty($_FILES['photo_sarana']['name'])) 
			{
				unlink(FCPATH .'assets/admin/img/master_sarana/'.$row['photo_sarana']);
				$upload = $this->_do_upload_sarana();
				$data['photo_sarana'] = $upload;
			}
		 //var_dump($data);
		//die();
		$this->MA->ubahsrn($id_sarana,$data);
		
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit  !');
		redirect('admin/namasrn',$data);
	}
	//export excel data SARANA
	public function excelsrn()
    {
    	$data = array( 'title' => 'Laporan Excel | Sarana','data_srn' => $this->MA->listsrn());
    	$this->load->view('admin/master/excel_srn',$data);
    }
    //print data SARANA
    public function printsrn()
    {
    	$data['judul']='Cetak Data Sarana';
    	$this->load->view('admin/asst/header',$data);
    	$data['data_srn']= $this->MA->listsrn();
    	$this->load->view('admin/master/printsrn',$data);
    }
    //DATA MASTER WISATA
    public function namawst()
	{
		
		$data['judul']='Master Wisata';
		$data['link']='Master';
		$data['link1']='Wisata';
		$data['data_wis']= $this->MA->listwis();
		$data['data_kec']= $this->MA->listkec();
		$data['data_wst']= $this->MA->listwst();
		$data['data_joinkecdes']= $this->MA->listdes();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/master/namawst',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
	}
	//tambah MASTER WISATA
	public function tambahmwis()
	{
		$data = array(
				'kode_master_wisata' => $this->input->post('kode_master_wisata'),
				'kode_wisata' => $this->input->post('kode_wisata'),
				'kode_kecamatan'=> $this->input->post('kode_kecamatan'),
				'kode_desa'=> $this->input->post('kode_desa'),
				'nama_master_wisata'=> $this->input->post('nama_master_wisata'),
				'deskripsi_wisata1'=> $this->input->post('deskripsi_wisata1'),
				'deskripsi_wisata2'=> $this->input->post('deskripsi_wisata2'),
				'deskripsi_wisata3'=> $this->input->post('deskripsi_wisata3'),
				'photo_wisata'=> $this->input->post('photo_wisata'),
				'link_video'=> $this->input->post('link_video'),
				'link_google'=> $this->input->post('link_google'),
				'latitude'=> $this->input->post('latitude'),
				'longtitude'=> $this->input->post('longtitude'),
				'status_video'=> $this->input->post('status_video'),
				'status_wisata'=> $this->input->post('status_wisata')
			);
		if (!empty($_FILES['photo_wisata']['name'])) 
			{
				$upload = $this->_do_upload_wisata();
				$data['photo_wisata'] = $upload;
			}
		$this->MA->tambahmasterwst($data);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
		redirect('admin/namawst',$data);
	}
	//upload foto
	private function _do_upload_wisata()
	{
		$config['upload_path'] 		= './assets/admin/img/master_wisata';
		$config['allowed_types'] 	= 'jpeg|jpg|png';
		$config['max_size'] 		= 3000;
		$config['max_width'] 		= 3000;
		$config['max_height']  		= 3000;
		$config['file_name'] 		= $this->input->post('photo_wisata');
 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('photo_wisata')) {
			$data = $this->session->set_flashdata('pesan','Photo Gagal Upload');
			redirect('admin/namawst',$data);
		}
		return $this->upload->data('file_name');
	}

	//hapus WISATA
	public function hapuswisata($id_master_wisata)
	{	
		//ambil data by id
		$data = $this->MA->getidwisata($id_master_wisata);
		//hapus photo di folder
		unlink(FCPATH.'/assets/admin/img/master_wisata/'.$data['photo_wisata']);
		//hapus data di database
     	$this->MA->hapuswst($id_master_wisata);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus  !');
		redirect('admin/namawst',$data);
	}
	//ubah WISATA
	public function ubahwst($id_master_wisata)
	{
		//ambil data by id
		$row = $this->MA->getidwisata($id_master_wisata);
		
		$data = array(
				'kode_master_wisata' => $this->input->post('kode_master_wisata'),
				'kode_wisata' => $this->input->post('kode_wisata'),
				'kode_kecamatan'=> $this->input->post('kode_kecamatan'),
				'kode_desa'=> $this->input->post('kode_desa'),
				'nama_master_wisata'=> $this->input->post('nama_master_wisata'),
				'deskripsi_wisata1'=> $this->input->post('deskripsi_wisata1'),
				'deskripsi_wisata2'=> $this->input->post('deskripsi_wisata2'),
				'deskripsi_wisata3'=> $this->input->post('deskripsi_wisata3'),
				//'photo_wisata'=> $this->input->post('photo_wisata'),
				'link_video'=> $this->input->post('link_video'),
				'link_google'=> $this->input->post('link_google'),
				'latitude'=> $this->input->post('latitude'),
				'longtitude'=> $this->input->post('longtitude'),
				'status_video'=> $this->input->post('status_video'),
				'status_wisata'=> $this->input->post('status_wisata')
			);
			
		if (!empty($_FILES['photo_wisata']['name'])) 
			{
				unlink(FCPATH .'assets/admin/img/master_wisata/'.$row['photo_wisata']);
				$upload = $this->_do_upload_wisata();
				$data['photo_wisata'] = $upload;
			}
		 //var_dump($data);
		//die();
		$this->MA->ubahwst($id_master_wisata,$data);
		
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit  !');
		redirect('admin/namawst',$data);
	}
	//tayang di lokal video
	public function tayangdilokwis($id_master_wisata)
	{
		$vid = $this->MA->getidwisata($id_master_wisata);
		$data = array(
				'kode_master_wisata' =>$vid['kode_master_wisata'],
				'kode_wisata' => $vid['kode_wisata'],
				'kode_kecamatan'=> $vid['kode_kecamatan'],
				'kode_desa'=> $vid['kode_desa'],
				'nama_master_wisata'=> $vid['nama_master_wisata'],
				'deskripsi_wisata1'=> $vid['deskripsi_wisata1'],
				'deskripsi_wisata2'=> $vid['deskripsi_wisata2'],
				'deskripsi_wisata3'=> $vid['deskripsi_wisata3'],
				'photo_wisata'=> $vid['photo_wisata'],
				'link_video'=> $vid['link_video'],
				'link_google'=> $vid['link_google'],
				'latitude'=> $vid['latitude'],
				'longtitude'=> $vid['longtitude'],
				'status_video'=> 0,
				'status_wisata' => $vid['status_wisata']
			);
		$this->MA->tayangdilokwis($id_master_wisata,$data);
		$data = $this->session->set_flashdata('pesan', 'Video Berhasil Tayang Dilokal !');
		redirect('admin/namawst',$data);
	}
	//tayangkan video
	public function tayangkanwis($id_master_wisata)
	{
		$vid = $this->MA->getidwisata($id_master_wisata);
		$data = array(
				'kode_master_wisata' =>$vid['kode_master_wisata'],
				'kode_wisata' => $vid['kode_wisata'],
				'kode_kecamatan'=> $vid['kode_kecamatan'],
				'kode_desa'=> $vid['kode_desa'],
				'nama_master_wisata'=> $vid['nama_master_wisata'],
				'deskripsi_wisata1'=> $vid['deskripsi_wisata1'],
				'deskripsi_wisata2'=> $vid['deskripsi_wisata2'],
				'deskripsi_wisata3'=> $vid['deskripsi_wisata3'],
				'photo_wisata'=> $vid['photo_wisata'],
				'link_video'=> $vid['link_video'],
				'link_google'=> $vid['link_google'],
				'latitude'=> $vid['latitude'],
				'longtitude'=> $vid['longtitude'],
				'status_video'=> 1,
				'status_wisata' => $vid['status_wisata']
			);
		$this->MA->tayangdilokwis($id_master_wisata,$data);
		$data = $this->session->set_flashdata('pesan', 'Video Berhasil Ditayangkan !');
		redirect('admin/namawst',$data);
	}
	//UBAH POPULER WISATA
	public function ubahpopulerwis($id_master_wisata)
	{
		$vid = $this->MA->getidwisata($id_master_wisata);
		$data = array(
				'kode_master_wisata' =>$vid['kode_master_wisata'],
				'kode_wisata' => $vid['kode_wisata'],
				'kode_kecamatan'=> $vid['kode_kecamatan'],
				'kode_desa'=> $vid['kode_desa'],
				'nama_master_wisata'=> $vid['nama_master_wisata'],
				'deskripsi_wisata1'=> $vid['deskripsi_wisata1'],
				'deskripsi_wisata2'=> $vid['deskripsi_wisata2'],
				'deskripsi_wisata3'=> $vid['deskripsi_wisata3'],
				'photo_wisata'=> $vid['photo_wisata'],
				'link_video'=> $vid['link_video'],
				'link_google'=> $vid['link_google'],
				'latitude'=> $vid['latitude'],
				'longtitude'=> $vid['longtitude'],
				'status_video'=> $vid['status_video'],
				'status_wisata' => 1
			);
		$this->MA->tayangdilokwis($id_master_wisata,$data);
		$data = $this->session->set_flashdata('pesan', 'Wisata Berhasil Di Populerkan !');
		redirect('admin/namawst',$data);
	}
	//UBAH WISATA BIASA
	public function ubahbiasawis($id_master_wisata)
	{
		$vid = $this->MA->getidwisata($id_master_wisata);
		$data = array(
				'kode_master_wisata' =>$vid['kode_master_wisata'],
				'kode_wisata' => $vid['kode_wisata'],
				'kode_kecamatan'=> $vid['kode_kecamatan'],
				'kode_desa'=> $vid['kode_desa'],
				'nama_master_wisata'=> $vid['nama_master_wisata'],
				'deskripsi_wisata1'=> $vid['deskripsi_wisata1'],
				'deskripsi_wisata2'=> $vid['deskripsi_wisata2'],
				'deskripsi_wisata3'=> $vid['deskripsi_wisata3'],
				'photo_wisata'=> $vid['photo_wisata'],
				'link_video'=> $vid['link_video'],
				'link_google'=> $vid['link_google'],
				'latitude'=> $vid['latitude'],
				'longtitude'=> $vid['longtitude'],
				'status_video'=> $vid['status_video'],
				'status_wisata' => 0
			);
		$this->MA->tayangdilokwis($id_master_wisata,$data);
		$data = $this->session->set_flashdata('pesan', 'Wisata Menjadi Biasa Berhasil !');
		redirect('admin/namawst',$data);
	}
	//export excel data WISATA
	public function excelwst()
    {
    	$data = array( 'title' => 'Laporan Excel | Wisata','data_wst' => $this->MA->listwst());
    	$this->load->view('admin/master/excel_wst',$data);
    }
    //print data WISATA
    public function printwst()
    {
    	$data['judul']='Cetak Data Wisata';
    	$this->load->view('admin/asst/header',$data);
    	$data['data_wst']= $this->MA->listwst();
    	$this->load->view('admin/master/printwst',$data);
    }
    //DATA MASTER Budaya
    public function namabdy()
	{
		
		$data['judul']='Master Budaya';
		$data['link']='Master';
		$data['link1']='Budaya';
		$data['data_bud']= $this->MA->listbud();
		$data['data_kec']= $this->MA->listkec();
		$data['data_bdy']= $this->MA->listbdy();
		$data['data_joinkecdes']= $this->MA->listdes();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/master/namabdy',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
	}
	//tambah MASTER WISATA
	public function tambahmbud()
	{
		$data = array(
				'kode_master_budaya' => $this->input->post('kode_master_budaya'),
				'kode_budaya' => $this->input->post('kode_budaya'),
				'kode_kecamatan'=> $this->input->post('kode_kecamatan'),
				'kode_desa'=> $this->input->post('kode_desa'),
				'nama_master_budaya'=> $this->input->post('nama_master_budaya'),
				'deskripsi_budaya1'=> $this->input->post('deskripsi_budaya1'),
				'deskripsi_budaya2'=> $this->input->post('deskripsi_budaya2'),
				'deskripsi_budaya3'=> $this->input->post('deskripsi_budaya3'),
				'photo_budaya'=> $this->input->post('photo_budaya'),
				'link_video'=> $this->input->post('link_video'),
				'link_google'=> $this->input->post('link_google'),
				'latitude'=> $this->input->post('latitude'),
				'longtitude'=> $this->input->post('longtitude'),
				'status_video'=> $this->input->post('status_video'),
				'status_budaya'=> $this->input->post('status_budaya')
			);
		if (!empty($_FILES['photo_budaya']['name'])) 
			{
				$upload = $this->_do_upload_budaya();
				$data['photo_budaya'] = $upload;
			}
		$this->MA->tambahmasterbdy($data);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
		redirect('admin/namabdy',$data);
	}
	//upload foto
	private function _do_upload_budaya()
	{
		$config['upload_path'] 		= './assets/admin/img/master_budaya';
		$config['allowed_types'] 	= 'jpeg|jpg|png';
		$config['max_size'] 		= 3000;
		$config['max_width'] 		= 3000;
		$config['max_height']  		= 3000;
		$config['file_name'] 		= $this->input->post('photo_budaya');
 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('photo_budaya')) {
			$data = $this->session->set_flashdata('pesan','Photo Gagal Upload');
			redirect('admin/namabdy',$data);
		}
		return $this->upload->data('file_name');
	}

	//hapus budaya
	public function hapusbudaya($id_master_budaya)
	{	
		//ambil data by id
		$data = $this->MA->getidbudaya($id_master_budaya);
		//hapus photo di folder
		unlink(FCPATH.'/assets/admin/img/master_budaya/'.$data['photo_budaya']);
		//hapus data di database
     	$this->MA->hapusbdy($id_master_budaya);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus  !');
		redirect('admin/namabdy',$data);
	}
	//ubah budaya
	public function ubahbdy($id_master_budaya)
	{
		//ambil data by id
		$row = $this->MA->getidbudaya($id_master_budaya);
		
		$data = array(
				'kode_master_budaya' => $this->input->post('kode_master_budaya'),
				'kode_wisata' => $this->input->post('kode_budaya'),
				'kode_kecamatan'=> $this->input->post('kode_kecamatan'),
				'kode_desa'=> $this->input->post('kode_desa'),
				'nama_master_budaya'=> $this->input->post('nama_master_budaya'),
				'deskripsi_budaya1'=> $this->input->post('deskripsi_budaya1'),
				'deskripsi_budaya2'=> $this->input->post('deskripsi_budaya2'),
				'deskripsi_budaya3'=> $this->input->post('deskripsi_budaya3'),
				//'photo_wisata'=> $this->input->post('photo_wisata'),
				'link_video'=> $this->input->post('link_video'),
				'link_google'=> $this->input->post('link_google'),
				'latitude'=> $this->input->post('latitude'),
				'longtitude'=> $this->input->post('longtitude'),
				'status_video'=> $this->input->post('status_video'),
				'status_budaya'=> $this->input->post('status_budaya')
			);
			
		if (!empty($_FILES['photo_budaya']['name'])) 
			{
				unlink(FCPATH .'assets/admin/img/master_budaya/'.$row['photo_budaya']);
				$upload = $this->_do_upload_budaya();
				$data['photo_budaya'] = $upload;
			}
		 //var_dump($data);
		//die();
		$this->MA->ubahbdy($id_master_budaya,$data);
		
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit  !');
		redirect('admin/namabdy',$data);
	}
	//tayang di lokal video
	public function tayangdilokbud($id_master_budaya)
	{
		$vid = $this->MA->getidbudaya($id_master_budaya);
		$data = array(
				'kode_master_budaya' =>$vid['kode_master_budaya'],
				'kode_budaya' => $vid['kode_budaya'],
				'kode_kecamatan'=> $vid['kode_kecamatan'],
				'kode_desa'=> $vid['kode_desa'],
				'nama_master_budaya'=> $vid['nama_master_budaya'],
				'deskripsi_budaya1'=> $vid['deskripsi_budaya1'],
				'deskripsi_budaya2'=> $vid['deskripsi_budaya2'],
				'deskripsi_budaya3'=> $vid['deskripsi_budaya3'],
				'photo_budaya'=> $vid['photo_budaya'],
				'link_video'=> $vid['link_video'],
				'link_google'=> $vid['link_google'],
				'latitude'=> $vid['latitude'],
				'longtitude'=> $vid['longtitude'],
				'status_video'=> 0,
				'status_budaya' => $vid['status_budaya']
			);
		$this->MA->tayangdilokbud($id_master_budaya,$data);
		$data = $this->session->set_flashdata('pesan', 'Video Berhasil Tayang Dilokal !');
		redirect('admin/namabdy',$data);
	}
	//tayangkan video
	public function tayangkanbud($id_master_budaya)
	{
		$vid = $this->MA->getidbudaya($id_master_budaya);
		$data = array(
				'kode_master_budaya' =>$vid['kode_master_budaya'],
				'kode_budaya' => $vid['kode_budaya'],
				'kode_kecamatan'=> $vid['kode_kecamatan'],
				'kode_desa'=> $vid['kode_desa'],
				'nama_master_budaya'=> $vid['nama_master_budaya'],
				'deskripsi_budaya1'=> $vid['deskripsi_budaya1'],
				'deskripsi_budaya2'=> $vid['deskripsi_budaya2'],
				'deskripsi_budaya3'=> $vid['deskripsi_budaya3'],
				'photo_budaya'=> $vid['photo_budaya'],
				'link_video'=> $vid['link_video'],
				'link_google'=> $vid['link_google'],
				'latitude'=> $vid['latitude'],
				'longtitude'=> $vid['longtitude'],
				'status_video'=> 1,
				'status_budaya' => $vid['status_budaya']
			);
		$this->MA->tayangdilokbud($id_master_budaya,$data);
		$data = $this->session->set_flashdata('pesan', 'Video Berhasil Ditayangkan !');
		redirect('admin/namabdy',$data);
	}
	//UBAH POPULER budaya
	public function ubahpopulerbud($id_master_budaya)
	{
		$vid = $this->MA->getidbudaya($id_master_budaya);
		$data = array(
				'kode_master_budaya' =>$vid['kode_master_budaya'],
				'kode_budaya' => $vid['kode_budaya'],
				'kode_kecamatan'=> $vid['kode_kecamatan'],
				'kode_desa'=> $vid['kode_desa'],
				'nama_master_budaya'=> $vid['nama_master_budaya'],
				'deskripsi_budaya1'=> $vid['deskripsi_budaya1'],
				'deskripsi_budaya2'=> $vid['deskripsi_budaya2'],
				'deskripsi_budaya3'=> $vid['deskripsi_budaya3'],
				'photo_budaya'=> $vid['photo_budaya'],
				'link_video'=> $vid['link_video'],
				'link_google'=> $vid['link_google'],
				'latitude'=> $vid['latitude'],
				'longtitude'=> $vid['longtitude'],
				'status_video'=> $vid['status_video'],
				'status_budaya' => 1
			);
		$this->MA->tayangdilokbud($id_master_budaya,$data);
		$data = $this->session->set_flashdata('pesan', 'Budaya Berhasil Di Populerkan !');
		redirect('admin/namabdy',$data);
	}
	//UBAH Budaya BIASA
	public function ubahbiasabud($id_master_budaya)
	{
		$vid = $this->MA->getidbudaya($id_master_budaya);
		$data = array(
				'kode_master_budaya' =>$vid['kode_master_budaya'],
				'kode_budaya' => $vid['kode_budaya'],
				'kode_kecamatan'=> $vid['kode_kecamatan'],
				'kode_desa'=> $vid['kode_desa'],
				'nama_master_budaya'=> $vid['nama_master_budaya'],
				'deskripsi_budaya1'=> $vid['deskripsi_budaya1'],
				'deskripsi_budaya2'=> $vid['deskripsi_budaya2'],
				'deskripsi_budaya3'=> $vid['deskripsi_budaya3'],
				'photo_budaya'=> $vid['photo_budaya'],
				'link_video'=> $vid['link_video'],
				'link_google'=> $vid['link_google'],
				'latitude'=> $vid['latitude'],
				'longtitude'=> $vid['longtitude'],
				'status_video'=> $vid['status_video'],
				'status_budaya' => 0
			);
		$this->MA->tayangdilokbud($id_master_budaya,$data);
		$data = $this->session->set_flashdata('pesan', 'Budaya Menjadi Biasa Berhasil !');
		redirect('admin/namabdy',$data);
	}
	//export excel data budaya
	public function excelbdy()
    {
    	$data = array( 'title' => 'Laporan Excel | Budaya','data_bdy' => $this->MA->listbdy());
    	$this->load->view('admin/master/excel_bdy',$data);
    }
    //print data budaya
    public function printbdy()
    {
    	$data['judul']='Cetak Data Budaya';
    	$this->load->view('admin/asst/header',$data);
    	$data['data_bdy']= $this->MA->listbdy();
    	$this->load->view('admin/master/printbdy',$data);
    }
    //DATA MASTER BERITA
    public function namabrt()
	{
		
		$data['judul']='Informasi Berita';
		$data['link']='Informasi';
		$data['link1']='Berita';
		$data['data_wis']= $this->MA->listwis();
		$data['data_sar']= $this->MA->listsar();
		$data['data_kec']= $this->MA->listkec();
		$data['data_joinkecdes']= $this->MA->listdes();
		$data['data_brt']= $this->MA->listbrt();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/informasi/namabrt',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
	}
	//tambah MASTER BERITA
	public function tambahbrt()
	{
		$data = array(
				'kode_berita' => $this->input->post('kode_berita'),
				'kode_kecamatan'=> $this->input->post('kode_kecamatan'),
				'kode_desa'=> $this->input->post('kode_desa'),
				'kode_wisata'=> $this->input->post('kode_wisata'),
				'kode_sarana'=>$this->input->post('kode_sarana'),
				'waktu_berita'=> $this->input->post('waktu_berita'),
				'photo_berita'=> $this->input->post('photo_berita'),
				'judul_berita'=> $this->input->post('judul_berita'),
				'deskripsiberita1'=> $this->input->post('deskripsiberita1'),
				'deskripsiberita2'=> $this->input->post('deskripsiberita2'),
				'deskripsiberita3'=> $this->input->post('deskripsiberita3'),
				'status_berita'=> $this->input->post('status_berita')
			);
		if (!empty($_FILES['photo_berita']['name'])) 
			{
				$upload = $this->_do_upload_berita();
				$data['photo_berita'] = $upload;
			}
		$this->MA->tambahbrt($data);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
		redirect('admin/namabrt',$data);
	}
	//upload foto
	private function _do_upload_berita()
	{
		$config['upload_path'] 		= './assets/admin/img/berita';
		$config['allowed_types'] 	= 'jpeg|jpg|png';
		$config['max_size'] 		= 3000;
		$config['max_width'] 		= 3000;
		$config['max_height']  		= 3000;
		$config['file_name'] 		= $this->input->post('photo_berita');
 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('photo_berita')) {
			$data = $this->session->set_flashdata('pesan','Photo Gagal Upload');
			redirect('admin/namabrt',$data);
		}
		return $this->upload->data('file_name');
	}
	//hapus BERITA
	public function hapusberita($id_berita)
	{	
		//ambil data by id
		$data = $this->MA->getidberita($id_berita);
		//hapus photo di folder
		unlink(FCPATH.'/assets/admin/img/berita/'.$data['photo_berita']);
		//hapus data di database
     	$this->MA->hapusbrt($id_berita);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus  !');
		redirect('admin/namabrt',$data);
	}
	//ubah BERITA
	public function ubahbrt($id_berita)
	{
		//ambil data by id
		$row = $this->MA->getidberita($id_berita);
		
		$data = array(
				'kode_berita' => $this->input->post('kode_berita'),
				'kode_kecamatan'=> $this->input->post('kode_kecamatan'),
				'kode_desa'=> $this->input->post('kode_desa'),
				'kode_wisata'=> $this->input->post('kode_wisata'),
				'kode_sarana'=>$this->input->post('kode_sarana'),
				'waktu_berita'=> $this->input->post('waktu_berita'),
				//'photo_berita'=> $this->input->post('photo_berita'),
				'judul_berita'=> $this->input->post('judul_berita'),
				'deskripsiberita1'=> $this->input->post('deskripsiberita1'),
				'deskripsiberita2'=> $this->input->post('deskripsiberita2'),
				'deskripsiberita3'=> $this->input->post('deskripsiberita3'),
				'status_berita'=> $this->input->post('status_berita')
			);
			
		if (!empty($_FILES['photo_berita']['name'])) 
			{
				unlink(FCPATH .'assets/admin/img/berita/'.$row['photo_berita']);
				$upload = $this->_do_upload_berita();
				$data['photo_berita'] = $upload;
			}
		 //var_dump($data);
		//die();
		$this->MA->ubahbrt($id_berita,$data);
		
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit  !');
		redirect('admin/namabrt',$data);
	}
	//tayang di lokal berita
	public function tayangdilokberita($id_berita)
	{
		$vid = $this->MA->getidberita($id_berita);
		$data = array(
				'kode_berita' =>$vid['kode_berita'],
				'kode_kecamatan'=> $vid['kode_kecamatan'],
				'kode_desa'=> $vid['kode_desa'],
				'kode_wisata' => $vid['kode_wisata'],
				'kode_sarana' => $vid['kode_sarana'],
				'waktu_berita'=> $vid['waktu_berita'],
				'photo_berita' => $vid['photo_berita'],
				'judul_berita' => $vid['judul_berita'],
				'deskripsiberita1'=> $vid['deskripsiberita1'],
				'deskripsiberita2'=> $vid['deskripsiberita2'],
				'deskripsiberita3'=> $vid['deskripsiberita3'],
				'status_berita' => 0
			);
		$this->MA->tayangdilokbrt($id_berita,$data);
		$data = $this->session->set_flashdata('pesan', 'Berita Berhasil Tayang Dilokal !');
		redirect('admin/namabrt',$data);
	}
	//tayangkan video
	public function tayangkanberita($id_berita)
	{
		$vid = $this->MA->getidberita($id_berita);
		$data = array(
				'kode_berita' =>$vid['kode_berita'],
				'kode_kecamatan'=> $vid['kode_kecamatan'],
				'kode_desa'=> $vid['kode_desa'],
				'kode_wisata' => $vid['kode_wisata'],
				'kode_sarana' => $vid['kode_sarana'],
				'waktu_berita'=> $vid['waktu_berita'],
				'photo_berita' => $vid['photo_berita'],
				'judul_berita' => $vid['judul_berita'],
				'deskripsiberita1'=> $vid['deskripsiberita1'],
				'deskripsiberita2'=> $vid['deskripsiberita2'],
				'deskripsiberita3'=> $vid['deskripsiberita3'],
				'status_berita' => 1
			);
		$this->MA->tayangdilokbrt($id_berita,$data);
		$data = $this->session->set_flashdata('pesan', 'Berita Berhasil Ditayangkan !');
		redirect('admin/namabrt',$data);
	}
	//export excel data BERITA
	public function excelbrt()
    {
    	$data = array( 'title' => 'Laporan Excel | Berita','data_brt' => $this->MA->listbrt());
    	$this->load->view('admin/informasi/excel_brt',$data);
    }
    //print data BERITA
    public function printbrt()
    {
    	$data['judul']='Cetak Data Berita';
    	$this->load->view('admin/asst/header',$data);
    	$data['data_brt']= $this->MA->listbrt();
    	$this->load->view('admin/informasi/printbrt',$data);
    }
    //DATA MASTER PENGAJUAN
    public function namapgj()
	{
		
		$data['judul']='Informasi Pengajuan';
		$data['link']='Informasi';
		$data['link1']='Pengajuan';
		$data['data_kec']= $this->MA->listkec();
		$data['data_joinkecdes']= $this->MA->listdes();
		$data['data_pgj']= $this->MA->listpgj();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/informasi/namapgj',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
	}
	//hapus PENGAJUAN
	public function hapuspengajuan($id_pengajuan)
	{	
		//ambil data by id
		$data = $this->MA->getidpengajuan($id_pengajuan);
		//hapus photo di folder
		unlink(FCPATH.'/assets/admin/img/pengajuan/'.$data['photo_pengajuan']);
		//hapus data di database
     	$this->MA->hapuspgj($id_pengajuan);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus  !');
		redirect('admin/namapgj',$data);
	}
	//proses pengajuan
	public function prosespgj($id_pengajuan)
	{
		$vid = $this->MA->getidpengajuan($id_pengajuan);
		$data = array(
				'kode_pengajuan' =>$vid['kode_pengajuan'],
				'kode_kecamatan'=> $vid['kode_kecamatan'],
				'kode_desa'=> $vid['kode_desa'],
				'nama_pengajuan' => $vid['nama_pengajuan'],
				'photo_pengajuan' => $vid['photo_pengajuan'],
				'deskripsi_pengajuan'=> $vid['deskripsi_pengajuan'],
				'alamat_pengajuan' => $vid['alamat_pengajuan'],
				'kontak_pengajuan' => $vid['kontak_pengajuan'],
				'status_pengajuan'=>1
			);
		$this->MA->prosespgj($id_pengajuan,$data);
		$data = $this->session->set_flashdata('pesan', 'Pengajuan Di Proses !');
		redirect('admin/namapgj',$data);
	}
	//selesai pengajuan
	public function selesaipgj($id_pengajuan)
	{
		$vid = $this->MA->getidpengajuan($id_pengajuan);
		$data = array(
				'kode_pengajuan' =>$vid['kode_pengajuan'],
				'kode_kecamatan'=> $vid['kode_kecamatan'],
				'kode_desa'=> $vid['kode_desa'],
				'nama_pengajuan' => $vid['nama_pengajuan'],
				'photo_pengajuan' => $vid['photo_pengajuan'],
				'deskripsi_pengajuan'=> $vid['deskripsi_pengajuan'],
				'alamat_pengajuan' => $vid['alamat_pengajuan'],
				'kontak_pengajuan' => $vid['kontak_pengajuan'],
				'status_pengajuan'=>2
			);
				
		$email_api = urlencode("ikhlasul0507@gmail.com");
		$passkey_api = urlencode("ABcd//12");
		$no_hp_tujuan = urlencode($vid['kontak_pengajuan']);
		$isi_pesan = urlencode("Terima Kasih Atas Pengajuan Yang ".$vid['nama_pengajuan']." Berikan ^-^. Informasi Anda Kami Tindak Lanjuti. Tertanda Admin Dinas Pariwisata Ogan Komering Ilir");
		$url = "https://reguler.medansms.co.id/sms_api.php?action=kirim_sms&email=".$email_api."&passkey=".$passkey_api."&no_tujuan=".$no_hp_tujuan."&pesan=".$isi_pesan;
		// var_dump($url);
		// die;
		$this->SendAPI_SMS($url);
		$this->MA->prosespgj($id_pengajuan,$data);
		$data = $this->session->set_flashdata('pesan', 'Pengajuan Selesai Di Proses !');
		redirect('admin/namapgj',$data);
	}
	private function SendAPI_SMS($url)
	{
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($ch);
			curl_close($ch);
			return $response;
	}
	//export excel data PENGAJUAN
	public function excelpgj()
    {
    	$data = array( 'title' => 'Laporan Excel | Pengajuan','data_pgj' => $this->MA->listpgj());
    	$this->load->view('admin/informasi/excel_pgj',$data);
    }
    //print data PENGAJUAN
    public function printpgj()
    {
    	$data['judul']='Cetak Data Pengajuan';
    	$this->load->view('admin/asst/header',$data);
    	$data['data_pgj']= $this->MA->listpgj();
    	$this->load->view('admin/informasi/printpgj',$data);
    }
    //DATA MASTER KONTAK
    public function namakon()
	{
		
		$data['judul']='Informasi Kontak';
		$data['link']='Informasi';
		$data['link1']='Kontak';
		$data['data_kon']= $this->MA->listkon();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/informasi/namakon',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
	}
	//export excel data kontak
	public function excelkon()
    {
    	$data = array( 'title' => 'Laporan Excel | Kontak','data_kon' => $this->MA->listkon());
    	$this->load->view('admin/informasi/excel_kon',$data);
    }
    //kirim email kontak
    public function kirimemail($id_kontak)
    {
    	$row = $this->MA->getidkontak($id_kontak);
    	// Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'beramal.com05@gmail.com',  // Email gmail
            'smtp_pass'   => 'beramal.com_05',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 587,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('no-reply@disparoki', 'disparoki.org');

        // Email penerima
        $this->email->to($row['email_kontak']); // Ganti dengan email tujuan

        // Subject email
        $this->email->subject('Pesan Balasan Dari Dinas Kebudayaan Dan Pariwisata kabupaten Ogan Komering Ilir');

         $this->email->attach(base_url().'assets/users/gambar/logo.png');
        // Isi email
        $this->email->message("Terima Kasih Informasi Yang Telah Diberikan <br><br>Nama : ".$row['nama_kontak']."<br>Email : ".$row['email_kontak']."<br>Judul : ".$row['judul_kontak']."<br>Pesan : ".$row['pesan_kontak']."<br>Informasi Anda Akan Sangat Membantu Dalam Mencapai Dinas Kebudayaan dan Pariwisata kabupaten Ogan Komering Ilir Menjadi Lebih Baik<br><br>Admin_Disparoki@disparoki.org");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            $data = $this->session->set_flashdata('pesan', 'Email Berhasil Di Kirim  !');
			redirect('admin/namakon',$data);
        } else {
        	echo $this->email->print_debugger();die;
            $data = $this->session->set_flashdata('pesan', 'Email Gagal Di Kirim  !');
			redirect('admin/namakon',$data);
        }
    }
    //print data PENGAJUAN
    public function printkon()
    {
    	$data['judul']='Cetak Data Kontak';
    	$this->load->view('admin/asst/header',$data);
    	$data['data_kon']= $this->MA->listkon();
    	$this->load->view('admin/informasi/printkon',$data);
    }
    //hapus kontak
	public function hapuskontak($id_kontak)
	{	
     	$this->MA->hapuskon($id_kontak);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus  !');
		redirect('admin/namakon',$data);
	}
	 //DATA MASTER KONTAK
    public function namainfo()
	{
		
		$data['judul']='Informasi Info Dinas';
		$data['link']='Informasi';
		$data['link1']='Info Dinas';
		$data['data_info']= $this->MA->listinfo();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/informasi/namainfo',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
	}
	//ubah logo
	public function ubahlogo($id_info)
	{
		//ambil data berdasrkan if
		$row = $this->MA->getidinfo($id_info);
		$data = array(
				//'logo' => $this->input->post('logo'),
				'alamat' => $this->input->post('alamat'),
				'handphone'=> $this->input->post('handphone'),
				'email'=> $this->input->post('email')
			);
			
		if (!empty($_FILES['logo']['name'])) 
			{
				unlink(FCPATH .'assets/users/gambar/'.$row['logo']);
				$upload = $this->_do_upload_logo();
				$data['logo'] = $upload;
			}
		 //var_dump($data);
		//die();
		$this->MA->ubahinfo($id_info,$data);
		
		$data = $this->session->set_flashdata('pesan', 'Logo Berhasil Di Ubah  !');
		redirect('admin/namainfo',$data);
	}
	//upload logo
	private function _do_upload_logo()
	{
		$config['upload_path'] 		= './assets/users/gambar';
		$config['allowed_types'] 	= 'jpeg|jpg|png';
		$config['max_size'] 		= 3000;
		$config['max_width'] 		= 3000;
		$config['max_height']  		= 3000;
		$config['file_name'] 		= 'logo.png';
 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('logo')) {
			$data = $this->session->set_flashdata('pesan','Photo Gagal Upload');
			redirect('admin/namainfo',$data);
		}
		return $this->upload->data('file_name');
	}
	//ubah alamat
	public function ubahalamat($id_info)
	{
		$data = array(
				'logo' => $this->input->post('logo'),
				'alamat' => $this->input->post('alamat'),
				'handphone'=> $this->input->post('handphone'),
				'email'=> $this->input->post('email')
			);

		$this->MA->ubahinfo($id_info,$data);
		
		$data = $this->session->set_flashdata('pesan', 'Alamat Berhasil Di Ubah  !');
		redirect('admin/namainfo',$data);
	}
	//ubah alamat
	public function ubahhp($id_info)
	{
		$data = array(
				'logo' => $this->input->post('logo'),
				'alamat' => $this->input->post('alamat'),
				'handphone'=> $this->input->post('handphone'),
				'email'=> $this->input->post('email')
			);

		$this->MA->ubahinfo($id_info,$data);
		
		$data = $this->session->set_flashdata('pesan', 'Handphone Berhasil Di Ubah  !');
		redirect('admin/namainfo',$data);
	}
	//ubah email
	public function ubahemail($id_info)
	{
		$data = array(
				'logo' => $this->input->post('logo'),
				'alamat' => $this->input->post('alamat'),
				'handphone'=> $this->input->post('handphone'),
				'email'=> $this->input->post('email')
			);

		$this->MA->ubahinfo($id_info,$data);
		
		$data = $this->session->set_flashdata('pesan', 'Email Berhasil Di Ubah  !');
		redirect('admin/namainfo',$data);
	}
	//DATA  aspirasi
    public function namaasp()
	{
		
		$data['judul']='Informasi Aspirasi';
		$data['link']='Informasi';
		$data['link1']='Aspirasi';
		$data['data_asp']= $this->MA->listasp();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/informasi/namaasp',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
	}
	//hapus aspirasi
	public function hapusaspirasi($id_aspirasi)
	{	
		//ambil data by id
		$data = $this->MA->getidaspirasi($id_aspirasi);
		//hapus photo di folder
		unlink(FCPATH.'/assets/users/gambar/'.$data['photo_aspirasi']);
		//hapus data di database
     	$this->MA->hapusasp($id_aspirasi);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus  !');
		redirect('admin/namaasp',$data);
	}
	//export excel data aspirasi
	public function excelasp()
    {
    	$data = array( 'title' => 'Laporan Excel | Aspirasi','data_asp' => $this->MA->listasp());
    	$this->load->view('admin/informasi/excel_asp',$data);
    }
    //print data Aspirasi
    public function printasp()
    {
    	$data['judul']='Cetak Data Aspirasi';
    	$this->load->view('admin/asst/header',$data);
    	$data['data_asp']= $this->MA->listasp();
    	$this->load->view('admin/informasi/printasp',$data);
    }
    //DATA  kalender
    public function kalender()
	{
		
		$data['judul']='Kelender';
		$data['link']='Kelender';
		$data['link1']='Agenda';
		$data['agenda']= $this->MA->listagen();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/kalender/index',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
	}
	//tambah agenda
	public function tambahagenda()
	{
		$data = array(
				'nama_agenda' => $this->input->post('nama_agenda'),
				'waktu_agenda'=> $this->input->post('waktu_agenda'),
			);
		$this->MA->tambahagenda($data);
		$data = $this->session->set_flashdata('pesan', 'Agenda Berhasil Di Tambah  !');
		redirect('admin/kalender',$data);
	}
	public function hapusagenda($id_agenda)
	{	
		//hapus data di database
     	$this->MA->hapusagd($id_agenda);
		$data = $this->session->set_flashdata('pesan', 'Agenda Berhasil Di Hapus  !');
		redirect('admin/kalender',$data);
	}
	//ubah agenda
	public function ubahagenda($id_agenda)
	{
		$data = array(
				'nama_agenda' => $this->input->post('nama_agenda'),
				'waktu_agenda' => $this->input->post('waktu_agenda')
			);
		$this->MA->ubahagd($id_agenda,$data);
		$data = $this->session->set_flashdata('pesan', 'Agenda Berhasil Di Ubah !');
		redirect('admin/kalender',$data);
	}
	//DATA JABATAN
    public function namapeng()
	{
		
		$data['judul']='Data Penghargaan';
		$data['link']='Data';
		$data['link1']='Penghargaan';
		$data['data_peng']= $this->MA->listpeng();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/informasi/namapeng',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
	}
	//tambah peng
	public function tambahpeng()
	{

		$data = array(
				'nama_penghargaan'=> $this->input->post('nama_penghargaan'),
				'photo_penghargaan'=> $this->input->post('photo_penghargaan'),
			);
		//die();


		if (!empty($_FILES['photo_penghargaan']['name'])) 
			{
				$upload = $this->_do_upload_peng();
				$data['photo_penghargaan'] = $upload;
			}

		$this->MA->tambahpeng($data);
		
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Tambah  !');
		redirect('admin/namapeng',$data);
	}
	//upload logo
	private function _do_upload_peng()
	{
		$config['upload_path'] 		= './assets/admin/img/penghargaan';
		$config['allowed_types'] 	= 'jpeg|jpg|png';
		$config['max_size'] 		= 3000;
		$config['max_width'] 		= 3000;
		$config['max_height']  		= 3000;
		$config['file_name'] 		= $this->input->post('photo_penghargaan');
 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('photo_penghargaan')) {
			$data = $this->session->set_flashdata('pesan','Photo Gagal Upload');
			redirect('admin/namapeng',$data);
		}
		return $this->upload->data('file_name');
	}
	//hapus PENGAJUAN
	public function hapuspeng($id)
	{	
		//ambil data by id
		$data = $this->MA->getidpeng($id);
		//hapus photo di folder
		unlink(FCPATH.'/assets/admin/img/penghargaan/'.$data['photo_penghargaan']);
		//hapus data di database
     	$this->MA->hapuspeng($id);
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus  !');
		redirect('admin/namapeng',$data);
	}
	//print data kecamatan
    public function printpeng()
    {
    	$data['judul']='Cetak Data Penghargaan';
    	$data['data_peng']= $this->MA->listpeng();
    	$this->load->view('admin/informasi/printpeng',$data);
    }
    //DATA  profil
    public function profil()
	{
		
		$data['judul']='Data Profil';
		$data['link']='Akses Akun';
		$data['link1']='Profil';
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/akses/profil',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
	}
	public function editprofil($id)
	{

		//ambil data berdasrkan if
		$row = $this->MA->getidprofil($id);

		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == false) {
        $data['judul']='Data Profil';
		$data['link']='Akses Akun';
		$data['link1']='Profil';
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/akses/profil',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
		}else{

			//data hasil input
			$data = array(
				'nama' => $this->input->post('nama'),
				'email'=> $this->input->post('email'),
				//'photo'=> $this->input->post('photo'),
				'password'=> $this->input->post('password'),
				'role_id'=> $this->input->post('role_id'),
				'is_active'=> $this->input->post('is_active'),
				'date_created'=> $this->input->post('date_created')
			);

			// cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['photo']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/admin/img/akun';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('photo')) {

                    $old_image = $row['photo'];

                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH.'/assets/admin/img/akun/'.$row['photo']);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('photo', $new_image);
                } else {
                    $data = $this->session->set_flashdata('pesan','Photo Gagal Upload');
					redirect('admin/profil',$data);
                }
            }

			//simpan database
			$this->MA->ubahprofil($id,$data);
			//jika berhasil
			$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Edit  !');
			redirect('admin/profil',$data);
		}
	}
	public function gantipassword()
	{
		$data['judul']='Data Profil';
		$data['link']='Akses Akun';
		$data['link1']='Profil';
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

		//validasi
		$this->form_validation->set_rules('password_lama','Password Lama','required|trim');
		$this->form_validation->set_rules('password1','Password Baru','required|trim|min_length[3]|matches[password2]');
		$this->form_validation->set_rules('password2','Konfirmasi Password','required|trim|min_length[3]|matches[password1]');


		//kondisi
		if($this->form_validation->run()==FALSE){
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/akses/profil',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
		}else{
			$password_lama = $this->input->post('password_lama');
			$password_baru = $this->input->post('password1');

			if(!password_verify($password_lama, $data['user']['password'])){
				//jika password berbeda
            	$data = $this->session->set_flashdata('pesan', 'Password Lama Salah !');
				redirect('admin/profil',$data);
			}else{
				if($password_lama==$password_baru){
					//jika password berbeda
            	$data = $this->session->set_flashdata('pesan', 'Password Baru Tidak Boleh Sama Dengan Password Lama !');
				redirect('admin/profil',$data);
				}else{
					//password ok
					$password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

					//ubah di database
					$this->db->set('password', $password_hash);
					$this->db->where('email',$this->session->userdata('email'));
					$this->db->update('tbl_user');

					$data = $this->session->set_flashdata('pesan', 'Password Berhasil Diganti !');
					redirect('admin/profil',$data);
				}
			}
		}
	}
	//akses kaun
	public function aksesakun()
	{
		$data['judul']='Data Akun';
		$data['link']='Data Akun';
		$data['link1']='';
		$data['datauser']= $this->MA->datauser();
		$data['datarole']= $this->MA->datarole();
		$data['datahistori'] = $this->MA->datahistori();
		$data['datatoken'] = $this->MA->datatoken();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/akses/dataakun',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
	}
	//hapus akun
	public function hapusakun($id)
	{	
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

		$id_akun = $data['user']['id'];
		//ambil data by id
		$data = $this->MA->getidprofil($id);

		if($id == $id_akun){
			$data = $this->session->set_flashdata('pesan', 'Akun Tidak Dapat Di Hapus  !');
			redirect('admin/aksesakun',$data);
		}else{
		//hapus photo di folder
		$old_image = $data['photo'];

        if ($old_image != 'default.jpg') {
            unlink(FCPATH.'/assets/admin/img/akun/'.$data['photo']);
         }
		// unlink(FCPATH.'/assets/admin/img/akun/'.$data['photo']);
		//hapus data di database
     	$this->MA->hapusakun($id);
		$data = $this->session->set_flashdata('pesan', 'Akun Berhasil Di Hapus  !');
		redirect('admin/aksesakun',$data);
		}
	}
	public function hapusrole($id)
	{
		$this->MA->hapusrole($id);
		$data = $this->session->set_flashdata('pesan', 'Role Berhasil Di Hapus  !');
		redirect('admin/aksesakun',$data);
	}
	public function hapustoken($date_created)
	{
		$this->MA->hapustoken($date_created);
		$data = $this->session->set_flashdata('pesan', 'Token Berhasil Di Hapus  !');
		redirect('admin/aksesakun',$data);
	}
	public function aksesoff($id)
	{
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

		$id_akun = $data['user']['id'];

		$vid = $this->MA->getidakun($id);
		//ambil data
		if($id == $id_akun){
			$data = $this->session->set_flashdata('pesan', 'Akun Tidak Dapat Di Non Aktifkan  !');
			redirect('admin/aksesakun',$data);
		}else{
		$data = array(
				'nama' => $vid['nama'],
				'email'=> $vid['email'],
				'photo'=> $vid['photo'],
				'password'=> $vid['password'],
				'role_id'=> $vid['role_id'],
				'is_active'=> 0,
				'date_created'=> $vid['date_created']
			);
		$this->db->where('id',$id);
		$this->db->update('tbl_user',$data);
		//jika berhasil
		$data = $this->session->set_flashdata('pesan', 'Akun Non Aktif  !');
		redirect('admin/aksesakun',$data);
		}
	}
	public function akseson($id)
	{
		$vid = $this->MA->getidakun($id);
		//ambil data
		$data = array(
				'nama' => $vid['nama'],
				'email'=> $vid['email'],
				'photo'=> $vid['photo'],
				'password'=> $vid['password'],
				'role_id'=> $vid['role_id'],
				'is_active'=> 1,
				'date_created'=> $vid['date_created']
			);
		$this->db->where('id',$id);
		$this->db->update('tbl_user',$data);
		//jika berhasil
		$data = $this->session->set_flashdata('pesan', 'Akun Aktif  !');
		redirect('admin/aksesakun',$data);
	}
	public function petaon($id)
	{
		$vid = $this->MA->getidpeta($id);
		//ambil data
		$data = array(
				'is_active' => 1,
				'zoom'=> $vid['zoom'],
			);
		$this->db->where('id',$id);
		$this->db->update('tbl_peta',$data);
		//jika berhasil
		$data = $this->session->set_flashdata('pesan', 'Peta Aktif  !');
		redirect('admin',$data);
	}
	public function petaoff($id)
	{
		$vid = $this->MA->getidpeta($id);
		//ambil data
		$data = array(
				'is_active' => 0,
				'zoom'=> $vid['zoom'],
			);
		$this->db->where('id',$id);
		$this->db->update('tbl_peta',$data);
		//jika berhasil
		$data = $this->session->set_flashdata('pesan', 'Peta Tidak Aktif  !');
		redirect('admin',$data);
	}
	public function petazoom()
	{
		//ambil data
		$data = array(
				'is_active' => $this->input->post('is_active'),
				'zoom' => $this->input->post('zoom')
		);

		//masukan database
		$this->db->where('id',1);
		$this->db->update('tbl_peta',$data);
		//jika berhasil
		$data = $this->session->set_flashdata('pesan', 'Data Berhasil Di Ubah  !');
		redirect('admin',$data); 
	}
}
