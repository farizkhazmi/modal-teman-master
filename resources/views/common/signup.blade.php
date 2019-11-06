@extends('common.master')
@section('konten')
<div class="container pt-auto">
<h2 class="page-header text-primary text-center animated bounceInUp"><br><br><br><br>Daftar</h2>
	 	<div class="row">
			<div class="col-md-6">
				<div class="img-wrapper">
				<img class="img-responsive center-block animated bounceInLeft" src="assets/img/scenery/signup1.png">
					<div class="img-overlay">
					<a href="#lenderModal" class="btn btn-success btn-lg" data-toggle="modal"><h3>Berikan Pinjaman</h3></a>
					</div>
				</div>	
			</div>
		
			<div class="col-md-6">
				<div class="img-wrapper">
				<img class="img-responsive center-block animated bounceInRight" src="assets/img/scenery/signup1.png">
					<div class="img-overlay">
					<a href="#lenderModal" class="btn btn-success btn-lg" data-toggle="modal"><h3>Ajukan Pinjaman</h3></a>
					</div>
				</div>	
			</div>
		</div>	
</div>

<!-- Modal HTML -->
<div id="lenderModal" class="modal fade">
	
	<br>
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
			<h4 class="modal-title">Masuk</h4>
				</div>	
			<div class="modal-body">
			<div class="row">
			<form method="POST" action="{{ route('register') }}">
                        @csrf
							<div class="col-md-12 px-auto">
								<div class="form-group">
									<label for="form_lastname" class=" text-primary">Nama Lengkap *</label>
									<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 px-auto">
								<div class="form-group">
									<label for="form_email" class=" text-primary" >Email *</label>
									<input id="form_email" type="email" name="email" class="form-control"
										placeholder="Masukkan email *" required="required"
										data-error="Valid email is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-6 px-auto">
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
							<div class="col-md-12 px-auto">
								<div class="form-group">
									<label for="form_pass"  class=" text-primary">Password</label>
									<input type="password" name="password" id="password" class="form-control"
										placeholder="Masukkan password">
									<div class="help-block with-errors"></div>
								</div>
							</div>		
						</div>
						<div class="row">
							<div class="col-md-12 px-auto">
								<div class="form-group">
									<label for="form_re_pass" class=" text-primary">Ulangi Password</label>
									<input type="password" name="re_password" id="re_password" class="form-control"
										placeholder="Ulangi password">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 px-auto">
								<div class="form-group form-check">
   								<input type="checkbox" class="form-check-input" id="exampleCheck1">
    							<label class="form-check-label" for="exampleCheck1">I have readddd</label>
								  </div>
							</div>
						</div>
							<div class="row">
								<div class="col text-center">
									<button type="submit" class="btn-lg btn-success btn-send" id="register_button"
									name="register_button" value="Register">Register</button>
								</div>
							</div>	  
						</div>
			</div>
			
		</div>
	</div>
</div>     

<style type="text/css">
    body {
		font-family: 'Varela Round', sans-serif;
	}
	.text-primary {
		font-size: 14px;
	}
	.modal-login {
		color: #636363;
		width: 400px;
	}
	.modal-login .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
		font-size: 12px;
	}
	.modal-login .modal-header {
		border-bottom: none;
		position: relative;
		justify-content: center;
	}
	.modal-login h4 {
		text-align: center;
		font-size: 26px;
	}
	.modal-login  .form-group {
		position: relative;
	}
	.modal-login i {
		position: absolute;
		left: 13px;
		top: 11px;
		font-size: 12px;
	}
	.modal-login .form-control:focus {
		border-color: #00ce81;
	}
	.modal-login .form-control, .modal-login .btn {
		min-height: 40px;
		border-radius: 3px; 
	}
	.modal-login .hint-text {
		text-align: center;
		padding-top: 10px;
	}
	.modal-login .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}
	.modal-login .btn {
		border: none;
		line-height: normal;
	}
	.modal-login .btn:hover, .modal-login .btn:focus {
		background: #00bf78;
	}
	.modal-login .modal-footer {
		background: #ecf0f1;
		border-color: #dee4e7;
		text-align: center;
		margin: 0 -20px -20px;
		border-radius: 5px;
		font-size: 13px;
		justify-content: center;
	}
	.modal-login .modal-footer a {
		color: #999;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
	</style>
	
	
<br>
<br>
<br>