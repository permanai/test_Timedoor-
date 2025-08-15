<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\rating;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {

        $stats = [
            'jumlahBuku' => buku::count(),
            'jumlahPengarang' => buku::distinct('nama_pengarang')->count('nama_pengarang'),
            'jumlahRating' => rating::count()
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
