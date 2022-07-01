<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detailpage - Jukebox</title>
</head>
<body>
    <h1>{{$song->name}}</h1>
    <ul>
        <li>Genre - {{$song->genre->name}}</li>
        <li>Duration - {{$song->duration}}</li>
        <li>Artist/Band - {{$song->artist}}</li>
    </ul>
    <a href="#">add to playlist</a>
</body>
</html>