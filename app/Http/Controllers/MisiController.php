<?php

namespace App\Http\Controllers;

use App\Models\Misi;
use App\Models\Kabinet;
use Illuminate\Http\Request;

class MisiController extends Controller
{
    public function index($id)
    {
        $kabinet = Kabinet::where('id', $id)->first();
        $misi = Misi::where('kabinet_id', $id)->get();
        return view('admin.misi.index', compact(['kabinet', 'misi']));
    }
    public function create($id){
        $kabinet = Kabinet::where('id', $id)->first();
        return view('admin.misi.create', compact('kabinet'));
    }
    public function store($id, Request $request)
    {

        $validatedData = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        $data = Misi::create([
            'kabinet_id' => $id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('misi', ['kabinetId' => $id])->with('message', 'Data Berhasil Disimpan');
    }
    public function edit($id, $misiId)
    {
        $data = Misi::find($misiId);
        $kabinet = Kabinet::where('id', $id)->first();
        return view('admin.misi.edit', compact('data', 'kabinet'));
    }
    public function update(Request $request, $id, $misiId)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string'
        ]);

        $data = Misi::find($misiId);
        $data->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('misi', ['kabinetId' => $id])->with('message', 'Data Berhasil Diubah');
    }
    public function delete($id, $misiId)
    {

        $data = Misi::find($misiId);
        $data->delete();

        return redirect()->route('misi', ['kabinetId' => $id])->with('message', 'Data Berhasil Dihapus');
    
    }

}
