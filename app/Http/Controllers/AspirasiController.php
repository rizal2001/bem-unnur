<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AspirasiController extends Controller
{
    public function index()
    {
        $data = Aspirasi::all();
        return view('admin.aspirasi.index', compact('data'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'aspirasi' => 'required'
        ]);

        $data = Aspirasi::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'aspirasi' => $request->aspirasi
        ]);

        return redirect('/aspirasi')->with('message', 'Data Berhasil Disimpan');
    }

    public function delete($id)
    {
        $data = Aspirasi::find($id);
        $data->delete();
        return redirect('/admin/aspirasi')->with('message', 'Data Berhasil Dihapus');
    
    }
}