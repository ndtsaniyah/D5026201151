<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    //nama function bebas
    function showETS() {
        //source untuk data / proses bisnis yg di olah
        return view('ets') ;
    }

    function showGreetings() {
        //source untuk data / proses bisnis yg di olah
        return view('showgreetings') ;
    }

    function sayHi(Request $request) {
        //source untuk data / proses bisnis yg di olah
        return view('tugas') ;
    }
}
