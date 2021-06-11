<?php

namespace App\Http\Controllers;

use App\Negara;
use App\Kota;

class ReadController extends Controller
{
    public function index()
    {
        $negara = Negara::all();
        $kota = Kota::all();
        return view('read', ['negara' => $negara, 'kota' => $kota]);
    }

    public function detailNegara($id)
    {
        $dtlNgr = Negara::where('id', $id)->firstOrFail();
        return view('negara', compact('dtlNgr'));
    }

    public function detailKota($id)
    {
        $dtlKota = Kota::where('id', $id)->firstOrFail();
        return view('kota', compact('dtlKota'));
    }
}
