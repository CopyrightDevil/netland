<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Details</title>
</head>
<body>
    <h1>{{ $media->title }}</h1>
    <p>Type: {{ ucfirst($media->type) }}</p>
    <p>Rating: {{ $media->rating }}/10</p>
    <p>Lengte: {{ $media->length_in_minutes }} minuten</p>
    <p>Land van oorsprong: {{ $media->country_of_origin }}</p>
    <p>Samenvatting: {{ $media->summary }}</p>
    <p>Gesproken taal: {{ $media->spoken_in_language }}</p>
    <p>Uitgebracht op: {{ $media->released_at }}</p>

    <h2>Acteurs</h2>
    @if ($media->actors->isEmpty())
        <p>Geen acteurs gekoppeld aan deze media.</p>
    @else
        <ul>
            @foreach ($media->actors as $actor)
                <li>{{ $actor->first_name }} {{ $actor->last_name }}</li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('media.index') }}">Terug naar media overzicht</a>
</body>
</html>