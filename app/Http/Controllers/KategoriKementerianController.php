<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriKementerian;

class KategoriKementerianController extends Controller
{
    public function index()
    {
        $data = KategoriKementerian::all();
        return view('admin.kategoriKementerian.index', compact('data'));
    }
    public function create(){
        return view('admin.kategoriKementerian.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required'
        ]);

        $data = KategoriKementerian::create([
            'nama' => $request->nama
        ]);

        return redirect('/admin/kategori-kementerian')->with('message', 'Data Berhasil Disimpan');
    }
    public function edit($id)
    {
        $data = KategoriKementerian::find($id);
        return view('admin.kategoriKementerian.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required'
        ]);

        $data = KategoriKementerian::find($id);
        $data->update([
            'nama' => $request->nama
        ]);

        return redirect('/admin/kategori-kementerian')->with('message', 'Data Berhasil Diubah');
    }
    public function delete($id)
    {

        $data = KategoriKementerian::find($id);
        // $data->ormawa()->delete();
        $data->delete();

        return redirect('/admin/kategori-kementerian')->with('message', 'Data Berhasil Dihapus');
    
    }
}
