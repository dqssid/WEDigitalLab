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
	public function index()
	{
		$this->load->view('admin/v_registrasi');
	}
	// validasi login
	function regist_aksi()
	{
		//deklarasi
		/*$email = $this->input->post('email');
		$password = $this->input->post('password');
		//$_POST['variable'];
		echo $email.'<br>'.$password;
		*/
		$username = $this->input->post('email');
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
	}
}