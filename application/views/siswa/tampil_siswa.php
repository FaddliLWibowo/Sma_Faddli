<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
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
		margin: 25px 0 0 0;
	}
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	.textarea {
		height:80px;
		width: 250px;
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
		-moz-border-radius: 1px 25px 1px 25px;
		-webkit-border-radius: 1px 25px 1px 25px;
		font-weight:bold;
	}
	input, textarea, select {
		color:black;
		outline:none;
	}
	textarea {
		height:40px;
		width:180px;
	}
	input[type="submit"] {
		padding:3px;
		min-width:50px;
		border:1px solid black;
		background:#747474;
		-moz-border-radius: 1px 10px 1px 10px;
		-webkit-border-radius: 1px 10px 1px 10px;
		cursor:pointer;
		
	}
	input[type="submit"]:hover {
		background:#999999;
		color:#FFFFFF;
	}
	</style>
</head>
<body>
<div>
	<br>
	<div class="user_info">
	<div id="body">
	<fieldset>
		<legend>Lihat Data Siswa</legend>
		
		<?php
								
					
			$attributes_form     = array('id' => 'form');
			
			
			$cab1     		= array(
										 'name'   => 'olah1',
										 'size' => '25',
										'value'=>$dat['olah1'],
										'readonly'=>true,
									);
			$cab2	       	= array(
										 'name'   => 'olah2',
										 'size' => '25',
										'value'=>$dat['olah2'],
										'readonly'=>true,
										 
									);
			$np       		= array(
										 'name'   => 'idnp',
										 'size' => '8',
										 'readonly'=>true,
										 'value'=>$dat['idnp'],
									);
		 	$nm	       		= array(
										 'name'   => 'nama',
										 'size' => '25',
										'value'=>$dat['nama'],
										'readonly'=>true,
									);
			$alam 	       	= array(
										 'name'   => 'almtor',
										 'size' => '25',
										'value'=>$dat['almtor'],
										'readonly'=>true,
									);
			$jk	       		= array(
										 'name'   => 'jkelamin',
										 'size' => '25',
										'value'=>$dat['jkelamin'],
										'readonly'=>true,
									);
			$tp	       		= array(
										 'name'   => 'tlps',
										 'size' => '25',
										'value'=>$dat['tlps'],
										'readonly'=>true,
									);
			$hp    			= array(
										 'name'   => 'hpor',
										 'size' => '25',
										'value' =>$dat['hpor'],
										'readonly'=>true,
									);
			
			$tmp1			= array(
										 'name'   => 'ttgl',
										 'size' => '25',
										'value'=>$dat['ttgl'],
										'readonly'=>true,
									);
			$ag    			= array(
										 'name'   => 'agama',
										 'size' => '25',
										'value'=>$dat['agama'],
										'readonly'=>true,
									);
			$ag1    		= array(
										 'name'   => 'agamaor',
										 'size' => '25',
										'value'=>$dat['agamaor'],
										'readonly'=>true,
									 );
			$als     		= array(
										 'name'   => 'alamat',
										 'size' => '25',
										'value'=>$dat['alamat'],
										'readonly'=>true,
									);
			$pk	       	= array(
										 'name'   => 'pkrj',
										 'size' => '25',
										'value'=>$dat['pkrj'],
										'readonly'=>true,
										 
									);
			$gd       		= array(
										 'name'   => 'golda',
										 'size' => '25',
										 'readonly'=>true,
										 'value'=>$dat['golda'],
									);
			$em       		= array(
										 'name'   => 'email',
										 'size' => '25',
										 'readonly'=>true,
										 'value'=>$dat['email'],
									);						
		 	$rupe	       		= array(
										 'name'   => 'mtrp',
										 'size' => '25',
										'value'=>$dat['mtrp'],
										'readonly'=>true,
									);
			$an 	       	= array(
										 'name'   => 'anak',
										 'size' => '25',
										'value'=>$dat['anak'],
										'readonly'=>true,
									);
			 $pen	       = array(
										 'name'   => 'pend',
										 'size' => '25',
										'value'=>$dat['pend'],
										'readonly'=>true,
									);
			$jum    			= array(
										 'name'   => 'js',
										 'size' => '25',
										'value' =>$dat['js'],
										'readonly'=>true,
									);
			 $thn    		= array(
										 'name'   => 'thntmt',
										 'size' => '25',
										'value'=>$dat['thntmt'],
										'readonly'=>true,
									);
			 $or			= array(
										 'name'   => 'org',
										 'size' => '25',
										'value'=>$dat['org'],
										'readonly'=>true,
									);
			 $as    		= array(
										 'name'   => 'asl',
										 'size' => '25',
										'value'=>$dat['asl'],
										'readonly'=>true,
									);
			 $nmw    		= array(
										 'name'   => 'nw',
										 'size' => '25',
										'value'=>$dat['nw'],
										'readonly'=>true,
									 );							 
			$jn    			= array(
										 'name'   => 'jnk',
										 'size' => '25',
										'value'=>$dat['jnk'],
										'readonly'=>true,
									);
			$almw    		= array(
										 'name'   => 'almtw',
										 'size' => '25',
										'value'=>$dat['almtw'],
										'readonly'=>true,
									 );
			$bs     		= array(
										 'name'   => 'bhs',
										 'size' => '25',
										'value'=>$dat['bhs'],
										'readonly'=>true,
									);
			$pkw	       	= array(
										 'name'   => 'pkrjw',
										 'size' => '25',
										'value'=>$dat['pkrjw'],
										'readonly'=>true,
										 
									);
			$st       		= array(
										 'name'   => 'sttb',
										 'size' => '25',
										 'readonly'=>true,
										 'value'=>$dat['sttb'],
									);
		 	$tl	       		= array(
										 'name'   => 'tlpw',
										 'size' => '25',
										'value'=>$dat['tlpw'],
										'readonly'=>true,
									);
			$no 	       	= array(
										 'name'   => 'not',
										 'size' => '25',
										'value'=>$dat['not'],
										'readonly'=>true,
									);
			 $not	       = array(
										 'name'   => 'pnot',
										 'size' => '25',
										'value'=>$dat['pnot'],
										'readonly'=>true,
									);
			$ek    			= array(
										 'name'   => 'eks',
										 'size' => '25',
										'value' =>$dat['eks'],
										'readonly'=>true,
									);
			 $nli    		= array(
										 'name'   => 'nl',
										 'size' => '25',
										'value'=>$dat['nl'],
										'readonly'=>true,
									);
			 
			 $jns    		= array(
										 'name'   => 'jn',
										 'size' => '25',
										'value'=>$dat['jn'],
										'readonly'=>true,
									 );		
			$pe    		= array(
										 'name'   => 'pres',
										 'size' => '25',
										'value'=>$dat['pres'],
										'readonly'=>true,
									);
			 
			 $peny			= array(
										 'name'   => 'pen',
										 'size' => '25',
										'value'=>$dat['pen'],
										'readonly'=>true,
									);
			 $py    		= array(
										 'name'   => 'peny',
										 'size' => '25',
										'value'=>$dat['peny'],
										'readonly'=>true,
									);
			 $lain    		= array(
										 'name'   => 'ln',
										 'size' => '25',
										'value'=>$dat['ln'],
										'readonly'=>true,
									 );					    		
			$this->table->add_row("Cabang Olahraga ", " : ", form_input($cab1));
			$this->table->add_row(" ", " : ",form_input($cab2));
			$this->table->add_row("No Pendaftaran", " : ", form_input($np));
			$this->table->add_row("Nama Siswa Sesuai Ijazah Asli", " : ", form_input($nm),"Alamat Orang Tua", " : ", form_textarea($alam));
			$this->table->add_row("Jenis Kelamin", " : ", form_input($jk),"No. Telp / Hp Orang Tua", " : ", form_input($hp));;;
			$this->table->add_row("No Hp/ Telepon Siswa", " : ", form_input($tp));
			$this->table->add_row("Tempat & Tanggal Lahir", " : ", form_input($tmp1)); 
			$this->table->add_row("Agama", " : ", form_input($ag),"Agama Orang Tua", " : ", form_input($ag));
			$this->table->add_row("Alamat Siswa", " : ", form_textarea($als),"Pekerjaan Orang Tua", " : ", form_input($pk));
			$this->table->add_row("Gol. Darah", " : ", form_input($gd),"Penghasilan Orang Tua", " : ", form_input($rupe));
			$this->table->add_row("Email", " : ", form_input($em));
			$this->table->add_row("Anak Ke", " : ", form_input($an),"Pendidikan Formal Tertinggi Orang Tua", " : ", form_input($pen));
			$this->table->add_row("Jumlah Saudara", " : ", form_input($jum));
			$this->table->add_row("Tahun Tamat", " : ",  form_input($thn));
			$this->table->add_row("Asal Siswa", " : ", form_textarea($as),"Nama Wali", " : ", form_input($nmw));
			$this->table->add_row("Jumlah Nilai Kelulusan", " : ",  form_input($jn),"Alamat Wali", " : ", form_textarea($almw));
			$this->table->add_row("Bahasa sehari-hari dirumah", " : ", form_input($bs),"Pekerjaan Wali", " : ", form_input($pkw));
			$this->table->add_row("No. STTB", " : ", form_input($st),"No Telephone wali", " : ", form_input($tl));
			$this->table->add_row("Nama Orang Tua", " : ", form_input($no));
			$this->table->add_row("Nama Panggilan Orang Tua", " : ", form_input($not));
			$this->table->add_row("Ekstrakulikuler", " : ", form_input($ek),"Nilai B.Indonesia/B.Inggris/Matematika", " : ", form_input($nli));
			$this->table->add_row("Jenis prestasi yang pernah diraih", " : ", form_input($jns),"Pada Tahun", " : ", form_input($pe));
			$this->table->add_row("Penyakit serius yang pernah diderita", " : ", form_input($peny),"Pada Tahun", " : ", form_input($py));;
			echo $this->table->generate();
			echo form_close();		
		?>
	<br width="9"><a href="<?php echo base_url(); ?>tatausaha/index/"<td class="btn-print" title= 'Balik Ke Daftar'>Balik Ke Daftar
		<br  width="9"><a href="<?php echo base_url(); ?>tatausaha/cetak/<?php echo $dat['idnp']; ?>"<td class="btn-print" title= 'Cetak Data'>Cetak Data</div></a></td>
	</fieldset>
	</div>
	
</div>
</body>
</html>