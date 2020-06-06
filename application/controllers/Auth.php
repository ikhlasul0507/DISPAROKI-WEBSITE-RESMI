<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->Model('Model_admin');
        date_default_timezone_set('Asia/Jakarta');
       
    }

    public function index()
    {
    	//validasi dari form
    	$this->form_validation->set_rules('email','Email','trim|required|valid_email');
    	$this->form_validation->set_rules('password','Password','trim|required');
    	$this->form_validation->set_rules('role_id','Role ID','trim|required');
    	if ($this->form_validation->run() == false) {
    	$data['judul']='Login Admin';
		$data['role'] = $this->Model_admin->list_roleall();
		$this->load->view('admin/temp/header',$data);
		$this->load->view('admin/login/index',$data);
		$this->load->view('admin/temp/footer');
		}else{
			//jika berhasil
			$this->_login();
		}		
    }
	private function _login()
	{
		date_default_timezone_set('Asia/Jakarta');
		//ambil data dari form
		$email = $this->input->post('email');
		$role_id = $this->input->post('role_id');
        $password = $this->input->post('password'); 

        //ambil data berdasarkan email
        $user = $this->db->get_where('tbl_user',['email'=>$email])->row_array();

        //cek jika usernya ada
        if ($user){
        	//jika usernya aktif
        	if($user['is_active']==1){
        		//cek password
        		if (password_verify($password,$user['password'])){
        			//cek role  id
        			if($user['role_id']==$role_id){

        			$data = [
        				'email' => $user['email'],
        				'role_id' => $user['role_id'],
        				'date_created' => date('Y-m-d H:i:s')
        			];

        			//insert database history
        			$this->db->insert('tbl_user_histori',$data);
        			//inisiasi session berdasarkan role
        			$this->session->set_userdata($data);
        			if($user['role_id'] == 1){
        				$data = $this->session->set_flashdata('pesan', 'Selamat Anda Berhasil Login Sebagai Administrator !');
        				redirect('Dinas-Kebudayaan-Dan-Pariwisata-Kabupaten-Ogan-Komering-Ilir-HwsrQY8KpqXhVviVjxyZQ59Pns4JvXQHXIsvP1y0LNhihpufwwKUa06Ccdi7my91i3dBioODlQfPKV4vng5p63j3OhFX',$data);
        			}elseif($user['role_id'] == 2){
        				$data = $this->session->set_flashdata('pesan', 'Selamat Anda Berhasil Login Sebagai Kepala Dinas !');
        				redirect('Dinas-Kebudayaan-Dan-Pariwisata-Kabupaten-Ogan-Komering-Ilir-HwsrQY8KpqXhVviVjxyZQ59Pns4JvXQHXIsvP1y0LNhihpufwwKUa06Ccdi7my91i3dBioODlQfPKV4vng5p63j3OhFX',$data);
        			}elseif($user['role_id'] == 3){
        				$data = $this->session->set_flashdata('pesan', 'Selamat Anda Berhasil Login Sebagai Kepala Bagian !');
        				redirect('Dinas-Kebudayaan-Dan-Pariwisata-Kabupaten-Ogan-Komering-Ilir-HwsrQY8KpqXhVviVjxyZQ59Pns4JvXQHXIsvP1y0LNhihpufwwKUa06Ccdi7my91i3dBioODlQfPKV4vng5p63j3OhFX',$data);
        			}else{
        				$data = $this->session->set_flashdata('pesan', 'Selamat Anda Berhasil Login Sebagai Pegawai !');
        				redirect('Dinas-Kebudayaan-Dan-Pariwisata-Kabupaten-Ogan-Komering-Ilir-HwsrQY8KpqXhVviVjxyZQ59Pns4JvXQHXIsvP1y0LNhihpufwwKUa06Ccdi7my91i3dBioODlQfPKV4vng5p63j3OhFX',$data);
        			}
        		}else{
        			//jika Akses Tidak Benar
        			$data = $this->session->set_flashdata('pesan', 'Akses Masuk Gagal !');
					redirect('auth',$data);
        		}
        		}else{
        		//jika password salah
        		$data = $this->session->set_flashdata('pesan', 'Password Salah !');
					redirect('auth',$data);
				}
        	}else{
        		//jika akun belum aktif
        		$data = $this->session->set_flashdata('pesan', 'Silahkan Aktivasi Akun Anda !');
					redirect('auth',$data);
        	}
        }else{
        	//jika email belum terdaftar
        	$data = $this->session->set_flashdata('pesan', 'Email Anda Belum Terdaftar !');
					redirect('auth',$data);
        }
	}
	public function registrasi()
	{
		//validasi form yang di kirim
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_user.email]', [
            'is_unique' => 'This email has already registered! !'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
        //jika gagal
		$data['judul']='Daftar Akun';
		$data['role'] = $this->Model_admin->list_role();
		$this->load->view('admin/temp/header',$data);
		$this->load->view('admin/login/registrasi',$data);
		$this->load->view('admin/temp/footer');
		}else{
			//jika berhasil
			$email = $this->input->post('email', true);
			$role_id = $this->input->post('role_id', true);
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'photo' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => $role_id,
                'is_active' => 0,
                'date_created' => time()
            ];

            // siapkan token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];

          	//insert database
            $this->db->insert('tbl_user',$data);
            $this->db->insert('tbl_user_token', $user_token);

            //kirim email
            $this->_sendEmail($token,'verify');
            //jika selesai
            $data = $this->session->set_flashdata('pesan', 'Pendaftaran Berhasil, Silahkan Aktivasi Email Anda  !');
			redirect('auth',$data);
		}
	}
	private function _sendEmail($token, $type)
	{
		 $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'beramal.com05@gmail.com',  // Email gmail
            'smtp_pass'   => 'beramal.com_05',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        $this->email->initialize($config);

        $this->email->from('beramal.com05@gmail.com', 'Dinas Kebudayaan Dan Pariwisata Kabupaten Ogan Komering Ilir');
        $this->email->to($this->input->post('email'));
        if ($type == 'verify') {
            $this->email->subject('Aktivasi Pendaftaran Akun');
            $this->email->message('Klik Link Berikut Untuk Memverifikasi Pendaftaran Anda : <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Verifikasi</a>');
            $this->email->attach(base_url().'assets/users/gambar/logo.png');
        }else if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('Klik Link Berikut Untuk Mengubah Password :<br> <a class="btn btn-primary" href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
        }
        if ($this->email->send()) {
            return true;
        } else {
            $data = $this->session->set_flashdata('pesan', 'Gagal Mengirim Token Aktivasi Ke Email !');
			redirect('auth/registrasi',$data);
        }

	}
	public function verify()
	{
		$email = $this->input->get('email');
        $token = $this->input->get('token');

        //ambil data berdasarkan email
        $user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();
        //kondisi
        if($user){
        	$user_token = $this->db->get_where('tbl_user_token',['token'])->row_array();
        	if($user_token){
        		if(time()-$user_token['date_created']<(60 * 60 * 24)){
        			//update tabel
        			$this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('tbl_user');

                    //hapus token 
                    $this->db->delete('tbl_user_token', ['email' => $email]);

                    //jika berhasil
                    $data = $this->session->set_flashdata('pesan', 'Email '.$email.' Telah Di Aktivasi, Silahkan Login !');
					redirect('auth',$data);
        		}else{
        			$this->db->delete('tbl_user', ['email' => $email]);
                    $this->db->delete('tbl_user_token', ['email' => $email]);

                    //jika token expired
                    $data = $this->session->set_flashdata('pesan', 'Token Expired, Akun Gagal Di Verifikasi !');
					redirect('auth',$data);
        		}
        	} else{
        		//jika token salah
                    $data = $this->session->set_flashdata('pesan', 'Token Salah, Akun Gagal Di Verifikasi !');
					redirect('auth',$data);
        	}
        }else{
        	//jika email salah
                    $data = $this->session->set_flashdata('pesan', 'Email Salah, Akun Gagal Di Verifikasi !');
					redirect('auth',$data);
        }
	}
	public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        //jika token salah
        $data = $this->session->set_flashdata('pesan', 'Anda Berhasil Logout !');
		redirect('auth',$data);
    }
    public function lupapassword()
    {
    	//validasi
    	 $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    	 //kondisi
        if ($this->form_validation->run() == false) {
    		$data['judul']='Lupa Password';
			$this->load->view('admin/temp/header',$data);
			$this->load->view('admin/login/lupapassword',$data);
			$this->load->view('admin/temp/footer');
		 } else {
		 	$email = $this->input->post('email');
            $user = $this->db->get_where('tbl_user', ['email' => $email, 'is_active' => 1])->row_array();
            if($user){
            	$token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];
                //masukan kedatabase
                $this->db->insert('tbl_user_token', $user_token);
                $this->_sendEmail($token, 'forgot');

                //jika berhasil
                 $data = $this->session->set_flashdata('pesan', 'Silahkan Cek Email, Untuk Mengubah Password !');
					redirect('auth/lupapassword',$data);
            }else{
            	 //jika gagal
                 $data = $this->session->set_flashdata('pesan', 'Email Belum Terdaftar Atau Belum Di Aktivasi !');
					redirect('auth/lupapassword',$data);
            	}
    		}
		}
	public function resetpassword()
	{
		//ambil data dari form
		$email = $this->input->get('email');
        $token = $this->input->get('token');
        //ambil data berdasarkan email
        $user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();
        if($user){

		$user_token = $this->db->get_where('tbl_user_token', ['token' => $token])->row_array();   
			if($user_token){
				$this->session->set_userdata('reset_email', $email);
                $this->ubahpassword();
			}  else {
				//jika token salah
                 $data = $this->session->set_flashdata('pesan', 'Reset Password Gagal, Token Salah !');
					redirect('auth/lupapassword',$data);
			}   
		}else{
			//jika email salah
                 $data = $this->session->set_flashdata('pesan', 'Reset Password Gagal, Email Salah !');
					redirect('auth/lupapassword',$data);
		}
	}
	public function ubahpassword()
	{
		if (!$this->session->userdata('reset_email')) {
            redirect('auth');
        }
        //cek  validasi
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[3]|matches[password1]');
        //kondisi
        if ($this->form_validation->run() == false) {
        	$data['judul']='Ubah Password';
			$this->load->view('admin/temp/header',$data);
			$this->load->view('admin/login/ubahpassword',$data);
			$this->load->view('admin/temp/footer');
		}else{
			$password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            //set database
            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('tbl_user');

            $this->session->unset_userdata('reset_email');

            $this->db->delete('tbl_user_token', ['email' => $email]);
            //jika berhasil
            
            $data = $this->session->set_flashdata('pesan', 'Password Berhasil Diubah, Silahkan Login !');
			redirect('auth',$data);
		}
	}
	

}
