<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $urls = Url::where('user_id', Auth::id())->latest()->take(10)->get();

        return view('dashboard', compact('urls'));
    }
}
