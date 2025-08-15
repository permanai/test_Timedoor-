<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Top_PengarangController extends Controller
{
    public function index()
    {
        $pengarang = buku::select('nama_pengarang', DB::raw('COUNT(rating.id) as voter'))
            ->join('rating', 'buku.id', '=', 'rating.id_buku')
            ->groupBy('nama_pengarang')
            ->orderByDesc('voter')
            ->limit(10)
            ->get();

        return view('admin.top_pengarang', compact('pengarang'));
    }
}
