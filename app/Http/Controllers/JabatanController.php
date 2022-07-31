<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KategoriKementerian;

class JabatanController extends Controller
{
    public function index()
    {
        $data = DB::table('m_kategori_kementerian')
                ->join('t_jabatan', 'm_kategori_kementerian.id', '=', 't_jabatan.kategori_kementerian_id')
                ->select('t_jabatan.id', 'm_kategori_kementerian.nama as nama_kategori', 't_jabatan.kode', 't_jabatan.nama', 't_jabatan.created_at', 't_jabatan.updated_at')
                ->get();
        return view('admin.jabatan.index', compact('data'));
    }
    public function create(){
        $kategori = KategoriKementerian::all();
        return view('admin.jabatan.create', compact('kategori'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kategori_kementerian_id' => 'required',
            'kode' => 'required',
            'nama' => 'required'
        ]);

        $data = Jabatan::create([
            'kategori_kementerian_id' => $request->kategori_kementerian_id,
            'kode' => $request->kode,
            'nama' => $request->nama
        ]);

        return redirect('/admin/jabatan')->with('message', 'Data Berhasil Disimpan');
    }
    public function edit($id)
    {
        $data = Jabatan::with(['kategoriKementerian'])->find($id);
        $kategori = KategoriKementerian::all();
        return view('admin.jabatan.edit', compact(['data', 'kategori']));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'kategori_kementerian_id' => 'required',
            'kode' => 'required',
            'nama' => 'required'
        ]);

        $data = Jabatan::find($id);
        $data->update([
            'kategori_kementerian_id' => $request->kategori_kementerian_id,
            'kode' => $request->kode,
            'nama' => $request->nama
        ]);

        return redirect('/admin/jabatan')->with('message', 'Data Berhasil Diubah');
    }
    public function delete($id)
    {

        $data = Jabatan::find($id);
        // $data->kementerian()->delete();
        $data->delete();

        return redirect('/admin/jabatan')->with('message', 'Data Berhasil Dihapus');
    
    }
}
