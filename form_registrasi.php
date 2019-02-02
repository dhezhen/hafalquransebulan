<html>
<head>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<title> </title>
<link href="css/bootstrap.min.css" rel="stylesheet" />

<form name=form_registrasi method=post action=print_form.php>
 <div class='container' >
       <div class='panel panel-info'>
        <div class='panel-heading'><center><label>FORMULIR PENDAFTARAN PESERTA KARANTINA TAHFIDZH AL-QUR'AN NASIONAL </label></center></div>
        <div class='panel-heading'><center><label>  </label></center></div>
       
	   <div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>PROGRAM</label>
                <div class='col-sm-5'>
				<input type='hidden' name='id_peserta'>
					<SELECT class='form-control' name='nama_program'>
							<option value ='3 Bulan Mutqin'>3 Bulan Mutqin </option>
							<option value ='1 Bulan'>1 Bulan </option>
							<option value='4 Pekan'>4 Pekan</option>
							<option value='3 pekan'>3 Pekan</option>
							<option value ='2 Pekan'>2 Pekan</option>
							<option value="2 Hari">2 Hari</option>
					</SELECT>	
                </div>
			</div>  		
			</div>  
        </FIELDSET>
	   <div class='panel-body'>
                    </div>   
        <div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>NAMA LENGKAP</label>
                <div class='col-sm-5'>
						<input name='nama_lengkap' type=text class='form-control'>
                </div>
            </div>
        </div>
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>NAMA PANGGILAN</label>
                <div class='col-sm-5'>
						<input name='nama_panggilan' type=text class='form-control'>
                </div>
            </div>
        </div>    
		
		    <div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>NO IDENTITAS</label>
                <div class='col-sm-5'>
						<input name='no_identitas' type=text class='form-control'>
                </div>
            </div>
			</div> 
			<div class='panel-body'>
				<div class='form-group'>
				<label for='id' class='col-sm-2 control-label'>TEMPAT LAHIR</label>
					<div class='col-sm-5'>
							<input name='tempat_lahir' type=text class='form-control'>
					</div>
				</div>
			</div>
			<div class='panel-body'>
				<div class='form-group'>
				<label for='id' class='col-sm-2 control-label'>TANGGAL LAHIR</label>
					<div class='col-sm-5'>
							<input name='tanggal_lahir' type=date class='form-control'>
					</div>
				</div>
			</div>		
			<div class='panel-body'>
				<div class='form-group'>
				<label for='id' class='col-sm-2 control-label'>USIA</label>
					<div class='col-sm-5'>
							<input name='usia' type=number class='form-control'>
					</div>
				</div>
			</div>
		<div class='panel-body'>
				<div class='form-group'>
				<label for='id' class='col-sm-2 control-label'>JENIS KELAMIN</label>
					<div class='col-sm-5'>
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
					<div class='col-sm-5'>
							<select name='status_pernikahan' class="form-control">
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
					<div class='col-sm-5'>
							<input name='alamat' type=text class='form-control'>
					</div>
				</div>
			</div>		
			<div class='panel-body'>
				<div class='form-group'>
				<label for='id' class='col-sm-2 control-label'>KABUPATEN</label> 
					<div class='col-sm-5'>
							<input name='kabupaten' type=text class='form-control'>
					</div>
				</div>
			</div>
			<div class='panel-body'>
				<div class='form-group'>
				<label for='id' class='col-sm-2 control-label'>PROVINSI</label> 
					<div class='col-sm-5'>
							<input name='provinsi' type=text class='form-control'>
					</div>
				</div>
			</div>
		
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>NO TELEPON</label>
                <div class='col-sm-5'>
						<input name='no_hp' type=TEXT class='form-control'>
                </div>
            </div>
        </div>
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>ALAMAT E-MAIL</label>
                <div class='col-sm-5'>
						<input name='email' type=email class='form-control'>
                </div>
            </div>
        </div>
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>FB</label>
                <div class='col-sm-5'>
						<input name='fb' type=text class='form-control'>
                </div>
            </div>
        </div>
		
	
		<div class='panel-body'>
            <div class='form-group'>
            <label for='id' class='col-sm-2 control-label'>DATA HAFALAN SEBELUM KARANTINA </label>
                <div class='col-sm-5'>
						<input name='data_hafalan' type=number class='form-control'>
                </div>
            </div>
        </div>	
		
		
			<div class='panel-body'>
						<div class='form-group'>
						<label for='id' class='col-sm-2 control-label'>PEKERJAAN</label>
							<div class='col-sm-5'>
									<input name='pekerjaan' type=text class='form-control'>
							</div>
						</div>
				</div>	
		<div class='panel-body'>
							<div class='form-group'>
							<label for='id' class='col-sm-2 control-label'>ALAMAT INSTANSI</label>
								<div class='col-sm-5'>
										<input name='alamat_instansi' type=text class='form-control'>
								</div>
							</div>
					</div>	
				
				<div class='panel-body'>
							<div class='form-group'>
							<label for='id' class='col-sm-2 control-label'>NAMA AYAH KANDUNG</label>
								<div class='col-sm-5'>
										<input name='nama_ayah' type=text class='form-control'>
								</div>
							</div>
					</div>		
					
					
			<div class='panel-body'>
							<div class='form-group'>
							<label for='id' class='col-sm-2 control-label'>NOMOR TELPON DARURAT</label>
								<div class='col-sm-5'>
										<input name='no_darurat' type=text class='form-control'>
								</div>
							</div>
					  </div>			

					  <div class='panel-body'>
							<div class='form-group'>
							<label for='id' class='col-sm-2 control-label'>ALERGI MAKANAN</label>
								<div class='col-sm-5'>
										<input name='alergi_makanan' type=text class='form-control'>
								</div>
							</div>
					  </div>	
					  <div class='panel-body'>
							<div class='form-group'>
							<label for='id' class='col-sm-2 control-label'>UKURAN BAJU</label>
								<div class='col-sm-5'>
										<select name="ukuran_baju" class="form-control">
											<option value="S Anak - anak">S Anak - anak<option>
											<option value="M Anak - anak">M Anak- anak<option>
											<option value="L Anak - anak">L Anak - anak<option>
											<option value="S Dewasa">S Dewasa<option>
											<option value="M Dewasa">M Dewasa<option>
											<option value="L Dewasa">L Dewasa<option>
											<option value="XL Dewasa">XL Dewasa<option>
											<option value="XXL Dewasa">XXL Dewasa<option>
										</select>
								</div>
							</div>
					  </div>	  
					  
					  <div class='panel-body'>
							<div class='form-group'>
							<label for='id' class='col-sm-2 control-label'>MENGETAHUI INFO KARANTINA DARI MANA ?</label>
								<div class='col-sm-5'>
								<input name='info_karantina' type=text class='form-control'>
											</div>
							</div>
					  </div>	
						
						

		<div class='panel-body'>
        <div class='form-group'>  
			<div class='col-sm-offset-2 col-sm-10'>
				<button type='submit' class='btn btn-success' >Simpan</button>
				<button type='reset' class='btn btn-danger' name='batal' onclick='history.back();'>Batal</button>
            </div>
        </div>
		</div>
				
		</div>
	</div>
</div>
</form>