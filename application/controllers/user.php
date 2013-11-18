<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
			$cek = $this->session->userdata('logged_in');
			if(!empty($cek))
			{
			$page=$this->uri->segment(3);
			$limit=10;
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			$this->load->model('app_model');
			$tot_hal = $this->app_model->getAllData("tbl_login");
			$config['base_url'] = base_url() . 'user/index/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$data["paginator"] =$this->pagination->create_links();
			$nama = $this->input->post('kirimNama');
			$data['data_user'] = $this->app_model->getAllDataLimited("tbl_login",$limit,$offset);
			$this->load->view('umum/bg_top');
			$this->load->view('umum/menu');
			$this->load->view('user/lihat_user',$data);
			$this->load->view('umum/bg_footer');
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
	}
		
	