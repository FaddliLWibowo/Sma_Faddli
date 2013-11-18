<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('logged_in');
		if(empty($cek))
		{
			
			
			$frm['username'] = array('name' => 'username',
				'id' => 'username',
				'type' => 'text',
				'class' => 'input-teks-login',
				'autocomplete' => 'off',
				'placeholder' => 'Masukkan username.....'
			);
			$frm['password'] = array('name' => 'password',
				'id' => 'password',
				'type' => 'password',
				'class' => 'input-teks-login',
				'autocomplete' => 'off',
				'placeholder' => 'Masukkan password.....'
			);
			
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
	
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('umum/bg_top');
				$this->load->view('umum/menu');
				$this->load->view('front/bg_login',$frm);
				$this->load->view('umum/bg_footer');
			}
			else
			{
				$u = $this->input->post('username');
				$p = $this->input->post('password');
				$this->app_model->getLoginData($u,$p);
			}
		}
		else
		{
			$st = $this->session->userdata('stts');
			if($st=='admin')
			{
				header('location:'.base_url().'tatausaha');
			}
			else
			{
				header('location:'.base_url().'front');
			}
		
		}
	}
	
	public function login()
	{
		
		$u = $this->input->post('username');
		$p = $this->input->post('password');
		$this->app_model->getLoginData($u,$p);
	}
	
	public function logout()
	{
		$cek = $this->session->userdata('logged_in');
		if(empty($cek))
		{
			header('location:'.base_url().'front');
		}
		else
		{
			$this->session->sess_destroy();
			header('location:'.base_url().'front');
		}
	}
}

