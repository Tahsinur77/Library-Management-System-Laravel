@extends('Layouts.book')

@section('bookDetails')

<br><br>
<h3 class="text-center text-success">Book Details</h3>
<br>

<div class="container">
    <table class="table">
        <tr>
            <th>Book Name</th>
            <th>Desknumber</th>
            <th>Serial No.</th>
            <th>Issuing Book</th>
            <th>Returning Date</th>
            <th>Go</th>
        </tr>
     
        @foreach($bookdetails as $bd)
        <tr>
            <td>{{$bd->book->name}}</td>
            <td>{{$bd->desknumber}}</td>
            <td>{{$bd->serial}}</td>
            
            <form action="{{route('lent')}}" method="post">
                @csrf
              <input type="hidden" id="serial"  name = "serial" value = "{{$bd->serial}}">
              <input type="hidden" id = "bookid" name = "bookid" value= "{{$bd->book->id}}" >
              <td><input type="text" placeholder = "Member Phone Number" id = "phonenumber" name = "phonenumber"></td>
              <td><input type="date" id="returning"  name = "returning"></td>
              
              <td><input type="submit" class = "btn btn-info" value = "Give"></td>
            </form>
        </tr>
        @endforeach
    </table>
</div>

@endsection