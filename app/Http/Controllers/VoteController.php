<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    // public function index(Request $request)
    // {
    //     $perPage = $request->per_page ?? 10;

    //     $buku = buku::with(['kategori', 'rating'])
    //         ->withAvg('rating', 'rating')
    //         ->when($request->search, function ($q) use ($request) {
    //             $q->where(function ($sub) use ($request) {
    //                 $sub->where('nama_buku', 'like', '%' . $request->search . '%')
    //                     ->orWhere('nama_pengarang', 'like', '%' . $request->search . '%');
    //             });
    //         })
    //         ->orderByDesc('rating_avg_rating')
    //         ->paginate($perPage)
    //         ->appends($request->query());

    //     $buku->getCollection()->transform(function ($item) {
    //         $totalRating = $item->rating->sum('rating');
    //         $voterCount  = $item->rating->count();
    //         $avgRating   = $voterCount > 0 ? $totalRating / $voterCount : 0;

    //         $item->average_rating = number_format($avgRating, 2);
    //         $item->voter = $voterCount;

    //         return $item;
    //     });

    //     return view('admin.vote', compact('buku'));
    // }
    public function index(Request $request)
    {
        $query = buku::with(['kategori', 'rating'])
            ->withAvg('rating', 'rating')
            ->when($request->search, function ($q) use ($request) {
                $q->where(function ($sub) use ($request) {
                    $sub->where('nama_buku', 'like', '%' . $request->search . '%')
                        ->orWhere('nama_pengarang', 'like', '%' . $request->search . '%');
                });
            })
            ->orderByDesc('rating_avg_rating');

        $perPage = $request->input('per_page', 10);
        $buku = $query->paginate($perPage)->appends($request->query());

        $buku->getCollection()->transform(function ($item) {
            $totalRating = $item->rating->sum('rating');
            $voterCount = $item->rating->count();
            $avgRating = $voterCount > 0 ? $totalRating / $voterCount : 0;

            $item->average_rating = number_format($avgRating, 2);
            $item->voter = $voterCount;

            return $item;
        });

        return view('admin.vote', compact('buku'));
    }
}
