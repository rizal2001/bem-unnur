<?php

namespace App\Http\Controllers;

use App\Models\Misi;
use App\Models\Berita;
use App\Models\Ormawa;
use App\Models\Jabatan;
use App\Models\Kabinet;
use App\Models\Background;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KategoriKementerian;

class FrontController extends Controller
{
    public function beranda()
    {
        $kabinet = Kabinet::orderBy('id','desc')->first();
        $jumlahKementerian = Jabatan::where('kategori_kementerian_id', '=', '3')->count();
        $menteri = Jabatan::where('kategori_kementerian_id', '=', '3')->get();
        $background = Background::where('halaman_id', '=', '1')->get();
        $bemfa = Ormawa::where('kategori_ormawa_id', '=', '2')->get();
        $bemfaOne = Ormawa::where('kategori_ormawa_id', '=', '2')->first();
        $bemfaTwo = Ormawa::where('kategori_ormawa_id', '=', '2')->orderBy('id', 'desc')->first();
        $hima = Ormawa::where('kategori_ormawa_id', '=', '3')->get();
        $himaOne = Ormawa::where('kategori_ormawa_id', '=', '3')->first();
        $himaTwo = Ormawa::where('kategori_ormawa_id', '=', '3')->orderBy('id', 'desc')->first();
        $ukm = Ormawa::where('kategori_ormawa_id', '=', '4')->get();
        $ukmOne = Ormawa::where('kategori_ormawa_id', '=', '4')->first();
        $ukmTwo = Ormawa::where('kategori_ormawa_id', '=', '4')->orderBy('id', 'desc')->first();
        $berita = Berita::all();
         
        // dd([$bemfaOne, $bemfaTwo]);
        return view('guest.beranda', compact(['kabinet', 'jumlahKementerian', 'menteri', 'background', 'bemfa', 'bemfaOne', 'bemfaTwo', 'hima', 'himaOne', 'himaTwo', 'ukm', 'ukmOne', 'ukmTwo', 'berita']));
    }
    public function profil()
    {
        $kabinet = Kabinet::with('misi')->orderBy('id','desc')->first();
        $misi = Misi::all();
        return view('guest.profil', compact(['kabinet', 'misi']));
    }
    public function kementerian()
    {
        $background = Background::where('halaman_id', '=', '3')->first();
        $kabinet = Kabinet::with('misi')->orderBy('id','desc')->first();
        $topMan = DB::table('m_kategori_kementerian')
            ->join('t_jabatan', 'm_kategori_kementerian.id', '=', 't_jabatan.kategori_kementerian_id')
            ->join('t_kementerian', 't_jabatan.id', '=', 't_kementerian.jabatan_id')
            ->join('m_fakultas', 't_kementerian.fakultas_id', '=', 'm_fakultas.id')
            ->select('t_kementerian.nama AS nama', 'm_fakultas.nama AS nama_fakultas', 't_jabatan.nama AS nama_jabatan', 't_kementerian.gambar AS gambar', 't_kementerian.link_medsos AS link_medsos')
            ->where('m_kategori_kementerian.id', '=', '1')
            ->get();
        $unitKerja = DB::table('m_kategori_kementerian')
            ->join('t_jabatan', 'm_kategori_kementerian.id', '=', 't_jabatan.kategori_kementerian_id')
            ->join('t_kementerian', 't_jabatan.id', '=', 't_kementerian.jabatan_id')
            ->join('m_fakultas', 't_kementerian.fakultas_id', '=', 'm_fakultas.id')
            ->select('t_kementerian.nama AS nama', 'm_fakultas.nama AS nama_fakultas', 't_jabatan.nama AS nama_jabatan', 't_kementerian.gambar AS gambar', 't_kementerian.link_medsos AS link_medsos')
            ->where('m_kategori_kementerian.id', '=', '2')
            ->get();
        $kementerian = DB::table('m_kategori_kementerian')
            ->join('t_jabatan', 'm_kategori_kementerian.id', '=', 't_jabatan.kategori_kementerian_id')
            ->join('t_kementerian', 't_jabatan.id', '=', 't_kementerian.jabatan_id')
            ->join('m_fakultas', 't_kementerian.fakultas_id', '=', 'm_fakultas.id')
            ->select('t_kementerian.nama AS nama', 'm_fakultas.nama AS nama_fakultas', 't_jabatan.nama AS nama_jabatan', 't_kementerian.gambar AS gambar', 't_kementerian.link_medsos AS link_medsos')
            ->where('m_kategori_kementerian.id', '=', '3')
            ->get();
        return view('guest.kementerian', compact(['kabinet', 'background', 'topMan', 'unitKerja', 'kementerian']));
    }
    public function ormawa()
    {
        $kabinet = Kabinet::with('misi')->orderBy('id','desc')->first();
        return view('guest.ormawa', compact('kabinet'));
    }
    public function aspirasi()
    {
        $kabinet = Kabinet::with('misi')->orderBy('id','desc')->first();
        return view('guest.aspirasi', compact('kabinet'));
    }
}