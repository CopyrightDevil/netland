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
    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'rating' => 'required|numeric|min:0|max:10',
        'length_in_minutes' => 'required|integer|min:1',
        'released_at' => 'required|date',
        'country_of_origin' => 'required|string|max:255',
        'youtube_trailer_id' => 'nullable|string|max:255',
        'summary' => 'required|string',
        'spoken_in_language' => 'required|string|max:255',
        'type' => 'required|in:movie,series',
    ]);

    Media::create($validated);

    return redirect()->route('media.index')->with('success', 'Media toegevoegd!');
}
public function create()
{
    return view('media.create'); // Zorg dat deze view bestaat
}
}