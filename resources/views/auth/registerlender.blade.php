@extends('login.masterlogin')
@section('konten')
<style type="text/css" >
	#btnup{
		align-items:left!important
	}
	.btnfolder {}
  .px-auto{margin-left:-5%;}
  .text-dark{color:cyan; border:1px solid red;}
}
</style>
<h2 class="page-header text-primary mt-5">Lengkapi Data</h2><br><br>

<div class="panel-body">	
	<div class="row pl-10 pr-10">
		<div class="col-lg-12 pl-2 pr-2">
			<div class="alert alert-danger" role="alert" id="error" style="display: none;">...</div>
			<div class="alert alert-success" role="alert" id="success" style="display: none;">...</div>

			<form id="register-form" method="post" role="form" action="{{ route('register') }}">
				<div class="messages"></div>
				<div class="controls">

					<section class="mx-5">
					<label class="text-dark" style="font-size:20px">Data Diri</label><br><br>
						<div class="row">
							<div class="col-md-6 px-auto">
								<div class="form-group">
									<label for="form_lastname" class=" text-primary">Nama Lengkap *</label>
									<input id="form_lastname" type="text" name="l_name" class="form-control"
										placeholder="Masukkan nama lengkap *" r
										data-error="Lastname is r.">
									<div class="help-block with-errors"></div>

								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3 px-auto">
								<div class="form-group">
									<label for="form_email" class=" text-primary" >Email *</label>
									<input id="form_email" type="email" name="email" class="form-control"
										placeholder="Masukkan email *" r
										data-error="Valid email is r.">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-md-3 px-auto">
								<div class="form-group">
									<label for="form_phone" class=" text-primary" >No. Telp *</label>
									<input id="form_phone" type="telephone" name="telephone" class="form-control"
										placeholder="Masukkan no. telp *" r
										data-error="Valid email is r.">
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
									<input name="NIK" id="nomornik" class="form-control" placeholder="Masukkan nomor KTP">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="col-md-2 pl-auto">
								<label for="form_uploadktp" class=" text-primary">Upload KTP</label>
								<div class="form-group">
									<input type="file" ><i class="fa fa-folder"></i>
									<button type="button" id='btnup' class="btn btn-primary " >Upload</button>
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
						</div>

						<div class="row">
						<!-- ALAMAT -->
						</div>

						<div class="row">
							<div class="col-md-4  px-auto">
								<div class="form-group">
									<label for="form_nik" class=" text-primary">No. NPWP</label>
									<input name="NPWP" id="nomornpwp" class="form-control" placeholder="Masukkan nomor NPWP">		
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-2 px-auto">
							<label for="form_uploadktp" class=" text-primary">Upload NPWP</label>
							<div class="form-group">
								<button type="file" class="btn btn-primary btnfolder"><i class="fa fa-folder"></i></button>
								<button type="submit" id='btnup' class="btn btn-primary " >Upload</button>
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-2 px-auto">
								<div class="form-group">
     						 		<label for="bank" class="text-primary">Nama Bank</label>
     							 	<select class="form-control" id="sel1">
        							<option>Bank Titil</option>
        							<option>2</option>
       								<option>3</option>
        							<option>4</option>
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
										placeholder="Masukkan nama pemilik rekening *" r="r"
										data-error="Lastname is r.">
									<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>

							<div class="row">
							<div class="col-md-6 px-auto">
								<div class="form-group">
									<label for="form_lastname" class=" text-primary">Pekerjaan *</label>
									<input id="form_lastname" type="text" name="l_name" class="form-control"
										placeholder="Masukkan pekerjaan *" r="r"
										data-error="Lastname is r.">
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
							<button type="submit" class="btn-lg btn-success btn-send" id="register_button"
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