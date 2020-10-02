<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('parts/head');
		$this->load->view('parts/topbar');
		$this->load->view('parts/sidebar');
		$this->load->view('main/dashboard');
		$this->load->view('parts/footer');
		$this->load->view('parts/js');
	}

	public function detail()
	{
		$this->load->view('parts/head');
		$this->load->view('parts/topbar');
		$this->load->view('parts/sidebar');
		$this->load->view('main/video_detail');
		$this->load->view('parts/footer');
		$this->load->view('parts/js');
	}

	public function national()
	{
		$this->load->view('parts/head');
		$this->load->view('parts/topbar');
		$this->load->view('parts/sidebar');
		$this->load->view('kategori/national');
		$this->load->view('parts/footer');
		$this->load->view('parts/js');
	}

	public function international()
	{
		$this->load->view('parts/head');
		$this->load->view('parts/topbar');
		$this->load->view('parts/sidebar');
		$this->load->view('kategori/international');
		$this->load->view('parts/footer');
		$this->load->view('parts/js');
	}

	public function news()
	{
		$this->load->view('parts/head');
		$this->load->view('parts/topbar');
		$this->load->view('parts/sidebar');
		$this->load->view('kategori/news');
		$this->load->view('parts/footer');
		$this->load->view('parts/js');
	}

	public function economy()
	{
		$this->load->view('parts/head');
		$this->load->view('parts/topbar');
		$this->load->view('parts/sidebar');
		$this->load->view('kategori/economy');
		$this->load->view('parts/footer');
		$this->load->view('parts/js');
	}

	public function sport()
	{
		$this->load->view('parts/head');
		$this->load->view('parts/topbar');
		$this->load->view('parts/sidebar');
		$this->load->view('kategori/sport');
		$this->load->view('parts/footer');
		$this->load->view('parts/js');
	}

	public function entertaintment()
	{
		$this->load->view('parts/head');
		$this->load->view('parts/topbar');
		$this->load->view('parts/sidebar');
		$this->load->view('kategori/entertaintment');
		$this->load->view('parts/footer');
		$this->load->view('parts/js');
	}

	public function reguler()
	{
		$this->load->view('parts/head');
		$this->load->view('parts/topbar');
		$this->load->view('parts/sidebar');
		$this->load->view('kelas/reguler');
		$this->load->view('parts/footer');
		$this->load->view('parts/js');
	}

	public function silver()
	{
		$this->load->view('parts/head');
		$this->load->view('parts/topbar');
		$this->load->view('parts/sidebar');
		$this->load->view('kelas/silver');
		$this->load->view('parts/footer');
		$this->load->view('parts/js');
	}

	public function gold()
	{
		$this->load->view('parts/head');
		$this->load->view('parts/topbar');
		$this->load->view('parts/sidebar');
		$this->load->view('kelas/gold');
		$this->load->view('parts/footer');
		$this->load->view('parts/js');
	}

	public function platinum()
	{
		$this->load->view('parts/head');
		$this->load->view('parts/topbar');
		$this->load->view('parts/sidebar');
		$this->load->view('kelas/platinum');
		$this->load->view('parts/footer');
		$this->load->view('parts/js');
	}
}
