<?php

namespace App\Http\Controllers;

use App\Models\Kabinet;
use Illuminate\Http\Request;

class KabinetController extends Controller
{
    public function index()
    {
        $data = Kabinet::all();
        return view('admin.kabinet.index', compact('data'));
    }
    public function create(){
        return view('admin.kabinet.create');
    }
}