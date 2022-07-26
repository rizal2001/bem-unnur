<?php

namespace App\Http\Controllers;

use App\Models\Ormawa;
use Illuminate\Http\Request;

class OrmawaController extends Controller
{
    public function index()
    {
        $data = Ormawa::all();
        return view('admin.ormawa.index', compact('data'));
    }
    public function create(){
        return view('admin.ormawa.create');
    }
}