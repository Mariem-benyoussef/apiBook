<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Emprunt;
use App\Models\Rendre;
use Illuminate\Http\Request;

class RendreController extends Controller
{
    function rendre($id){
        $rendre=new Rendre();
        $emprunt=Emprunt::find($id);
        $rendre->book=$emprunt->book;
        $rendre->pupil=$emprunt->pupil;
        $rendre->save();
        $book=Book::find($emprunt->book);
        $book->nbreExemplaire+=1;
        $book->save();
        Emprunt::destroy($id);
        return "le livre est rendu";

    }
        public function show(){
        return Rendre::all();
    }
}
