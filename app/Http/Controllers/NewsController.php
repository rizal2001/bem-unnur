<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($id)
    {
        $news = Berita::where('id', '=', $id)->first();
        return view('guest.news', compact('news'));
    }
}
