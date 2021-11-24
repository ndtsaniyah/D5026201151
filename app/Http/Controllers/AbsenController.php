<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{
    //
    public function index()
    {
    	$absen = DB::table('absen')->get();
    	return view('absen.index',['absen' => $absen]);
    }
    public function buat()
    {
        return view('absen.buat');
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
    public function ubah($id)
    {
        $absen = DB::table('absen')->where('ID', $id)->get();
        return view('absen.ubah', ['absen' => $absen]);
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
}
