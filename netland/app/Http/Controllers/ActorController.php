<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    // Toon een lijst van alle acteurs
    public function index()
    {
        $actors = Actor::all();
        return view('actors.index', compact('actors'));
    }

    // Toon details van een specifieke acteur
    public function show($id)
    {
        $actor = Actor::with('media')->findOrFail($id);
        return view('actors.show', compact('actor'));
    }
}