<table>
<html>
<head>
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
             
<script type="text/javascript" language="javascript">
$(document).ready(function() {
$('#datatable').DataTable();
});
</script>
</head>					

<center>
<body>

<center>
<br>
	<b>	
		Data Peserta Karantina Tahfizh Nasional
	</b>
	<br>
	<br>
</center>
<table id="datatable"  class="table table-striped table-bordered table-hover table-condensed">
<thead>
    <tr class="info" width=100>
		<th align=center>Nama Program</th>
		<th align=center>Nama lengkap</th>
		<th align=center>Tempat, Tanggal lahir</th>
		<th align=center>Usia</th>
		<th align=center>Jenis Kelamin</th>
		<th align=center>Kabupaten</th>
		<th align=center>Provinsi</th>
		<th align=center>Hafalan</th>
		<th align=center><a href='home.php?m=ia'><button type='button' class='btn btn-primary btn-sm'><span class='glyphicon glyphicon-plus'></span> Tambah Admin </button></a></th>
   
   </tr>
</thead>
<tbody>
<?php

include "koneksi.php";
$query = "select * from form_registrasi";
$a = mysql_query($query);
while($b = mysql_fetch_array($a))
{
    echo "<tr>
			    <td> $b[nama_program] </td>
                <td> $b[nama_lengkap] </td>           
                <td> $b[tempat_lahir],$b[tanggal_lahir] </td>
                <td> $b[usia] </td>
                <td> $b[jenis_kelamin]</td>               
                <td> $b[kabupaten]</td>
                <td> $b[provinsi]</td>
                <td> $b[data_hafalan]</td>
              
               
				<td><a href='home.php?m=ea&id=$b[id_peserta]'><button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-edit'></span> Edit</button></a>
				<a href='home.php?m=ha&id=$b[id_peserta]'><button type='button' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash'></span> Hapus</button></a>
				</td>
          </tr>";
}
?>

</tbody>
</table>


<center>
<br>
	<b>	
		Data hasil Penilaian Tahsin / Tahfizh 
	</b>
	<br>
	<br>
</center>
<table id="datatable"  class="table table-striped table-bordered table-hover table-condensed">
<thead>
    <tr class="info" width=100>
		<th align=center>Nama Program</th>
		<th align=center>Nama lengkap</th>
		<th align=center>Jenis Kelamin</th>
		<th align=center>Hafalan</th>
		<th align=center>Nilai</th>
   
   </tr>
</thead>
<tbody>
<?php

include "koneksi.php";
$query = "select * from form_registrasi sort by nilai_tahsin asc";
$c = mysql_query($query);
while($d = mysql_fetch_array($c))
{
    echo "<tr>
			    <td> $d[nama_program] </td>
                <td> $d[nama_lengkap] </td>           
                <td> $d[tempat_lahir],$c[tanggal_lahir] </td>
                <td> $d[usia] </td>
                <td> $d[jenis_kelamin]</td>               
                <td> $d[data_hafalan]</td>
                <td> $d[nilai_tahsin]</td>
           
				</td>
          </tr>";
}

echo die(mysql_error());
?>
</table>
</div>
</body>
</html>

</tbody>
</table>