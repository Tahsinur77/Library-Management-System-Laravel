<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Bookdetail;

class bookController extends Controller
{
    //

    public function bookPage(){
        return view('Book.bookAdd');
    }

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

        return view('Book.bookList')
        ->with('books',$books);
    }

    public function bookDetails(Request $req){
        $bookdetails = Bookdetail::where('bookid',$req->id)->get();

        return view('Book.bookDetails')
        ->with('bookdetails',$bookdetails);
    }

    public function bookEdit(Request $request){
        $id = $request->id;
        $book = Book::where('id',$id)->first();
        return view('Book.editBook')->with('book',$book);
    }

    public function bookEditSubmit(Request $req){

        $book = Book::where('id',$req->id)->first();
        $book->name = $req->name;
        $book->quantity = $req->quantity;
        $book->save();
      
        foreach($book->bookDetail as $p){
            $req->session()->put('desknumber',$p->desknumber);
            break;
        }
        
        $bookdetail = Bookdetail::where('bookid',$book->id)->delete();

        for($i = 1 ; $i <= $req->quantity; $i++){
            $bookdetail = new Bookdetail();
            $bookdetail->bookid = $book->id;
            $bookdetail->serial = $i;
            $bookdetail->desknumber = $req->session()->get('desknumber');
            $bookdetail->save();
        }
        
        return redirect()->route('bookList');
    }

    public function bookDelete(Request $request){
        $id = $request->id;
        $book = Book::where('id',$id)->delete();
        $bookdetail = Bookdetail::where('bookid',$id)->delete();
        return redirect()->route('bookList');
    }
}
