<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genres - Jukebox</title>
</head>
<body>
    <ul>
        @foreach($genres as $genre)
        <li><a href="#">{{$genre->name}}</a></li>
        @endforeach
    </ul>
</body>
</html>