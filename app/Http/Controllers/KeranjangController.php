<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        // $pegawai = DB::table('pegawai')->get();
        $keranjangbelanja = DB::table('keranjangbelanja')->paginate(3);

        // mengirim data pegawai ke view index
        return view('keranjang.index', ['keranjangbelanja' => $keranjangbelanja]);
    }
    // method untuk menampilkan view form tambah pegawai
    public function add()
    {

        // memanggil view tambah
        return view('keranjang.add');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->kodebarang,
            'Jumlah' => $request->jumlah,
            'Harga' => $request->harga
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/keranjang');
    }

    // method untuk hapus data pegawai
    public function delete($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('keranjangbelanja')->where('kodetas', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/keranjang');
    }
}
