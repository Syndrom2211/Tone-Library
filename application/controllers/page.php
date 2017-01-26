<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Page extends CI_Controller{

	//error_reporting(0);

	function __construct(){
		parent::__construct();

		// Load Model
		$this->load->model("m_umum");
		$this->load->model("m_tentang");
		$this->load->model("m_software");
		$this->load->model("m_libkategori");
		$this->load->model("m_infokontak");
		$this->load->model("m_setblog");
		$this->load->model("m_pengurus");
		$this->load->model("m_tags");
		$this->load->model("m_artikel");
		$this->load->model("m_komentar");
		$this->load->model("m_music");

		// Pengaturan Website
		$website = $this->m_umum->index();
		$this->load->vars('w', $website);
		// Deskripsi Website
		$deskripsi = $this->m_umum->deskripsi();
		$this->load->vars('d', $deskripsi);
		// Tentang Kami
		$tentang = $this->m_tentang->index();
		$this->load->vars('t', $tentang);
		// Software DAW
		$software = $this->m_software->index();
		$this->load->vars('s', $software);
		// Library Kategori
		$kategori = $this->m_libkategori->index();
		$this->load->vars('k', $kategori);
		// Info Kontak
		$infokontak = $this->m_infokontak->index();
		$this->load->vars('kn', $infokontak);
		// Tags Blog
		$tags = $this->m_tags->index();
		$this->load->vars('tg', $tags);
		// Setting Blog
		$setblog = $this->m_setblog->index();
		$this->load->vars('sb', $setblog);
		// Pengurus Blog
		$pengurus = $this->m_pengurus->index();
		$this->load->vars('p', $pengurus);
		// Music Library
		$music = $this->m_music->index();
		$this->load->vars('mc', $music);
	}

	function index(){
		redirect("/page/home");
	}

	// View Portal
	function home(){
		// Artikel
		$artikel = $this->m_artikel->index();
		$this->load->vars('at', $artikel);

		$this->load->view("header");
		$this->load->view("home");
		$this->load->view("footer");
	}

	// Kirim Email Form Kontak
	function kirim(){
		// Artikel
		$artikel = $this->m_artikel->index();
		$this->load->vars('at', $artikel);

		// Form Validation
		$this->form_validation->set_rules("nama", "Nama", "required|alpha|xss_clean");
		$this->form_validation->set_rules("email", "Email", "required|valid_email|xss_clean");
		$this->form_validation->set_rules("pesan", "Pesan", "required|xss_clean");

		if($this->form_validation->run() == FALSE){
			redirect("page/home");

			$this->load->view("header");
			$this->load->view("home");
			$this->load->view("footer");
		}else{
			/*
			$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'bangdam2211@gmail.com', // change it to yours
				'smtp_pass' => 'xxxxxx', // change it to yours
				'mailtype' => 'html',
				'charset' => 'iso-8859-1',
				'wordwrap' => TRUE); */

			// $this->load->library("email", $config);

			$this->email->from(set_value("email"), set_value("nama"));
			$this->email->to("bangdam2211@gmail.com");
			$this->email->subject("Dikirim dari Tone Library Kontak");
			$this->email->message(set_value("pesan"));

			$this->email->send();
			redirect("page/home");

			$this->load->view("header");
			$this->load->view("home");
			$this->load->view("footer");
		}
		// End Form Validation
	}

	// Tampil Artikel
	public function artikel($id){
		$artikel = $this->m_artikel->tampil($id);
		$this->load->vars('at', $artikel);

		// Komentar
		$komentar = $this->m_komentar->index($id);
		$this->load->vars('ko', $komentar);

		$this->load->view("header");
		$this->load->view("artikel");
		$this->load->view("footer");
	}

	// Cari data artikel
	function caridata_artikel(){
		$cari = $this->input->get("cari");
		$beda["cari"] = $this->m_artikel->cariArtikel($cari);

		$this->load->view("header");
		$this->load->view("cari_artikel", $beda);
		$this->load->view("footer");
	}

	// Cari data music
	function caridata_music(){
		$cari = $this->input->get("cari");
		$beda["cari"] = $this->m_music->cariMusic($cari);

		$this->load->view("header");
		$this->load->view("cari_music", $beda);
		$this->load->view("footer");
	}

	// Blog
	function blog(){
		$sub_data = '';

		// Pagination Artikel
		$config['base_url'] = base_url('page/blog/');
		$config['total_rows'] = $this->db->count_all('tb_blog_artikel');
		$config['per_page'] = '3';

		$this->pagination->initialize($config);
		$offset = $this->uri->segment(3);

		$this->db->order_by("id_blog_a", "desc");
		$query = $this->db->get('tb_blog_artikel', $config['per_page'], $offset);
		$sub_data['query'] = $query->result_array();
		// End Of Pagination

		$this->load->view("header");
		$this->load->view("blog", $sub_data);
		$this->load->view("footer");
	}

	// Library Music
	function library(){
		$sub_data = '';

		// Pagination Artikel
		$config['base_url'] = base_url('page/library/');
		$config['total_rows'] = $this->db->count_all('tb_lib_music');
		$config['per_page'] = '4';

		$this->pagination->initialize($config);
		$offset = $this->uri->segment(3);

		$this->db->order_by("id_music", "desc");
		$query = $this->db->get('tb_lib_music', $config['per_page'], $offset);
		$sub_data['query'] = $query->result_array();
		// End Of Pagination

		$this->load->view("header");
		$this->load->view("library", $sub_data);
		$this->load->view("footer");
	}
}
