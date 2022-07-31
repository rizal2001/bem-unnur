<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Fakultas;
use App\Models\Kementerian;
use Illuminate\Http\Request;
use App\Models\KategoriKementerian;
use Illuminate\Support\Facades\File;

class KementerianController extends Controller
{
    public function index(){

        $data = Kementerian::with(['jabatan', 'fakultas'])->get();
        return view('admin.kementerian.index', compact('data'));
    }
    public function create(){
        $jabatan = Jabatan::all();
        $fakultas = Fakultas::all();
        return view('admin.kementerian.create', compact(['jabatan', 'fakultas']));
    }
    public function store(Request $request)
    {
        $imageName = "";

        $validatedData = $request->validate([
            'jabatan_id' => 'required',
            'fakultas_id' => 'required',
            'nama' => 'required',
            'link_medsos' => 'required',
            'gambar' => 'required|image'
        ]);

        $image = $request->file('gambar');
        if($image){
            $imageName = time()."_".$image->getClientOriginalName();

            $image->move(public_path('database/images/kementerian/'), $imageName);
        }

        $data = Kementerian::create([
            'jabatan_id' => $request->jabatan_id,
            'fakultas_id' => $request->fakultas_id,
            'nama' => $request->nama,
            'link_medsos' => $request->link_medsos,
            'gambar' => $imageName
        ]);

        return redirect('/admin/kementerian')->with('message', 'Data Berhasil Disimpan');
    }
    public function edit($id)
    {
        $data = Kementerian::with(['jabatan', 'fakultas'])->find($id);
        $jabatan = Jabatan::all();
        $fakultas = Fakultas::all();
        return view('admin.kementerian.edit', compact(['data', 'jabatan', 'fakultas']));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'jabatan_id' => 'required',
            'fakultas_id' => 'required',
            'nama' => 'required',
            'link_medsos' => 'required'
        ]);

        $image = $request->file('gambar_new');
        $imageName = $request->gambar_old;

        if($image){
            $imageName = time()."_".$image->getClientOriginalName();
            $image->move(public_path('database/images/kementerian/'), $imageName);
            File::delete('database/images/kementerian/'.$request->gambar_old);
        }

        $data = Kementerian::find($id);
        $data->update([
            'jabatan_id' => $request->jabatan_id,
            'fakultas_id' => $request->fakultas_id,
            'nama' => $request->nama,
            'link_medsos' => $request->link_medsos,
            'gambar' => $imageName
        ]);

        return redirect('/admin/kementerian')->with('message', 'Data Berhasil Diubah');
    }
    public function delete($id)
    {

        $data = Kementerian::find($id);
        File::delete('database/images/kementerian/'.$data->gambar);
        $data->delete();

        return redirect('/admin/kementerian')->with('message', 'Data Berhasil Dihapus');
    
    }
    
}
