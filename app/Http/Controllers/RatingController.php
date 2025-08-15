<?php

namespace App\Http\Controllers;

use App\Models\rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index(Request $request)
    {
        $data = rating::with(['buku'])->get();

        return view('admin.rating', compact('data'));
    }
}
