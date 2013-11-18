<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<script>
	$(function(){
      $('.datepicker-input').datepicker({
          dateFormat: 'dd-mm-yy',
          showButtonPanel: false,
          changeMonth: true,
          changeYear: true
      });
      
	});
  </script>
  <script>
	$(function(){
      $('.datepicker-input1').datepicker({
          dateFormat: 'yy',
          showButtonPanel: false,
          changeMonth: false,
          changeYear: true
      });
      
	});
  </script>

	<style type="text/css">
	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }
		h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}
	#body{
		margin: 0 15px 0 15px;
	}
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	.textarea {
		height:80px;
		width: 150px;
	}
	fieldset {
		width: 94%;
		border:1px solid #2a2a29;
		border-left:25px solid #2a2a29;
		-moz-border-radius: 10px 10px 10px 10px;
		-webkit-border-radius: 10px 10px 10px 10px;
	}
	legend {
		padding:3px 5px 3px 5px;
		border:3px solid #2a2a29;
		margin:0px 0px 0px 0px ;
		-moz-border-radius: 2px 20px 2px 20px;
		-webkit-border-radius: 2px 20px 2px 20px;
		font-weight:bold;
	}
	input, textarea, select {
		color:black;
		outline:none;
	}
	textarea {
		height:40px;
		width:150px;
	}
	</style>
</head>
<body>
<div>
	<br>
	<div id="body">
		
	<fieldset>
		<legend>Tambah Data Siswa</legend>


		<?php
		$no=1;$dat=0;
		echo $notice;
		foreach($data_siswa as $db)
					{
						$dat=$db['np'];}
					
						$nom=$dat+$no;
						$idn='NS'.sprintf('%07s',$nom);				
						$mata='Rp.';
			$attributes_form     = array('class' => 'login', 'id' => 'myform');
			$attributes_texta    = array('class' => 'textarea', 'name' => 'profil');
			
			
			$cab1        = array('null'       			=> '----Pilihan 1----',
										 'Sepak Bola'   => 'Sepak Bola',
										 'Bulutangkis' 	=> 'Bulutangkis',
										 'Tenis'   		=> 'Tenis',
										 'Karate'   	=> 'Karate',
										 'Voli'   		=> 'Voli' 
								);
			$cab2        = array('null'       			=> '----Pilihan 2----',
										 'Sepak Bola'   => 'Sepak Bola',
										 'Bulutangkis' 	=> 'Bulutangkis',
										 'Tenis'   		=> 'Tenis',
										 'Karate'   	=> 'Karate',
										 'Voli'   		=> 'Voli' 
									);
			$np        		= array(
										 'name'   		=> 'idnp',
										 'size' 		=> '11',
										 'readonly'		=>true,
										 'value'		=>$idn,
									);	
			$nm        		= array(
										 'name'   		=> 'nama',
										 'size' 		=> '30',
									);								 						 
										
			$jk        		= array('null'       		=> ' ------pilih------ ',
										 'Laki-Laki'   	=> 'Laki-Laki',
										 'Perempuan' 	=> 'Perempuan',
										 
										 );
			$tmp1		 		=array(			'name' 	=> 'ttgl',
											'size' 		=> '30',
											
										 );		
										 							 
			$ag        = array('null'       			=> '------pilih------',
										 'Islam'   		=> 'Islam',
										 'Kristen' 		=> 'Kristen',
										 'Budha'   		=> 'Budha',
										 'Hindu'   		=> 'Hindu',
										 'Lain-Lain'   	=> 'Lain-Lain' 
										 
										 );	
			$gd        = array('null'       			=> '------pilih------',
										 'A'   			=> 'A',
										 'B' 			=> 'B',
										 'AB'   		=> 'AB',
										 'O'   			=> 'O',
										 									 
										 );								 						 
			$thn		 		=array(			'name' 	=> 'thntmt',
											'size' 		=> '20',
											'class'		=>"input-medium datepicker-input1",
										 );	
			$bs       = array('null'       				=> '------pilih------',
										 'Indonesia'   	=> 'Indonesia',
										 'Daerah' 		=> 'Daerah',
										 'Asing'   		=> 'Asing',
										 'Lain-Lain'   	=> 'Lain-Lain',
										 									 
										 );	
			$rupe        		= array(
										 'name'   	=> 'mtrp',
										 'size' 	=> '20',
										 'value'	=>$mata,
						 				 
										 );	
			$pen        		= array('null'       	=> '------pilih------',
										 'SD'   	=> 'SD',
										 'SMP Sederajat' 		=> 'SMP Sederajat',
										 'SMA Sederajat'   		=> 'SMA Sederajat',
										 'Perguruan Tinggi'   	=> 'Perguruan Tinggi',
						 				 
										 );								 
			$ek        		= array('null'       				=> '------pilih------',
										 'Beladiri'   			=> 'Beladiri',
										 'Seni' 				=> 'Seni',
										 'Sains & Teknologi'   	=> 'Teknologi',
										 'PBB'   				=> 'PBB',
										 'Bola Kaki'   			=> 'Bola Kaki',									 
										 );	
			$pe		 		=array(		 'name' 				=> 'pres',
										 'size' 				=> '20',
										 'class'				=>"input-medium datepicker-input1",
										 );
			$py	 			=array(		 'name' 				=> 'peny',
										 'size' 				=> '20',
										 'class'				=>"input-medium datepicker-input1",
										 );	
			$pic			=array(		 'name'					=>'userfile',
										 'type'					=>'file',
										 'size'					=>'17',
										 );	
			$up			=array(		 	 'name'					=>'go_upload',
										 'type'					=>'submit',
										 'value'				=>'upload',
										 ' class'    			=> 'btn-kirim-login',
										 );	
										 								 	
			$this->table->add_row("Cabang Olahraga ", " : ", form_dropdown("olah1",$cab1,'0'));
			$this->table->add_row(" ", " : ",form_dropdown("olah2",$cab2,'0'));
			$this->table->add_row("No Pendaftaran ", " : ", form_input($np));
			$this->table->add_row("Nama Siswa Sesuai Ijazah Asli", " : ", form_input($nm),"Alamat Orang Tua", " : ", form_textarea('almtor'));
			$this->table->add_row("Jenis Kelamin", " : ", form_dropdown('jkelamin',$jk,'0'),"No Telp / Hp Orang Tua", " : ", form_input('hpor'));;;
			$this->table->add_row("No. Hp/ Telepon Siswa", " : ", form_input('tlps'));
			$this->table->add_row("Tempat & Tanggal Lahir", " : ", form_input($tmp1)); 
			$this->table->add_row("Agama", " : ", form_dropdown('agama',$ag,'0'),"Agama Orang Tua", " : ", form_dropdown('agamaor',$ag,'0'));
			$this->table->add_row("Alamat Siswa", " : ", form_textarea('alamat'),"Pekerjaan Orang Tua", " : ", form_input('pkrj'));
			$this->table->add_row("Gol. Darah", " : ", form_dropdown('golda',$gd,'0'),"Penghasilan Orang Tua", " : ", form_input($rupe));
			$this->table->add_row("Alamat Email", " : ", form_input("email"));
			$this->table->add_row("Anak Ke", " : ", form_input('anak'),"Pendidikan Formal Tertinggi Orang Tua", " : ", form_dropdown('pend',$pen,'0'));
			$this->table->add_row("Jumlah Saudara", " : ", form_input('js'));
			$this->table->add_row("Tahun Tamat", " : ",  form_input($thn));
			$this->table->add_row("Asal Siswa", " : ", form_textarea('asl'),"Nama Wali", " : ", form_input('nw'));
			$this->table->add_row("Jumlah Nilai Kelulusan", " : ",  form_input('jnk'),"Alamat Wali", " : ", form_textarea('almtw'));
			$this->table->add_row("Bahasa sehari-hari dirumah", " : ", form_dropdown('bhs',$bs,'0'),"Pekerjaan Wali", " : ", form_input('pkrjw'));
			$this->table->add_row("No. STTB", " : ", form_input("sttb"),"No Telephone wali", " : ", form_input('tlpw'));
			$this->table->add_row("Nama Orang Tua", " : ", form_input("not"));
			$this->table->add_row("Nama Panggilan Orang Tua", " : ", form_input('pnot'));
			$this->table->add_row("Ekstrakulikuler", " : ", form_dropdown('eks',$ek,'0'),"Nilai B.Indonesia/B.Inggris/Matematika", " : ", form_input("nl"));
			$this->table->add_row("Jenis prestasi yang pernah diraih", " : ", form_input("jn"),"Pada Tahun", " : ", form_input($pe));
			$this->table->add_row("Penyakit serius yang pernah diderita", " : ", form_input("pen"),"Pada Tahun", " : ", form_input($py));
			$this->table->add_row("Lain-Lain", " : ", form_textarea("ln"));
			$this->table->add_row("Upload Gambar(Ukuran 3 X 4)", " : ",  form_input($pic),form_input($up));
			$this->table->add_row("", "", form_submit('submit','Simpan',' class="btn-kirim-login"' ). form_submit('reset','Reset',' class="btn-kirim-login"'));
			echo form_open("daftar/index/",$attributes_form);
			//echo form_open_multipart('daftar/upload/');
			echo $this->table->generate();
			echo form_close();			
			?>
			NB : Form Harus Diisi Semua
    
				
</div>

</div>

	</fieldset>
	</div>
	
</div>
</body>
</html>




