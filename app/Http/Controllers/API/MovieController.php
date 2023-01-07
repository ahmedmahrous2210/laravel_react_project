<?php

namespace App\Http\Controllers\API;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return response()->json([
            'status' => 200,
            'movies' => $movies
        ]);
    }
    public function store(Request $request )
    {
        $movie = new Movie;
        $movie->title = $request->input('title');
        $movie->name = $request->input('name');
        $movie->rating = $request->input('rating');
        $movie->reviews = $request->input('reviews');
        $movie->save();

        return response()->json([
            'status' => 200,
            'message' => 'Movie Added successfully',
        ]);
    }

    public function edit($id)
    {
        $movie = Movie::find($id);
        return response()->json([
            'status' => 200,
            'movie' => $movie,
        ]);

    }

    public function update(Request $request, $id){
        $movie = Movie::find($id);
        $movie->title = $request->input('title');
        $movie->name = $request->input('name');
        $movie->rating = $request->input('rating');
        $movie->reviews = $request->input('reviews');
        $movie->update();

        return response()->json([
            'status' => 200,
            'message' => 'Movie Updated successfully',
        ]);
    }
}
