@extends('Layouts.app')

@section('adminReg')

<div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{route('regSubmit')}}" method="post">
                            {{csrf_field()}}
                            <h3 class="text-center text-info">Registation</h3>
                            <div class="form-group">
                                <label for="name" class="text-info">Name:</label><br>
                                <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control">
                                @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="email" value="{{old('email')}}" class="form-control">
                                @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone" class="text-info">Phone Number:</label><br>
                                <input type="text" name="phoneNumber" id="phoneNumber" value="{{old('phoneNumber')}}" class="form-control">
                                @error('phoneNumber')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" value="{{old('password')}}" class="form-control">
                                @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword" class="text-info">Confirm Password:</label><br>
                                <input type="password" name="confirmPassword" id="confirmPassword" value="{{old('confirmPassword')}}"  class="form-control">
                                @error('confirmPassword')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="address" class="text-info">Address:</label><br>
                                <input type="text" name="address" id="address" value="{{old('address')}}" class="form-control">
                                @error('address')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="dob" class="text-info">Date Of Birth:</label><br>
                                <input type="date" name="dob" id="dob" value="{{old('dob')}}" class="form-control">
                                @error('dob')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Register">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection