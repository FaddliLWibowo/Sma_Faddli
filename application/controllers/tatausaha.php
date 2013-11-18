<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tatausaha extends CI_Controller 
{
	
	public function index () 
	
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
			$this->load->model('mdaftar');
			$tot_hal = $this->mdaftar->getAllData("siswa");
			$config['base_url'] = base_url() . 'tatausaha/index/';
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
			$data['data_siswa'] = $this->mdaftar->getAllDataLimited("siswa",$limit,$offset);
			$this->load->view('umum/bg_top');
			$this->load->view('umum/menu');
			$this->load->view('siswa/lihat_siswa',$data);
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
	
	function lihat($id=null)
	{
			$cek = $this->session->userdata('logged_in');
			if(!empty($cek))
			{
			$this->load->model('mdaftar');
			$data['dat']  = $this->mdaftar->getsiswa($id);
			$this->load->view('umum/bg_top');			
			$this->load->view('umum/menu');
			$this->load->view('siswa/tampil_siswa',$data);
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
	public function hapus($id)
	{
			$cek = $this->session->userdata('logged_in');
			if(!empty($cek))
			{
			$this->load->model('mdaftar');
			$this->mdaftar->hapus($id);	
			redirect ('tatausaha/index');
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
	function tampil()
	{
			$cek = $this->session->userdata('logged_in');
			if(!empty($cek))
			{
			$nama = $this->input->post('kirimNama');
			$this->load->model('mdaftar');
			$data['hasil_limit']=$this->mdaftar->tampil_dosen_limit($nama);
			if($nama!="")
	{
			
			foreach($data['hasil_limit']->result() as $result)
			{
			?>
				<a href="<?php echo base_url('tatausaha/detil/'.$result->idnp); ?>">
				<?
				echo '<ul>';
			 	echo '<li onClick="pilih(\''.$result->nama.'\');">
			 	<img src="'.base_url().'asset/images/orang.jpg" style="padding-right:10px; float:left;">
				<b>'.$result->nama.'</b><br>No Pendaftaran : '.$result->idnp.'</li>';
				?>
				</a>
			<?
			}
				
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
	function detil ($id)
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
			$this->load->model('mdaftar');
			$tot_hal = $this->mdaftar->getAllDataid("siswa",$id);
			$config['base_url'] = base_url() . 'tatausaha/index/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = '<div class="btn-page">Selanjutnya >';
			$config['prev_link'] = '<div class="btn-page">< Sebelumnya</div>';
			$this->pagination->initialize($config);
			$data["paginator"] =$this->pagination->create_links();
			$nama = $this->input->post('kirimNama');
			$data['dat_siswa'] = $this->mdaftar->getAllDataLimitedid("siswa",$id,$limit,$offset);
			$this->load->view('umum/bg_top');
			$this->load->view('umum/menu');
			$this->load->view('siswa/detil_siswa',$data);
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
	function cetak($id=null)
    {
    	$st = $this->session->userdata('stts');
		if($st=='admin')
		{
    	$this->load->library("cezpdf");
		$this->load->helper("pdf_helper");
		$this->load->model('mdaftar');
		$data['data_siswa']=$this->mdaftar->ambildata($id);
		$this->load->view('siswa/pdf_siswa',$data);	
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
	
	
	

   				
  
    	


			