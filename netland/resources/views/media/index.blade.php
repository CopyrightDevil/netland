<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Overzicht</title>
</head>
<body>
    <h1>Media Overzicht</h1>

    @if ($media->isEmpty())
        <p>Er zijn nog geen films of series toegevoegd.</p>
    @else
        <ul>
            @foreach ($media as $item)
                <li>
                    <strong>{{ $item->title }}</strong> ({{ $item->type }}) - 
                    Rating: {{ $item->rating }}/10
                    <a href="{{ route('media.show', $item->id) }}">Bekijk details</a>
                </li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('actors.index') }}">Bekijk acteurs</a>
</body>
</html>