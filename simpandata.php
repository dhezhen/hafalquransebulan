<?php
include "koneksi.php";

$id_peserta = $_POST['id_peserta'];
$nama_program = $_POST['nama_program'];
$nama_lengkap = $_POST['nama_lengkap'];
$nama_panggilan = $_POST['nama_panggilan'];
$no_identitas = $_POST['no_identitas'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$usia = $_POST['usia'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$status_pernikahan = $_POST['status_pernikahan'];
$alamat = $_POST['alamat'];
$kabupaten = $_POST['kabupaten'];
$provinsi = $_POST['provinsi'];
$no_hp = $_POST['no_hp'];
$email= $_POST['email'];
$fb= $_POST['fb'];
$data_hafalan = $_POST['data_hafalan'];
$pekerjaan = $_POST['pekerjaan'];
$alamat_instansi = $_POST['alamat_instansi'];
$nama_ayah = $_POST['nama_ayah'];
$no_darurat = $_POST['no_darurat'];
$alergi_makanan = $_POST['alergi_makanan'];
$ukuran_baju = $_POST['ukuran_baju'];
//$foto = $_POST['foto'];
$info_karantina = $_POST['info_karantina'];


// Set path folder tempat menyimpan fotonya
extract($_POST);

if(isset($simpan))
{
		$query = "INSERT into form_registrasi 
		values(
		'$id_peserta',
		'$nama_program',
		'$nama_lengkap',
		'$nama_panggilan',
		'$no_identitas',
		'$tempat_lahir',
		'$tanggal_lahir',
		'$usia',
		'$jenis_kelamin',
		'$status_pernikahan',
		'$alamat',
		'$kabupaten',
		'$provinsi',
		'$no_hp',
		'$email',
		'$fb',
		'$data_hafalan',
		'$pekerjaan',
		'$alamat_instansi',
		'$nama_ayah',
		'$no_darurat',
		'$alergi_makanan',
		'$ukuran_baju',
		'$info_karantina'	
		)";
		$b = mysql_query($query);

		if($b)
		{
			echo "<script> alert('Data $nama_lengkap Berhasil Disimpan'); 
							window.location.href='print_form.php';
				  </script>";     
		}
		else
		{
			echo "<script> alert('Data $nama_lengkap Gagal Disimpan'); </script>";     
			echo mysql_error();     
		}
}
?>