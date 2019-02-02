<html>
<head><title>cetak laporan</title>
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
function cetak(){
window.print();}


</script>
</head>
<body>
<?php include 'header.php' ?>
<table align=center border="0" >
 
 <tr>
    <td width="auto" scope="" align="left">
		    <td width="100%" align="center">
		<font size="3"style="bold" face="Times New Roman"><br>
		FORMULIR PENDAFTARAN PESERTA KARANTINA TAHFIDZ NASIONAL<br>
ANGKATAN : 39  TANGGAL PELAKSANAAN :................ <br>
	<em>PROGRAM : <input type='checkbox'>3 Bulan Mutqin <input type='checkbox'>1 Bulan 
			  <input type='checkbox'>4 Pekan 
			  <input type='checkbox'>3 Pekan 
			  <input type='checkbox'>2 Pekan 
			  <input type='checkbox'>1 Pekan 
			  <input type='checkbox'>2 Hari <br> 
			  <input align='center'type='checkbox'>Alumni  
			  <input align='center' type='checkbox'> Pendaftar baru </em>
	<hr border="10">
	</td>
  </tr>
  </font>
</table>




<?php
	//include "koneksi.php";
	//extract($_GET);
	//$query = "select * from form_registrasi where id_peserta= 17 ";
	//$a = mysql_query($query);
	//$b = mysql_fetch_array($a);
	
	$nama_program=$_POST['nama_program'];
	$nama_lengkap=$_POST['nama_lengkap'];
	$nama_panggilan=$_POST['nama_panggilan'];
	$no_identitas=$_POST['no_identitas'];
	$tempat_lahir=$_POST['tempat_lahir'];
	$tanggal_lahir=$_POST['tanggal_lahir'];
	$usia=$_POST['usia'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$status_pernikahan=$_POST['status_pernikahan'];
	$alamat=$_POST['alamat'];
	$kabupaten=$_POST['kabupaten'];
	$provinsi=$_POST['provinsi'];
	$no_hp=$_POST['no_hp'];
	$email=$_POST['email'];
	$fb=$_POST['fb'];
	$data_hafalan=$_POST['data_hafalan'];
	$pekerjaan=$_POST['pekerjaan'];
	$alamat_instansi=$_POST['alamat_instansi'];
	$nama_ayah=$_POST['nama_ayah'];
	$no_darurat=$_POST['no_darurat'];
	$alergi_makanan=$_POST['alergi_makanan'];
	$ukuran_baju=$_POST['ukuran_baju'];
	$info_karantina=$_POST['info_karantina'];
	function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
echo "

<table border='0' width=90% align=center>
<tr>
	<td width='20%'>Nama Lengkap
	</td>
	<td width='1%'>:</td>
	<td width=20%'>$nama_lengkap</td>
	<td width='20%'>Nama Ayah Kandung
	</td>
	<td width='1%'>:</td>
	<td width='20%'>$nama_ayah</td>
	</td>
	<form>

</form>

	</td>

</tr>
<tr>
	<td width='20%'><i style='font-size:10pt'>(Nama Arab)</i>
	</td>
	<td width='1%'>:</td>
	<td width=20%'>	
	<br>
	<br>
	<br>
	<hr border='10'></td>
	<td width='20%'><i style='font-size:10pt'></i>
	</td>
	<td width='1%'></td>
	<td width='20%'>
	<br>
	<br>
	<br>
	<hr border='10'>
</div>
	</td>
	</td>
	</td>

</tr>
	
	</table>
	<table border='0' width=80% height=100% align=center>
	<tr>
	<td width='20%'>Nama Panggilan
	</td>
	<td width='1%'>:</td>
	<td width='45%'>$nama_panggilan</td>
	</td>
		
	</tr>
</tr>
	<tr>
	<td width='20%'>No Identitas
	</td>
	<td width='1%'>:</td>
	<td width='45%'>$no_identitas</td>
	</td>
</tr>

</tr>
	<tr>
	<td width='20%'>Tempat,Tanggal Lahir
	</td>
	<td width='1%'>:</td>
	<td width='50%'>$tempat_lahir, $tanggal_lahir</td>
	</td>
</tr>
</tr>
	<tr>
	<td width='20%'>Jenis Kelamin
	</td>
	<td width='1%'>:</td>
	<td width='50%'>$jenis_kelamin</td>
	</td>
</tr>
</tr>
	<tr>
	<td width='20%'>Status Pernikahan
	</td>
	<td width='1%'>:</td>
	<td width='50%'>$status_pernikahan</td>
	</td>
</tr>
</tr>
	<tr>
	<td width='20%'>Alamat
	</td>
	<td width='1%'>:</td>
	<td width='50%'>$alamat</td>
	</td>
</tr>
</tr>
	<tr>
	<td width='20%'>No Hp
	</td>
	<td width='1%'>:</td>
	<td width='50%'>$no_hp</td>
	</td>
</tr>
</tr>

	<tr>
	<td width='20%'>No Telpon Darurat
	</td>
	<td width='1%'>:</td>
	<td width='50%'>$no_darurat</td>
	</td>
</tr>
</tr>
	<tr>
	<td width='20%'>Alergi Makanan 
	</td>
	<td width='1%'>:</td>
	<td width='50%'>$alergi_makanan</td>
	</td>
</tr>
</tr>
	<tr>
	<td width='20%'>Ukuran baju
	</td>
	<td width='1%'>:</td>
	<td width='50%'>$ukuran_baju</td>
	</td>
</tr>
<tr>

<td align=left colspan=4>
<br>Checklis Persyaratan
</td>
</tr>
<tr>
<td align=center colspan=4>
<input type='checkbox'>Fotocopy Identitas
<input type='checkbox'>Bukti Transfer
<input type='checkbox'>Surat Keterangan Sehat
<input type='checkbox'>Pas Photo
<input type='checkbox'>Materai
<input type='checkbox'>Sepatu

</td>
</tr>
<tr align='center'>
<td width=30%>
<br>
<br>

Kuningan, "; echo tgl_indo(date('Y-m-d')); echo "
<br>Ttd Peserta
<br><br><br><br>
<br>
<br>
($nama_lengkap)<br>

</td width=1%>
<td>
</td>
<td align='center'>
<img src='logo3.jpg' height='150dp' width='125dp'>

</td>

</tr>

</table>
<form name=form_registrasi method=post action=simpandata.php>
<input type=hidden name='nama_program' value='$nama_program' ?> 
<input type=hidden name='nama_lengkap' value='$nama_lengkap' ?> 
<input type=hidden name='nama_panggilan' value='$nama_panggilan' ?> 
<input type=hidden name='no_identitas' value='$no_identitas' ?> 
<input type=hidden name='tempat_lahir' value='$tempat_lahir' ?> 
<input type=hidden name='tanggal_lahir' value='$tanggal_lahir' ?> 
<input type=hidden name='usia' value='$usia' ?> 
<input type=hidden name='jenis_kelamin' value='$jenis_kelamin' ?> 
<input type=hidden name='status_pernikahan' value='$status_pernikahan' ?> 
<input type=hidden name='alamat' value='$alamat' ?> 
<input type=hidden name='kabupaten' value='$kabupaten' ?> 
<input type=hidden name='provinsi' value='$provinsi' ?> 
<input type=hidden name='no_hp' value='$no_hp' ?> 
<input type=hidden name='email' value='$email' ?> 
<input type=hidden name='fb' value='$fb' ?> 
<input type=hidden name='data_hafalan' value='$data_hafalan' ?> 
<input type=hidden name='pekerjaan' value='$pekerjaan' ?> 
<input type=hidden name='alamat_instansi' value='$alamat_instansi' ?> 
<input type=hidden name='nama_ayah' value='$alamat_instansi' ?> 
<input type=hidden name='no_darurat' value='$no_darurat'?> 
<input type=hidden name='alergi_makanan' value='$alergi_makanan'?> 
<input type=hidden name='ukuran_baju' value='$ukuran_baju'?> 
<input type=hidden name='info_karantina' value='$info_karantina'?> 
</form>
<center>
----------------------------------------------------------------------------------------------------------------------------------------
";




?>
<td> <button type='button' onClick='cetak()' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-print'></span>print</button></a>
<?php 
echo "
<center>FORM SERAGAM<br>
Yayasan Karantina Tahfidzh Al-Quran Nasional<br>
Angkatan :.....</center>
<table border='0' width=80%>
<tr>
	<td width=10%>Nama</td> 
	<td width=1%>:</td> 
	<td width=10%>$nama_lengkap</td>
	<td border=1 width=10% rowspan=4 align=center>
		Paraf Pengambilan
<br>		
<br>		
<br>		
<br>		
($nama_lengkap)
	
	</td>
	
</tr>
<tr>
	<td width=10%>Status Peserta</td> 
	<td width=1%>:</td> 
	<td width=15%><input type=checkbox> Alumni <input type=checkbox> Peserta Baru </td> 
</tr>
<tr>
	<td width=10%>Program</td> 
	<td width=1%>:</td>
	<td width=10%>
	<input type=checkbox> Sebulan 
	<input type=checkbox> 3 Pekan 
	<input type=checkbox> 2 Pekan 
	<input type=checkbox> 1 Pekan 
	<input type=checkbox> Weekend
	<input type=checkbox> Mutqin
	</td> 
</tr>

<tr>
	<td width=10%>Ukuran Baju</td> 
	<td width=1%>:</td> 
	<td width=10%>
	<input type=checkbox> S 
	<input type=checkbox> M 
	<input type=checkbox> L
	<input type=checkbox> XL 
	<input type=checkbox> XXL
	</td> 
</tr>
<tr>
	<td width=10%>Tanggal Pulang </td>
	<td width=1%>: </td>
	<td width=10%><input type=date> </td>
</tr>

</table>
";
?>
<br>
<footer>
<center>www.hafalquransebulan.com | www.karantinatahfidz.com
</footer>



<body>
</html>