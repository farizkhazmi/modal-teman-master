<h4>Edit Profile</h4>
<form action="{{route('updateprofilecorp', $profilecorp->id)}}" method="post">
{{csrf_field()}}
        Nama:<br>
        <input type="text" name="nama" value="{{ $profilecorp->nama }}">
        <br>
        Alamat KTP:<br>
        <input type="text" name="alamat_ktp" value="{{$profilecorp->alamat_ktp}}">
        <br>
        No hp:<br>
        <input type="int" name="telphone" value="{{$profilecorp->telphone}}">
        <br>
        Email:<br>
        <input type="text" name="email" value="{{$profilecorp->email}}">
        <br>
        Tanggal Lahir:<br>
        <input type="date" name="tanggal_lahir" value="{{$profilecorp->tanggal_lahir}}">
        <br>
        Tempat Lahir:<br>
        <input type="text" name="tempat_lahir" value="{{ $profilecorp->tempat_lahir}}">
        <br>
        No KTP:<br>
        <input type="text" name="no_ktp" value="{{ $profilecorp->no_ktp}}">
        <br>
        Scan KTP:<br>
        <input type="text" name="scan_ktp" value="{{ $profilecorp->scan_ktp}}">
        <br>
        foto_diri:<br>
        <input type="text" name="foto_diri" value="{{ $profilecorp->foto_diri}}">
        <br>
        kategori_bisnis:<br>
        <input type="text" name="kategori_bisnis" value="{{ $profilecorp->kategori_bisnis}}">
        <br>
        jabatan:<br>
        <input type="text" name="jabatan" value="{{ $profilecorp->jabatan}}">
        <br>
        tahun_pendirian:<br>
        <input type="text" name="tahun_pendirian" value="{{ $profilecorp->tahun_pendirian}}">
        <br>
        deskripsi_perusahaan:<br>
        <input type="int" name="deskripsi_perusahaan" value="{{ $profilecorp->deskripsi_perusahaan}}">
        <br>
        alamat_perusahaan:<br>
        <input type="text" name="alamat_perusahaan" value="{{ $profilecorp->alamat_perusahaan}}">
        <br>
        telphone_perusahaan:<br>
        <input type="text" name="telphone_perusahaan" value="{{ $profilecorp->telphone_perusahaan}}">
        <br>
        web_url_perusahaan:<br>
        <input type="text" name="web_url_perusahaan" value="{{ $profilecorp->web_url_perusahaan}}">
        <br>
        tipe_perusahaan:<br>
        <input type="text" name="tipe_perusahaan" value="{{ $profilecorp->tipe_perusahaan}}">
        <br>      
        nama_bank:<br>
        <input type="text" name="nama_bank" value="{{ $profilecorp->nama_bank}}">
        <br>
        nomor_rekening:<br>
        <input type="text" name="nomor_rekening" value="{{ $profilecorp->nomor_rekening}}">
        <br>
        pemilik_rekening:<br>
        <input type="text" name="pemilik_rekening" value="{{ $profilecorp->pemilik_rekening}}">
        <br>
        nomor_akta_pendirian:<br>
        <input type="text" name="nomor_akta_pendirian" value="{{ $profilecorp->nomor_akta_pendirian}}">
        <br>
        scan_akta_pendirian:<br>
        <input type="text" name="scan_akta_pendirian" value="{{ $profilecorp->scan_akta_pendirian}}">
        <br>
        siup:<br>
        <input type="text" name="siup" value="{{ $profilecorp->siup}}">
        <br>
        scan_siup:<br>
        <input type="text" name="scan_siup" value="{{ $profilecorp->scan_siup}}">
        <br>
        tdp:<br>
        <input type="text" name="tdp" value="{{ $profilecorp->tdp}}">
        <br>
        scan_tdp:<br>
        <input type="text" name="scan_tdp" value="{{ $profilecorp->scan_tdp}}">
        <br>
        no_menkumham:<br>
        <input type="text" name="no_menkumham" value="{{ $profilecorp->no_menkumham}}">
        <br>
  <input type="submit" value="Submit">
</form>