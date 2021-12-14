<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AbsenController extends Controller
{
    public function index()
    {
        // $absen = DB::table('absen')->get();
        $absen = DB::table('absen')
            ->join('pegawai', 'absen.IDPegawai', '=', 'pegawai.pegawai_id')
            ->select('absen.*', 'pegawai.pegawai_nama')
            ->paginate(3);

        return view('absen.index', ['absen' => $absen]);
    }
    // method untuk menampilkan view form tambah absen
    public function buat()
    {
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

        // memanggil view tambah
        return view('absen.buat', ['pegawai' => $pegawai]);
    }
    public function simpan(Request $request)
    {
        DB::table('absen')->insert([
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->Tanggal,
            'Status' => $request->Status
        ]);
        return redirect('/absen');
    }
    // method untuk edit data absen
    public function ubah($id)
    {
        // mengambil data absen berdasarkan id yang dipilih
        $absen = DB::table('absen')->where('ID', $id)->get();

        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

        $status = "Sedang Mengedit";

        // passing data absen yang didapat ke view edit.blade.php
        return view('absen.ubah', ['absen' => $absen, 'pegawai' => $pegawai, 'status' => $status]);
    }
    public function update(Request $request)
    {
        DB::table('absen')->where('ID', $request->id)->update([
            'IDPegawai' => $request->IDPegawai,
            'Tanggal' => $request->Tanggal,
            'Status' => $request->Status
        ]);
        return redirect('/absen');
    }
    public function hapus($id)
    {
        DB::table('absen')->where('ID', $id)->delete();
        return redirect('/absen');
    }
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $absen = DB::table('absen')
            ->join('pegawai', 'absen.IDPegawai', '=', 'pegawai.pegawai_id')
            ->where('pegawai_nama', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('absen.index', ['absen' => $absen]);
    }
    public function view($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $absen = DB::table('absen')
        ->leftjoin('pegawai', 'absen.IDPegawai', '=', 'pegawai.pegawai_id')
        ->where('ID', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('absen.detail', ['absen' => $absen]);
    }
}
