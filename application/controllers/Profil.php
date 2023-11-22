<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
        $this->load->model('mahasiswa_model');
        $this->load->model('prodi_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Profile";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("profil/vw_profile", $data);
        $this->load->view("layout/footer");
    }
}
