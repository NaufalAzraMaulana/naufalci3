<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Lomba extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_model');
        $this->load->model('prodi_model');
        $this->load->model('lomba_model');
    }
    public function index()
    {
        $data['judul'] = "Halaman Informasi Lomba";
        $data['user']= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['lombaa'] = $this->lomba_model->get();
        $this->load->view("layout/header",$data);
        $this->load->view("lomba/vw_lomba", $data);
        $this->load->view("layout/footer",$data);
    }
    public function tambahlomba()
{
    $data['judul'] = "Pendaftaran Lomba";
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('nama_lomba', 'Nama Lomba', 'required', [
        'required' => 'Nama Lomba Wajib di isi'
    ]);

    $this->form_validation->set_rules('tanggal', 'Tanggal Lomba', 'required', [
        'required' => 'Tanggal Lomba Wajib di isi'
    ]);

    $this->form_validation->set_rules('lokasi', 'Lokasi Lomba', 'required', [
        'required' => 'Lokasi Lomba Wajib di isi'
    ]);

    $this->form_validation->set_rules('deskripsi', 'Deskripsi Lomba', 'required', [
        'required' => 'Deskripsi Lomba Wajib di isi'
    ]);

    $this->form_validation->set_rules('biaya_pendaftaran', 'Biaya Pendaftaran', 'required|numeric', [
        'required' => 'Biaya Pendaftaran Wajib di isi',
        'numeric' => 'Biaya Pendaftaran harus Angka'
    ]);

    if ($this->form_validation->run() == false) {
        $this->load->view("layout/header", $data);
        $this->load->view("lomba/vw_tambah_lomba", $data);
        $this->load->view("layout/footer");
    } else {
        $data = [
            'nama_lomba' => $this->input->post('nama_lomba'),
            'tanggal' => $this->input->post('tanggal'),
            'lokasi' => $this->input->post('lokasi'),
            'deskripsi' => $this->input->post('deskripsi'),
            'biaya_pendaftaran' => $this->input->post('biaya_pendaftaran')
        ];

        $upload_image = $_FILES['gambar_lomba']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/lomba/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar_lomba')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar_lomba', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $this->lomba_model->insert($data, $upload_image);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
Mahasiswa berhasil mendaftar!</div>');
        redirect('Lomba');
    }
}


    public function detail($id){
        $data['judul'] = "Halaman Detail Lomba";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['lombaa'] = $this->lomba_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("lomba/vw_detail_lomba",$data);
        $this->load->view("layout/footer");
    }
    public function hapus($id){
		$this->mahasiswa_model->delete($id);
       	redirect('Mahasiswa');
    }
    //     public function upload()
    // {
    //     $data = [
    //         'nama' => $this->input->post('nama'),
    //         'nim' => $this->input->post('nim'),
    //         'email' => $this->input->post('email'),
    //         'prodi' => $this->input->post('prodi'),
    //         'alamat' => $this->input->post('alamat'),
    //         'jenis_kelamin' => $this->input->post('jenis_kelamin'),
    //         'asal_sekolah' => $this->input->post('asal_sekolah'),
    //     ];

    //     $this->mahasiswa_model->insert($data);
    //     redirect('Mahasiswa');
    // }

    public function editlomba($id)
{
    $data['judul'] = "Edit Lomba";
    $data['lomba'] = $this->lomba_model->getById($id);
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('nama_lomba', 'Nama Lomba', 'required', [
        'required' => 'Nama Lomba Wajib di isi'
    ]);

    $this->form_validation->set_rules('tanggal', 'Tanggal Lomba', 'required', [
        'required' => 'Tanggal Lomba Wajib di isi'
    ]);

    $this->form_validation->set_rules('lokasi', 'Lokasi Lomba', 'required', [
        'required' => 'Lokasi Lomba Wajib di isi'
    ]);

    $this->form_validation->set_rules('deskripsi', 'Deskripsi Lomba', 'required', [
        'required' => 'Deskripsi Lomba Wajib di isi'
    ]);

    $this->form_validation->set_rules('biaya_pendaftaran', 'Biaya Pendaftaran', 'required|numeric', [
        'required' => 'Biaya Pendaftaran Wajib di isi',
        'numeric' => 'Biaya Pendaftaran harus Angka'
    ]);

    if ($this->form_validation->run() == false) {
        $this->load->view("layout/header", $data);
        $this->load->view("lomba/vw_ubah_lomba", $data);
        $this->load->view("layout/footer");
    } else {
        $data = [
            'nama_lomba' => $this->input->post('nama_lomba'),
            'tanggal' => $this->input->post('tanggal'),
            'lokasi' => $this->input->post('lokasi'),
            'deskripsi' => $this->input->post('deskripsi'),
            'biaya_pendaftaran' => $this->input->post('biaya_pendaftaran')
        ];

        $id = $this->input->post('id');
        $this->lomba_model->update(['id' => $id], $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Lomba Berhasil DiUbah!</div>');
        redirect('Lomba');
    }
}


       


    // public function update() {
    //     $data = [
    //         'nama' => $this->input->post('nama'),
    //         'nim' => $this->input->post('nim'),
    //         'email' => $this->input->post('email'),
    //         'prodi' => $this->input->post('prodi'),
    //         'alamat' => $this->input->post('alamat'),
    //         'no_hp' => $this->input->post('no_hp'),
    //         'jenis_kelamin' => $this->input->post('jenis_kelamin'),
    //         'asal_sekolah' => $this->input->post('asal_sekolah')
    //     ];
    
    //     $id = $this->input->post('id'); // Corrected variable name
    //     $this->mahasiswa_model->update(['id' => $id], $data);
    //     redirect('Mahasiswa');
    // }
    
    

}
