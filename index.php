<html>
<head>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<title> </title>
<link href="css/bootstrap.min.css" rel="stylesheet" />

<form name=form_registrasi method=post action=print_form.php enctype="multipart/form-data">
 <div class='container' >
       <div class='panel panel-info'>
        <div class='panel-heading'><center><label>FORMULIR PENDAFTARAN PESERTA KARANTINA TAHFIDZH AL-QUR'AN NASIONAL </label></center></div>
        <div class='panel-heading'><center><label>  </label></center></div>
       
        <div class='panel-heading'><center><label>  </label></center></div>
       
	   <div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>PROGRAM</label>
                <div class='col-sm-6'>
				<input type=hidden name='id_peserta' value=''>
					<SELECT class='form-control'name='nama_program'>
							<option >---Silahkan Pilih Program---</option>
							<option value ='3 Bulan Mutqin'>3 Bulan Mutqin </option>
							<option value ='1 Bulan'>1 Bulan </option>
							<option value='4 Pekan'>4 Pekan</option>
							<option value='3 pekan'>3 Pekan</option>
							<option value ='2 Pekan'>2 Pekan</option>
							<option value="2 Hari">2 Hari</option>
							<option value="I'TIKAF">I'TIKAF
							<option value="3 PEKAN LIBURAN">3 PEKAN LIBURAN
					</SELECT>	
                </div>
			</div>  		
			</div>  
      
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>Angkatan </label>
                <div class='col-sm-2'>
						<select id="mySelect" name=angkatan onchange="myFunction()" class="form-control"  >
  <option value="-">-- Pilih angkatan ---
  <option value="39">39
  <option value="40">40
  <option value="41">41
  <option value="42">42
  <option value="43">43
  <option value="44">44
  <option value="45">45
  <option value="I TIKAF">I'TIKAF
  <option value="3 PEKAN LIBURAN">3 PEKAN LIBURAN
</select>

<script>
function myFunction() {
  var x = document.getElementById("mySelect").value;
	
	
	if ( x == '39')
	{
	  document.getElementById("demo").innerHTML = "3 Maret - 7 April 2019";
	} else if( x == '40') {
		  document.getElementById("demo").innerHTML = "21 April - 26 Mei 2019";
	}else if( x == "41") {
		  document.getElementById("demo").innerHTML = "16 Juni - 21 Juli 2019";
	}else if( x == '42') {
			  document.getElementById("demo").innerHTML = "28 Juli - 1 Sept 2019";
	}else if( x == '43') {
			  document.getElementById("demo").innerHTML = "8 Sept - 13 Okt 2019";
	}else if( x == '44') {
			  document.getElementById("demo").innerHTML = "20 Okt - 24 Nov 2019";
	}else if( x == '45') {
			  document.getElementById("demo").innerHTML = "1 Des - 5 Januari 2020";
	}else if( x == 'I TIKAF') {
			  document.getElementById("demo").innerHTML = "12 Mei - 26 Mei 2019";
	}else if( x == '3 PEKAN LIBURAN') {
			  document.getElementById("demo").innerHTML = "30 Juni - 21 Juli 2019";
	}
		
}

function show1(){
  document.getElementById('jenis_wakaf').style.display ='none';
  document.getElementById('uang_wakaf').value = ''
  document.getElementById('barang_wakaf').value = ''
}
function show2(){
  document.getElementById('jenis_wakaf').style.display = 'block';
}
</script>

			

                </div>
				<textarea name="pelaksanaan" hidden id='demo'> </textarea>
            </div>
        </div>		
		
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>STATUS PESERTA</label>
                <div class='col-sm-6'>
						<SELECT name='status_peserta' class='form-control'>
							<option >---Status Peserta--- </option>
							<option value='Peserta Baru'>Peserta Baru </option>
							<option value='Alumni'>Alumni </option>
						<SELECT>
                </div>
            </div>
        </div>
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>NAMA LENGKAP</label>
                <div class='col-sm-6'>
						<input name=nama_lengkap type=text class='form-control'>
                </div>
            </div>
        </div>
		
		    <div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>NO IDENTITAS</label>
                <div class='col-sm-4'>
						<input name=no_identitas type=text class='form-control'>
						
                </div>
				   <label for='id' class='col-sm-2 control-label'>
				   <select name='jenis_identitas' class="form-control">
					<option value= ''>--Jenis--</option>
					<option value= 'KTP'>KTP</option>
					<option value= 'PASSPORT'>PASSPORT</option>
					<option value= 'SIM'>SIM</option>
					<option value= 'KARTU PELAJAR'>KARTU PELAJAR</option>
					<option value= 'KARTU MAHASISWA'>KARTU MAHASISWA</option>
					<option value= 'LAINYA'> LAINYA</option>
						
						
					</select>
				   </label>
			<div class='col-sm-6'>
					
			</div>
            </div>
			</div> 
			<div class='panel-body'>
				<div class='form-group'>
				<label for='id' class='col-sm-2 control-label'>TEMPAT LAHIR</label>
					<div class='col-sm-6'>
							<input name=tempat_lahir type=text class='form-control'>
					</div>
				</div>
			</div>
			<div class='panel-body'>
				<div class='form-group'>
				<label for='id' class='col-sm-2 control-label'>TANGGAL LAHIR</label>
					<div class='col-sm-6'>
							<input name=tanggal_lahir type=date class='form-control'>
					</div>
				</div>
			</div>		
			<div class='panel-body'>
				<div class='form-group'>
				<label for='id' class='col-sm-2 control-label'>USIA</label>
					<div class='col-sm-6'>
							<input name=usia type=number class='form-control'>
					</div>
				</div>
			</div>
		<div class='panel-body'>
				<div class='form-group'>
				<label for='id' class='col-sm-2 control-label'>JENIS KELAMIN</label>
					<div class='col-sm-6'>
						<select  name='jenis_kelamin' class="form-control">
							<option value="Laki-Laki">Laki - Laki</option>
							<option value="Perempuan ">Perempuan</option>
						</select>
					</div>
				</div>
			</div>
			<div class='panel-body'>
				<div class='form-group'>
				<label for='id' class='col-sm-2 control-label'>STATUS Pernikahan</label>
					<div class='col-sm-6'>
							<select name=status_pernikahan class="form-control">
								<option value='Lajang'>Lajang</option>
								<option value='Menikah'>Duda</option>
								<option value='Cerai'>Janda</option>
							</select>
					</div>
				</div>
			</div>
		<div class='panel-body'>
				<div class='form-group'>
				<label for='id' class='col-sm-2 control-label'> ALAMAT</label> 
					<div class='col-sm-6'>
							<input name=alamat type=text class='form-control'>
					</div>
				</div>
			</div>		
			<div class='panel-body'>
				<div class='form-group'>
				<label for='id' class='col-sm-2 control-label'>KABUPATEN</label> 
					<div class='col-sm-6'>
							<input name=kabupaten type=text class='form-control'>
					</div>
				</div>
			</div>
			<div class='panel-body'>
				<div class='form-group'>
				<label for='id' class='col-sm-2 control-label'>PROVINSI</label> 
					<div class='col-sm-6'>
							<input name=provinsi type=text class='form-control'>
					</div>
				</div>
			</div>
		
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>NO TELEPON</label>
                <div class='col-sm-6'>
						<input name=no_hp type=TEXT class='form-control'>
                </div>
            </div>
        </div>
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>ALAMAT E-MAIL</label>
                <div class='col-sm-6'>
						<input name=email type=email class='form-control'>
                </div>
            </div>
        </div>
		
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>FB</label>
                <div class='col-sm-6'>
						<input name=fb type=text class='form-control'>
                </div>
            </div>
        </div>		
		
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>INSTAGRAM</label>
                <div class='col-sm-6'>
						<input name=ig type=text class='form-control'>
                </div>
            </div>
        </div>	
			<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>DATA HAFALAN SEBELUM KARANTINA </label>
                <div class='col-sm-6'>
						<input name=data_hafalan type=text class='form-control'>
                </div>
            </div>
        </div>	
		
		
			<div class='panel-body'>
						<div class='form-group'>
						<label for='id' class='col-sm-2 control-label'>PEKERJAAN</label>
							<div class='col-sm-6'>
									<input name=pekerjaan type=text class='form-control'>
							</div>
						</div>
				</div>	
		<div class='panel-body'>
							<div class='form-group'>
							<label for='id' class='col-sm-2 control-label'>ALAMAT INSTANSI</label>
								<div class='col-sm-6'>
										<input name=alamat_instansi type=text class='form-control'>
								</div>
							</div>
					</div>	
				
				<div class='panel-body'>
							<div class='form-group'>
							<label for='id' class='col-sm-2 control-label'>NAMA AYAH KANDUNG</label>
								<div class='col-sm-6'>
										<input name=nama_ayah type=text class='form-control'>
								</div>
							</div>
					</div>		
					
					
			<div class='panel-body'>
							<div class='form-group'>
							<label for='id' class='col-sm-2 control-label'>NOMOR TELPON DARURAT</label>
								<div class='col-sm-6'>
										<input name=no_darurat type=text class='form-control'>
								</div>
							</div>
					  </div>			

					  <div class='panel-body'>
							<div class='form-group'>
							<label for='id' class='col-sm-2 control-label'>ALERGI MAKANAN</label>
								<div class='col-sm-6'>
										<input name=alergi_makanan type=text class='form-control'>
								</div>
							</div>
					  </div>	
					  <div class='panel-body'>
							<div class='form-group'>
							<label for='id' class='col-sm-2 control-label'>UKURAN BAJU</label>
								<div class='col-sm-6'>
										<select name="ukuran_baju" class="form-control">
											<option value="S Anak - anak">S Anak - anak</option>
											<option value="M Anak - anak">M Anak- anak</option>
											<option value="L Anak - anak">L Anak - anak</option>
											<option value="S Dewasa">S Dewasa</option>
											<option value="M Dewasa">M Dewasa</option>
											<option value="L Dewasa">L Dewasa</option>
											<option value="XL Dewasa">XL Dewasa</option>
											<option value="XXL Dewasa">XXL Dewasa</option>
										</select>
								</div>
							</div>
					  </div>	  
					  
					  <div class='panel-body'>
							<div class='form-group'>
							<label for='id' class='col-sm-2 control-label'>FOTO</label>
								<div class='col-sm-6'>
								<input name='file' type=file class='form-control'>
								</div>
							</div>
					  </div>	
						 <div class='panel-body'>
							<div class='form-group'>
							<label for='id' class='col-sm-2 control-label'>MENGETAHUI INFO KARANTINA DARI MANA ?</label>
								<div class='col-sm-6'>
								<input name=info_karantina type=text class='form-control'>
											</div>
							</div>
					  </div>							 
					  <div class='panel-body'>
							<div class='form-group'>
							<label for='id' class='col-sm-2 control-label'>APAKAH ANDA BERSEDIA BERWAKAF ?</label>
								<div class='col-sm-2'>
										<input class="form-control" type=radio name=wakaf value=ya onclick='show2()'>Ya
								</div>
								<div class='col-sm-2'>
										<input class="form-control radio" type=radio name=wakaf value=tidak  onclick='show1()'>Tidak

								</div>
							</div>
					  </div> 
					  
					  <div class='panel-body' id="jenis_wakaf" style="display: none;">
							<div class='form-group'>
							<label for='id' class='col-sm-2 control-label'>JENIS WAKAF (OPTIONAL)</label>
								<div class='col-sm-3'>
										<label for='id' class='col-sm-6 control-label'align=center>UANG SENILAI</label>
										<input type=text id=uang_wakaf name=uang_wakaf class=form-control value='0'> 
								</div>
								<div class='col-sm-3'>
										<label for='id' class='col-sm-6 control-label' align=center>Barang Berupa</label>
										<input type=text id=barang_wakaf name=barang_wakaf class=form-control> 
								</div>
							</div>
					  </div>

					  
					  

			
						

		<div class='panel-body'>
        <div class='form-group'>  
			<div class='col-sm-offset-2 col-sm-10'>
				<button type='submit' class='btn btn-success' value='simpan'name='simpan'>Simpan</button>
				<button type='reset' class='btn btn-danger' name='batal' onclick='history.back();'>Batal</button>
            </div>
        </div>
		</div>
				
		</div>
	</div>
</div>
</form>