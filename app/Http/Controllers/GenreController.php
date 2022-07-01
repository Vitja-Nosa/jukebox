<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Song;

class GenreController extends Controller
{
    public function showGenres() {
        $genres = Genre::all();
        return view('genres/index', ['genres' => $genres]);
    }
    public function showSongs($genre_id) {
        $genre = Genre::find($genre_id);
        $songs = Song::where('genre_id', $genre_id)->get();
        return view('genres/songs', ['songs' => $songs, 'genre' => $genre]);
    }
}
