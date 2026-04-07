<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['id' => 1, 'title' => 'Laravel Basics'],
            ['id' => 2, 'title' => 'Mastering PHP'],
            ['id' => 3, 'title' => 'Web Development']
        ];

        return view('books', compact('books'));
    }

    public function show($id, $category = null)
    {
        $book = [
            'id' => $id,
            'title' => 'Book ' . $id,
            'category' => $category ?? 'General'
        ];

        return view('book-details', compact('book'));
    }
}