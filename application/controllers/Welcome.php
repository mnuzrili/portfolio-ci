<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
	}

	public function index()
	{
		$this->load->view('welcome_message');
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
}
