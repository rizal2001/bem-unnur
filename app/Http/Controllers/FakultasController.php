<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    public function index()
    {
        $data = Fakultas::all();
        return view('admin.fakultas.index', compact('data'));
    }
    public function create(){
        return view('admin.fakultas.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode' => 'required',
            'nama' => 'required',
        ]);

        $data = Fakultas::create([
            'kode' => $request->kode,
            'nama' => $request->nama
        ]);

        return redirect('/admin/fakultas')->with('message', 'Data Berhasil Disimpan');
    }
    public function edit($id)
    {
        $data = Fakultas::find($id);
        return view('admin.fakultas.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'kode' => 'required',
            'nama' => 'required',
        ]);

        $data = Fakultas::find($id);
        $data->update([
            'kode' => $request->kode,
            'nama' => $request->nama
        ]);

        return redirect('/admin/fakultas')->with('message', 'Data Berhasil Diubah');
    }
    public function delete($id)
    {

        $data = Fakultas::find($id);
        // $data->ormawa()->delete();
        $data->delete();

        return redirect('/admin/fakultas')->with('message', 'Data Berhasil Dihapus');
    
    }
}
