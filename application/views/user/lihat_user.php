<style type="text/css">
	body {
		font-family: Arial;
		font-size: 11px;
		color: #000;
		margin: 0px auto;
		padding :0px;
	}

	.kotakHasil {
		margin: 0px left;
		padding :0px;
		background-color: #fff;
		border : 1px solid #666;
		width : 936px;
	}
	
	.daftarPencarian {
		margin: 0px;
		padding: 0px;
	}
	
	.daftarPencarian ul {
		margin:0px;
		padding: 0px;
	}
	
	.daftarPencarian li {
		margin:0px;
		padding: 5px;
		cursor: pointer;
		list-style : none;
	}
	
	.daftarPencarian li:hover {
		background-color: #6b6b6b;
	}
	#namaDosen{
		padding : 8px;
		background-color: #f3f3f3;
		border : 1px solid #666;
		width:920px;
	}
	#total{
		background-color:#f3f3f3; 
		padding:10px; 
		text-align:center;
	}
	#loading{
		background-color:#f3f3f3; 
		padding:5px; 
		text-align:center;
	}
	a{
		text-decoration:none;
		color:#000;
	}
	a:hover{
		text-decoration:underline;
		color:#000;
	}
</style>
</head>
<body>
		
<table border="2" cellpadding="1" cellspacing="1" width="100%" style=" border-collapse: collapse;" class="record" bordercolor="#CCCCCC">
			
		
			<tr style="background-color:#333; color:#FFFFFF;" align="center">
				<td>No.</td>
				<td>Username</td>
				<td>Nama Lengkap</td>
				<td>Status</td>
				<td colspan="3"><a href="<?php echo base_url(); ?>daftar/input" ><div class="btn-add"title= 'Tambah Data'>Tambah Data</div></a></td>
			</tr>
			<?php
				$no = 1;
				if($data_user->num_rows()>0)
				{
					
					foreach($data_user->result_array() as $db)
					{
				?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $db['username']; ?></td>
					<td><?php echo $db['nama_pengguna']; ?></td>
					<td><?php echo $db['stts']; ?></td>
					<td width="9"><a href="<?php echo base_url(); ?>tatausaha/lihat/<?php echo $db['username']; ?>"<div class="btn-edit" title= 'Lihat Data'>Lihat</div></a></td>
					
					<td width="9"><a href="<?php echo base_url(); ?>tatausaha/cetak/true<?php echo $db['username']; ?>" <div class="btn-print" title= 'Cetak Data'>Cetak</div></a></td>
				</tr>
				
				<?php
				
					$no++;
					}
				
					}
				?>
			<br>
			
		<table align="center">
			<tr align="center">
				<br>
				<td>
					<?php
						echo $paginator;
					?>
				</td>
			</tr>
		</table>
		
			
		</table>
		