<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment; // Import the Comment model

class CommentController extends Controller
{
    /**
     * Display a listing of the comments.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Fetch all comments from the database
        $comments = Comment::all();
        
        // Return comments as a JSON response
        return response()->json($comments);
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'comments' => 'required|string',
        ]);
    
        // Create a new comment instance
        $comments = new Comment([
            'name' => $validated['fullname'],
            'comments' => $validated['comments'],
        ]);
    
        $comments->save();
    
        return response()->json( 'Comment created');
    }

}
