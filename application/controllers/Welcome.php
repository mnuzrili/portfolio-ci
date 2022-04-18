<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	private $expire; //menentukan umur cookie
	private $file = 'visitor.txt';

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');

		if (!file_exists($this->file)) {
			//kondisi jika file visitor.txt belum ada, buat baru dengan nilai 0
			$handle = fopen($this->file, 'w');
			$data = 0;
			fwrite($handle, $data);
		}
		$this->expire = 30 * 86400; //umur cookie 30 hari
	}

	public function index()
	{
		$this->Hitung();
		$data['visitor'] = $this->tampil();
		$h = $this->waktu();
		if (!empty($h)) {
			$data['waktu'] = $h;
		}

		$data['hero_section'] = $this->m_data->get_data('hero_section')->row();
		$data['about_section_left'] = $this->m_data->get_where(['position' => 'left'], 'about_section')->row();
		$data['about_section_right'] = $this->m_data->get_where(['position' => 'right'], 'about_section')->row();
		$data['portfolio_section'] = $this->m_data->get_data('portfolio_section')->result();

		$this->load->view('welcome_message', $data);
	}

	public function kirim_pesan()
	{
		$name = $this->input->get('name');
		$email = $this->input->get('email');
		$message = $this->input->get('message');

		$data = [
			'name' => $name,
			'email' => $email,
			'message' => $message
		];

		$this->m_data->insert_data($data, 'message_tb');
	}

	public function Hitung()
	{
		if (!isset($_COOKIE['counter'])) {
			//cookie kosong dan tambahkan jumlah pengunjung
			$handle = fopen($this->file, 'r');
			$data = intval(fread($handle, filesize($this->file))); //mengambil nilai dari visitor.txt
			$nilaibaru = $data + 1; //tambahkan nilai +1
			//simpan nilai baru
			$handle = fopen($this->file, 'w');
			fwrite($handle, $nilaibaru);
			setcookie('counter', time(), time() + $this->expire); //tambahkan cookie dengan nilai tanggal sekarang
		}
	}

	public function tampil()
	{
		//mengambil nilai dari visitor.txt
		$handle = fopen($this->file, 'r');
		$data = intval(fread($handle, filesize($this->file)));
		return $data;
	}

	public function waktu()
	{
		$history = null;
		//menampilkan kapan user berkunjung
		if (!empty($_COOKIE['counter'])) {
			$get = $_COOKIE['counter'];
			$history = date("d F Y", $get);
		}
		return $history;
	}
}
