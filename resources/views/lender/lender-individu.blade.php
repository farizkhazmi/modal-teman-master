<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style type="text/css">
    #tbl{margin:5% auto; width:50%;height:300px;font-size:12px;}
    body{text-align:center}
    #th{color:cyan}
</style>
<body>
<h4>List Lender Individu</h4>
<?php $no= 1; ?>
<table id="tbl" class="table table-bordered">
<thead>
    <tr>
    <!-- Tampilan di table -->
        <th>No </th>
        <th>ID</th>
        <th>Nama </th>
        <th>Alamat KTP</th>
        <th>Telphone</th>
        <th>Email</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>No KTP</th>
        <th>Scan KTP</th>
        <th>Foto Diri</th>
        <th>NPWP</th>
        <th>Scan NPWP</th>
        <th>Alamat Domisili</th>
        <th>Nama Bank</th>
        <th>No Rekening</th>
        <th>Pemilik Rekening</th>
        <th>Pekerjaan</th>
        <th>Edit</th>
    </tr>    
</thead>
<tbody>
                <!-- looping dari controller -->
@foreach($lender_individu as $list)
    <tr>
        <td>{{ $no ++ }}</td>
        <td>{{ $list->id}}</td>
        <td>{{ $list->nama }}</td>
        <td>{{ $list->alamat_ktp }}</td>
        <td>{{ $list->telphone}}</td>
        <td>{{ $list->email}}</td>
        <td>{{ $list->tempat_lahir}}</td>
        <td>{{ $list->tanggal_lahir}}</td>
        <td>{{ $list->no_ktp}}</td>
        <td>{{ $list->scan_ktp}}</td>
        <td>{{ $list->alamat_domisili}}</td>
        <td>{{ $list->nama_bank}}</td>
        <td>{{ $list->nomor_rekening}}</td>
        <td>{{ $list->pemilik_rekening}}</td>
        <td>{{ $list->pekerjaan}}</td>
        <td>
            <a href="{{ route('profileIndividu', $list->id ) }}">Show</a>
            <a href="{{ route('editProfileIndividu', $list->id ) }}">Edit</a>
        <!--
            <button class="btn-xs btn-warning"
                data-toggle="modal"
                data-target="#formEditProfile"
                data-id="{{ $list->id }}">Edit</button>
            -->    
        </td>
    </tr>    
@endforeach
</tbody>
</table>
<!--
<div class="modal" id="formEditProfile">
    <div class="modal-content">
        <div class="header">
            <h5></h5>
        </div>
        <div class="modal-body">
            <form class="form-group" action="" method="post">
                <label>Nama<label>
                <input type="text" class="input-sm" name="nama">
                <label>Alamat</label>
                <input type="text" class="input-sm" name="alamat">
            </form>
        </div>
    </div>
</div>
-->
</body>