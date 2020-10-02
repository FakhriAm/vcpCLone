<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('parts/wrapper',array('content'=>'main/dashboard'));
	}

	public function detail()
	{
		$this->load->view('parts/wrapper',array('content'=>'main/video_detail'));
	}

	public function national()
	{
		$this->load->view('parts/wrapper',array('content'=>'kategori/national'));
	}

	public function international()
	{
		$this->load->view('parts/wrapper',array('content'=>'kategori/international'));
	}

	public function news()
	{
		$this->load->view('parts/wrapper',array('content'=>'kategori/news'));
	}

	public function economy()
	{
		$this->load->view('parts/wrapper',array('content'=>'kategori/economy'));
	}

	public function sport()
	{
		$this->load->view('parts/wrapper',array('content'=>'kategori/sport'));
	}

	public function entertaintment()
	{
		$this->load->view('parts/wrapper',array('content'=>'kategori/entertaintment'));
	}

	public function reguler()
	{
		$this->load->view('parts/wrapper',array('content'=>'kelas/reguler'));
	}

	public function silver()
	{
		$this->load->view('parts/wrapper',array('content'=>'kelas/silver'));
	}

	public function gold()
	{
		$this->load->view('parts/wrapper',array('content'=>'kelas/gold'));
	}

	public function platinum()
	{
		$this->load->view('parts/wrapper',array('content'=>'kelas/platinum'));
	}
}