<h4>Edit Profile</h4>
<form action="{{route('updateProfileIndividu', $profile->id)}}" method="post">
{{csrf_field()}}
        Nama:<br>
        <input type="text" name="nama" value="{{ $profile->nama }}">
        <br>
        Alamat KTP:<br>
        <input type="text" name="alamat_ktp" value="{{$profile->alamat_ktp}}">
        <br>
        No hp:<br>
        <input type="int" name="telphone" value="{{$profile->telphone}}">
        <br>
        Email:<br>
        <input type="text" name="email" value="{{$profile->email}}">
        <br>
        Tanggal Lahir:<br>
        <input type="date" name="tanggal_lahir" value="{{$profile->tanggal_lahir}}">
        <br>
        Tempat Lahir:<br>
        <input type="text" name="tempat_lahir" value="{{ $profile->tempat_lahir}}">
        <br>
        No KTP:<br>
        <input type="text" name="no_ktp" value="{{ $profile->no_ktp}}">
        <br>
        Scan KTP:<br>
        <input type="text" name="scan_ktp" value="{{ $profile->scan_ktp}}">
        <br>
        NPWP:<br>
        <input type="int" name="npwp" value="{{ $profile->npwp}}">
        <br>
        Scan NPWP:<br>
        <input type="text" name="scan_npwp" value="{{ $profile->scan_npwp}}">
        <br>
        Alamat Domisili:<br>
        <input type="text" name="alamat_domisili" value="{{ $profile->alamat_domisili}}">
        <br>
        Nama Bank:<br>
        <input type="text" name="nama_bank" value="{{ $profile->nama_bank}}">
        <br>
        No Rekening:<br>
        <input type="int" name="nomor_rekening" value="{{ $profile->nomor_rekening}}">
        <br>
        Pemilik Rekening:<br>
        <input type="text" name="pemilik_rekening" value="{{ $profile->pemilik_rekening}}">
        <br>
        Pekerjaan:<br>
        <input type="text" name="pekerjaan" value="{{ $profile->pekerjaan}}">
        <br>      
  <input type="submit" value="Submit">
</form> 