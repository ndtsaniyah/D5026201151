<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TasController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        // $pegawai = DB::table('pegawai')->get();
        $tas = DB::table('tas')->paginate(5);

        // mengirim data pegawai ke view index
        return view('tas.index', ['tas' => $tas]);
    }
    // method untuk menampilkan view form tambah pegawai
    public function add()
    {

        // memanggil view tambah
        return view('tas.add');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('tas')->insert([
            'merktas' => $request->merk,
            'stocktas' => $request->stock,
            'tersedia' => $request->ketersediaan
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/tas');
    }
    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $tas = DB::table('tas')->where('kodetas', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('tas.edit', ['tas' => $tas]);
    }
    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('tas')->where('kodetas', $request->id)->update([
            'merktas' => $request->merk,
            'stocktas' => $request->stock,
            'tersedia' => $request->ketersediaan
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/tas');
    }
    // method untuk hapus data pegawai
    public function delete($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('tas')->where('kodetas', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/tas');
    }
    public function search(Request $request)
    {
        // menangkap data pencarian
        $search = $request->search;

        // mengambil data dari table pegawai sesuai pencarian data
        $tas = DB::table('tas')
            ->where('merktas', 'like', "%" . $search . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('tas.index', ['tas' => $tas]);
    }
    public function view($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('tas')->where('kodetas', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('tas.view', ['tas' => $pegawai]);
    }
}
