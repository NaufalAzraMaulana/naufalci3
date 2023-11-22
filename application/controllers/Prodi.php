<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa_model');
		$this->load->model('prodi_model');
	}
	public function index()
	{
		$data['judul'] = "Halaman prodi";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['prodi'] = $this->prodi_model->get();
		$this->load->view("layout/header", $data);
		$this->load->view("prodi/vw_prodi", $data);
		$this->load->view("layout/footer", $data);
	}
	public function tambahprodi()
	{
		$data['judul'] = "Halaman Tambah Prodi";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['prodi'] = $this->prodi_model->get();

		$this->form_validation->set_rules('nama', 'Nama', 'required', [
			'required' => 'Nama Program Studi Wajib di isi'
		]);

		$this->form_validation->set_rules('ruangan', 'Ruangan', 'required', [
			'required' => 'Ruangan Wajib di isi'
		]);

		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required', [
			'required' => 'Jurusan Wajib di isi'
		]);

		$this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required', [
			'required' => 'Akreditasi Wajib di isi'
		]);

		$this->form_validation->set_rules('nama_kaprodi', 'Ketua Program Studi', 'required', [
			'required' => 'Ketua Program Studi Wajib di isi'
		]);

		$this->form_validation->set_rules('tahun_berdiri', 'Tahun Berdiri', 'required|integer', [
			'required' => 'Tahun Berdiri Wajib di isi',
			'integer' => 'Tahun Berdiri harus Angka'
		]);

		$this->form_validation->set_rules('output_lulusan', 'Output Lulusan', 'required', [
			'required' => 'Output Lulusan Wajib di isi'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("prodi/vw_tambah_prodi", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'ruangan' => $this->input->post('ruangan'),
				'jurusan' => $this->input->post('jurusan'),
				'akreditasi' => $this->input->post('akreditasi'),
				'nama_kaprodi' => $this->input->post('nama_kaprodi'),
				'tahun_berdiri' => $this->input->post('tahun_berdiri'),
				'output_lulusan' => $this->input->post('output_lulusan')
			];

			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/prodi/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$this->Prodi_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
Mahasiswa Berhasil Ditambah!</div>');
			redirect('Prodi');
		}
	}


	public function detail($id)
	{
		$data['judul'] = "Halaman Detail Prodi";
		$data['prodi'] = $this->prodi_model->getById($id);
		$this->load->view("layout/header", $data);
		$this->load->view("prodi/vw_detail_prodi", $data);
		$this->load->view("layout/footer");
	}
	public function edit($id)
	{
		$data['judul'] = "Halaman Edit Prodi";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['prodi'] = $this->prodi_model->getById($id);

		$this->form_validation->set_rules('nama', 'Nama Program Studi', 'required', [
			'required' => 'Nama Program Studi Wajib di isi'
		]);
		$this->form_validation->set_rules('ruangan', 'Ruangan', 'required', [
			'required' => 'Ruangan Wajib di isi'
		]);
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required', [
			'required' => 'Jurusan Wajib di isi'
		]);
		$this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required', [
			'required' => 'Akreditasi Wajib di isi'
		]);
		$this->form_validation->set_rules('nama_kaprodi', 'Ketua Program Studi', 'required', [
			'required' => 'Nama Ketua Program Studi Wajib di isi'
		]);
		$this->form_validation->set_rules('tahun_berdiri', 'Tahun Berdiri', 'required|numeric', [
			'required' => 'Tahun Berdiri Wajib di isi',
			'numeric' => 'Tahun Berdiri harus Angka'
		]);
		$this->form_validation->set_rules('output_lulusan', 'Output Lulusan', 'required', [
			'required' => 'Output Lulusan Wajib di isi'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("prodi/vw_ubah_prodi", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'ruangan' => $this->input->post('ruangan'),
				'jurusan' => $this->input->post('jurusan'),
				'akreditasi' => $this->input->post('akreditasi'),
				'nama_kaprodi' => $this->input->post('nama_kaprodi'),
				'tahun_berdiri' => $this->input->post('tahun_berdiri'),
				'output_lulusan' => $this->input->post('output_lulusan'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/prodi/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$old_image = $data['prodi']['gambar'];
					if ($old_image != 'default.jpg') {
						unlink(FCPATH . 'assets/img/prodi/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$id = $this->input->post('id');
			$this->Prodi_model->update(['id' => $id], $data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Dosen Berhasil
Diubah!</div>');
			redirect('Prodi');
		}
	}


	public function hapus($id)
	{
		$this->prodi_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
											fas fa-info-circle"></i>Data Prodi tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
											class="icon fas fa-check-circle"></i>Data Prodi Berhasil Dihapus!</div>');
		}
		redirect('Prodi');
	}

	// public function upload()
	// {
	// 	$data = [
	// 		'nama' => $this->input->post('nama'),
	// 		'ruangan' => $this->input->post('ruangan'),
	// 		'jurusan' => $this->input->post('jurusan'),
	// 		'akreditasi' => $this->input->post('akreditasi'),
	// 		'nama_kaprodi' => $this->input->post('nama_kaprodi'),
	// 		'tahun_berdiri' => $this->input->post('tahun_berdiri'),
	// 		'output_lulusan' => $this->input->post('output_lulusan'),
	// 	];

	// 	$this->prodi_model->insert($data);
	// 	redirect('Prodi');
	// }
	public function update()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'ruangan' => $this->input->post('ruangan'),
			'jurusan' => $this->input->post('jurusan'),
			'akreditasi' => $this->input->post('akreditasi'),
			'nama_kaprodi' => $this->input->post('nama_kaprodi'),
			'tahun_berdiri' => $this->input->post('tahun_berdiri'),
			'output_lulusan' => $this->input->post('output_lulusan'),
		];

		$id = $this->input->post('id'); // Corrected variable name
		$this->prodi_model->update(['id' => $id], $data);
		redirect('Prodi');
	}
}
