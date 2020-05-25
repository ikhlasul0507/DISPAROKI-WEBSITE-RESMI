<?php 

class Model_admin extends CI_model{

	//DATA KECAMATAN
	public function listkec()
	{
		$this->db->order_by('kode_kecamatan', 'ASC');
		return $this->db->get('tbl_kecamatan')->result_array();	
	}
	public function tambahkec($data)
	{
		$this->db->insert('tbl_kecamatan',$data);
	}
	public function hapuskec($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tbl_kecamatan');
	}
	public function ubahkec($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('tbl_kecamatan',$data);
	}
	//DATA DESA
	public function listdes()
	{
		 $this->db->select('*');
		 $this->db->order_by('kode_desa', 'ASC');
		 $this->db->from('tbl_desa');
		 $this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_desa.kode_kecamatan','left');
		 $query = $this->db->get();
		 return $query->result();
	}
	public function tambahdes($data)
	{
		$this->db->insert('tbl_desa',$data);
	}
	public function hapusdes($kode_desa)
	{
		$this->db->where('kode_desa',$kode_desa);
		$this->db->delete('tbl_desa');
	}
	public function ubahdes($id_desa,$data)
	{
		$this->db->where('id_desa',$id_desa);
		$this->db->update('tbl_desa',$data);
	}
	//DATA SARANA
	public function listsar()
	{
		$this->db->order_by('kode_sarana', 'ASC');
		return $this->db->get('tbl_sarana')->result_array();	
	}
	public function tambahsar($data)
	{
		$this->db->insert('tbl_sarana',$data);
	}
	public function hapussar($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tbl_sarana');
	}
	public function ubahsar($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('tbl_sarana',$data);
	}
	//DATA BUDAYA
	public function listbud()
	{
		$this->db->order_by('kode_budaya', 'ASC');
		return $this->db->get('tbl_budaya')->result_array();	
	}
	public function tambahbud($data)
	{
		$this->db->insert('tbl_budaya',$data);
	}
	public function hapusbud($id_budaya)
	{
		$this->db->where('id_budaya',$id_budaya);
		$this->db->delete('tbl_budaya');
	}
	public function ubahbud($id_budaya,$data)
	{
		$this->db->where('id_budaya',$id_budaya);
		$this->db->update('tbl_budaya',$data);
	}
	//DATA WISATA
	public function listwis()
	{
		$this->db->order_by('kode_wisata', 'ASC');
		return $this->db->get('tbl_wisata')->result_array();	
	}
	public function tambahwis($data)
	{
		$this->db->insert('tbl_wisata',$data);
	}
	public function hapuswis($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tbl_wisata');
	}
	public function ubahwis($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('tbl_wisata',$data);
	}
	//DATA VISI
	public function listvis()
	{
		$this->db->order_by('id_visi', 'ASC');
		return $this->db->get('tbl_visi')->result_array();	
	}
	public function tambahvis($data)
	{
		$this->db->insert('tbl_visi',$data);
	}
	public function hapusvis($id_visi)
	{
		$this->db->where('id_visi',$id_visi);
		$this->db->delete('tbl_visi');
	}
	public function ubahvis($id_visi,$data)
	{
		$this->db->where('id_visi',$id_visi);
		$this->db->update('tbl_visi',$data);
	}
	//DATA MISI
	public function listmis()
	{
		$this->db->order_by('id_misi', 'ASC');
		return $this->db->get('tbl_misi')->result_array();	
	}
	public function tambahmis($data)
	{
		$this->db->insert('tbl_misi',$data);
	}
	public function hapusmis($id_misi)
	{
		$this->db->where('id_misi',$id_misi);
		$this->db->delete('tbl_misi');
	}
	public function ubahmis($id_misi,$data)
	{
		$this->db->where('id_misi',$id_misi);
		$this->db->update('tbl_misi',$data);
	}
	//DATA MEDIA SOSIAL
	public function listmed()
	{
		$this->db->order_by('id', 'ASC');
		return $this->db->get('tbl_media_sosial')->result_array();	
	}
	public function tambahmed($data)
	{
		$this->db->insert('tbl_media_sosial',$data);
	}
	public function hapusmed($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tbl_media_sosial');
	}
	public function ubahmed($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('tbl_media_sosial',$data);
	}
	//DATA JABATAN
	public function listjab()
	{
		$this->db->order_by('id', 'ASC');
		return $this->db->get('tbl_master_jabatan')->result_array();	
	}
	public function tambahjab($data)
	{
		$this->db->insert('tbl_master_jabatan',$data);
	}
	public function hapusjab($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tbl_master_jabatan');
	}
	public function ubahjab($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('tbl_master_jabatan',$data);
	}
	//DATA STRUKTUR
	public function liststr()
	{
		$this->db->select('*');
		$this->db->from('tbl_struktur');
		$this->db->join('tbl_master_jabatan','tbl_master_jabatan.kode_jabatan=tbl_struktur.kode_jabatan', 'left');
		$query = $this->db->get();
		return $query->result();
		//return $this->db->get('tbl_struktur')->result_array();	
	}
	public function tambahstr($data)
	{
		$this->db->insert('tbl_struktur',$data);
	}
	public function hapusstr($id_struktur)
	{
		$this->db->where('id_struktur',$id_struktur);
		$this->db->delete('tbl_struktur');
	}
	public function getid($id_struktur)
	{
		return $this->db->get_where('tbl_struktur',['id_struktur'=>  $id_struktur])->row_array();
	}
	public function ubahstr($id_struktur,$data)
	{
		$this->db->where('id_struktur',$id_struktur);
		$this->db->update('tbl_struktur',$data);
	}
	//DATA MASTER SARANA
	public function listsrn()
	{
		$this->db->select('*');
		$this->db->from('tbl_master_sarana');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_sarana.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_sarana.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_master_sarana.kode_sarana','left');
		$query = $this->db->get();
 		return $query->result();
	}
	public function tambahmastersrn($data)
	{
		$this->db->insert('tbl_master_sarana',$data);
	}
	public function getidsarana($id_sarana)
	{
		return $this->db->get_where('tbl_master_sarana',['id_sarana'=>  $id_sarana])->row_array();
	}
	public function hapussrn($id_sarana)
	{
		$this->db->where('id_sarana',$id_sarana);
		$this->db->delete('tbl_master_sarana');
	}
	public function tayangdilok($id_sarana,$data)
	{
		$this->db->where('id_sarana',$id_sarana);
		$this->db->update('tbl_master_sarana',$data);
	}
	public function ubahsrn($id_sarana,$data)
	{
		$this->db->where('id_sarana',$id_sarana);
		$this->db->update('tbl_master_sarana',$data);
	}
	//DATA MASTER WISATA
	public function listwst()
	{
		$this->db->select('*');
		$this->db->from('tbl_master_wisata');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_wisata.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_wisata.kode_desa');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_master_wisata.kode_wisata','left');
		$query = $this->db->get();
 		return $query->result();
	}
	public function tambahmasterwst($data)
	{
		$this->db->insert('tbl_master_wisata',$data);
	}
	public function getidwisata($id_master_wisata)
	{
		return $this->db->get_where('tbl_master_wisata',['id_master_wisata'=>  $id_master_wisata])->row_array();
	}
	public function hapuswst($id_master_wisata)
	{
		$this->db->where('id_master_wisata',$id_master_wisata);
		$this->db->delete('tbl_master_wisata');
	}
	public function ubahwst($id_master_wisata,$data)
	{
		$this->db->where('id_master_wisata',$id_master_wisata);
		$this->db->update('tbl_master_wisata',$data);
	}
	public function tayangdilokwis($id_master_wisata,$data)
	{
		$this->db->where('id_master_wisata',$id_master_wisata);
		$this->db->update('tbl_master_wisata',$data);
	}
	//DATA MASTER BUdaya
	public function listbdy()
	{
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$query = $this->db->get();
 		return $query->result();
	}
	public function tambahmasterbdy($data)
	{
		$this->db->insert('tbl_master_budaya',$data);
	}
	public function getidbudaya($id_master_budaya)
	{
		return $this->db->get_where('tbl_master_budaya',['id_master_budaya'=>  $id_master_budaya])->row_array();
	}
	public function hapusbdy($id_master_budaya)
	{
		$this->db->where('id_master_budaya',$id_master_budaya);
		$this->db->delete('tbl_master_budaya');
	}
	public function ubahbdy($id_master_budaya,$data)
	{
		$this->db->where('id_master_budaya',$id_master_budaya);
		$this->db->update('tbl_master_budaya',$data);
	}
	public function tayangdilokbud($id_master_budaya,$data)
	{
		$this->db->where('id_master_budaya',$id_master_budaya);
		$this->db->update('tbl_master_budaya',$data);
	}
	//INFORMASI BERITA
	public function listbrt()
	{
		$this->db->select('*');
		$this->db->from('tbl_berita');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_berita.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_berita.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_berita.kode_sarana');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_berita.kode_wisata','left');
		$query = $this->db->get();
 		return $query->result();
	}
	public function tambahbrt($data)
	{
		$this->db->insert('tbl_berita',$data);
	}
	public function getidberita($id_berita)
	{
		return $this->db->get_where('tbl_berita',['id_berita'=>  $id_berita])->row_array();
	}
	public function hapusbrt($id_berita)
	{
		$this->db->where('id_berita',$id_berita);
		$this->db->delete('tbl_berita');
	}
	public function ubahbrt($id_berita,$data)
	{
		$this->db->where('id_berita',$id_berita);
		$this->db->update('tbl_berita',$data);
	}
	public function tayangdilokbrt($id_berita,$data)
	{
		$this->db->where('id_berita',$id_berita);
		$this->db->update('tbl_berita',$data);
	}
	//INFORMASI PENGAJUAN
	public function listpgj()
	{
		$this->db->select('*');
		$this->db->from('tbl_pengajuan');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_pengajuan.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_pengajuan.kode_desa','left');
		$query = $this->db->get();
 		return $query->result();
	}
	public function getidpengajuan($id_pengajuan)
	{
		return $this->db->get_where('tbl_pengajuan',['id_pengajuan'=>  $id_pengajuan])->row_array();
	}
	public function hapuspgj($id_pengajuan)
	{
		$this->db->where('id_pengajuan',$id_pengajuan);
		$this->db->delete('tbl_pengajuan');
	}
	public function prosespgj($id_pengajuan,$data)
	{
		$this->db->where('id_pengajuan',$id_pengajuan);
		$this->db->update('tbl_pengajuan',$data);
	}
	public function listnotif()
	{
		$sp=0;
		$this->db->select('*');
		$this->db->where('status_pengajuan', $sp);
		return $this->db->get('tbl_pengajuan',5)->result_array();
	}
	//LIST KONTAK
	public function listkon()
	{
		$this->db->order_by('id_kontak', 'ASC');
		return $this->db->get('tbl_kontak')->result_array();	
	}
	public function getidkontak($id_kontak)
	{
		return $this->db->get_where('tbl_kontak',['id_kontak'=>  $id_kontak])->row_array();
	}
	public function hapuskon($id_kontak)
	{
		$this->db->where('id_kontak',$id_kontak);
		$this->db->delete('tbl_kontak');
	}
	//LIST KONTAK
	public function listinfo()
	{
		$this->db->order_by('id_info', 'ASC');
		return $this->db->get('tbl_info')->result_array();	
	}
	public function getidinfo($id_info)
	{
		return $this->db->get_where('tbl_info',['id_info'=>  $id_info])->row_array();
	}
	public function ubahinfo($id_info,$data)
	{
		$this->db->where('id_info',$id_info);
		$this->db->update('tbl_info',$data);
	}
	//LIST ASPIRASI
	public function listasp()
	{
		$this->db->order_by('id_aspirasi', 'DESC');
		return $this->db->get('tbl_aspirasi')->result_array();	
	}
	public function getidaspirasi($id_aspirasi)
	{
		return $this->db->get_where('tbl_aspirasi',['id_aspirasi'=>  $id_aspirasi])->row_array();
	}
	public function hapusasp($id_aspirasi)
	{
		$this->db->where('id_aspirasi',$id_aspirasi);
		$this->db->delete('tbl_aspirasi');
	}
	public function tambahagenda($data)
	{
		$this->db->insert('tbl_agenda',$data);
	}
	public function listagen()
	{
		$this->db->order_by('waktu_agenda','ASC');
		return $this->db->get('tbl_agenda')->result_array();
	}
	public function hapusagd($id_agenda)
	{
		$this->db->where('id_agenda',$id_agenda);
		$this->db->delete('tbl_agenda');
	}
	public function ubahagd($id_agenda,$data)
	{
		$this->db->where('id_agenda',$id_agenda);
		$this->db->update('tbl_agenda',$data);
	}
	//DATA penghargaan
	public function listpeng()
	{
		$this->db->order_by('id', 'ASC');
		return $this->db->get('tbl_penghargaan')->result_array();	
	}
	public function tambahpeng($data)
	{
		$this->db->insert('tbl_penghargaan',$data);
	}
	public function getidpeng($id)
	{
		return $this->db->get_where('tbl_penghargaan',['id'=>  $id])->row_array();
	}
	public function hapuspeng($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tbl_penghargaan');
	}
	public function listwstmap()
	{
		$this->db->order_by('id_master_wisata', 'DESC');
		return $this->db->get('tbl_master_wisata')->result();	
	}
	public function listsrnmap()
	{
		$this->db->order_by('id_sarana', 'DESC');
		return $this->db->get('tbl_master_sarana')->result();	
	}
	public function listbdymap()
	{
		$this->db->order_by('id_master_budaya', 'DESC');
		return $this->db->get('tbl_master_budaya')->result();	
	}
	public function list_role()
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('tbl_user_role',3)->result_array();	
	}
	public function list_roleall()
	{
		$this->db->order_by('id', 'ASC');
		return $this->db->get('tbl_user_role')->result_array();	
	}
	public function getidprofil($id)
	{
		return $this->db->get_where('tbl_user',['id'=>  $id])->row_array();
	}
	public function ubahprofil($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('tbl_user',$data);
	}
	public function datauser()
	{
		return $this->db->get('tbl_user')->result_array();
	}
	public function datarole()
	{
		return $this->db->get('tbl_user_role')->result_array();
	}
	public function datahistori()
	{
		$this->db->order_by('id','DESC');
		return $this->db->get('tbl_user_histori')->result_array();
	}
	public function datatoken()
	{
		$this->db->order_by('id','DESC');
		return $this->db->get('tbl_user_token')->result_array();
	}
	public function hapusakun($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tbl_user');
	}
	public function hapusrole($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tbl_user_role');
	}
	public function hapustoken($date_created)
	{
		$this->db->where('date_created',$date_created);
		$this->db->delete('tbl_user_token');
	}
	public function getidakun($id)
	{
		return $this->db->get_where('tbl_user',['id'=>  $id])->row_array();
	}
	public function getidpeta($id)
	{
		return $this->db->get_where('tbl_peta',['id'=>  $id])->row_array();
	}

}