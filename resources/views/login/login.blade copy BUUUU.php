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
				<div class="form-group">
					<label>Nama</label><br>
					<input type="text" class="form-control" placeholder="Nama Lengkap">
					<label>Alamat</label><br>
					<textarea type="text" class="form-control" cols="40" rows="5" placeholder="Alamat"></textarea>
					<label>Tempat Lahir</label><br>
					<input type="text" class="form-control" placeholder="Tempat Lahir">
					<label>Tanggal Lahir</label><br>
					<input type="date" class="form-control" placeholder="Tanggal Lahir"><br>
					<button class="btn btn-primary btn-rounded" type="submit">Simpan</button>
                </div>
                <div class="col-md-6"></div>	
			</form>
		</div>	
	</div>	
</div>