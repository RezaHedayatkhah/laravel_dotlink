<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function searchUrl(Request $request)
    {
        $search = $request->input('search');
        $urls = Auth::user()->urls()->where('title', 'LIKE', "%{$search}%")->get();

        return view('index', compact('urls'));

    }
}
