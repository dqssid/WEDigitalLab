<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->view('admin/v_header');
<<<<<<< HEAD
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_sidebar');
=======
		$this->load->view('admin/v_sidebar');
		$this->load->view('admin/v_navbar');
>>>>>>> c27b72748c33777deba37f08d9d7490a1b474463
		$this->load->view('admin/v_home');
		$this->load->view('admin/v_footer');
	}
}
