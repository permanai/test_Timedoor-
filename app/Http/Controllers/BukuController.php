<?php

namespace App\Http\Controllers;


use App\Models\buku;
use App\Models\rating;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class BukuController extends Controller
{
    public function index(Request $request)
    {
        $query = buku::with(['kategori']);

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('nama_buku', 'like', '%' . $request->search . '%')
                    ->orWhere('nama_pengarang', 'like', '%' . $request->search . '%');
            });
        }

        $perPage = $request->input('per_page', 10);
        $data = $query->paginate($perPage)->appends(request()->query());

        return view('admin.buku', compact('data', 'perPage'));
    }
    public function indexUser(Request $request)
    {
        $query = buku::with(['kategori']);

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('nama_buku', 'like', '%' . $request->search . '%')
                    ->orWhere('nama_pengarang', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->filled('author')) {
            $query->where('nama_pengarang', $request->author);
        }

        if ($request->filled('book')) {
            $query->where('nama_buku', $request->book);
        }

        if ($request->filled('rating')) {
            $query->where('rating', '>=', $request->rating);
        }

        $perPage = $request->input('per_page', 10);
        $data = $query->paginate($perPage)->appends(request()->query());

        $authors = buku::select('nama_pengarang')
            ->groupBy('nama_pengarang')
            ->orderBy('nama_pengarang', 'asc')
            ->pluck('nama_pengarang');

        $books = buku::select('id', 'nama_buku', 'nama_pengarang')
            ->groupBy('id', 'nama_buku', 'nama_pengarang')
            ->orderBy('nama_buku', 'asc')
            ->get();
        return view('user.buku', compact('data', 'perPage', 'authors', 'books'));
    }

    public function submitRating(Request $request)
    {
        $request->validate([
            'id_buku' => 'required|exists:buku,id',
            'rating' => 'required|integer|min:1|max:10',
        ]);

        rating::create([
            'id_buku' => $request->id_buku,
            'rating' => $request->rating,
        ]);

        return redirect()->back()->with('success', 'Rating berhasil disimpan!');
    }
}
