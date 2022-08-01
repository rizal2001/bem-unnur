<?php

namespace App\Http\Controllers;

use App\Models\Halaman;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function index()
    {
        $data = Halaman::all();
        return view('admin.halaman.index', compact('data'));
    }
}
