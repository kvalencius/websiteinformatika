<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    //index view
    public function index()
    {
        //seelect * from pegawai buat ambil data dari table pegawai
        $pegawai =DB::table('pegawai')->get();

        return view('admin.pegawai.index', ['pegawai' => $pegawai]);
    }

    //add 
    public function tambah(){
        //memanggil view tambah
        return view('admin.pegawai.tambah');
    }


    //save
    public function store(Request $request)
    {
        // Validasi dan simpan data pegawai
        //INSERT INTO pegawai (pegawai_nama, pegawai_jabatan, pegawai_umur, pegawai_alamat) 
        //VALUES ('nilai_nama', 'nilai_jabatan', 'nilai_umur', 'nilai_alamat');
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->Nama,
            'pegawai_jabatan' => $request->Jabatan,
            'pegawai_umur' => $request->Umur,
            'pegawai_alamat' => $request->Alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }


    //update edit

    //delete
}