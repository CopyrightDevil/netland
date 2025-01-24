<?php

namespace App\Http\Controllers;

use App\Services\OmdbService;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    protected $omdbService;

    public function __construct(OmdbService $omdbService)
    {
        $this->omdbService = $omdbService;
    }

    // Toon de lijst van alle media
    public function index()
    {
        return redirect()->route('media.search'); // Stuur gebruikers direct naar de zoekpagina
    }

    // Zoek naar media via de OMDB API
    public function search(Request $request)
    {
        $query = $request->input('query');

        if (!$query) {
            return redirect()->back()->with('error', 'Voer een zoekterm in.');
        }

        $results = $this->omdbService->search($query);

        return view('media.search', [
            'query' => $query,
            'results' => $results['Search'] ?? [], // Gebruik 'Search' sleutel in API-resultaten
        ]);
    }

    // Toon details van een specifieke media via OMDB API
    public function showDetails($imdbId)
    {
        $details = $this->omdbService->getDetails($imdbId);

        if (isset($details['Error'])) {
            abort(404, 'Film/serie niet gevonden.');
        }

        return view('media.details', compact('details'));
    }

    // Redirect bij het proberen te tonen van een media vanuit de database
    public function show($id)
    {
        return redirect()->route('media.search'); // Stuur gebruikers door naar de zoekpagina
    }
}