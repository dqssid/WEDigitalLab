<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {

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
		$data['Materi'] = $this->M_data->get_data('tbl_materi')->result();
		$data['judul'] = 'lab_digital';
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_materi1', $data);
		$this->load->view('admin/v_footer');
	}
	function materi_tambah_aksi(){
		$judul = $this->input->post('judul');
		$penulis = $this->input->post('penulis');
		$tahun = $this->input->post('tahun');
		$data = array(
			'judul' => $judul,
			'penulis' => $penulis,
			'tahun' => $tahun,
			'status' => 1
		);
		// insert data ke database
		$this->M_data->insert_data($data,'tbl_materi');
		// mengalihkan halaman ke halaman data materi
		redirect(base_url().'materi');
	}
	function materi_tambah(){
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_form_tambah_materi1');
		$this->load->view('admin/v_footer');
	}
	function materi_edit($id){
		$where = array('id' => $id);
		// mengambil data dari database sesuai id
		$data['materi'] = $this->m_data->edit_data($where,'tbl_materi')->result();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_materi_edit',$data);
		$this->load->view('admin/v_footer');
	}
	function materi_update(){
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$penulis = $this->input->post('penulis');
		$tahun = $this->input->post('tahun');
		$status = $this->input->post('status');
		$where = array(
			'id' => $id
		);
		$data = array(
			'judul' => $judul,
			'penulis' => $penulis,
			'tahun' => $tahun,
			'status' => $status
		);
		// insert data ke database
		$this->M_data->insert_data($data,'tbl_materi');
		// mengalihkan halaman ke halaman data materi
		redirect(base_url().'materi');
	}
	/*function user_tambah(){
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_form_tambah_user');
		$this->load->view('admin/v_footer');
	}*/
	/* function user_edit(){
		$id_user = $this->uri->segment(3);
		$where = array('id_user' => $id_user);
		// mengambil data dari database sesuai id
		$data['user'] = $this->M_data->edit_data($where,'tbl_user')->row();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_user_edit',$data);
		$this->load->view('admin/v_footer');
	} 
	function user_simpan_edit(){
		$id = $this->input->post('ids');
		$username = $this->input->post('email');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$where = array(
		'id_user' => $id
		);
		// cek apakah form password di isi atau tidak
		if($password==""){
		$data = array(

		'id' => $id,
		'username' => $username
		);
		// update data ke database
		$this->M_data->update_data($where,$data,'tbl_user');
		}else{
		$data = array(
		'id' => $id,

		# 'id' => $id, 

		'username' => $username,
		'level' => $level
		);
		// update data ke database

		$this->M_data->update_data($where,$data,'tbl_user');
	}
	
		$data = array(
		'id' => $id, 
		'username' => $username,
		'password' => md5($password),
		'level' => $level
		);
		// update data ke database

		$this->M_data->update_data($where,$data,'petugas');
	
		// mengalihkan halaman ke halaman data petugas
		redirect(base_url().'user');
	}	
	function user_hapus()
	{
		$id_user = $this->uri->segment(3);
		$where = array(
		'id_user' => $id_user
		);
		// menghapus data petugas dari database sesuai id
		$this->M_data->delete_data($where,'tbl_user');
		// mengalihkan halaman ke halaman data petugas
		redirect(base_url().'user');
	}
	function logout(){
			$this->session->sess_destroy();
			redirect(base_url().'landing');
	} */
	
}