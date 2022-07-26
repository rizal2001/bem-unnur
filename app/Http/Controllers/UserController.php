<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = User::where('id', '>', '1')->get();
        return view('admin.users.index', compact('data'));
    }
    public function create()
    {
        return view('admin.users.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8'
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/admin/users')->with('message', 'Data Berhasil Disimpan');
    }
    public function edit($id)
    {
        $data = User::find($id);
        return view('admin.users.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email'
        ]);

        $data = User::find($id);
        $data->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect('/admin/users')->with('message', 'Data Berhasil Diubah');
    }
    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();

        return redirect('/admin/users')->with('message', 'Data Berhasil Dihapus');
    
    }
}
