@extends('layouts.app1')
@section('title','')
@section('main-content')

<div class= "fs-4 mt-3 ms-5 package-lead fw-semibold">Package</div>

<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div></div>

        <form class="d-flex mx-auto" role="search">
            <input class="form-control me-2 package-lead" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark package-lead" type="submit">Search</button>
        </form>

        <a href="{{ route('add_package') }}" class="btn btn-danger text-white d-flex align-items-center package-lead ms-sm-5rti"> 
            <i class="fas fa-plus me-2"></i>ADD PACKAGE
        </a>
    </div>

    <div class="row g-4 mt-3">
    <!-- Package Card -->
     @foreach($package as $packages)
    <div class="col-lg-6 col-md-6 col-12">
        <div class="card shadow p-3 d-flex flex-row align-items-center">
            <img src="packaged/{{$packages->image}}" class="rounded me-md-3 mb-3 mb-md-0 mx-auto mx-md-0  display-img" alt="Package Image">
            <div class="flex-grow-1">
                <h3 class="mb-1 fw-bold top-0">{{$packages->package_name}}</h3>
                <p class="mb-1 ms-3 package-lead">Package Id: 0{{$packages->id}}</p>
                <p class="mb-1 ms-3 package-lead">Jaffna | Trinco | Batti</p>
                <p class="mb-1 ms-3 package-lead">{{$packages->staying_days}}</p>

                <div class="ms-auto d-flex align-items-center">
                    <a href="#" class="btn btn-danger package-lead me-2">View package</a>
                    <a href="{{ route('edit_package', $packages->id) }}" class="btn btn-danger text-decoration-none mx-1 ms-md-auto me-md-2">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <a href="{{ route('delete_package', $packages->id) }}" class="btn btn-danger text-decoration-none">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

        <div class="pagination custom-class d-flex flex-column align-items-center my-4 py-3">
               {{$package->links()}}
        </div>  
</div>


@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/booking.css') }}">
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/booking.js') }}"></script>
@endsection