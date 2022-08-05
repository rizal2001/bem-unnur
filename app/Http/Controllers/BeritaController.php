<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    public function index()
    {
        $data = Berita::all();
        return view('admin.berita.index', compact('data'));
    }
    public function create(){
        return view('admin.berita.create');
    }
    public function store(Request $request)
    {
        $imageBeritaName = "";

        $validatedData = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar_berita' => 'required|image'
        ]);

        $imageBerita = $request->file('gambar_berita');
        if($imageBerita){
            $imageBeritaName = time()."_".$imageBerita->getClientOriginalName();

            $imageBerita->move(public_path('database/images/berita/'), $imageBeritaName);
        }
        $data = Berita::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar_banner' => $imageBeritaName
        ]);

        return redirect('/admin/berita')->with('message', 'Data Berhasil Disimpan');
    }
    public function edit($id)
    {
        $data = Berita::find($id);
        return view('admin.berita.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $imageBerita = $request->file('gambar_logo_new');
        $imageBeritaName = $request->gambar_logo_old;

        if($imageBerita){
            $imageBeritaName = time()."_".$imageBerita->getClientOriginalName();
            $imageBerita->move(public_path('database/images/berita'), $imageBeritaName);
            File::delete('database/images/berita'.$request->gambar_logo_old);
        }

        $data = Berita::find($id);
        $data->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar_banner' => $imageBeritaName
        ]);

        return redirect('/admin/berita')->with('message', 'Data Berhasil Diubah');
    }
    public function delete($id)
    {
        $data = Berita::find($id);
        File::delete('database/images/berita/'.$data->gambar_banner);
        $data->delete();
        return redirect('/admin/berita')->with('message', 'Data Berhasil Dihapus');
    
    }

    public function search(Request $request)
	{
		$cari = $request->cari;
		$data = Berita::where('judul','like',"%".$cari."%")->paginate();
		return view('admin.berita.index', compact('data'));
	}
}