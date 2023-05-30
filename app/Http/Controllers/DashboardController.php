<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $urls = Url::where('user_id', Auth::id())->latest()->take(10)->get();
        $urlViews = Url::where('user_id', Auth::id())->sum('views');
        return view('dashboard', compact('urls', 'urlViews'));
    }
}
