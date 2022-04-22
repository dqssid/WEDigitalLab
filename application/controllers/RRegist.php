<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RRegist extends CI_Controller
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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	/*public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validasi');
	}*/

	public function index()
	{
		$this->load->view('admin/v_registrasi');
	}
	// validasi login
	function regist_aksi()
	{
		$nama = $this->input->post('nama');
		$nis = $this->input->post('nis');
		$kelas = $this->input->post('kelas');
		$jurusan = $this->input->post('jurusan');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$repeat_pass = $this->input->post('repeat_pass');
		//$sebagai = $this->input->post('sebagai');

		// $sebagai = $this->input->post('sebagai');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nis', 'NIS', 'required');
		$this->form_validation->set_rules('kelas', 'Kelas', 'required');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
		$this->form_validation->set_rules('email', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('repeat_pass', 'RepeatPassword', 'required');

		if ($this->form_validation->run() != false) {
			$where = array(
				'nama' => $nama,
				'nis' => $nis,
				'kelas' => $kelas,
				'jurusan' => $jurusan,
				'username' => $email,
				'password' => md5($password),
				'repeat_pass' => md5($password)

			);
		}
	}
}

/*if ($this->form_validation->run() == false) {
			$data['tbl_regist_siswa'] = $this->M_data->get_data('tbl_regist_siswa')->result();
			$data['judul'] = 'lab_digital';
			$this->load->view('admin/v_header');
			$this->load->view('admin/v_sidebar');
			$this->load->view('admin/v_navbar');
			$this->load->view('admin/v_data_siswa', $data);
			$this->load->view('admin/v_footer');
		} else {
			echo ('Data Berhasil Ditambahkan');
		}*/

		//$data['title'] = 'DigitalLab User Registrasi';

		//deklarasi
		/*$email = $this->input->post('email');
		$password = $this->input->post('password');
		//$_POST['variable'];
		echo $email.'<br>'.$password;
		*/
		/*$username = $this->input->post('email');
		$password = $this->input->post('password');
		//$sebagai = $this->input->post('sebagai');

		// $sebagai = $this->input->post('sebagai');
		$this->form_validation->set_rules('email', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() != false) {
			$where = array(
				'username' => $username,
				'password' => md5($password)
			);

			// if($sebagai == "admin"){
			$cek = $this->M_data->cek_login('tbl_user', $where)->num_rows();

			$data = $this->M_data->cek_login('tbl_user', $where)->row();

			if ($cek > 0) {
				$data_session = array(
					'id' => $data->id_user,
					'username' => $data->email,
					'status' => 'admin_login'
				);
				$this->session->set_userdata($data_session);
				redirect(base_url() . 'home');
			} else {
				redirect(base_url() . 'login?alert=gagal');
			}
			//}
		} else {
			$this->load->view('admin/v_login');
		}
		/*
}else if($sebagai == "petugas"){
$cek = $this->m_data->cek_login('petugas',$where)->num_rows();
$data = $this->m_data->cek_login('petugas',$where)->row();
if($cek > 0){
$data_session = array(
'id' => $data->id,
'nama' => $data->nama,
'username' => $data->username,
'status' => 'petugas_login'
);
$this->session->set_userdata($data_session);
redirect(base_url().'petugas');
}else{
redirect(base_url().'login?alert=gagal');
}
}
}else{
$this->load->view('v_login');
}
*/