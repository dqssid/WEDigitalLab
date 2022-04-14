<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

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
		$data['Guru'] = $this->M_data->get_data('tbl_guru')->result();
		$data['judul'] = 'lab_digital';
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_guru', $data);
		$this->load->view('admin/v_footer');
	}
  //  function guru tambah ()	
	function guru_tambah_aksi()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$mapel = $this->input->post('level');
		$data = array(
		'username' => $email,
        'password' => md5($password,),
		'mapel' => $mapel);
	// insert data ke database
		$this->M_data->insert_data($data,'tbl_guru');
		
		// mengalihkan halaman ke halaman data petugas
		redirect(base_url().'guru');
	}
	
	function guru_tambah(){
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_form_tambah_guru');
		$this->load->view('admin/v_footer');
}
function guru_edit(){
		$id_guru = $this->uri->segment(3);
		$where = array('id_guru' => $id_guru);
		// mengambil data dari database sesuai id
		$data['guru'] = $this->M_data->edit_data($where,'tbl_guru')->row();
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_guru_edit',$data);
		$this->load->view('admin/v_footer');
	}
	function guru_simpan_edit(){
		$id = $this->input->post('ids');
		$username = $this->input->post('email');
		$password = $this->input->post('password');
		$mapel = $this->input->post('level');
		$where = array(
		'id' => $id
		);
		// cek apakah form password di isi atau tidak
		if($password==""){
		$data = array(

		'id' => $id,
		'username' => $username
		);
		// update data ke database
		$this->M_data->update_data($where,$data,'tbl_guru');
		}else{
		$data = array(
		'id' => $id,

		# 'id' => $id, 

		'username' => $username,
		'mapel' => $mapel
		);
		// update data ke database

		$this->M_data->update_data($where,$data,'tbl_guru');
	}
	
		$data = array(
		'id' => $id, 
		'username' => $username,
		'password' => md5($password),
		'mapel' => $mapel
		);
		// update data ke database

		$this->M_data->update_data($where,$data,'guru');
	
		// mengalihkan halaman ke halaman data petugas
		redirect(base_url().'Guru');
	}	
	function guru_hapus()
	{
		$id_guru = $this->uri->segment(3);
		$where = array(
		'id_guru' => $id_guru
		);
		// menghapus data petugas dari database sesuai id
		$this->M_data->delete_data($where,'tbl_guru');
		// mengalihkan halaman ke halaman data petugas
		redirect(base_url().'guru');
	}
	function logout(){
			$this->session->sess_destroy();
			redirect(base_url().'landing');
	}
	
}