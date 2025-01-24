<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoekresultaten</title>
</head>
<body>
    <h1>Zoekresultaten voor "{{ $query }}"</h1>

    @if (empty($results))
        <p>Geen resultaten gevonden.</p>
    @else
        <ul>
            @foreach ($results as $result)
                <li>
                    <img src="{{ $result['Poster'] }}" alt="{{ $result['Title'] }}" width="100"><br>
                    <strong>{{ $result['Title'] }}</strong> ({{ $result['Year'] }})<br>
                    <a href="{{ route('media.details', $result['imdbID']) }}">Bekijk details</a>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>