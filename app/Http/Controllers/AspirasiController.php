<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Mail\Sendmail;
use Illuminate\Support\Facades\Mail;

class AspirasiController extends Controller
{
    public function index()
    {
        $data = Aspirasi::all();
        return view('admin.aspirasi.index', compact('data'));
    }

    public function store(Request $request)
    {
    
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'aspirasi' => 'required'
        ]);
        
 
        $data = Aspirasi::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'aspirasi' => $request->aspirasi
        ]);

        Mail::to('bemremaunnur@gmail.com')->send(new SendMail($data));

        return redirect('/aspirasi')->with('message', 'Yaayyyyy, Aspirasimu telah terkirim!!!');
    }

    public function delete($id)
    {
        $data = Aspirasi::find($id);
        $data->delete();
        return redirect('/admin/aspirasi')->with('message', 'Data Berhasil Dihapus');
    
    }
    public function detail($id)
    {
        $data = Aspirasi::where('id', '=', $id)->first();
        return view('admin.aspirasi.detail', compact('data'));
    
    }
}