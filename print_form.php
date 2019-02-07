<html>
<head><title>Formulir Pendaftaran karantina Tahfizh Al-Quran</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>	        
	<script type="text/javascript" src="jquery.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
     
	<script type="text/javascript" src="assets/DataTables/media/js/jquery.dataTables.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/dataTables.bootstrap.css">
        
	<script type="text/javascript" src="assets/DataTables/media/js/dataTable.bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/DataTables/media/js/dataTable.bootstrap.js"></script>
	<script type="text/javascript" src="assets/DataTables/media/js/jquery.js"></script>
	<script type="text/javascript" src="assets/DataTables/media/js/jquery.dataTables.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/dataTables.bootstrap.min.css">
             
<Script>
function cetak() {
window.print();}

function warning(){
		alert("Silahkan Cetak Formulir, Klik Tombol Print Di Bawah");
		}
			
		var mYtimer = setInterval(warning,5000000);

function hide(){
		var a = "<?php echo $wakaf;?>";
		if (a == 'ya'){
			alert("ya");
		}else (a == 'tidak'){
		alert("ya");}
		
		}
</script>
<style>
#box1{
				width:280px;
				height:50px;
				background:white;
				border:solid 2px skyblue;
				
			}
#box2{
				width:280px;
				height:140px;
				background:white;
				padding-right:20px;
				border:solid 2px skyblue;
				
			}
			</style>
</head>
<body onload="warning ()" style="font-family:leelawadee;">
<?php include "header.php";
if (isset($_POST["simpan"])) {
	$id_peserta=$_POST["id_peserta"];
	$pelaksanaan=$_POST["pelaksanaan"];
	$nama_program=$_POST["nama_program"];
	$nama_lengkap=$_POST["nama_lengkap"];
	$no_identitas=$_POST["no_identitas"];
	$jenis_identitas=$_POST["jenis_identitas"];
	$tempat_lahir=$_POST["tempat_lahir"];
	$tanggal_lahir=$_POST["tanggal_lahir"];
	$usia=$_POST["usia"];
	$jenis_kelamin=$_POST["jenis_kelamin"];
	$status_pernikahan=$_POST["status_pernikahan"];
	$alamat=$_POST["alamat"];
	$kabupaten=$_POST["kabupaten"];
	$provinsi=$_POST["provinsi"];
	$no_hp=$_POST["no_hp"];
	$email=$_POST["email"];
	$fb=$_POST["fb"];
	$ig=$_POST["ig"];
	$data_hafalan=$_POST["data_hafalan"];
	$pekerjaan=$_POST["pekerjaan"];
	$alamat_instansi=$_POST["alamat_instansi"];
	$nama_ayah=$_POST["nama_ayah"];
	$no_darurat=$_POST["no_darurat"];
	$alergi_makanan=$_POST["alergi_makanan"];
	$ukuran_baju=$_POST["ukuran_baju"];
	$info_karantina=$_POST["info_karantina"];
	$angkatan=$_POST["angkatan"];
	$status_peserta=$_POST["status_peserta"];
	$wakaf=$_POST["wakaf"];
	$uang_wakaf=$_POST["uang_wakaf"];
	$barang_wakaf=$_POST["barang_wakaf"];
	$file = $_FILES["file"]["name"];
		$tmp_name = $_FILES["file"]["tmp_name"];
		move_uploaded_file($tmp_name, "images/".$file);
		
 ?>
 <?php }; ?>
<table align=center border="0" >
 
 <tr>
    <td width="auto" scope="" align="left">
		    <td width="100%" align="center">
		<font size="3"style="bold" face="calibri">
		<b style="font-size:16;">FORMULIR PENDAFTARAN</b><br>
		<center>
		<b style="color:blue;"> <?php echo "( "; echo $status_peserta; echo " )"; ?>
		</b>
		</center>
		<br>
		<br>
		

	</td>
  </tr>
  </font>
</table>



<table border="0" width=90% align=center>
<tr align="center">
	<td width='5%' align="left">Program 
	</td>
	<td width="2.5%">:</td>
	<td width="5%"align="center"><?php echo $nama_program; ?></td>		
	<td width='10%'>Angkatan
	</td>
	<td width="2.5%">:</td>
	<td width="5%"align="left"> <?php echo $angkatan; ?></td>	
	<td width='15%' align="left">Tanggal Pelaksanaan
	</td>
	<td width="2%">:</td>
	<td width="15%"align="left"> <?php echo $pelaksanaan ?></td>	
	
	</table>
	<br>
		<table width="90%" align="center" border=0 width="100%">
	
	</tr>	
	
	<tr><td width="10%">Nama</td>
	<td width ="1%">:</td>
	<td width ="30%"><?php echo $nama_lengkap?><br></td>
	<td rowspan=4 align=right width='20%'>
		<img src="images/<?php echo $file;  ?>" width="153px" height='215px'> 

</td>
	
		</tr>
		<tr>
		<td colspan=3> 
	<br>
			<div id='box1' style="font-style=:italic; text-align:left;color:skyblue;font-size:12"><i>Nama arabic</i></div>
					
		</td>
	
	</tr>
	
	
	<tr>
	<td width="10%">Nama Ayah</td>
	<td width ="1%"> :</td>
	<td width ="20%"><?php echo $nama_ayah?></td>
	
	</tr>
	<tr>
		<td colspan=3>	
		<div id='box1' style="font-style=:italic; text-align:left;color:skyblue;font-size:12"><i>Nama arabic</i></div>
				<br>

		</td>


	</tr>
	
	</table>
	<table border="0" width=90% height=100% align=center>
	
</tr>
<tr>
	<td width="20%">Stok Hafalan
	</td>
	<td width="1%">:</td>
	<td width="45%"><?php echo $data_hafalan ?></td>
	</td>
</tr>
<tr>
	<td width="20%">No Identitas
	</td>
	<td width="1%">:</td>
	<td width="45%"><?php echo $no_identitas;  echo " (".$jenis_identitas.") " ?></td>
	</td>
</tr>

</tr>
	<tr>
	<td width="20%">Tempat,Tanggal Lahir
	</td>
	<td width="1%">:</td>
	<td width="50%"><?php echo$tempat_lahir; echo ','?> <?php echo date('d F Y',strtotime ($tanggal_lahir)); ?> </td>
	</td>
</tr>
</tr>
	<tr>
	<td width="20%">Jenis Kelamin
	</td>
	<td width="1%">:</td>
	<td width="50%"><?php echo $jenis_kelamin; ?></td>
	</td>
</tr>
</tr>
	<tr>
	<td width="20%">Status Pernikahan
	</td>
	<td width="1%">:</td>
	<td width="50%"><?php echo $status_pernikahan;?></td>
	</td>
</tr>
</tr>
	<tr>
	<td width="20%">Alamat
	</td>
	<td width="1%">:</td>
	<td width="50%"><?php echo $alamat; ?></td>
	</td>
</tr>
</tr>
	<tr>
	<td width="20%">No Hp
	</td>
	<td width="1%">:</td>
	<td width="50%"> <?php echo $no_hp; ?></td>
	</td>
</tr>
</tr>

	<tr>
	<td width="20%">No Telpon Darurat
	</td>
	<td width="1%">:</td>
	<td width="50%"><?php echo $no_darurat; ?></td>
	</td>
</tr>
</tr>
	<tr>
	<td width="20%">Alamat Sosmed 
	</td>
	<td width="1%">:</td>
	<td width="25%"><?php echo "Facebook : ".$fb."  / Instagram ".$ig." "?></td>
	</td>
</tr>
</tr>
	<tr>
	<td width="20%">Ukuran baju
	</td>
	<td width="1%">:</td>
	<td width="50%"> <?php echo $ukuran_baju; ?></td>
	</td>
</tr>
<tr>
  
<td align=center colspan=4>
<br>Checklis Persyaratan
</td>
</tr>
<tr>
<td align=center colspan=4 >
<input type="checkbox"> <font style="font-size:12">Fotocopy Identitas</font>
<input type="checkbox"> <font style="font-size:12">Bukti Transfer </font>
<input type="checkbox"> <font style="font-size:12">Surat Keterangan Sehat</font>
<input type="checkbox"> <font style="font-size:12">Pas Photo</font>
<input type="checkbox"> <font style="font-size:12">Materai</font>
<input type="checkbox"> <font style="font-size:12">Sepatu</font>
</td>
</tr>
</table>
<table  width=90% align=center border=0>
<tr align="center">
<td width=50%>
<br>


Kuningan,  <?php echo tgl_indo(date("Y-m-d")); ?>
<br>Ttd Peserta
<br><br><br><br> 
<br>
<br>
(<?php echo $nama_lengkap; ?>)

</td width=1%>
<td>
</td>
<td align="center">
<div id="box2">
<br>
<font style="font-style:bold; align:center;padding-right:0px;">PERHATIAN !!!</font>
<br>
<ol style="font-size:10;text-align:left;" >
<br>
	<li>
	Cetaklah Formulir Pendaftaran, Surat Pernyataan dan formulir wakaf Ini Sebagai Bukti Pendaftaran Yang Sah
	</li>
	<li>
		Pastikan Semua Data Yang Anda Input Benar
	</li>
	<li>
	Ceklis Persyaratan Yang Sudah Dilengkapi
	</li>
	<li>
	Bawalah Formulir dan Surat Pernyataan Yang Telah Anda Cetak Beserta Persyaratan Lainya Saat Registrasi Ulang
	</li>
</ol>
</font>
<div>

</td>

</tr>

</table>

<form name=form_registrasi method=post action=simpandata.php>
<input type=hidden name="id_peserta" value="<?php echo $id_peserta ?>"> 
<input type=hidden name="nama_program" value="<?php echo $nama_program?>"> 
<input type=hidden name="nama_lengkap" value=" <?php echo $nama_lengkap?>" > 
<input type=hidden name="no_identitas" value= "<?php echo $no_identitas?>" > 
<input type=hidden name="jenis_identitas" value= "<?php echo $jenis_identitas?>" > 
<input type=hidden name="tempat_lahir" value=" <?php echo $tempat_lahir?>" > 
<input type=hidden name="tanggal_lahir" value="<?php echo $tanggal_lahir?>" > 
<input type=hidden name="usia" value="<?php echo $usia?>" > 
<input type=hidden name="jenis_kelamin" value="<?php echo $jenis_kelamin?>" > 
<input type=hidden name="status_pernikahan" value=" <?php echo $status_pernikahan?>" > 
<input type=hidden name="alamat" value="<?php echo$alamat?>" > 
<input type=hidden name="kabupaten" value="<?php echo$kabupaten?>" > 
<input type=hidden name="provinsi" value="<?php echo$provinsi?>" > 
<input type=hidden name="no_hp" value="<?php echo$no_hp?>" > 
<input type=hidden name="email" value="<?php echo$email?>" > 
<input type=hidden name="fb" value="<?php echo$fb?>" > 
<input type=hidden name="ig" value="<?php echo$ig?>" > 
<input type=hidden name="data_hafalan" value="<?php echo$data_hafalan?>" > 
<input type=hidden name="pekerjaan" value="<?php echo$pekerjaan?>" > 
<input type=hidden name="alamat_instansi" value="<?php echo$alamat_instansi?>" > 
<input type=hidden name="nama_ayah" value="<?php echo$alamat_instansi?>" > 
<input type=hidden name="no_darurat" value="<?php echo$no_darurat?>"> 
<input type=hidden name="alergi_makanan" value="<?php echo$alergi_makanan?>"> 
<input type=hidden name="ukuran_baju" value="<?php echo$ukuran_baju?>"> 
<input type=hidden name="info_karantina" value="<?php echo$info_karantina?>"> 
<input type=hidden name="angkatan" value="<?php echo$angkatan?>"> 
<input type=hidden name="pelaksanaan" value="<?php echo$pelaksanaan?>"> 
<input type=hidden name="status_peserta" value="<?php echo$status_peserta?>"> 
<input type=hidden name="wakaf" value="<?php echo$wakaf?>"> 
<input type=hidden name="uang_wakaf" value="<?php echo$uang_wakaf?>"> 
<input type=hidden name="barang_wakaf" value="<?php echo$barang_wakaf?>"> 
<center>
potong disini-----------------------------------------------------
<!-- <td> <button type="submit" name="simpan" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-send"></span> Kirim Formulir</button></a> -->
<td> <button name="simpan" onClick="cetak()"  class="btn btn-success btn-sm" ><span class="glyphicon glyphicon-print" ></span> Print </button></a>
-----------------------------------------------------potong disini



<center>




<center>FORM SERAGAM<br>
Yayasan Karantina Tahfidzh Al-Quran Nasional<br>
Angkatan : <?php echo $angkatan; ?></center>
<table border="0" width=80%>
<tr>
	<td width=10%>Nama</td> 
	<td width=1%>:</td> 
	<td width=10%> <?php echo $nama_lengkap; ?></td>
	<td border=1 width=10% rowspan=5 align=center>
		Paraf Pengambilan
<br>		
<br>		
<br>		
<br>		
<br>		
(<?php echo $nama_lengkap; ?>)
	
	</td>
	
</tr>
<tr>
	<td width=10%>Status Peserta</td> 
	<td width=1%>:</td> 
	<td width=15%><?php echo $status_peserta; ?></td> 
</tr>
<tr>
	<td width=10%>Program</td> 
	<td width=1%>:</td>
	<td width=10%>
	<?php echo $nama_program ?>
	</td> 
</tr>

<tr>
	<td width=10%>Ukuran Baju</td> 
	<td width=1%>:</td> 
	<td width=10%>
	<?php echo $ukuran_baju ?>
	</td> 
</tr>
<tr>
	<td width=10%>Tanggal Pulang </td>
	<td width=1%>: </td>
	<td width=10%>________________</td>
</tr>

</table>
<footer>
<center>www.hafalquransebulan.com | www.karantinatahfizh.id
</footer>

<br>
<?php 
include 'header.php';
?>

<b style="font-size:14;align:center;">
<br>
<br>
<br>
SURAT PERNYATAAN</b>
<br>
<em>
Bismillaahirrahmaanirrahiim
</em>
<br>
<br>
<table border="0" width=95%>
<tr >
<td  >
Saya yang bertanda tangan dibawah ini :
</td>
</tr>
</table>
<table border="0" width=95%>
<tr>
<td><br></td><td></td><td></td>
</tr>
<tr>
	<td width=20%>Nama<br></td>
	<td width=1%>:</td>
	<td width=45%><?php echo $nama_lengkap; ?></td>
</tr>
<tr>
<td><br></td><td></td><td></td>
</tr>
<tr>
	<td width=20%>Tempat, Tanggal Lahir <br> </td>
	<td width=1%>:</td>
	<td width=45%><?php echo $tempat_lahir; echo ", ";echo  date('d F Y',strtotime ($tanggal_lahir)) ?></td>
</tr>
<tr>
<td><br></td><td></td><td></td>
</tr>
<tr>
	<td width=20%>Asal Daerah <br> </td>
	<td width=1%>:</td>
	<td width=45%><?php echo $kabupaten?></td>
</tr>
<tr>
<td><br></td><td></td><td></td>
</tr>
<tr>
	<td width=20%>Pelaksanaan <br> </td>
	<td width=1%>:</td>
	<td width=45%><?php echo "---" ?></td>
</tr>

<tr>
<td colspan=3>
<br>
<br>
<br>
Dengan ini menyatakan bahwa saya bersedia mematuhi segala tata tertib,
 peraturan dan jadwal kegiatan Karantina Tahfizh Al Qur’an Nasional
 sebagaimana mestinya. <br> <br>

Apabila dalam pelaksanaannya saya melakukan 
pelanggaran dan atau mengundurkan diri secara
 sepihak, maka saya siap menerima konsekuensi, 
 teguran hingga pengguguran keikutsertaan sebagai 
 peserta tanpa menuntut apapun termasuk pengembalian 
 biaya akomodasi yang sudah dibayarkan.<br> <br> 

Dan apabila dalam pelaksanaan program ini 
saya membutuhkan penanganan medis dan harus 
dirujuk ke Rumah Sakit, maka saya/wali bersedia 
bertanggungjawab dalam hal biaya perawatan dll. <br><br>

Demikian surat pernyataan ini saya buat dengan penuh kesadaran untuk 
keberhasilan program Karantina Tahfizh Nasional yang sedang saya jalani.<br><br>

</td>
</tr>
</table>
<table width="95%" border="0">
<tr>
<td width="45%">
</td>
<td align="right">
<br>


Kuningan, <?php echo tgl_indo(date("Y-m-d")); ?>
<br>Ttd Peserta
<br><br><br><br> 
<i>materai 6000</i>
<br>
<br>
<br>
<br>
(<?php echo $nama_lengkap; ?>)

</td width=1%>
</tr>
</table>
<br>
<br>
<br>
<br>
<br>


<!--Formulir Wakaf-->
<div id="wakaf" >
<?php include 'header.php';?>
<b style="font-size:14;align:center;">
<br>
<br>
<br>
FORMULIR WAKAF</b>
<br>
<em>
Bismillaahirrahmaanirrahiim
</em>
<br>
<br>
<table border="0" width=95%>
<tr >
<td  >
Saya yang bertanda tangan dibawah ini :
</td>
</tr>
</table>
<table border="0" width=95%>
<tr>
<td><br></td><td></td><td></td>
</tr>
<tr>
	<td width=20%>Nama<br></td>
	<td width=1%>:</td>
	<td width=45%><?php echo $nama_lengkap; ?></td>
</tr>
<tr>
<td><br></td><td></td><td></td>
</tr>

<tr>
	<td width=20%>Asal Daerah <br> </td>
	<td width=1%>:</td>
	<td width=45%><?php echo $kabupaten?></td>
</tr>
<tr>
<td><br></td><td></td><td></td>
</tr>
<tr>
	<td width=20%>Angkatan<br> </td>
	<td width=1%>:</td>
	<td width=45%><?php echo $angkatan ?></td>
</tr>

<tr>
<td colspan=3>
<br>
<br>
<br>
Niat iklhas karna Allah memberikan wakaf untuk kepentingan dakwah Al-Quran <br>
berupa : 
</td>
</tr>
<tr>
	<td width=20%>Uang Tunai Senilai<br> </td>
	<td width=1%>:</td>
	<td width=45%><?php echo "<b> Rp. "; echo number_format($uang_wakaf);?></td>
</tr>
<tr>
	<td><br></td><td></td><td></td>
<tr>
<tr>
	<td width=20%>Barang Berupa <br> </td>
	<td width=1%>:</td>
	<td width=45%><?php echo "<b> "; echo $barang_wakaf ?></td>
</tr>
<tr>
<td colspan=3>
<br>
<br>
<br>
	Demikian semoga menjadi jalan kebaikan unutuk kita semua.
</td>
</tr>
</table>
<table width="95%" border="0">
<tr>
<td width="45%">
</td>
<td align="right">
<br>


Kuningan, <?php echo tgl_indo(date("Y-m-d")); ?>
<br>Ttd Peserta
<br><br><br><br> 

<br>
<br>
<br>
<br>
(<?php echo $nama_lengkap; ?>)

</td width=1%>
</tr>
</table>
</div>







<?php
		function tgl_indo($tanggal){
	$bulan = array (
		1 =>   "Januari",
		"Februari",
		"Maret",
		"April",
		"Mei",
		"Juni",
		"Juli",
		"Agustus",
		"September",
		"Oktober",
		"November",
		"Desember"
	);
	$pecahkan = explode("-", $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . " " . $bulan[ (int)$pecahkan[1] ] . " " . $pecahkan[0];
}
?>



</body>
</html>