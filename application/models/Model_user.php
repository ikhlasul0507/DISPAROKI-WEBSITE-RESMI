<?php 

class Model_user extends CI_model{

	//all data wisata
	public function Allwisata()
	{
		$this->db->order_by('kode_wisata', 'ASC');
		return $this->db->get('tbl_wisata')->result_array();	
	}
	//all data sarana
	public function Allsarana()
	{
		$this->db->order_by('kode_sarana', 'ASC');
		return $this->db->get('tbl_sarana')->result_array();	
	}
	//all data budaya
	public function Allbudaya()
	{
		$this->db->order_by('kode_budaya', 'ASC');
		return $this->db->get('tbl_budaya')->result_array();	
	}
	//all media
	public function Allmedia()
	{
		$this->db->order_by('id', 'ASC');
		return $this->db->get('tbl_media_sosial')->result_array();	
	}
	//LIST KONTAK
	public function listinfo()
	{
		$this->db->order_by('id_info', 'ASC');
		return $this->db->get('tbl_info')->result_array();	
	}
	//LIST ASPIRASI
	public function listasp()
	{
		$this->db->order_by('id_aspirasi', 'DESC');
		return $this->db->get('tbl_aspirasi')->result_array();	
	}
	//DATA MASTER WISATA
	public function listwst()
	{
		$this->db->select('*');
		$this->db->from('tbl_master_wisata');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_wisata.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_wisata.kode_desa');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_master_wisata.kode_wisata','left');
		$this->db->where('status_wisata',1);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER budaya
	public function listbdy()
	{
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$this->db->where('status_budaya',1);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER WISATA
	public function alllistwst()
	{
		$this->db->select('*');
		$this->db->from('tbl_master_wisata');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_wisata.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_wisata.kode_desa');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_master_wisata.kode_wisata','left');
		
		$query = $this->db->get();
 		return $query->result();
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
	//INFORMASI BERITA
	public function listbrt()
	{
		$this->db->select('*');
		$this->db->from('tbl_berita');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_berita.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_berita.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_berita.kode_sarana');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_berita.kode_wisata','left');
		$this->db->where('status_berita',1);
		$query = $this->db->get();
 		return $query->result();
	}
	//INFORMASI BERITA
	public function alllistbrt()
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
	//INFORMASI BERITA
	public function limitlistbrt()
	{
		$this->db->select('*');
		$this->db->from('tbl_berita');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_berita.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_berita.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_berita.kode_sarana');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_berita.kode_wisata','left');
		$this->db->limit(10);
		$this->db->order_by('id_berita','DESC');
		$query = $this->db->get();
 		return $query->result();
	}
	public function countAllBerita()
	{
		return $this->db->get('tbl_berita')->num_rows();
	}
	//INFORMASI BERITA
	public function getBerita( $limit, $start)
	{
		$this->db->order_by('id_berita', 'DESC');
		return $this->db->get('tbl_berita', $limit, $start)->result_array();
	}
	public function getAllberita($id_berita)
	{
		$this->db->select('*');
		$this->db->from('tbl_berita');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_berita.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_berita.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_berita.kode_sarana');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_berita.kode_wisata','left');
		$this->db->where('id_berita',$id_berita);
		$query = $this->db->get();
 		return $query->result();
	}
	public function cariAllberita($cari)
	{
		$this->db->select('*');
		$this->db->from('tbl_berita');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_berita.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_berita.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_berita.kode_sarana');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_berita.kode_wisata','left');
		$this->db->like('judul_berita',$cari);
		$this->db->or_like('deskripsiberita1',$cari);
		$this->db->or_like('deskripsiberita2',$cari);
		$this->db->or_like('deskripsiberita3',$cari);
		$query = $this->db->get();
 		return $query->result();
	}
	public function prevAllberita($id_berita)
	{
		$no = 1;
		$prev = $id_berita-$no;
		$this->db->select('*');
		$this->db->from('tbl_berita');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_berita.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_berita.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_berita.kode_sarana');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_berita.kode_wisata','left');
		$this->db->where('id_berita',$prev);
		$query = $this->db->get();
 		return $query->result();
	}
	public function nextAllberita($id_berita)
	{
		$no = 1;
		$prev = $id_berita+$no;
		$this->db->select('*');
		$this->db->from('tbl_berita');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_berita.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_berita.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_berita.kode_sarana');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_berita.kode_wisata','left');
		$this->db->where('id_berita',$prev);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER SARANA
	public function listsrn()
	{
		$this->db->select('*');
		$this->db->from('tbl_master_sarana');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_sarana.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_sarana.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_master_sarana.kode_sarana','left');
		$this->db->limit(6);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER SARANA
	public function alllistsrn()
	{
		$this->db->select('*');
		$this->db->from('tbl_master_sarana');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_sarana.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_sarana.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_master_sarana.kode_sarana','left');
		
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER SARANA
	public function listsrng()
	{
		$this->db->select('*');
		$this->db->from('tbl_master_sarana');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_sarana.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_sarana.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_master_sarana.kode_sarana','left');
		$this->db->limit(3);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER SARANA
	public function listsrnv()
	{
		$this->db->select('*');
		$this->db->from('tbl_master_sarana');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_sarana.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_sarana.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_master_sarana.kode_sarana','left');
		$this->db->where('tbl_master_sarana.status_sarana',1);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER budaya
	public function listbdyv()
	{
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$this->db->where('tbl_master_budaya.status_video',1);
		$query = $this->db->get();
 		return $query->result();
	}
	//INFORMASI BERITA
	public function listbrtg()
	{
		$this->db->select('*');
		$this->db->from('tbl_berita');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_berita.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_berita.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_berita.kode_sarana');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_berita.kode_wisata','left');
		$this->db->limit(3);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER WISATA
	public function listwstg()
	{
		$this->db->select('*');
		$this->db->from('tbl_master_wisata');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_wisata.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_wisata.kode_desa');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_master_wisata.kode_wisata','left');
		$this->db->limit(3);
		$query = $this->db->get();
 		return $query->result();
	}

	//DATA VISI
	public function listvis()
	{
		$this->db->order_by('id_visi', 'ASC');
		return $this->db->get('tbl_visi')->result_array();	
	}
	//DATA MISI
	public function listmis()
	{
		$this->db->order_by('id_misi', 'ASC');
		return $this->db->get('tbl_misi')->result_array();	
	}
	//DATA MASTER WISATA
	public function listwsta()
	{
		$this->db->select('*');
		$this->db->from('tbl_master_wisata');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_wisata.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_wisata.kode_desa');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_master_wisata.kode_wisata','left');
		$this->db->where('tbl_master_wisata.kode_wisata',1);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER WISATA
	public function listwstb()
	{
		$this->db->select('*');
		$this->db->from('tbl_master_wisata');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_wisata.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_wisata.kode_desa');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_master_wisata.kode_wisata','left');
		$this->db->where('tbl_master_wisata.kode_wisata',2);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER WISATA
	public function listwstd()
	{
		$this->db->select('*');
		$this->db->from('tbl_master_wisata');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_wisata.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_wisata.kode_desa');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_master_wisata.kode_wisata','left');
		$this->db->where('tbl_master_wisata.kode_wisata',3);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER WISATA
	public function listwstr()
	{
		$this->db->select('*');
		$this->db->from('tbl_master_wisata');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_wisata.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_wisata.kode_desa');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_master_wisata.kode_wisata','left');
		$this->db->where('tbl_master_wisata.kode_wisata',4);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER WISATA
	public function listwstk()
	{
		$this->db->select('*');
		$this->db->from('tbl_master_wisata');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_wisata.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_wisata.kode_desa');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_master_wisata.kode_wisata','left');
		$this->db->where('tbl_master_wisata.kode_wisata',5);
		$query = $this->db->get();
 		return $query->result();
	}
	public function listwstv()
	{
		$this->db->select('*');
		$this->db->from('tbl_master_wisata');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_wisata.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_wisata.kode_desa');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_master_wisata.kode_wisata','left');
		$this->db->where('tbl_master_wisata.status_video',1);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER WISATA
	public function getAllwisata($id_master_wisata)
	{
		$this->db->select('*');
		$this->db->from('tbl_master_wisata');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_wisata.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_wisata.kode_desa');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_master_wisata.kode_wisata','left');
		$this->db->where('id_master_wisata',$id_master_wisata);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA KECAMATAN
	public function listkec()
	{
		$this->db->order_by('kode_kecamatan', 'ASC');
		return $this->db->get('tbl_kecamatan')->result_array();	
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
	//DATA MASTER WISATA
	public function cariAllwisata($cari)
	{
		$this->db->select('*');
		$this->db->from('tbl_master_wisata');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_wisata.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_wisata.kode_desa');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_master_wisata.kode_wisata','left');
		$this->db->where('tbl_master_wisata.kode_wisata',1);
		$this->db->like('tbl_master_wisata.kode_kecamatan',$cari);
		$query = $this->db->get();
 		return $query->result();

	}
	//DATA MASTER WISATA
	public function cariAllwisataBuatan($cari)
	{
		$this->db->select('*');
		$this->db->from('tbl_master_wisata');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_wisata.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_wisata.kode_desa');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_master_wisata.kode_wisata','left');
		$this->db->where('tbl_master_wisata.kode_wisata',2);
		$this->db->like('tbl_master_wisata.kode_kecamatan',$cari);
		$query = $this->db->get();
 		return $query->result();

	}
	//DATA MASTER WISATA
	public function cariAllwisataBudaya($cari)
	{
		$this->db->select('*');
		$this->db->from('tbl_master_wisata');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_wisata.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_wisata.kode_desa');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_master_wisata.kode_wisata','left');
		$this->db->where('tbl_master_wisata.kode_wisata',3);
		$this->db->like('tbl_master_wisata.kode_kecamatan',$cari);
		$query = $this->db->get();
 		return $query->result();

	}
	//DATA MASTER WISATA
	public function cariAllwisataReligius($cari)
	{
		$this->db->select('*');
		$this->db->from('tbl_master_wisata');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_wisata.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_wisata.kode_desa');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_master_wisata.kode_wisata','left');
		$this->db->where('tbl_master_wisata.kode_wisata',4);
		$this->db->like('tbl_master_wisata.kode_kecamatan',$cari);
		$query = $this->db->get();
 		return $query->result();

	}
	//DATA MASTER WISATA
	public function cariAllwisataKuliner($cari)
	{
		$this->db->select('*');
		$this->db->from('tbl_master_wisata');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_wisata.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_wisata.kode_desa');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_master_wisata.kode_wisata','left');
		$this->db->where('tbl_master_wisata.kode_wisata',5);
		$this->db->like('tbl_master_wisata.kode_kecamatan',$cari);
		$query = $this->db->get();
 		return $query->result();

	}
	public function tambahasp($data)
	{
		$this->db->insert('tbl_aspirasi',$data);
	}
	public function tambahpgj($data)
	{
		$this->db->insert('tbl_pengajuan',$data);
	}
	public function kode(){
		  $this->db->select('RIGHT(tbl_pengajuan.kode_pengajuan,2) as kode_pengajuan', FALSE);
		  $this->db->order_by('kode_pengajuan','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('tbl_pengajuan');  //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
			   //cek kode jika telah tersedia    
			   $data = $query->row();      
			   $kode = intval($data->kode_pengajuan) + 1; 
		  }
		  else{      
			   $kode = 1;  //cek jika kode belum terdapat pada table
		  }
			  $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
			  $kodetampil = "PEG".$batas;  //format kode
			  return $kodetampil;  
		 }
	public function tambahknt($data)
	{
		$this->db->insert('tbl_kontak',$data);
	}
	public function liststr()
	{
		$this->db->select('*');
		$this->db->from('tbl_struktur');
		$this->db->join('tbl_master_jabatan','tbl_master_jabatan.kode_jabatan=tbl_struktur.kode_jabatan', 'left');
		$query = $this->db->get();
		return $query->result();
		//return $this->db->get('tbl_struktur')->result_array();	
	}
	//DATA penghargaan
	public function listpeng()
	{
		$this->db->order_by('id', 'ASC');
		return $this->db->get('tbl_penghargaan')->result_array();	
	}
	//DATA MASTER SARANA hotel
	public function listsrnh()
	{
		$kode= 'S1';
		$this->db->select('*');
		$this->db->from('tbl_master_sarana');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_sarana.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_sarana.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_master_sarana.kode_sarana','left');
		$this->db->where('tbl_master_sarana.kode_sarana',$kode);
		$query = $this->db->get();
 		return $query->result();
	}
	public function getlistsrn($id_sarana)
	{
		$this->db->select('*');
		$this->db->from('tbl_master_sarana');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_sarana.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_sarana.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_master_sarana.kode_sarana','left');
		$this->db->where('id_sarana',$id_sarana);
		$query = $this->db->get();
 		return $query->result();
	}
	public function allcarihotel($cari)
	{
		$kode= 'S1';
		$this->db->select('*');
		$this->db->from('tbl_master_sarana');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_sarana.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_sarana.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_master_sarana.kode_sarana','left');
		$this->db->where('tbl_master_sarana.kode_sarana',$kode);
		$this->db->like('tbl_master_sarana.kode_kecamatan',$cari);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER SARANA media massa
	public function listmed()
	{
		$kode= 'S2';
		$this->db->select('*');
		$this->db->from('tbl_master_sarana');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_sarana.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_sarana.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_master_sarana.kode_sarana','left');
		$this->db->where('tbl_master_sarana.kode_sarana',$kode);
		$query = $this->db->get();
 		return $query->result();
	}
	public function allcarimed($cari)
	{
		$kode= 'S2';
		$this->db->select('*');
		$this->db->from('tbl_master_sarana');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_sarana.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_sarana.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_master_sarana.kode_sarana','left');
		$this->db->where('tbl_master_sarana.kode_sarana',$kode);
		$this->db->like('tbl_master_sarana.kode_kecamatan',$cari);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER SARANA pasar tradisional
	public function listsrnp()
	{
		$kode= 'S3';
		$this->db->select('*');
		$this->db->from('tbl_master_sarana');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_sarana.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_sarana.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_master_sarana.kode_sarana','left');
		$this->db->where('tbl_master_sarana.kode_sarana',$kode);
		$query = $this->db->get();
 		return $query->result();
	}
	public function carilistsrnp($cari)
	{
		$kode= 'S3';
		$this->db->select('*');
		$this->db->from('tbl_master_sarana');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_sarana.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_sarana.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_master_sarana.kode_sarana','left');
		$this->db->where('tbl_master_sarana.kode_sarana',$kode);
		$this->db->like('tbl_master_sarana.kode_kecamatan',$cari);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER SARANA pusat kerajinan
	public function listsrnpk()
	{
		$kode= 'S4';
		$this->db->select('*');
		$this->db->from('tbl_master_sarana');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_sarana.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_sarana.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_master_sarana.kode_sarana','left');
		$this->db->where('tbl_master_sarana.kode_sarana',$kode);
		$query = $this->db->get();
 		return $query->result();
	}
	public function carilistsrnpk($cari)
	{
		$kode= 'S4';
		$this->db->select('*');
		$this->db->from('tbl_master_sarana');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_sarana.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_sarana.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_master_sarana.kode_sarana','left');
		$this->db->where('tbl_master_sarana.kode_sarana',$kode);
		$this->db->like('tbl_master_sarana.kode_kecamatan',$cari);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER SARANA restoran
	public function listsrnht()
	{
		$kode= 'S5';
		$this->db->select('*');
		$this->db->from('tbl_master_sarana');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_sarana.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_sarana.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_master_sarana.kode_sarana','left');
		$this->db->where('tbl_master_sarana.kode_sarana',$kode);
		$query = $this->db->get();
 		return $query->result();
	}
	public function carilistsrnht($cari)
	{
		$kode= 'S5';
		$this->db->select('*');
		$this->db->from('tbl_master_sarana');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_sarana.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_sarana.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_master_sarana.kode_sarana','left');
		$this->db->where('tbl_master_sarana.kode_sarana',$kode);
		$this->db->like('tbl_master_sarana.kode_kecamatan',$cari);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER SARANA karoke
	public function listsrnkr()
	{
		$kode= 'S6';
		$this->db->select('*');
		$this->db->from('tbl_master_sarana');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_sarana.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_sarana.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_master_sarana.kode_sarana','left');
		$this->db->where('tbl_master_sarana.kode_sarana',$kode);
		$query = $this->db->get();
 		return $query->result();
	}
	public function carilistsrnkr($cari)
	{
		$kode= 'S6';
		$this->db->select('*');
		$this->db->from('tbl_master_sarana');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_sarana.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_sarana.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_master_sarana.kode_sarana','left');
		$this->db->where('tbl_master_sarana.kode_sarana',$kode);
		$this->db->like('tbl_master_sarana.kode_kecamatan',$cari);
		$query = $this->db->get();
 		return $query->result();
	}
	//ambil id budaya
	public function getlistbdy($id_master_budaya)
	{
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$this->db->where('id_master_budaya',$id_master_budaya);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER budaya tradisi lisan
	public function listbdytr()
	{
		$kode= 'B1';
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$this->db->where('tbl_master_budaya.kode_budaya',$kode);
		$query = $this->db->get();
 		return $query->result();
	}
	public function allcaritradisi($cari)
	{
		$kode= 'B1';
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$this->db->where('tbl_master_budaya.kode_budaya',$kode);
		$this->db->like('tbl_master_budaya.kode_kecamatan',$cari);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER budaya olahraga tradisional
	public function listbdyot()
	{
		$kode= 'B10';
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$this->db->where('tbl_master_budaya.kode_budaya',$kode);
		$query = $this->db->get();
 		return $query->result();
	}
	public function allcariolahraga($cari)
	{
		$kode= 'B10';
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$this->db->where('tbl_master_budaya.kode_budaya',$kode);
		$this->db->like('tbl_master_budaya.kode_kecamatan',$cari);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER budaya Manu Skrip
	public function listbdyms()
	{
		$kode= 'B2';
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$this->db->where('tbl_master_budaya.kode_budaya',$kode);
		$query = $this->db->get();
 		return $query->result();
	}
	public function allcarimanu($cari)
	{
		$kode= 'B2';
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$this->db->where('tbl_master_budaya.kode_budaya',$kode);
		$this->db->like('tbl_master_budaya.kode_kecamatan',$cari);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER budaya adat istiadat
	public function listbdyai()
	{
		$kode= 'B3';
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$this->db->where('tbl_master_budaya.kode_budaya',$kode);
		$query = $this->db->get();
 		return $query->result();
	}
	public function allcariadat($cari)
	{
		$kode= 'B3';
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$this->db->where('tbl_master_budaya.kode_budaya',$kode);
		$this->db->like('tbl_master_budaya.kode_kecamatan',$cari);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER budaya Ritus
	public function listbdyri()
	{
		$kode= 'B4';
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$this->db->where('tbl_master_budaya.kode_budaya',$kode);
		$query = $this->db->get();
 		return $query->result();
	}
	public function allcariritus($cari)
	{
		$kode= 'B4';
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$this->db->where('tbl_master_budaya.kode_budaya',$kode);
		$this->db->like('tbl_master_budaya.kode_kecamatan',$cari);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER budaya Pengetahuan tradisional
	public function listbdypt()
	{
		$kode= 'B5';
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$this->db->where('tbl_master_budaya.kode_budaya',$kode);
		$query = $this->db->get();
 		return $query->result();
	}
	public function allcaripengetahuan($cari)
	{
		$kode= 'B5';
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$this->db->where('tbl_master_budaya.kode_budaya',$kode);
		$this->db->like('tbl_master_budaya.kode_kecamatan',$cari);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER budaya Teknologi tradisional
	public function listbdytt()
	{
		$kode= 'B6';
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$this->db->where('tbl_master_budaya.kode_budaya',$kode);
		$query = $this->db->get();
 		return $query->result();
	}
	public function allcariteknologi($cari)
	{
		$kode= 'B6';
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$this->db->where('tbl_master_budaya.kode_budaya',$kode);
		$this->db->like('tbl_master_budaya.kode_kecamatan',$cari);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER budaya Seni
	public function listbdysn()
	{
		$kode= 'B7';
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$this->db->where('tbl_master_budaya.kode_budaya',$kode);
		$query = $this->db->get();
 		return $query->result();
	}
	public function allcariseni($cari)
	{
		$kode= 'B7';
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$this->db->where('tbl_master_budaya.kode_budaya',$kode);
		$this->db->like('tbl_master_budaya.kode_kecamatan',$cari);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER budaya Bahasa
	public function listbdybs()
	{
		$kode= 'B8';
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$this->db->where('tbl_master_budaya.kode_budaya',$kode);
		$query = $this->db->get();
 		return $query->result();
	}
	public function allcaribahasa($cari)
	{
		$kode= 'B8';
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$this->db->where('tbl_master_budaya.kode_budaya',$kode);
		$this->db->like('tbl_master_budaya.kode_kecamatan',$cari);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER budaya Permainan rakyat
	public function listbdypr()
	{
		$kode= 'B9';
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$this->db->where('tbl_master_budaya.kode_budaya',$kode);
		$query = $this->db->get();
 		return $query->result();
	}
	public function allcaripermainan($cari)
	{
		$kode= 'B9';
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$this->db->where('tbl_master_budaya.kode_budaya',$kode);
		$this->db->like('tbl_master_budaya.kode_kecamatan',$cari);
		$query = $this->db->get();
 		return $query->result();
	}
	//cari wisata
	public function cariwisata($cari)
	{

		$this->db->select('*');
		$this->db->from('tbl_master_wisata');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_wisata.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_wisata.kode_desa');
		$this->db->join('tbl_wisata','tbl_wisata.kode_wisata=tbl_master_wisata.kode_wisata','left');
		$this->db->like('tbl_kecamatan.nama_kecamatan',$cari);
		$this->db->or_like('tbl_wisata.nama_wisata',$cari);
		$this->db->or_like('tbl_master_wisata.nama_master_wisata',$cari);
		$query = $this->db->get();
 		return $query->result();
	}
	//cari sarana
	public function carisarana($cari)
	{

		$this->db->select('*');
		$this->db->from('tbl_master_sarana');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_sarana.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_sarana.kode_desa');
		$this->db->join('tbl_sarana','tbl_sarana.kode_sarana=tbl_master_sarana.kode_sarana','left');
		$this->db->like('tbl_kecamatan.nama_kecamatan',$cari);
		$this->db->or_like('tbl_sarana.nama_sarana',$cari);
		$this->db->or_like('tbl_master_sarana.nama_master_sarana',$cari);
		$query = $this->db->get();
 		return $query->result();
	}
	//cari budaya
	public function caribudaya($cari)
	{

		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		$this->db->like('tbl_kecamatan.nama_kecamatan',$cari);
		$this->db->or_like('tbl_budaya.nama_budaya',$cari);
		$this->db->or_like('tbl_master_budaya.nama_master_budaya',$cari);
		$query = $this->db->get();
 		return $query->result();
	}
	//cari budaya
	public function cariberita($cari)
	{

		$this->db->select('*');
		$this->db->from('tbl_berita');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_berita.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_berita.kode_desa','left');
		$this->db->like('tbl_kecamatan.nama_kecamatan',$cari);
		$this->db->or_like('tbl_berita.judul_berita',$cari);
		$this->db->or_like('tbl_berita.deskripsiberita1',$cari);
		$this->db->or_like('tbl_berita.deskripsiberita2',$cari);
		$this->db->or_like('tbl_berita.deskripsiberita3',$cari);
		$query = $this->db->get();
 		return $query->result();
	}
	//DATA MASTER budaya
	public function alllistbdy()
	{
		$this->db->select('*');
		$this->db->from('tbl_master_budaya');
		$this->db->join('tbl_kecamatan','tbl_kecamatan.kode_kecamatan=tbl_master_budaya.kode_kecamatan');
		$this->db->join('tbl_desa','tbl_desa.kode_desa=tbl_master_budaya.kode_desa');
		$this->db->join('tbl_budaya','tbl_budaya.kode_budaya=tbl_master_budaya.kode_budaya','left');
		
		$query = $this->db->get();
 		return $query->result();
	}
}