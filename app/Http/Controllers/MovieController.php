<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
    public function getAllMovies()
    {
        return response()->json(Movie::all(), 200);
    }

    public function getMovieById($id)
    {
        $movie = Movie::find($id);
        if ($movie) {
            return response()->json($movie, 200);
        } else {
            return response()->json(['message' => 'Movie not found'], 404);
        }
    }

    public function createMovie(Request $request)
    {
        $movie = Movie::create([
            'title' => $request->title,
            'synopsis' => $request->synopsis,
            'year' => $request->year,
            'cover' => $request->cover,
        ]);

        return response()->json($movie, 201);
    }

    //put function to update the movie
    public function updateMovie(Request $request, $id)
    {
        $movie = Movie::find($id);
        if ($movie) {
            $movie->update([
                'title' => $request->title,
                'synopsis' => $request->synopsis,
                'year' => $request->year,
                'cover' => $request->cover,
            ]);
            return response()->json($movie, 200);
        } else {
            return response()->json(['message' => 'Movie not found'], 404);
        }
    }

    public function delete($id)
    {
        // Find the movie by ID
        $movie = Movie::find($id);

        // Check if the movie exists
        if (!$movie) {
            return response()->json(['message' => 'Movie not found'], 404);
        }

        // Delete the movie
        $movie->delete();

        // Return a success response
        return response()->json(['message' => 'Movie deleted successfully'], 200);
    }

}