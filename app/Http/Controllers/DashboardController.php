<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $urls = Url::where('user_id', Auth::id())->latest()->take(10)->get();

        $titles = array();
        $views = array();

        foreach ($urls as $url) {
            array_push($titles, $url->title);
            array_push($views, $url->views);
        }

        return view('dashboard', compact('titles', 'views'));
    }
}
