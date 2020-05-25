<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_guide extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('email')){
			//jika ada user masuk sembarangan
        	$data = $this->session->set_flashdata('pesan', 'Anda Belum Login !');
			redirect('auth',$data);
		}
	}

	public function index()
	{
		$data['judul']='Panduan Aplikasi';
		$data['link']='User Guide';
		$data['link1']='Panduan Aplikasi';
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('admin/asst/header',$data);
		$this->load->view('admin/beranda/header',$data);
		$this->load->view('admin/beranda/sidebar',$data);
		$this->load->view('admin/beranda/menu',$data);
		$this->load->view('admin/User_guide/index',$data);
		$this->load->view('admin/asst/kaki');
		$this->load->view('admin/asst/footer');
	}
}
