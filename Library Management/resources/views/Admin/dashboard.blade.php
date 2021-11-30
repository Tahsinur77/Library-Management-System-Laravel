@extends('Layouts.Dashboard')

@section('dashboard')


<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <h3 class="text-center text-info">Admin Dashboard</h3><br><br>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{asset('storage/admin/members.jpg')}}" height="400px" alt="..." />
                    <div class="card-body p-4">
                        <div class="text-center">
                        </div>
                    </div>

                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('memberOperation')}}">Members</a></div>
                    </div>
                </div>
            </div>


            <div class="col mb-5">
                <div class="card h-100">
                    <img class="card-img-top" src="{{asset('storage/admin/books.jpg')}}" height="400px" alt="..." />

                    <div class="card-body p-4">
                        <div class="text-center">
                        </div>
                    </div>
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('bookPage')}}">Books</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


            
</section>

@endsection