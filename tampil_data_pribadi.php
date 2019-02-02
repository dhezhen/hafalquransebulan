<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Data HALAL</title>
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



 
function fungsiku() {
    return confirm("apakah anda akan menghapus data ini ? ");
	if (confirm == false)
	{
	return false;
	}
}

</script>
</head>					
<br>
<body>

<table id="datatable"  class="table table-striped table-bordered table-hover table-condensed" border=3>
<thead>
   <tr class="info" width='100%'>
		<th align=center>Nama Program </th>
		<th align=center>Nama lengkap</th>
		<th align=center>No Identitas</th>
		<th align=center>Tempat, Tanggal_lahir</th>
		<th align=center>Jenis kelamin</th>
		<th align=center>Alamat</th>
		<th align=Center></th>
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
                <td> $b[nama_lengkap] </td>
                <td> $b[nama_program] </td>
                <td> $b[no_identitas] </td>
                <td> $b[tempat_lahir],$b[tanggal_lahir]</td>
                <td> $b[jenis_kelamin]</td>
                <td> $b[alamat]</td>
                <td><a href='print_form.php&id=$b[id_peserta]'><button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-edit'></span>print</button></a>
				</td>
          </tr>";
		  

}




?>
</tbody>
</table>
</body>
</html>






</body>
</html>