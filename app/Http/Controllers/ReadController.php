<?php

namespace App\Http\Controllers;

use App\Kota;

class ReadController extends Controller
{
    public function index()
    {
        $citys = Kota::all();
        return view('read', compact('citys'));
    }

    // detail Kota - Negara
    public function detailKn($id)
    {
        $dtlKn = Kota::where('id', $id)->firstOrFail();
        return view('kota', compact('dtlKn'));
    }
}
