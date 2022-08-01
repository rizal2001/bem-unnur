<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Ormawa;
use App\Models\Jabatan;
use App\Models\Kabinet;
use App\Models\Background;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function beranda()
    {
        $kabinet = Kabinet::orderBy('id','desc')->first();
        $jumlahKementerian = Jabatan::where('kategori_kementerian_id', '=', '3')->count();
        $menteri = Jabatan::where('kategori_kementerian_id', '=', '3')->get();
        $background = Background::where('halaman_id', '=', '1')->get();
        $bemfaOne = Ormawa::where('kategori_ormawa_id', '=', '2')->first();
        $bemfaTwo = Ormawa::where('kategori_ormawa_id', '=', '2')->orderBy('id', 'desc')->first();
        $himaOne = Ormawa::where('kategori_ormawa_id', '=', '3')->first();
        $himaTwo = Ormawa::where('kategori_ormawa_id', '=', '3')->orderBy('id', 'desc')->first();
        $ukmOne = Ormawa::where('kategori_ormawa_id', '=', '4')->first();
        $ukmTwo = Ormawa::where('kategori_ormawa_id', '=', '4')->orderBy('id', 'desc')->first();
        $berita = Berita::all();
         
        // dd([$bemfaOne, $bemfaTwo]);
        return view('guest.beranda', compact(['kabinet', 'jumlahKementerian', 'menteri', 'background', 'bemfaOne', 'bemfaTwo', 'himaOne', 'himaTwo', 'ukmOne', 'ukmTwo', 'berita']));
    }
    public function profil()
    {
        $kabinet = Kabinet::with('misi')->orderBy('id','desc')->first();
        return view('guest.profil', compact('kabinet'));
    }
}