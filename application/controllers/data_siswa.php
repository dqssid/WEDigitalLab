<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_Siswa extends CI_Controller
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
		$data['data_siswa'] = $this->M_data->get_data('tbl_siswa')->result();
		$data['judul'] = 'lab_digital';
		$this->load->view('admin/v_header');
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_data_siswa', $data);
		$this->load->view('admin/v_footer');
	}
}
