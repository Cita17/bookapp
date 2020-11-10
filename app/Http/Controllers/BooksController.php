<?php

namespace App\Http\Controllers;
use App\Models\Book;

class BooksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
public function index()
{
  return Book::all();
}

public function showById($id)
{
    $book = Book::find($id);
    if (!$book) {
        return response()->json([
            'message' => 'Book Not Found'
        ], 404);
    } 
    return $book;
}

    //
}