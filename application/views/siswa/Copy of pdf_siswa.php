    <?php
   //switch($_GET[act]){
   //default:
    //include('localhost/sma/system/libraries/cezpdf.php');
    //mysql_connect("localhost","root","");
   // mysql_select_db("sma");
    $pdf = new Cezpdf('A4','potrait');
    $pdf->ezText("",11,array("justification"=>"left"));
	$pdf->selectFont('fonts/Times-Roman.afm');
	$pdf->addJpegFromFile('asset/images/title-sub.jpg',50,758,80,100);
	$pdf->ezSetCmMargins(2.5,2,3.5,3);
    $all=$pdf->openObject();
    $pdf->setStrokeColor(0,0,0,1);
    $pdf->addText(220,810,11,'SMA OLAHRAGA MASMUR');
    $pdf->addText(240,797,11,'PEKANBARU - RIAU');
	$pdf->addText(150,784,11,'Alamat : Jl. Soekarno Hatta ( Di samping Perumahan Sidomulyo )');
	$pdf->addText(210,771,11,'Kec. Marpoyan Damai Pekanbaru');
	$pdf->addText(110,758,11,'Phone ( 0761 ) / 081371144095 / 081268620555 / 0817618315 / 081372817463 ');
    $pdf->line(30,753,570,750);
    $pdf->line(30,753,570,750);
	$pdf->line(30,753,570,750);
    $pdf->line(30,753,570,750);
	$pdf->addText(190,740,11,'FORMULIR PENDAFTARAN SISWA BARU');
	$pdf->addText(220,727,11,'TAHUN PELAJARAN 2012/2013');
	$pdf->line(30,725,570,725);
    $pdf->line(350,120,570,120);
	$pdf->line(30,350,570,350);
	$pdf->line(30,350,30,230);
	$pdf->line(30,230,570,230);
	$pdf->line(570,350,570,230);
	
	$pdf->line(460,95,380,95);
	$pdf->line(380,95,380,30);
	$pdf->line(460,30,460,95);
	$pdf->line(460,30,380,30);
    $pdf->addText(30,15,8,'Dicetak pada tanggal : '.date('d-m-Y, H:i:s'));
    $pdf->ezStartPageNumbers(320, 15, 8);
    $pdf->closeObject();
    $pdf->addObject($all,'all');
   // $sql = mysql_query("SELECT *  FROM siswa ORDER BY idnp");
   // $i=1;
   // while($r=mysql_fetch_array($sql)){
	foreach($data_siswa as $db)
	
    $pdf->addText(30,710,11,"Cab.Olahraga			");
	$pdf->addText(190,710,11,": 1.$db[olah1]");
	$pdf->addText(190,690,11,": 2.$db[olah2]");
	$pdf->addText(30,670,11,"NOMOR PENDAFTARAN");
	$pdf->addText(190,670,11,": $db[idnp]");
	$pdf->addText(30,650,11,"Nama Siswa Sesuai Ijazah Asli");
	$pdf->addText(190,650,11,": $db[nama]");
	$pdf->addText(30,630,11,"Jenis Kelamin		");
	$pdf->addText(190,630,11,": $db[jkelamin]");
	$pdf->addText(30,610,11,"No.Telp/ Hp Siswa");
	$pdf->addText(190,610,11,": $db[tlps]");
	$pdf->addText(30,590,11,"Tempat/ Tgl. Lahir");
	$pdf->addText(190,590,11,": $db[ttgl]");
	$pdf->addText(30,570,11,"Agama");
	$pdf->addText(190,570,11,": $db[agama]");
	$pdf->addText(30,550,11,"Alamat siswa");
	$pdf->addText(190,550,11,": $db[alamat]");
	$pdf->addText(30,530,11,"Gol Darah");
	$pdf->addText(190,530,11,": $db[golda]");
	$pdf->addText(30,510,11,"Anak Ke");
	$pdf->addText(190,510,11,": $db[anak]...Dari...$db[js] ");
	$pdf->addText(190,495,11,"Saudara Kandung ");
    $pdf->addText(30,480,11,"Tahun Tamat");             
    $pdf->addText(190,480,11,": $db[thntmt]");
	$pdf->addText(30,460,11,"Asal SMP");
	$pdf->addText(190,460,11,": $db[asl]");
	$pdf->addText(30,440,11,"Jlh Nilai Kelulusan");
	$pdf->addText(190,440,11,": $db[jnk]");
	$pdf->addText(30,420,11,"Bahasa Sehari-hari Dirumah");
	$pdf->addText(190,420,11,": $db[bhs]");
	$pdf->addText(30,400,11,"No STTB");
	$pdf->addText(190,400,11,": $db[sttb]");
	$pdf->addText(30,380,11,"Nama Orang Tua");
	$pdf->addText(190,380,11,": $db[not]");
	$pdf->addText(30,360,11,"Nama Panggilan Orang Tua");
	$pdf->addText(190,360,11,": $db[pnot]");
	$pdf->addText(310,670,11,"Alamat Orang Tua");
	$pdf->addText(450,670,11,": $db[almtor]");
	$pdf->addText(310,590,11,"No Telp/ Hp Orang Tua");
	$pdf->addText(450,590,11,": $db[hpor]");
	$pdf->addText(310,570,11,"Agama");
	$pdf->addText(450,570,11,": $db[agamaor]");
	$pdf->addText(310,550,11,"Pekerjaan Orang Tua");
	$pdf->addText(450,550,11,": $db[pkrj]");
	$pdf->addText(310,530,11,"Pendapatan orang Tua");
	$pdf->addText(450,530,11,": $db[mtrp]");
	$pdf->addText(310,510,11,"Pendidikan Formal Tertinggi");
	$pdf->addText(310,495,11,"Orang Tua");
	$pdf->addText(450,510,11,": $db[pend]");
	$pdf->addText(310,480,11,"Nama Wali");             
    $pdf->addText(450,480,11,": $db[nw]");
	$pdf->addText(310,460,11,"Alamat Wali");
	$pdf->addText(450,460,11,": $db[almtw]");
	$pdf->addText(310,420,11,"Pekerjaan Wali");
	$pdf->addText(450,420,11,": $db[pkrjw]");
	$pdf->addText(310,400,11,"No. Telp/ Hp Wali");
	$pdf->addText(450,400,11,": $db[tlpw]");
	$pdf->addText(35,330,11,"Ekstrakulikuler yang diminati");
	$pdf->addText(250,330,11,": $db[eks]");
	$pdf->addText(35,310,11,"Nilai B. Indonesi/B. Inggris/Matematika");
	$pdf->addText(250,310,11,": $db[nl]");
	$pdf->addText(35,290,11,"Jenis Prestasi yang pernah diraih");
	$pdf->addText(250,290,11,": $db[jn] / Pada Tahun $db[pres] ");
	$pdf->addText(35,270,11,"Penyakit serius yang pernah diderita");
	$pdf->addText(250,270,11,": $db[pen] / Pada Tahun $db[peny] ");
	$pdf->addText(35,250,11,"lain-Lain");
	$pdf->addText(250,250,11,": ");
	$pdf->addText(350,215,11,"Pekanbaru,............................2013");
	$pdf->addText(30,195,11,"Bagian Pendaftaran,");
	$pdf->addText(350,195,11,"Calon Siswa");
	$pdf->line(30,120,150,120);
	$pdf->addText(380,105,11,"Nama Jelas");
	$pdf->addText(385,60,11,"Pas Photo 2x3");
	$options=array('shaded'=>0,'width'=>1100);
	$pdf->ezTable($db,'','','');
	
	
	
    //$i++;
            
    //}
    $options=array('shaded'=>0,'width'=>1100);
    $pdf->ezTable($data,'','','');
    $pdf->ezStream();
        break; 
        
    ?>