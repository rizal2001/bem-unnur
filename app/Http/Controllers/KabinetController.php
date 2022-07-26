<?php

namespace App\Http\Controllers;

use App\Models\Kabinet;
use Illuminate\Http\Request;

class KabinetController extends Controller
{
    public function index()
    {
        return view('admin.kabinet.index');
    }
    public function create(){
        return view('admin.kabinet.create');
    }
}