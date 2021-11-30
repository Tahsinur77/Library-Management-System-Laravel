<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Bookdetail;

class bookController extends Controller
{
    //

    public function bookadd(Request $req){
        $book = new Book();
        $book->name = $req->name;
        $book->quantity = $req->quantity;
        $book->save();


        for($i = 1 ; $i <= $req->quantity; $i++){
            $bookdetail = new Bookdetail();
            $bookdetail->bookid = $book->id;
            $bookdetail->serial = $i;
            $bookdetail->desknumber = $req->desknumber;
            $bookdetail->save();
        }


        return redirect()->route('bookList');

        
    }

    public function bookList(){
        $books = Book::all();

        return view('bookList')
        ->with('books',$books);
    }

    public function bookEdit(Request $request){
        $id = $request->id;
        $book = Book::where('id',$id)->first();
        return view('editBook')->with('book',$book);
    }

    public function bookEditSubmit(Request $request){
        $book = Book::where('id',$request->id)->first();
        $book->name = $req->name;
        $book->quantity = $req->quantity;
        $book->save();


        for($i = 1 ; $i <= $req->quantity; $i++){
            $bookdetail = new Bookdetail();
            $bookdetail->bookid = $book->id;
            $bookdetail->serial = $i;
            $bookdetail->desknumber = $req->desknumber;
            $bookdetail->save();
        }
        
        $var->save();
        return $var;
    }

    public function bookDelete(Request $request){
        $id = $request->id;
        $book = Book::where('id',$id)->delete();
        $bookdetail = Bookdetail::where('bookid',$id)->delete();
        return redirect()->route('bookList');
    }
}
