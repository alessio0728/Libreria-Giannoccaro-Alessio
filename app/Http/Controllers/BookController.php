<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;
use App\Http\Requests\BookStoreRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $books= book::all()->sortBy('title');
        return view('books.index',compact('books'));

      
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
    public function store(BookStoreRequest $request)
    {
        $validated=$request->validated();
        book::create([
            'author' => auth()->user()->name,
            'title' => $validated['title'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            'image' => $validated['image']
        ]);
       // if($request->hasfile('image')&& $request->file('image')->isvalid()){


        //}

        return redirect()->back()->with(['success'=>'Libro inserito con successo']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookStoreRequest $request, Book $book)
    {
        $validated=$request->validated();
        Book::update([
            
            "title" => $validated["title"],
            "description" => $validated["description"],
            "price" => $validated["price"],
            'image' => $validated['image']
        ]);

        return redirect()->back()->with(['success'=>'Libro aggiornato con successo']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
    }
}
