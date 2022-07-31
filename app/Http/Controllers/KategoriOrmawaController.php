<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriOrmawa;

class KategoriOrmawaController extends Controller
{
    public function index()
    {
        $data = KategoriOrmawa::all();
        return view('admin.kategoriOrmawa.index', compact('data'));
    }
    public function create(){
        return view('admin.kategoriOrmawa.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required'
        ]);

        $data = KategoriOrmawa::create([
            'nama' => $request->nama
        ]);

        return redirect('/admin/kategori-ormawa')->with('message', 'Data Berhasil Disimpan');
    }
    public function edit($id)
    {
        $data = KategoriOrmawa::find($id);
        return view('admin.kategoriOrmawa.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required'
        ]);

        $data = KategoriOrmawa::find($id);
        $data->update([
            'nama' => $request->nama
        ]);

        return redirect('/admin/kategori-ormawa')->with('message', 'Data Berhasil Diubah');
    }
    public function delete($id)
    {

        $data = KategoriOrmawa::find($id);
        $data->delete();

        return redirect('/admin/kategori-ormawa')->with('message', 'Data Berhasil Dihapus');
    
    }
}