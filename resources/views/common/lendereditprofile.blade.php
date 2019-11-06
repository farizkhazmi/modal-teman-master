@extends('login.masterlogin')
@section('konten')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <div class="parallax"></div> -->
<style>
	
	body,
	form {
		height: 100%;
		margin: 6%
	}

	body,
	html {
		margin-top: 10%
	}

	h2 {
		padding-left: 80px
	}

	label {
		padding-left: 10px
	}

	.form-group {
		padding-left: 30px
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
					
					<div class="row pb-5">
							<div class="col-md-12 px-auto">
								<div class="form-group">
     						 		<label for="jenisperusahaan" class="text-primary">Jenis Pendana</label>
     							 	<select class="form-control" id="lendertype">
									  <option value="" selected hidden>Pilih Jenis Pendana</option>
        								<option >Individual</option>
        								<option>Corporate</option>
     							 	</select>
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