<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftar extends CI_Controller 
	{
		public function index () 
	
			{
			if($this->input->post('submit') != NULL) 
			{
			
			if(($this->input->post('olah1') == NULL) or 
			($this->input->post('olah2') == NULL) or
			($this->input->post('idnp') == NULL) or
			($this->input->post('nama') == NULL) or 
			($this->input->post('jkelamin') == NULL)or 
			($this->input->post('tlps') == NULL)or 
			($this->input->post('ttgl') == NULL) or
			($this->input->post('agama') == NULL)or
			($this->input->post('alamat') == NULL) or
			($this->input->post('golda') == NULL) or
			($this->input->post('email') == NULL) or
			($this->input->post('anak') == NULL) or
			($this->input->post('js') == NULL)or
			($this->input->post('thntmt') == NULL)or
			($this->input->post('asl') == NULL) or
			($this->input->post('jnk') == NULL) or
			($this->input->post('bhs') == NULL) or
			($this->input->post('sttb') == NULL) or
			($this->input->post('not') == NULL)or
			($this->input->post('pnot') == NULL)or
			($this->input->post('almtor') == NULL) or
			($this->input->post('hpor') == NULL)or 
			($this->input->post('agamaor') == NULL) or
			($this->input->post('pkrj') == NULL) or
			($this->input->post('mtrp') == NULL)or
			($this->input->post('pend') == NULL) or
			($this->input->post('nw') == NULL) or
			($this->input->post('almtw') == NULL)or
			($this->input->post('pkrjw') == NULL)or
			($this->input->post('tlpw') == NULL)or
			($this->input->post('eks') == NULL) or
			($this->input->post('nl') == NUL)or
			($this->input->post('jn') == NULL) or
			($this->input->post('pres') == NULL)or
			($this->input->post('pen') == NULL) or
			($this->input->post('peny') == NULL))   
			{
			$this->load->model('mdaftar');
			$D['notice'] = "<p class='btn-kirim-login'>Data Tidak Dapat Disimpan, Form Harus Diisi Semua </p>";
			$D['data_siswa'] = $this->mdaftar->siswa();
			$this->load->view('umum/bg_top');
			$this->load->view('umum/menu');
			$this->load->view('siswa/input_siswa',$D);
			$this->load->view('umum/bg_footer');
			//redirect ('daftar/terima');
			} 
				else 
			{
			$data['olah1'] = $this->input->post('olah1');
			$data['olah2'] = $this->input->post('olah2');
			$data['idnp'] = $this->input->post('idnp');
			$data['nama'] = $this->input->post('nama');
			$data['jkelamin'] = $this->input->post('jkelamin');
			$data['tlps'] = $this->input->post('tlps');
			$data['ttgl'] = $this->input->post('ttgl');
			$data['agama'] = $this->input->post('agama');
			$data['alamat'] = $this->input->post('alamat');
			$data['golda'] = $this->input->post('golda');
			$data['email'] = $this->input->post('email');
			$data['anak'] = $this->input->post('anak');
			$data['js'] = $this->input->post('js');
			$data['thntmt'] = $this->input->post('thntmt');
			$data['asl'] = $this->input->post('asl');
			$data['jnk'] = $this->input->post('jnk');
			$data['bhs'] = $this->input->post('bhs');
			$data['sttb'] = $this->input->post('sttb');
			$data['not'] = $this->input->post('not');
			$data['pnot'] = $this->input->post('pnot');
			$data['almtor'] = $this->input->post('almtor');
			$data['hpor'] = $this->input->post('hpor');
			$data['agamaor'] = $this->input->post('agamaor');
			$data['pkrj'] = $this->input->post('pkrj');
			$data['mtrp'] = $this->input->post('mtrp');
			$data['pend'] = $this->input->post('pend');
			$data['nw'] = $this->input->post('nw');
			$data['almtw'] = $this->input->post('almtw');
			$data['pkrjw'] = $this->input->post('pkrjw');
			$data['tlpw'] = $this->input->post('tlpw');
			$data['eks'] = $this->input->post('eks');
			$data['nl'] = $this->input->post('nl');
			$data['jn'] = $this->input->post('jn');
			$data['pres'] = $this->input->post('pres');
			$data['pen'] = $this->input->post('pen');
			$data['peny'] = $this->input->post('peny');
			$data['ln'] = $this->input->post('ln');
			$data['userfile'] = $this->input->post('userfile');
			$this->load->model('mdaftar');
			$this->mdaftar->simpan($data);
			redirect ('daftar/index');
			}
			}else{
			$this->load->model('mdaftar');
			$D['notice'] = "";
			$D['data_siswa'] = $this->mdaftar->siswa();
			$this->load->view('umum/bg_top');
			$this->load->view('umum/menu');
			$this->load->view('siswa/input_siswa',$D);
			$this->load->view('umum/bg_footer');
			}
		}

			
		function upload()
    	{
        
       		 $sub_data = array   (
            
            'result' => ''
        					);
         if($this->input->post('go_upload')) 
         	{
            $config['upload_path'] = 'asset/images/uploaded/';
            $config['allowed_types'] = 'g|jpg|png';
            $config['max_size']	= '500';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload())
            	{
            $sub_data['result'] = $this->upload->data();
				}
         	}
        	$data['body'] = $this->load->view('siswa/input_siswa', $sub_data);
       		redirect ('daftar/index');
    		}
    }	
  			
	
		
	
  
  

		