@extends('Layouts.book')

@section('editBook')

<div id="editBook">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{route('bookEditSubmit')}}" method="post">
                            {{csrf_field()}}
                            <br><br>
                            <h3 class="text-center text-success">Edit Book</h3>
                            <br>

                            <input type="hidden" id = "id" name = "id" value = "{{$book->id}}">

                            <div class="form-group">
                                <label for="name" class="text-success">Book Name:</label><br>
                                <input type="text" name="name" id="name" value = '{{$book->name}}' class="form-control">
                                @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="quantity" class="text-success">Quantity:</label><br>
                                <input type="text" name="quantity" id="quantity"  value = "{{$book->quantity}}" class="form-control">
                                @error('quantity')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            

                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-success btn-md" value="Edit">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection