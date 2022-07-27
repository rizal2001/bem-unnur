<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AspirasiController extends Controller
{
    public function index()
    {
        $data = Aspirasi::all();
        return view('admin.aspirasi.index', compact('data'));
    }
    public function delete($id)
    {
        $data = Aspirasi::find($id);
        $data->delete();
        return redirect('/admin/aspirasi')->with('message', 'Data Berhasil Dihapus');
    
    }
}