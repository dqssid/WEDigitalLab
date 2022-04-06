<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->view('admin/v_login');
	}
	// validasi login
function login_aksi(){
$username = $this->input->post('username');
$password = $this->input->post('password');
$sebagai = $this->input->post('sebagai');
$this->form_validation->set_rules('username','Username','required');
$this->form_validation->set_rules('password','Password','required');
if($this->form_validation->run() != false){
$where = array(
'username' => $username,
'password' => md5($password)
);
if($sebagai == "admin"){
$cek = $this->m_data->cek_login('admin',$where)->num_rows();
$data = $this->m_data->cek_login('admin',$where)->row();
if($cek > 0){
$data_session = array(
'id' => $data->id,
'username' => $data->username,
'status' => 'admin_login'
);
$this->session->set_userdata($data_session);
redirect(base_url().'admin');
}else{
redirect(base_url().'login?alert=gagal');
}
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
}
}

