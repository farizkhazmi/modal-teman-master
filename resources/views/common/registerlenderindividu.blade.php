@extends('login.masterlogin')
@section('konten')
<style>
	
	body,
	form {
		height: 100%;
		margin: 8%;
		margin-top: 10%;
	}


	h2 {
		padding-left: 35px
	}
	#btnup{
		align-items:left!important
	}
	.btnfolder {
  color: white;
  padding-top:10px!important;
  padding-bottom:10px!important
}
</style>

<div class="panel-body">
	
	<div class="row pl-10 pr-10">

		<div class="col-lg-12 pl-2 pr-2">
			<div class="alert alert-danger" role="alert" id="error" style="display: none;">...</div>
			<div class="alert alert-success" role="alert" id="success" style="display: none;">...</div>
			<form id="register-form" method="post" role="form">
				<div class="messages"></div>
				<div class="controls">

				<section class="mx-5">
					<div class="row">
					<div class="col-md-8 px-auto">				
					<div class="alert alert-primary" role="alert">
 					 <h5>Data Diri Lender</h5>
					</div>
					</div>
					</div>

						<div class="row">
							<div class="col-md-6 px-auto">
								<div class="form-group">
									<label for="form_lastname" class=" text-primary">Nama Lengkap *</label>
									<input id="form_lastname" type="text" name="l_name" class="form-control"
										placeholder="Masukkan nama lengkap *" required="required"
										data-error="Lastname is required.">
									<div class="help-block with-errors"></div>

								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3 px-auto">
								<div class="form-group">
									<label for="form_email" class=" text-primary" >Email *</label>
									<input id="form_email" type="email" name="email" class="form-control"
										placeholder="Masukkan email *" required="required"
										data-error="Valid email is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-md-3 px-auto">
								<div class="form-group">
									<label for="form_phone" class=" text-primary" >No. Telp *</label>
									<input id="form_phone" type="telephone" name="telephone" class="form-control"
										placeholder="Masukkan no. telp *" required="required"
										data-error="Valid email is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>
						

						<div class="row ">
							<div class="col-md-3 px-auto">
								<div class="form-group">
									<label for="form_pass"  class=" text-primary">Password</label>
									<input type="password" name="password" id="password" class="form-control"
										placeholder="Masukkan password">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-3 px-auto">
								<div class="form-group">
									<label for="form_re_pass" class=" text-primary">Ulangi Password</label>
									<input type="password" name="re_password" id="re_password" class="form-control"
										placeholder="Ulangi password">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3  px-auto">
								<div class="form-group">
									<label for="form_nik" class=" text-primary">No. KTP</label>
									<input name="NIK" id="nomornik" class="form-control"
										placeholder="Masukkan nomor KTP">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-2 pl-auto">
							<label for="form_uploadktp" class=" text-primary">Upload KTP</label>
							<div class="form-group">
								<button class="btn btn-primary btnfolder"><i class="fa fa-folder"></i></button>
								<button type="submit" id='btnup' class="btn btn-primary " >Upload</button>
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-2 pl-0">
							<label for="form_uploadktp" class=" text-primary">Upload Foto Diri</label>
							<div class="form-group">
								<button class="btn btn-primary btnfolder"><i class="fa fa-folder"></i></button>
								<button type="submit" id='btnup' class="btn btn-primary " >Upload</button>
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3 px-auto">
								<div class="form-group">
									<label for="form_tempatlahir" class=" text-primary">Tempat Lahir</label>
									<input name="tempatlahir" id="tempatlahir" class="form-control"
										placeholder="Masukkan tempat lahir">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-3 px-auto">
								<div class="form-group">
									<label for="form_tempatlahir" class="text-primary" >Tanggal Lahir</label>
									<input name="tanggallahir"  type="date" id="tanggallahir" class="form-control">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 px-auto">
								<div class="form-group">
									<label for="form_deskripsiperusahaan" class=" text-primary">Alamat Sesuai KTP *</label>
									<textarea id="form_deskripsiperusahaan" type="text" name="deskripsiperusahaan" class="form-control"
										placeholder="Masukkan alamat perusahaan *" required="required"
										data-error="Kategori bisnis belum diisi." rows="3"></textarea>
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-2 px-auto">
								<div class="form-group">
     						 		<label for="jenisperusahaan" class="text-primary">Provinsi</label>
     							 	<select class="form-control" id="provinsi">
									  <option value="" selected hidden>Pilih Provinsi</option>
	        							<option>Provinsi1</option>
        								<option>Provinsi2</option>
     							 	</select>
								</div>
							</div>
							<div class="col-md-2 px-auto">
								<div class="form-group">
     						 		<label for="jenisperusahaan" class="text-primary">Kota</label>
     							 	<select class="form-control" id="kota">
									  <option value="" selected hidden>Pilih Kota</option>
        								<option>Kota1</option>
        								<option>Kota2</option>
     							 	</select>
								</div>
							</div>
							<div class="col-md-2 px-auto">
								<div class="form-group">
     						 		<label for="jenisperusahaan" class="text-primary">Kecamatan</label>
     							 	<select class="form-control" id="kecamatan">
									  <option value="" selected hidden>Pilih Kecamatan</option>
        								<option>Kecamatan1</option>
        								<option>Kecamatan2</option>
     							 	</select>
								</div>
							</div>
						</div>

						<div class="row pb-5">
							<div class="col-md-3 px-auto">
								<div class="form-group">
     						 		<label for="jenisperusahaan" class="text-primary">Kelurahan</label>
     							 	<select class="form-control" id="kelurahan">
									  <option value="" selected hidden>Pilih Kelurahan</option>
        								<option >Provinsi1</option>
        								<option>Provinsi2</option>
     							 	</select>
								</div>
							</div>
							<div class="col-md-3  px-auto">
								<div class="form-group">
									<label for="form_npwp" class=" text-primary">Kode Pos</label>
									<input name="NPWP" id="kodepos" class="form-control"
										placeholder="Masukkan Kode Pos">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 px-auto">
								<div class="form-group">
									<label for="form_deskripsiperusahaan" class=" text-primary">Alamat Domisili *</label>
									<textarea id="form_deskripsiperusahaan" type="text" name="deskripsiperusahaan" class="form-control"
										placeholder="Masukkan alamat perusahaan *" required="required"
										data-error="Kategori bisnis belum diisi." rows="3"></textarea>
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-2 px-auto">
								<div class="form-group">
     						 		<label for="jenisperusahaan" class="text-primary">Provinsi</label>
     							 	<select class="form-control" id="provinsi">
									  <option value="" selected hidden>Pilih Provinsi</option>
	        							<option>Provinsi1</option>
        								<option>Provinsi2</option>
     							 	</select>
								</div>
							</div>
							<div class="col-md-2 px-auto">
								<div class="form-group">
     						 		<label for="jenisperusahaan" class="text-primary">Kota</label>
     							 	<select class="form-control" id="kota">
									  <option value="" selected hidden>Pilih Kota</option>
        								<option>Kota1</option>
        								<option>Kota2</option>
     							 	</select>
								</div>
							</div>
							<div class="col-md-2 px-auto">
								<div class="form-group">
     						 		<label for="jenisperusahaan" class="text-primary">Kecamatan</label>
     							 	<select class="form-control" id="kecamatan">
									  <option value="" selected hidden>Pilih Kecamatan</option>
        								<option>Kecamatan1</option>
        								<option>Kecamatan2</option>
     							 	</select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3 px-auto">
								<div class="form-group">
     						 		<label for="jenisperusahaan" class="text-primary">Kelurahan</label>
     							 	<select class="form-control" id="kelurahan">
									  <option value="" selected hidden>Pilih Kelurahan</option>
        								<option >Provinsi1</option>
        								<option>Provinsi2</option>
     							 	</select>
								</div>
							</div>
							<div class="col-md-3  px-auto">
								<div class="form-group">
									<label for="form_npwp" class=" text-primary">Kode Pos</label>
									<input name="NPWP" id="kodepos" class="form-control"
										placeholder="Masukkan Kode Pos">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>


						<div class="row">
							<div class="col-md-4  px-auto">
								<div class="form-group">
									<label for="form_nik" class=" text-primary">No. NPWP</label>
									<input name="NPWP" id="nomornpwp" class="form-control"
										placeholder="Masukkan nomor NPWP">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-2 px-auto">
							<label for="form_uploadktp" class=" text-primary">Upload NPWP</label>
							<div class="form-group">
								<button class="btn btn-primary btnfolder"><i class="fa fa-folder"></i></button>
								<button type="submit" id='btnup' class="btn btn-primary " >Upload</button>
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>

						<div class="row pt-5">
							<div class="col-md-8 px-auto">				
								<div class="alert alert-primary" role="alert">
 					 				<h5>Data Rekening Lender</h5>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-2 px-auto">
								<div class="form-group">
     						 		<label for="bank" class="text-primary">Nama Bank</label>
     							 	<select class="form-control" id="sel1">
									<option value="" selected hidden>Pilih Bank</option>
        							<option>1</option>
       								<option>2</option>
        							<option>3</option>
     							 	</select>
								</div>
							</div>
							<div class="col-md-4  px-auto">
								<div class="form-group">
									<label for="form_nik" class=" text-primary">No. Rekening</label>
									<input name="rekening" id="nomorrek" class="form-control"
										placeholder="Masukkan nomor rekening">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							</div>

							<div class="row">
							<div class="col-md-6 px-auto">
								<div class="form-group">
									<label for="form_lastname" class=" text-primary">Pemilik Rekening *</label>
									<input id="form_lastname" type="text" name="l_name" class="form-control"
										placeholder="Masukkan nama pemilik rekening *" required="required"
										data-error="Lastname is required.">
									<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>

							<div class="row">
							<div class="col-md-6 px-auto">
								<div class="form-group">
									<label for="form_lastname" class=" text-primary">Pekerjaan *</label>
									<input id="form_lastname" type="text" name="l_name" class="form-control"
										placeholder="Masukkan pekerjaan *" required="required"
										data-error="Lastname is required.">
									<div class="help-block with-errors"></div>

								</div>
							</div>


						</div>
						</div>	
						</div>
						</div>

						

						


					</section>

					<div class="col-md-12">
						<div class="form-group">
							<div class="g-recaptcha" data-sitekey="your site key captcha"></div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4 mx-5"></div>
						<div class="col-md-4 mx-5">
							<button type="submit" class="btn-lg btn-primary btn-send" id="register_button"
								name="register_button" value="Register">Register</button>
						</div>
						<div class="col-md-4 mx-5"></div>

					<div class="section"><br><br><br></div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
</div>
</div>