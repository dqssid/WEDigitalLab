<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Praktik extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['Praktik'] = $this->M_data->get_data('tbl_praktikum')->result();
		$data['judul'] = 'lab_digital';
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_praktik', $data);
		$this->load->view('admin/v_footer');
	}
  //  function guru tambah ()	
	function praktik_tambah_aksi()
	{
		
		$materi = $this->input->post('materi');
		$nm_guru = $this->input->post('nm_guru');
		$jurusan = $this->input->post('jurusan');
        $kelas = $this->input->post('kelas');
		# $batas_waktu = $this->input->post('batas_waktu')
		$keterangan = $this->input->post('keterangan');

		$data = array(
		'materi' => $materi,
        'nm_guru' => $nm_guru,
		'jurusan' => $jurusan,
        'kelas' => $kelas,
        'keterangan' => $keterangan);
	// insert data ke database
		$this->M_data->insert_data($data,'tbl_praktikum');
		
		// mengalihkan halaman ke halaman data petugas
		redirect(base_url().'praktik');
	}
	
	function praktik_tambah(){
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_tambah_praktik');
		$this->load->view('admin/v_footer');
}
function praktik_edit(){
		$kd_praktik = $this->uri->segment(4);
		$where = array('kd_praktik' => $kd_praktik);
		// mengambil data dari database sesuai id
		$data['praktik'] = $this->M_data->edit_data($where,'tbl_praktikum')->row();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_praktik_edit',$data);
		$this->load->view('admin/v_footer');
	}
	function praktik_simpan_edit(){
		$id = $this->input->post('ids');
		$username = $this->input->post('email');
		$password = $this->input->post('password');
		$mapel = $this->input->post('level');

        $id = $this->input->post('ids');
		$materi = $this->input->post('materi');
		$nm_guru = $this->input->post('nm_guru');
		$jurusan = $this->input->post('jurusan');
        $kelas = $this->input->post('kelas');
		$keterangan = $this->input->post('keterangan');
		$where = array(
		'id' => $id
		);
		// cek apakah form password di isi atau tidak
		if($password==""){
		$data = array(

		'id' => $id,
		'materi' => $materi
		);
		// update data ke database
		$this->M_data->update_data($where,$data,'tbl_praktikum');
		}else{
		$data = array(
		'id' => $id,
		'materi' => $materi,
		'nm_guru' => $nm_guru,
        'jurusan' => $jurusan,
        'kelas' => $kelas,
        'keterangan' => $keterangan
		);
		// update data ke database

		$this->M_data->update_data($where,$data,'tbl_praktikum');
	}
	
		$data = array(
        'id' => $id,
        'materi' => $materi,
        'nm_guru' => $nm_guru,
        'jurusan' => $jurusan,
        'kelas' => $kelas,
        'keterangan' => $keterangan
		);
		// update data ke database

		$this->M_data->update_data($where,$data,'praktik');
	
		// mengalihkan halaman ke halaman data petugas
		redirect(base_url().'praktik');
	}	
	function praktik_hapus()
	{
		$kd_praktik = $this->uri->segment(4);
		$where = array(
		'kd_praktik' => $kd_praktik
		);
		// menghapus data petugas dari database sesuai id
		$this->M_data->delete_data($where,'tbl_praktikum');
		// mengalihkan halaman ke halaman data petugas
		redirect(base_url().'praktik');
	}
	function logout(){
			$this->session->sess_destroy();
			redirect(base_url().'landing');
	}
	
}