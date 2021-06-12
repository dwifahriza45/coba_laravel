<?php

namespace App\Http\Controllers;

use App\Negara;

class ReadController extends Controller
{
    public function index()
    {
        $negara = Negara::all();
        return view('read', compact('negara'));
    }

    // detail Negara - Kota
    public function detailNk($id)
    {
        $dtlNk = Negara::where('id', $id)->firstOrFail();
        return view('negara', compact('dtlNk'));
    }
}
