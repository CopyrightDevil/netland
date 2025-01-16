<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    // Toon de lijst van alle media
    public function index()
    {
        $media = Media::all();
        return view('media.index', compact('media'));
    }

    // Toon details van een specifieke media
    public function show($id)
    {
        $media = Media::with('actors')->findOrFail($id);
        return view('media.show', compact('media'));
    }

    // Zoek naar media op basis van een query
    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = Media::where('title', 'like', '%' . $query . '%')->get();
        return view('media.search', compact('results', 'query'));
    }
}