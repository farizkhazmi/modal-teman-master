@extends('login.masterlogin')
@section('konten')
<br>
<br>
<br>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-6">
		<h2 class="page-header text-primary">Login</h2>
			<form>
				<div class="form-group animated bounceInLeft">
					<label>Email</label><br>
					<input type="text" class="form-control" placeholder="Email">
					<br>
					<label>Password</label><br>
					<input type="password" class="form-control" placeholder="Password">
					<br>
					<p><a href="#" class="text-info">Lupa Password</a></p>
					<br>
					<button class="btn btn-primary btn-rounded" type="submit">Login</button>
			</div>	
			</form>
		</div>
		<div class="col-md-6">
				<img class="img-thumbnail float-right" src="assets/img/scenery/rightsidebanner.png"> 
				</div>
		<div class="row"></div>	
	</div>	
</div>