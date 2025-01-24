<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $details['Title'] }}</title>
</head>
<body>
    <h1>{{ $details['Title'] }}</h1>
    <p>Jaar: {{ $details['Year'] }}</p>
    <p>Genre: {{ $details['Genre'] }}</p>
    <p>Regisseur: {{ $details['Director'] }}</p>
    <p>Plot: {{ $details['Plot'] }}</p>
    <img src="{{ $details['Poster'] }}" alt="{{ $details['Title'] }}">
    <a href="{{ route('media.search') }}">Terug naar zoeken</a>
</body>
</html>