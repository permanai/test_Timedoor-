<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(Request $request)
    {
        $data = kategori::all();

        return view('admin.kategori', compact('data'));
    }
}
