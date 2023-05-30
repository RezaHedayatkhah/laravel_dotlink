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
        $urls = auth()->user()->urls()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('long_url', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->orWhere('url_code', 'LIKE', "%{$search}%")
            ->get();

        return view('index', compact('urls'));

    }
}
