<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('admin.berita.index');
    }
    public function create(){
        return view('admin.berita.create');
    }
}