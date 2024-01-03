<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //

    public function createBook(Request $request)
    {
        $newBook = new Book;
    }

    public function __invoke()
    {

    }

    public function getBookInfo(Book $book)
    {
        return response()->json($book);
    }
}
