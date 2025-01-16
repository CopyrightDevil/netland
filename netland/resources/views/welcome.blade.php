<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actor Details</title>
</head>
<body>
    <h1>{{ $actor->first_name }} {{ $actor->last_name }}</h1>
    <p>Leeftijd: {{ $actor->age }}</p>
    <p>Geslacht: {{ ucfirst($actor->sex) }}</p>
    <p>Land: {{ $actor->country }}</p>
    <p>Gewaardeerd: {{ $actor->has_won_awards ? 'Ja' : 'Nee' }}</p>

    <h2>Films en Series</h2>
    @if ($actor->media->isEmpty())
        <p>Deze acteur/actrice heeft nog niet in films of series gespeeld.</p>
    @else
        <ul>
            @foreach ($actor->media as $media)
                <li>
                    <strong>{{ $media->title }}</strong> ({{ $media->type }}) - 
                    Rating: {{ $media->rating }}/10
                </li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('actors.index') }}">Terug naar overzicht</a>
</body>
</html>