<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function show(){
        return Book::all();
    }

    public function delete($id){
        return Book::destroy($id);
    }
    // To obtain an instance of the current HTTP request via dependency injection
    public function add(Request $request){
        $book=new Book;
        $book->title=$request->title;
        $book->isbn=$request->isbn;
        $book->anneeEdition=$request->anneeEdition;
        $book->resume=$request->resume;
        $book->nbreExemplaire=$request->nbreExemplaire;
        $book->image=$request->image;
        return $book->save();
    }

    public function update($id,Request $request){
        $book=Book::find($id);
        $book->title=$request->title;
        $book->isbn=$request->isbn;
        $book->anneeEdition=$request->anneeEdition;
        $book->resume=$request->resume;
        $book->nbreExemplaire=$request->nbreExemplaire;
        $book->image=$request->image;
        return $book->save();

    }
}
