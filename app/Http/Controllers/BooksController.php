<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('book.index', [
            'books' => Book::paginate(30)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(book $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(book $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, book $books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book $books)
    {
        //
    }
}
