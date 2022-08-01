<?php

namespace App\Http\Controllers;

use App\Models\Ormawa;
use App\Models\Visitor;
use App\Models\Aspirasi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $jumlahVisitor = Visitor::count();
        $jumlahAspirasi = Aspirasi::count();
        $jumlahOrmawa = Ormawa::count();
        return view('admin.dashboard', compact(['jumlahVisitor', 'jumlahAspirasi', 'jumlahOrmawa']));
    }
}
