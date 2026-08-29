<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Auth::check()) {
            return view('welcome', [
                'books' => []
            ]);
        }

        $books = Auth::user()->books;

        return view('welcome', [
            'books' => $books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $path = $request->file('image')->store('books/images', 'public');
        
        $book = Book::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $path,
            'user_id' => Auth::user()->id,
        ]);
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        if (isset($request->image) && !empty($request->image)) {
            if (isset($book->image_path) && !empty($book->image_path)) {
                Storage::disk('public')->delete($book->image_path);
            }
            $path = $request->file('image')->store('books/images', 'public');
            $book->image_path = $path;
        }

        $book->title = $request->title;
        $book->description = $request->description;

        $book->save();

        return redirect(route('books.show', ['book' => $book]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        if (isset($book->image_path) && !empty($book->image_path)) {
            Storage::disk('public')->delete($book->image_path);
        }

        $book->delete();

        return redirect('/');
    }
}
