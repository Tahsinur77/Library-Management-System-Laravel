@extends('Layouts.book')

@section('bookList')


<br><br>
<h3 class="text-center text-success">Book List</h3>
<br>

<div class="container">
    <table class="table">
        <tr>
            <th>Book Name</th>
            <th>Quantity</th>
            <th>Details</th>
            <th>Edit</th>
            <th>Delete</th>
            <!-- <th></th> -->
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{$book->name}}</td>
            <td>{{$book->quantity}}</td>
            <td><a href="/bookDetails/{{$book->id}}" class = "btn btn-success">Details</a></td>
            <td><a href="" class = "btn btn-info">Edit</a></td>
            <td><a href="" class = "btn btn-danger">Delete</a></td>
            <!-- <td>
                @foreach($book->bookDetail as $bb)
                    <p>{{$bb->serial}}</p>
                @endforeach
            </td> -->
            
        </tr>
        @endforeach
    </table>
</div>

@endsection