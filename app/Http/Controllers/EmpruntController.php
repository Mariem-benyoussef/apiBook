<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Emprunt;
use Illuminate\Http\Request;

class EmpruntController extends Controller
{
    public function add(Request $request){
        $emprunt=new Emprunt();
        $emprunt->book=$request->book;
        $emprunt->pupil=$request->pupil;
        $book=Book::find($request->book);
        $book->nbreExemplaire-=1;
        $book->save();
        return $emprunt->save();

    }
    public function show(){
        return Emprunt::all();
    }
}
