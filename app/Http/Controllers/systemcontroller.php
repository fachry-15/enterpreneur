<?php

namespace App\Http\Controllers;

use App\Models\jurusan;


use Illuminate\Http\Request;

class systemcontroller extends Controller
{

    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'nama_prodi' => 'required',
            'fakultas' => 'required',
        ]);

        $prodi = new jurusan();
        $prodi->nama_prodi = $request->nama_prodi;
        $prodi->fakultas = $request->fakultas;
        $prodi->save();
        return redirect()->route('TambahProdi')
            ->with('success', 'Program Pendidikan Berhasil Ditambahkan');
    }

    // public function show($id)
    // {
    //     $prodi = tb_prodi::findOrFail($id);
    //     return view('prodi', compact('shprodi'));
    // }

    // public function edit($id)
    // {
    //     $prodi = tb_prodi::findOrFail($id);
    //     return view('prodi', compact('edit'));
    // }

    // public function update(Request $request, $id)
    // {
    //     // Validasi
    //     $validated = $request->validate([
    //         'nama_prodi' => 'required',
    //         'fakultas' => 'required',
    //     ]);

    //     $update = tb_prodi::findOrFail($id);
    //     $update->nama_prodi = $request->nama_prodi;
    //     $update->fakultas = $request->fakultas;
    //     $update->save();
    //     return redirect()->route('prodi')
    //         ->with('success', 'Data Berhasil Dirubah');
    // }

    // public function destroy($id)
    // {
    //     $hapus = tb_prodi::findOrFail($id);
    //     $hapus->delete();
    //     return redirect()->route('prodi')
    //         ->with('success', 'Data Berhasil Dihapus');
    // }
}
