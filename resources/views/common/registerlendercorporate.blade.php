@extends('login.masterlogin')
@section('konten')

<style>
	
	body, form {
		height: 100%;
		margin-left: 6%;
		margin-top: 10%
	}

	h2 {
		padding-left: 35px
	}
	#btnup{
		align-items:left!important
	}
	.formA {
		margin-left:25px;
	
	}
</style>

<div class="panel-body">
	
	<div class="row">

		<div class="col-md-12">
			<div class="alert alert-danger" role="alert" id="error" style="display: none;">...</div>
			<div class="alert alert-success" role="alert" id="success" style="display: none;">...</div>
			<form id="register-form" method="post" role="form">
				<div class="messages"></div>
				<div class="controls">

				<section class="mx-5">
					<div class="row">
					<div class="col-md-8 ">				
					<div class="alert alert-primary" role="alert">
 					 <h5>Data Diri Lender</h5>
					</div>
					</div>
					</div>

	<form>
		<!-- ISI DATA DIRI -->
		<div class="formA">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="nama" class=" text-primary">Nama Lengkap *</label>
									<input id="nama" type="text" name="nama" class="form-control"
										placeholder="Masukkan nama lengkap *" required
										data-error="Masukkan nama lengkap.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="email" class="text-primary" >Email *</label>
									<input id="email" type="email" name="email" class="form-control"
										placeholder="Masukkan email *" required
										data-error="Valid email is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-md-3 ">
								<div class="form-group">
									<label for="telp" class="text-primary" >No. Telp *</label>
									<input id="telp" type="telephone" name="telp" class="form-control"
										placeholder="Masukkan no. telp *" required
										data-error="Valid email is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>
						

						<div class="row ">
							<div class="col-md-3 ">
								<div class="form-group">
									<label for="form_pass"  class="text-primary">Password</label>
									<input type="password" name="password" id="password" class="form-control"
										placeholder="Masukkan password">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-3 ">
								<div class="form-group">
									<label for="form_re_pass" class="text-primary">Ulangi Password</label>
									<input type="password" name="re_password" id="re_password" class="form-control"
										placeholder="Ulangi password">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6  ">
								<div class="form-group">
									<label for="no_ktp" class=" text-primary">No. KTP</label>
									<input name="no_ktp" id="no_ktp" class="form-control"
										placeholder="Masukkan nomor KTP">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>

						<div class="row pb-4">
							<div class="col-md-3">
							<label for="scan_ktp" class=" text-primary">Upload KTP</label>
							
    							<input type="file" name="scan_ktp" class="form-control-file" id="scan_ktp">
								
  							</div>

							  <div class="col-md-3">
							<label for="tempat_lahir" class=" text-primary">Upload Foto Diri</label>
						
    							<input type="file" name="foto_diri" class="form-control-file" id="foto_diri">
  							</div>
						</div>
					
						<div class="row">
							<div class="col-md-3 ">
								<div class="form-group">
									<label for="tempat_lahir" class=" text-primary">Tempat Lahir</label>
									<input name="tempat_lahir" id="tempat_lahir" class="form-control"
										placeholder="Masukkan tempat lahir">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-3 ">
								<div class="form-group">
									<label for="tanggal_lahir" class="text-primary" >Tanggal Lahir</label>
									<input name="tanggal_lahir"  type="date" id="tanggal_lahir" class="form-control">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 ">
								<div class="form-group">
									<label for="alamat" class=" text-primary">Alamat *</label>
									<textarea id="alamat" type="text" name="alamat" class="form-control"
										placeholder="Masukkan alamat sesuai KTP *" required
										data-error="Alamat belum diisi." rows="3"></textarea>
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-2 ">
								<div class="form-group">
     						 		<label for="provinsi_ktp" class="text-primary">Provinsi</label>
     							 	<select class="form-control" id="provinsi_ktp" name="provinsi">
									  <option value="" selected hidden>Pilih Provinsi</option>
	        							<option>Provinsi1</option>
        								<option>Provinsi2</option>
     							 	</select>
								</div>
							</div>
							<div class="col-md-2 ">
								<div class="form-group">
     						 		<label for="kota" class="text-primary">Kota</label>
     							 	<select class="form-control" id="kota" name="kota">
									  <option value="" selected hidden>Pilih Kota</option>
        								<option>Kota1</option>
        								<option>Kota2</option>
     							 	</select>
								</div>
							</div>
							<div class="col-md-2 ">
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
							<div class="col-md-3 ">
								<div class="form-group">
     						 		<label for="jenisperusahaan" class="text-primary">Kelurahan</label>
     							 	<select class="form-control" id="kelurahan">
									  <option value="" selected hidden>Pilih Kelurahan</option>
        								<option >Provinsi1</option>
        								<option>Provinsi2</option>
     							 	</select>
								</div>
							</div>
							<div class="col-md-3  ">
								<div class="form-group">
									<label for="form_npwp" class=" text-primary">Kode Pos</label>
									<input name="NPWP" id="kodepos" class="form-control"
										placeholder="Masukkan Kode Pos">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>
</div>
<!-- END OF ISI DATA DIRI -->


						<div class="row pt-5">
							<div class="col-md-8 ">				
							<div class="alert alert-primary" role="alert">
 							 <h5>Data Perusahaan</h5>
						</div>
						</div>
						</div>

<!-- ISI DATA PERUSAHAAN -->
<div class="formA">

						<div class="row">
							<div class="col-md-4 ">
								<div class="form-group">
     						 		<label for="tipe_perusahaan" class="text-primary">Jenis Perusahaan</label>
     							 	<select class="form-control" id="tipe_perusahaan" name="tipe_perusahaan">
									<option value="" selected hidden>Pilih Jenis Perusahaan</option>
									<option>Perseroan Terbatas (PT)</option>
        							<option>Persekutuan Komanditer (CV)</option>
       								<option>Usaha Dagang</option>
        							<option>Individual</option>
     							 	</select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 ">
								<div class="form-group">
									<label for="nama_perusahaan" class=" text-primary">Nama Perusahaan *</label>
									<input id="nama_perusahaan" type="text" name="nama_perusahaan" class="form-control"
										placeholder="Masukkan nama perusahaan *" required
										data-error="Nama perusahaan belum diisi.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3 ">
								<div class="form-group">
									<label for="kategori_bisnis" class=" text-primary">Kategori Bisnis *</label>
									<input id="kategori_bisnis" type="text" name="kategori_bisnis" class="form-control"
										placeholder="Masukkan kategori bisnis *" required
										data-error="Kategori bisnis belum diisi.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-3 ">
								<div class="form-group">
									<label for="jabatan" class=" text-primary">Jabatan *</label>
									<input id="jabatan" type="text" name="jabatan" class="form-control"
										placeholder="Masukkan jabatan *" required
										data-error="Jabatan belum diisi.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 ">
								<div class="form-group">
									<label for="alamat_perusahaan" class=" text-primary">Alamat Perusahaan *</label>
									<textarea id="alamat_perusahaan" type="text" name="alamat_perusahaan" class="form-control"
										placeholder="Masukkan alamat perusahaan *" required
										data-error="Alamat perusahaan belum diisi." rows="3"></textarea>
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-2 ">
								<div class="form-group">
     						 		<label for="jenisperusahaan" class="text-primary">Provinsi</label>
     							 	<select class="form-control" id="provinsi">
									  <option value="" selected hidden>Pilih Provinsi</option>
	        							<option>Provinsi1</option>
        								<option>Provinsi2</option>
     							 	</select>
								</div>
							</div>
							<div class="col-md-2 ">
								<div class="form-group">
     						 		<label for="jenisperusahaan" class="text-primary">Kota</label>
     							 	<select class="form-control" id="kota">
									  <option value="" selected hidden>Pilih Kota</option>
        								<option>Kota1</option>
        								<option>Kota2</option>
     							 	</select>
								</div>
							</div>
							<div class="col-md-2 ">
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
							<div class="col-md-3 ">
								<div class="form-group">
     						 		<label for="jenisperusahaan" class="text-primary">Kelurahan</label>
     							 	<select class="form-control" id="kelurahan">
									  <option value="" selected hidden>Pilih Kelurahan</option>
        								<option >Provinsi1</option>
        								<option>Provinsi2</option>
     							 	</select>
								</div>
							</div>
							<div class="col-md-3  ">
								<div class="form-group">
									<label for="form_npwp" class=" text-primary">Kode Pos</label>
									<input name="NPWP" id="kodepos" class="form-control"
										placeholder="Masukkan Kode Pos">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>


						<div class="row">
							<div class="col-md-4  ">
								<div class="form-group">
									<label for="npwp_perusahaan" class=" text-primary">No. NPWP</label>
									<input name="npwp_perusahaan" id="npwp_perusahaan" class="form-control"
										placeholder="Masukkan nomor NPWP">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-3 ">
								<div class="form-group">
									<label class=" text-primary">Upload NPWP</label>
									<input type="file" name="scan_npwp_perusahaan" class="form-control-file"
									id="scan_npwp_perusahaan">								
							 	 </div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4 ">
								<div class="form-group">
									<label for="no_akta_pendirian" class="text-primary" >Tanggal Pendirian Perusahaan</label>
									<input name="no_akta_pendirian" type="date" id="no_akta_pendirian" class="form-control">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-md-3 ">
								<div class="form-group">
									<label class=" text-primary">Upload Akta Pendirian</label>
									<input type="file" name="scan_akta_pendirian" class="form-control-file"
									id="scan_akta_pendirian">								
							 	 </div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-4 ">
								<div class="form-group">
									<label for="siup" class=" text-primary">No. SIUP *</label>
									<input id="siup" type="text" name="siup" class="form-control"
										placeholder="Masukkan kategori bisnis *" required
										data-error="Nomor SIUP belum diisi.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-3 ">
								<div class="form-group">
									<label class=" text-primary">Upload SIUP</label>
									<input type="file" name="scan_siup" class="form-control-file"
									id="scan_siup">								
							 	 </div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4 ">
								<div class="form-group">
									<label for="tdp" class=" text-primary">No. TDP *</label>
									<input id="tdp" type="text" name="tdp" class="form-control"
										placeholder="Masukkan nomor TDP *" required
										data-error="Nomor tdp belum diisi.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-3 ">
								<div class="form-group">
									<label class=" text-primary">Upload Scan TDP</label>
									<input type="file" name="scan_tdp" class="form-control-file"
									id="scan_tdp">								
							 	 </div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 ">
								<div class="form-group">
									<label for="deskripsi_perusahaan" class=" text-primary">Deskripsi Perusahaan *</label>
									<textarea id="deskripsi_perusahaan" type="text" name="deskripsi_perusahaan" class="form-control"
										placeholder="Masukkan deskripsi perusahaan *" required
										data-error="Kategori bisnis belum diisi." rows="3"></textarea>
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3 ">
								<div class="form-group">
									<label for="telp_perusahaan" class=" text-primary">No.Telp Perusahaan *</label>
									<input id="telp_perusahaan" type="text" name="telp_perusahaan" class="form-control"
										placeholder="Masukkan no. telp perusahaan *" required
										data-error="No. telp perusahaan belum diisi.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-3 ">
								<div class="form-group">
									<label for="website_url" class=" text-primary">Website *</label>
									<input id="website_url" type="text" name="website_url" class="form-control"
										placeholder="Masukkan alamat website perusahaan *" required
										data-error="Website perusahaan belum diisi.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>
</div>
<!-- END OF ISI DATA PERUSAHAAN-->


					
						<div class="row pt-5">
							<div class="col-md-8 ">				
							<div class="alert alert-primary" role="alert">
 							 <h5>Data Rekening Lender</h5>
						</div>
					</div>
					</div>

<!-- ISI DATA REKENING -->
<div class="formA">
						<div class="row">
							<div class="col-md-2 ">
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
							<div class="col-md-4  ">
								<div class="form-group">
									<label for="nomor_rekening" class=" text-primary">No. Rekening</label>
									<input name="nomor_rekening" id="nomor_rekening" class="form-control"
										placeholder="Masukkan nomor rekening">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							</div>

							<div class="row">
							<div class="col-md-6 ">
								<div class="form-group">
									<label for="pemilik_rekening" class=" text-primary">Pemilik Rekening *</label>
									<input id="pemilik_rekening" type="text" name="pemilik_rekening" class="form-control"
										placeholder="Masukkan nama pemilik rekening *" required
										data-error="Nama pemilik rekening belum diisi.">
									<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
						</div>
						</div>	
						</div>
						</div>
</div>
<!-- END OF DATA REKENING -->
	</form>
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

