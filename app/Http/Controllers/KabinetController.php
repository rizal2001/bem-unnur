<?php

namespace App\Http\Controllers;

use App\Models\Kabinet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KabinetController extends Controller
{
    public function index()
    {
        $data = Kabinet::all();
        return view('admin.kabinet.index', compact('data'));
    }
    public function create(){
        return view('admin.kabinet.create');
    }
    public function store(Request $request)
    {
        $imageLogoName = "";
        $imageStrukturName = "";

        $validatedData = $request->validate([
            'nama' => 'required',
            'tahun_periode' => 'required',
            'visi' => 'required',
            'gambar_logo' => 'required|image',
            'gambar_struktur' => 'required|image'
        ]);

        $imageLogo = $request->file('gambar_logo');
        if($imageLogo){
            $imageLogoName = time()."_".$imageLogo->getClientOriginalName();

            $imageLogo->move(public_path('database/images/kabinet/logo/'), $imageLogoName);
        }

        $imageStruktur = $request->file('gambar_struktur');
        if($imageStruktur){
            $imageStrukturName = time()."_".$imageStruktur->getClientOriginalName();

            $imageStruktur->move(public_path('database/images/kabinet/struktur/'), $imageStrukturName);
        }

        $data = Kabinet::create([
            'nama' => $request->nama,
            'tahun_periode' => $request->tahun_periode,
            'visi' => $request->visi,
            'gambar_logo' => $imageLogoName,
            'gambar_struktur' => $imageStrukturName
        ]);

        return redirect('/admin/kabinet')->with('message', 'Data Berhasil Disimpan');
    }
    public function edit($id)
    {
        $data = Kabinet::find($id);
        return view('admin.kabinet.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'tahun_periode' => 'required',
            'visi' => 'required'
        ]);

        $imageLogo = $request->file('gambar_logo_new');
        $imageLogoName = $request->gambar_logo_old;

        if($imageLogo){
            $imageLogoName = time()."_".$imageLogo->getClientOriginalName();
            $imageLogo->move(public_path('database/images/kabinet/logo/'), $imageLogoName);
            File::delete('database/images/kabinet/logo/'.$request->gambar_logo_old);
        }

        $imageStruktur = $request->file('gambar_struktur_new');
        $imageStrukturName = $request->gambar_struktur_old;

        if($imageStruktur){
            $imageStrukturName = time()."_".$imageStruktur->getClientOriginalName();
            $imageStruktur->move(public_path('database/images/kabinet/struktur/'), $imageStrukturName);
            File::delete('database/images/kabinet/struktur/'.$request->gambar_struktur_old);
        }

        $data = Kabinet::find($id);
        $data->update([
            'nama' => $request->nama,
            'tahun_periode' => $request->tahun_periode,
            'visi' => $request->visi,
            'gambar_logo' => $imageLogoName,
            'gambar_struktur' => $imageStrukturName
        ]);

        return redirect('/admin/kabinet')->with('message', 'Data Berhasil Diubah');
    }
    public function delete($id)
    {

        $data = Kabinet::find($id);
        File::delete('database/images/kabinet/logo/'.$data->gambar_logo);
        File::delete('database/images/kabinet/struktur/'.$data->gambar_struktur);
        $data->misi()->delete();
        $data->delete();

        return redirect('/admin/kabinet')->with('message', 'Data Berhasil Dihapus');
    
    }
}