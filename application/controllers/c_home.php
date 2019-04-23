<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class c_home extends CI_Controller {

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
		$this->load->view('v_home');
	}

	public function view_pelajar()
	{
		$this->load->view('v_pelajar');
	}
	public function view_mahasiswa()
	{
		$this->load->view('v_mahasiswa');
	}
	public function view_umum()
	{
		$this->load->view('v_umum');
	}
	public function view_lainnya()
	{
		$this->load->view('v_lainnya');
	}
	public function view_login()
	{
		$this->load->view('v_login');
	}
}
