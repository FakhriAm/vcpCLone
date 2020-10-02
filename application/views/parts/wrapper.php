<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('parts/head');
$this->load->view('parts/topbar');
$this->load->view('parts/sidebar');
$this->load->view($content);
$this->load->view('parts/footer');
$this->load->view('parts/js');
?>