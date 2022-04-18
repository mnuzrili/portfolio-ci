<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    private $file = 'visitor.txt';

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        if (empty($_SESSION['logged_in'])) {
            redirect(base_url('login'));
        }
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['menu'] = 'Dashboard';
        $data['user'] = $this->m_data->get_where(['id' => $_SESSION['user_id']], 'users')->row();
        $data['new_messages'] = $this->m_data->get_where(['is_read' => 0], 'message_tb')->num_rows();
        $data['visitor'] = $this->tampil();
        $data['messages'] = $this->m_data->get_data('message_tb')->result();
        $data['breadcrumbs'] = '';
        $this->load->view('dashboard/templates/header', $data);
        $this->load->view('dashboard/templates/sidebar', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('dashboard/templates/footer');
    }

    public function tampil()
    {
        //mengambil nilai dari visitor.txt
        $handle = fopen($this->file, 'r');
        $data = intval(fread($handle, filesize($this->file)));
        return $data;
    }
}
