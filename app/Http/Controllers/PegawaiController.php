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
        $pegawai =DB::table('pegawai')->paginate();

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


    //form edit

    public function edit($id)
    {
        //aambil data dari sql tabel pegawai
        //select * from pegawai where pegawai_id = $id
        $pegawai = DB::table('pegawai')
        ->where('pegawai_id', $id)->first();
        //view
        return view('admin.pegawai.edit',['pegawai'=>$pegawai]);
    }
    // Update
    public function update(Request $request, $id){
        // validasi data
        $request->validate([
            'Nama' => 'required|string|max:255',
            'Jabatan' => 'required|string|max:255',
            'Umur' => 'required|integer|max:255',
            'Alamat' => 'required|string|max:255',
        ]);
        // update data pegawai
        DB::table('pegawai')-> where('pegawai_id', $id)->update([
            'pegawai_nama' => $request->Nama,
            'pegawai_jabatan' => $request->Jabatan,
            'pegawai_umur' => $request->Umur,
            'pegawai_alamat' => $request->Alamat
            
        ]);
        // redirect ke halaman utama
        return redirect('/pegawai')->with('success', 'Data pegawai berhasil diupdate!');
    }
    //delete
       public function hapus($id)
    {
        //hapus data pegawai berdasarkan id yang dipilih
        DB::table('pegawai')->where('pegawai_id', $id)->delete();

        //alihkan halaman ke halaman pegawai
        return redirect('/pegawai')->with('success', 'Data Pegawai Berhasil Dihapus');

    }
    //pencarian
public function pencarian(Request $request)
    {
        // 1 ambil keyword
        $search = $request->input('txt_cari');
        // 2 query ke table pegawai
        
        $pegawai = DB::table('pegawai')->when(
        $search, function($query, $search){
        $query->where(
            'pegawai_nama', 'like', '%'.$search.'%'
        );
        $query->orWhere(
            'pegawai_jabatan', 'like', '%'.$search.'%'
        );
        })->paginate(5);
            

        // 3 mengembalikan ke view
        return view ('admin.pegawai.cari', ['pegawai' => $pegawai]);
    }
}