@extends('Layouts.book')

@section('bookadding')

<div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{route('bookadd')}}" method="post">
                            {{csrf_field()}}

                            <h3 class="text-center text-success">Adding Book</h3>

                            <div class="form-group">
                                <label for="name" class="text-success">Book Name:</label><br>
                                <input type="text" name="name" id="name" class="form-control">
                                @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="quantity" class="text-success">Quantity:</label><br>
                                <input type="text" name="quantity" id="quantity" class="form-control">
                                @error('quantity')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="desknumber" class="text-success">Desknumber:</label><br>
                                <input type="text" name="desknumber" id="desknumber" class="form-control">
                                @error('desknumber')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-success btn-md" value="Add">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection