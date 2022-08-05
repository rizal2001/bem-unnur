<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kabinet;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($id)
    {
        $kabinet = Kabinet::with('misi')->orderBy('id','desc')->first();
        $news = Berita::where('id', '=', $id)->first();
        return view('guest.news', compact(['news', 'kabinet']));
    }
}
