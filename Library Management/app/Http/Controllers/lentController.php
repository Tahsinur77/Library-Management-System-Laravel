<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lent;
use App\Models\Bookdetail;

class lentController extends Controller
{
    //

    public function lent(Request $req){
        $lent = new Lent();
        $lent->bookid = $req->bookid;
        $lent->phonenumber = $req->phonenumber;
        $lent->serialnumber = $req->serial;
        $lent->returningdate = $req->returning;
        $lent->save();

        $bookdetail = Bookdetail::where('serial',$req->serial)->where('bookid',$req->bookid)->delete();

        return redirect()->route('bookList');
    }
}
