<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LenderController extends Controller
{

    public function listProfileIndividu()
    {
        //query database 
        $lender_individu = DB::table('lender_individu')->get();

        return view('lender.lender-individu')->with(compact('lender_individu'));
    }

    public function profileIndividu($id)
    {
        $profile = DB::table('lender_individu')->where('id',$id)->first();

        return view('lender.profile-lender-individu')->with(compact('profile'));       
    } 

    public function editIndividu($id)
    {
        $profile = DB::table('lender_individu')->where('id',$id)->first();

        return view('lender.edit-profile-lender-individu')->with(compact('profile'));
    }
    public function updateIndividu(Request $request, $id)
    {
        //tambah sesuai db
        $nama            =$request->input('nama');
        $alamat          =$request->input('alamat_ktp');
        $telphone        =$request->input('telphone');
        $email           =$request->input('email');
        $tempatlahir     =$request->input('tempat_lahir');
        $tanggallahir    =$request->input('tanggal_lahir');
        $noktp           =$request->input('no_ktp');
        $scanktp         =$request->input('scan_ktp');
        $foto_diri       =$request->input('foto_diri');
        $npwp            =$request->input('npwp');
        $scannpwp        =$request->input('scan_npwp');
        $alamatdomisili  =$request->input('alamat_domisili');
        $namabank        =$request->input('nama_bank');
        $norek           =$request->input('nomor_rekening');
        $pemilikrek      =$request->input('pemilik_rekening');
        $pekerjaan       =$request->input('pekerjaan'); 

        $data = ([
            'nama'              =>$nama,
            'alamat_ktp'        =>$alamat,
            'telphone'          =>$telphone,
            'email'             =>$email,         
            'tempat_lahir'      =>$tempatlahir,   
            'tanggal_lahir'     =>$tanggallahir, 
            'no_ktp'            =>$noktp,         
            'scan_ktp'          =>$scanktp,      
            'foto_diri'         =>$foto_diri,     
            'npwp'              =>$npwp,         
            'scan_npwp'         =>$scannpwp,      
            'alamat_domisili'   =>$alamatdomisili,
            'nama_bank'         =>$namabank,      
            'nomor_rekening'    =>$norek,         
            'pemilik_rekening'  =>$pemilikrek,    
            'pekerjaan'         =>$pekerjaan
                ]);
        $update     = DB::table('lender_individu')->where('id',$id)->update($data);
        return redirect()->route('listprofile');
    }

    public function listProfileCorp()
    {
            //query database 
        $lender_corp = DB::table('lender_corp')->get();
    
        return view('lender.lender-corp')->with(compact('lender_corp'));
    }
      
    public function profilecorp($id)
    {
        $profilecorp = DB::table('lender_corp')->get();
        dd($profilecorp);
        return view('lender.profile-lender-corp')->with(compact('profilecorp'));
    }
    public function editcorp($id)
    {       
        $profilecorp = DB::table('lender_corp')->where('id', $id)->first();

        return view('lender.edit-profile-lender-corp')->with(compact('profilecorp'));        
    }
    
    public function updatecorp(Request $request, $id)
    {
        //tambah sesuai db
        $nama                            =$request->input('nama');
        $alamat                          =$request->input('alamat_ktp');
        $telphone                        =$request->input('telphone');
        $email                           =$request->input('email');
        $tempatlahir                     =$request->input('tempat_lahir');
        $tanggallahir                    =$request->input('tanggal_lahir');
        $noktp                           =$request->input('no_ktp');
        $scanktp                         =$request->input('scan_ktp');
        $foto_diri                       =$request->input('foto_diri');
        $kategori_bisnis                 =$request->input('kategori_bisnis');
        $jabatan                         =$request->input('jabatan');
        $tahun_pendirian                 =$request->input('tahun_pendirian');
        $deskripsi_perusahaan            =$request->input('deskripsi_perusahaan');
        $alamat_perusahaan               =$request->input('alamat_perusahaan');
        $telphone_perusahaan             =$request->input('telphone_perusahaan');
        $web_url_perusahaan              =$request->input('web_url_perusahaan');
        $tipe_perusahaan                 =$request->input('tipe_perusahaan');
        $nama_bank                       =$request->input('nama_bank');
        $nomor_rekening                  =$request->input('nomor_rekening'); 
        $pemilik_rekening                =$request->input('pemilik_rekening');
        $nomor_akta_pendirian            =$request->input('nomor_akta_pendirian');
        $scan_akta_pendirian             =$request->input('scan_akta_pendirian');
        $siup                            =$request->input('siup');
        $scan_siup                       =$request->input('scan_siup');
        $tdp                             =$request->input('tdp');
        $scan_tdp                        =$request->input('scan_tdp');
        $no_menkumham                    =$request->input('no_menkumham');

        $data =([

            'nama'                          =>$nama,
            'alamat_ktp'                    =>$alamat,
            'telphone'                      =>$telphone,
            'email'                         =>$email,         
            'tempat_lahir'                  =>$tempatlahir,   
            'tanggal_lahir'                 =>$tanggallahir, 
            'no_ktp'                        =>$noktp,         
            'scan_ktp'                      =>$scanktp,      
            'foto_diri'                     =>$foto_diri,     
            'kategori_bisnis'               =>$kategori_bisnis,
            'jabatan'                       =>$jabatan,
            'tahun_pendirian'               =>$tahun_pendirian,
            'deskripsi_perusahaan'          =>$deskripsi_perusahaan,
            'alamat_perusahaan'             =>$alamat_perusahaan,
            'telphone_perusahaan'           =>$telphone_perusahaan,         
            'web_url_perusahaan'            =>$web_url_perusahaan,
            'tipe_perusahaan'               =>$tipe_perusahaan,
            'nama_bank'                     =>$nama_bank,      
            'nomor_rekening'                =>$nomor_rekening,
            'pemilik_rekening'              =>$pemilik_rekening,      
            'nomor_akta_pendirian'          =>$nomor_akta_pendirian,         
            'scan_akta_pendirian'           =>$scan_akta_pendirian,    
            'siup'                          =>$siup,
            'scan_siup'                     =>$scan_siup,
            'tdp'                           =>$tdp,
            'scan_tdp'                      =>$scan_tdp,
            'no_menkumham'                  =>$no_menkumham,

                ]);

        $updatecorp = DB::table('lender_corp')->where('id',$id)->update($data);
        
        return redirect()->route('listprofilecorp');
    }
    

}


