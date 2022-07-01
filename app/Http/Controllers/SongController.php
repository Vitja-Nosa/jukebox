<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Genre;

class SongController extends Controller
{
    public function show($song_id) {
        $song = $this->getSong($song_id);
        return view('songs/detailpage', ['song' => $song]);
    }

    public function getSong($id) {
        $song = Song::find($id);
        $song->genre = Genre::find($song->genre_id);
        return $song;
    }
}
