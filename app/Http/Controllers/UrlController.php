<?php

namespace App\Http\Controllers;

use App\Models\Url;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UrlController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $urls = Url::where('user_id', Auth::id())->orderBy('created_at', 'DESC')->paginate(30);

        return view('index', compact('urls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'max:255|nullable',
            'description' => 'nullable',
            'long_url' => 'required|url',
        ]);

        $url = new Url();
        $url->user_id = Auth::id();
        $url->title = $validatedData['title'];
        $url->description = $validatedData['description'];
        $url->long_url = $validatedData['long_url'];
        $url->url_code = substr(str_pad(dechex(mt_rand()), 8, '0', STR_PAD_LEFT), -8);
        $url->save();

        return back()->with('status', '.لینک با موفقیت ساخته شد');
    }

    /**
     * Display the specified resource.
     */
    public function show(Url $url)
    {
        if ($url->user_id != auth()->id()) {
            abort(403);
        }
        return view('show', compact('url'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Url $url)
    {
        if ($url->user_id != auth()->id()) {
            abort(403);
        }
        return view('edit', compact('url'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Url $url)
    {
        if ($url->user_id != auth()->id()) {
            abort(403);
        }
        $validatedData = $request->validate([
            'title' => 'max:255|nullable',
            'description' => 'nullable',
            'long_url' => 'required|url',

        ]);

        $url->update($validatedData);

        return back()->with('status', 'لینک با موفقیت بروز رسانی شد');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Url $url)
    {
        if ($url->user_id != auth()->id()) {
            abort(403);
        }
        $url->delete();

        return redirect()->back()->with('status', 'لینک با موفقیت حذف شد');
    }


}
