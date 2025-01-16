<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acteurs Overzicht</title>
</head>
<body>
    <h1>Acteurs Overzicht</h1>

    @if ($actors->isEmpty())
        <p>Er zijn nog geen acteurs toegevoegd.</p>
    @else
        <ul>
            @foreach ($actors as $actor)
                <li>
                    {{ $actor->first_name }} {{ $actor->last_name }} - 
                    <a href="{{ route('actors.show', $actor->id) }}">Bekijk details</a>
                </li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('media.index') }}">Bekijk media</a>
</body>
</html>