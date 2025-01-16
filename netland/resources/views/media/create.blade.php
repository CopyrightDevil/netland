<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuwe Media Toevoegen</title>
</head>
<body>
    <h1>Nieuwe Media Toevoegen</h1>
    <form action="{{ route('media.store') }}" method="POST">
        @csrf
        <label for="title">Titel:</label>
        <input type="text" id="title" name="title" required><br>

        <label for="rating">Rating:</label>
        <input type="number" id="rating" name="rating" step="0.1" required><br>

        <label for="length_in_minutes">Lengte (in minuten):</label>
        <input type="number" id="length_in_minutes" name="length_in_minutes" required><br>

        <label for="released_at">Uitgebracht op:</label>
        <input type="date" id="released_at" name="released_at" required><br>

        <label for="country_of_origin">Land van oorsprong:</label>
        <input type="text" id="country_of_origin" name="country_of_origin" required><br>

        <label for="youtube_trailer_id">YouTube Trailer ID:</label>
        <input type="text" id="youtube_trailer_id" name="youtube_trailer_id"><br>

        <label for="summary">Samenvatting:</label>
        <textarea id="summary" name="summary" required></textarea><br>

        <label for="spoken_in_language">Gesproken taal:</label>
        <input type="text" id="spoken_in_language" name="spoken_in_language" required><br>

        <label for="type">Type:</label>
        <select id="type" name="type" required>
            <option value="movie">Film</option>
            <option value="series">Serie</option>
        </select><br>

        <button type="submit">Opslaan</button>
    </form>
</body>
</html>