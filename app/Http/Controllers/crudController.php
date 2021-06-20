<?php

namespace App\Http\Controllers;

use App\Negara;
use Illuminate\Http\Request;

class crudController extends Controller
{
    public function index()
    {
        $negara = Negara::all();
        return view('crud', compact('negara'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'kode_iso3' => 'required',
            'nama' => 'required',
            'nama_inggris' => 'required',
            'lat' => 'required',
            'lon' => 'required',
            'kode_telepon' => 'required',
            'mata_uang' => 'required'
        ]);

        Negara::create($request->all());
        return redirect('crud')->with('status', 'Negara ditambahkan');
    }

    public function show($id)
    {
        $negara = Negara::where('id', $id)->firstOrFail();
        return view('crud_detail', compact('negara'));
    }

    public function edit($id)
    {
        $negara = Negara::find($id);
        return view('update', compact('negara'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required',
            'kode_iso3' => 'required',
            'nama' => 'required',
            'nama_inggris' => 'required',
            'lat' => 'required',
            'lon' => 'required',
            'kode_telepon' => 'required',
            'mata_uang' => 'required'
        ]);

        Negara::where('id', $id)
            ->update([
                'kode' => $request->kode,
                'kode_iso3' => $request->kode_iso3,
                'nama' => $request->nama,
                'nama_inggris' => $request->nama_inggris,
                'lat' => $request->lat,
                'lon' => $request->lon,
                'kode_telepon' => $request->kode_telepon,
                'mata_uang' => $request->mata_uang
            ]);

        return redirect('crud')->with('status', 'Negara diubah');
    }

    public function destroy($id)
    {
        Negara::destroy($id);
        return redirect('crud')->with('status', 'Negara dihapus');
    }
}
