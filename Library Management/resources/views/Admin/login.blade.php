@extends('Layouts.app')

@section('login')

<div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{route('loginSubmit')}}" method="post">
                            {{csrf_field()}}
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="phoneNumber" class="text-info">Phone Number:</label><br>
                                <input type="text" name="phoneNumber" id="phoneNumber" class="form-control">
                                @error('phoneNumber')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                                @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Login">
                                <a href="{{route('adminReg')}}" style = "margin-left:275px"class="btn btn-info btn-md">Register here</a>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection