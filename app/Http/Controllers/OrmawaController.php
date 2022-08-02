<?php

namespace App\Http\Controllers;

use App\Models\Ormawa;
use App\Models\KategoriOrmawa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OrmawaController extends Controller
{
    public function index()
    {
        $data = Ormawa::with('kategoriOrmawa')->get();
        return view('admin.ormawa.index', compact('data'));
    }
    public function create(){
        $kategori = KategoriOrmawa::all();
        return view('admin.ormawa.create', compact('kategori'));
    }
    public function store(Request $request)
    {
        $imageLogoName = "";

        $validatedData = $request->validate([
            'id' => 'required',
            'nama' => 'required',
            'gambar_logo' => 'required|image'
        ]);

        $imageLogo = $request->file('gambar_logo');
        if($imageLogo){
            $imageLogoName = time()."_".$imageLogo->getClientOriginalName();

            $imageLogo->move(public_path('database/images/ormawa/'), $imageLogoName);
        }
        $data = Ormawa::create([
            'kategori_ormawa_id' => $request->id,
            'nama' => $request->nama,
            'gambar_logo' => $imageLogoName
        ]);

        return redirect('/admin/ormawa')->with('message', 'Data Berhasil Disimpan');
    }
    public function edit($id)
    {
        $kategori = KategoriOrmawa::all();
        $data = Ormawa::find($id);
        return view('admin.ormawa.edit', compact('data','kategori'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'kategori_ormawa_id' => 'required',
            'nama' => 'required',
            
        ]);

        $imageLogo = $request->file('gambar_logo_new');
        $imageLogoName = $request->gambar_logo_old;

        if($imageLogo){
            $imageLogoName = time()."_".$imageLogo->getClientOriginalName();
            $imageLogo->move(public_path('database/images/ormawa'), $imageLogoName);
            File::delete('database/images/ormawa'.$request->gambar_logo_old);
        }

        $data = Ormawa::find($id);
        $data->update([
            'id' => $request->id,
            'nama' => $request->nama,
            'gambar_logo' => $imageLogoName
        ]);

        return redirect('/admin/ormawa')->with('message', 'Data Berhasil Diubah');
    }
    public function delete($id)
    {
        $data = Ormawa::find($id);
        File::delete('database/images/ormawa/'.$data->gambar_logo);
        $data->delete();
        return redirect('/admin/ormawa')->with('message', 'Data Berhasil Dihapus');
    
    }
}