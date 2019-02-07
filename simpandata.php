<?php
include "koneksi.php";

$id_peserta = $_POST['id_peserta'];
$nama_program = $_POST['nama_program'];
$nama_lengkap = $_POST['nama_lengkap'];
$no_identitas = $_POST['no_identitas'];
$jenis_identitas = $_POST['jenis_identitas'];
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
$ig= $_POST['ig'];
$data_hafalan = $_POST['data_hafalan'];
$pekerjaan = $_POST['pekerjaan'];
$alamat_instansi = $_POST['alamat_instansi'];
$nama_ayah = $_POST['nama_ayah'];
$no_darurat = $_POST['no_darurat'];
$alergi_makanan = $_POST['alergi_makanan'];
$ukuran_baju = $_POST['ukuran_baju'];
//$foto = $_POST['foto'];
$info_karantina = $_POST['info_karantina'];
$status_peserta = $_POST['status_peserta'];
$angkatan = $_POST['angkatan'];
$pelaksanaan = $_POST['pelaksanaan'];
$wakaf = $_POST['wakaf'];
$uang_wakaf = $_POST['uang_wakaf'];
$barang_wakaf = $_POST['barang_wakaf'];


// Set path folder tempat menyimpan fotonya
extract($_POST);

if(isset($simpan))
{
		$query = "INSERT into form_registrasi 
		values(
		'$id_peserta',
		'$nama_program',
		'$nama_lengkap',
		'$no_identitas',
		'$jenis_identitas',
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
		'$ig',
		'$data_hafalan',
		'$pekerjaan',
		'$alamat_instansi',
		'$nama_ayah',
		'$no_darurat',
		'$alergi_makanan',
		'$ukuran_baju',
		'$info_karantina',
		'$status_peserta',
		'$angkatan',
		'$pelaksanaan',
		'$wakaf',
		'$uang_wakaf',
		'$barang_wakaf'
		
			
		)";
		$b = mysql_query($query);

		if($b)
		{
			echo "<script> alert('Data Formulir $nama_lengkap Berhasil Dikirim, silahkan Print formulirnya dan ikuti petunjuk selanjutnya'); 
					  window.location.href = 'halaman_konfirmasi.php';
				  </script>";     
		}
		else
		{
			echo "<script> alert('Data $nama_lengkap Gagal Disimpan'); </script>";     
			echo mysql_error();     
			mysql_errno();   
		}
}
?>