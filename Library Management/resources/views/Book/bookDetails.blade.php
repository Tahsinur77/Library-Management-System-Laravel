@extends('Layouts.book')

@section('bookDetails')

<br><br>
<h3 class="text-center text-success">Book Details</h3>
<br>

<div class="container">
    <table class="table">
        <tr>
            <th>Book Name</th>
            <th>Serial No.</th>
            <th>Issuing Book</th>
            <th>Returning Date</th>
            <th>Go</th>
        </tr>
     
        @foreach($bookdetails as $bd)
        <tr>
            <td>{{$bd->book->name}}</td>
            <td>{{$bd->serial}}</td>
            <form action="" method="post">
              <td><input type="text" placeholder = "Member Phone Number" id = "phonenumber" name = "phonenumber"></td>
              <td><input type="date" id="returning"  name = "returning"></td>
              <td><input type="submit" class = "btn btn-info"></td>
            </form>
        </tr>
        @endforeach
    </table>
</div>

@endsection