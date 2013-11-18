<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller 
{
	public function index () 
	{
		$this->load->view('umum/bg_top');
		$this->load->view('umum/menu');
		$this->load->view('umum/beranda');
		$this->load->view('umum/bg_footer');
		
}
}