<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class OmdbService
{
    protected $baseUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->baseUrl = config('services.omdb.base_url');
        $this->apiKey = config('services.omdb.api_key');

        if (!$this->apiKey) {
            throw new \Exception('OMDB API Key is niet ingesteld in .env');
        }
    }

    // Zoek films/series
    public function search($query)
    {
        $response = Http::get($this->baseUrl, [
            'apikey' => $this->apiKey,
            's' => $query, // Zoekterm
        ]);

        return $response->json();
    }

    // Haal details op van een specifieke film/serie
    public function getDetails($imdbId)
    {
        $response = Http::get($this->baseUrl, [
            'apikey' => $this->apiKey,
            'i' => $imdbId, // IMDB ID
        ]);

        return $response->json();
    }
}