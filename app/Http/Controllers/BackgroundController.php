<?php

namespace App\Http\Controllers;

use App\Models\Halaman;
use App\Models\Background;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BackgroundController extends Controller
{
    public function index($halamanId)
    {
        $halaman = Halaman::where('id', $halamanId)->first();
        $background = Background::where('halaman_id', $halamanId)->get();
        return view('admin.background.index', compact(['halaman', 'background']));
    }
    public function create($halamanId){
        $halaman = Halaman::where('id', $halamanId)->first();
        return view('admin.background.create', compact('halaman', 'halamanId'));
    }
    public function store(Request $request, $halamanId)
    {
        $imageName = "";

        $validatedData = $request->validate([
            'gambar' => 'required|image'
        ]);

        $image = $request->file('gambar');
        if($image){
            $imageName = time()."_".$image->getClientOriginalName();

            $image->move(public_path('database/images/background/'), $imageName);
        }

        $data = Background::create([
            'halaman_id' => $halamanId,
            'gambar' => $imageName
        ]);

        return redirect()->route('background', ['halamanId' => $halamanId])->with('message', 'Data Berhasil Disimpan');
    }
    public function edit($id, $halamanId)
    {
        $background = Background::find($halamanId);
        $halaman = Halaman::where('id', $id)->first();
        return view('admin.background.edit', compact(['halaman', 'background']));
    }
    public function update(Request $request, $id, $halamanId)
    {
        $image = $request->file('gambar_new');
        $imageName = $request->gambar_old;

        if($image){
            $imageName = time()."_".$image->getClientOriginalName();
            $image->move(public_path('database/images/background/'), $imageName);
            File::delete('database/images/background/'.$request->gambar_old);
        }

        $data = Background::find($halamanId);
        $data->update([
            'gambar' => $imageName
        ]);


        return redirect()->route('background', ['halamanId' => $id])->with('message', 'Data Berhasil Diubah');
    }
    public function delete($id, $halamanId)
    {

        $data = Background::find($halamanId);
        File::delete('database/images/background/'.$data->gambar);
        $data->delete();

        return redirect()->route('background', ['halamanId' => $id])->with('message', 'Data Berhasil Dihapus');
    
    }
}
