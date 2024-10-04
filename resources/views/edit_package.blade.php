@extends('layouts.app1')
@section('title','')
@section('main-content')

<div class= "fs-4 mt-3 ms-5 package-lead fw-semibold"><span><a href="{{ route('booking') }}" class="text-decoration-none fs-4 text-dark package-lead fw-semibold">Package</a></span> > Edit Travel Package</div>

<div class="container my-3 py-5">
   <div class="card w-50 h-auto mx-auto shadow package-lead p-4">
        <form action="{{ route('update_package', $data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
            <!-- Package Name -->
            <div class="mb-3">
                <label for="packageName" class="form-label">Package Name</label>
                <input type="text" class="form-control package-lead" id="packageName" placeholder="Lakeside Motel Waterfront" name="package_name" value="{{$data->package_name}}">
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control package-lead" id="description" rows="5" placeholder="Description" name="description">{{ $data->description }}</textarea>
            </div>

            <!-- Days -->
            <div class="mb-3">
                <label for="days" class="form-label">Days</label>
                <input type="text" class="form-control package-lead" id="days" placeholder="4 Nights 5 Days" name="staying_days" value="{{$data->staying_days}}">
            </div>

            <!-- Price -->
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control package-lead" id="price" placeholder="Rs 130.00">
            </div>

            <!-- Number of Persons -->
            <div class="mb-3">
                <label for="noOfPersons" class="form-label">No of Person</label>
                <input type="text" class="form-control package-lead" id="noOfPersons" placeholder="No of person">
            </div>

            <!-- Day 1 -->
            <div class="mb-3">
            <div class="d-flex justify-content-between align-items-center mb-3">
    <h5>Day 1</h5>
    <a href="#" class="btn btn-danger text-decoration-none">
        <i class="fas fa-trash-alt"></i>
    </a>
</div>

<div class="card p-3 mb-2">
                <!-- Districts -->
    <div class="row">
    <div class="col-12">
        <label class="form-label">District</label>
        <div class="form-check-container d-flex flex-wrap">
            <div class="form-check col-6 col-md-3  mb-3"> 
                <input class="form-check-input" type="checkbox" id="districtJaffna">
                <label class="form-check-label" for="districtJaffna">Jaffna</label>
            </div>
            <div class="form-check col-6 col-md-3 mb-3">
                <input class="form-check-input" type="checkbox" id="districtTrinco">
                <label class="form-check-label" for="districtTrinco">Trinco</label>
            </div>
            <div class="form-check col-6 col-md-3 mb-3">
                <input class="form-check-input" type="checkbox" id="districtBatticaloa">
                <label class="form-check-label" for="districtBatticaloa">Batti</label>
            </div>
            <div class="form-check col-6 col-md-3 mb-3">
                <input class="form-check-input" type="checkbox" id="districtMatara">
                <label class="form-check-label" for="districtMatara">Matara</label>
            </div>
        </div>
    </div>
</div>


                <!-- Place -->
                <div class="mb-3 mt-2">
                    <label for="place" class="form-label">Place</label>
                    <select class="form-select package-lead" id="place">
                        <option selected>Select Place</option>
                        <option value="1">Nallur</option>
                        <option value="2">Nalur</option>
                        <option value="3">Nallur 2</option>
                    </select>
                </div>

                <!-- Meals -->
                <label class="form-label">Meal</label>
<div class="form-check-container d-flex flex-wrap">
    <div class="form-check col-6 col-md-4 mb-3"> 
        <input class="form-check-input" type="checkbox" id="mealDinner">
        <label class="form-check-label" for="mealDinner">Dinner</label>
    </div>
    <div class="form-check col-6 col-md-4 mb-3">
        <input class="form-check-input" type="checkbox" id="mealBreakfast">
        <label class="form-check-label" for="mealBreakfast">Breakfast</label>
    </div>
    <div class="form-check col-6 col-md-4 mb-3">
        <input class="form-check-input" type="checkbox" id="mealLunch">
        <label class="form-check-label" for="mealLunch">Lunch</label>
    </div>
</div>


                <!-- Accommodation -->
                <div class="mb-3 mt-2">
                    <label for="accommodation" class="form-label">Accommodation</label>
                    <select class="form-select package-lead" id="accommodation">
                        <option selected>Select Accommodation</option>
                        <option value="1">Jetwing Hotel</option>
                    </select>
                </div>

                <!-- Transport -->
                <label class="form-label">Transport</label>
<div class="form-check-container d-flex flex-wrap">
    <div class="form-check col-6 col-md-3 mb-3"> 
        <input class="form-check-input" type="radio" name="transport" id="transportCar">
        <label class="form-check-label" for="transportCar">Car</label>
    </div>
    <div class="form-check col-6 col-md-3 mb-3">
        <input class="form-check-input" type="radio" name="transport" id="transportBus">
        <label class="form-check-label" for="transportBus">Bus</label>
    </div>
    <div class="form-check col-6 col-md-3 mb-3">
        <input class="form-check-input" type="radio" name="transport" id="transportMinivan">
        <label class="form-check-label" for="transportMinivan">Mini Van</label>
    </div>
    <div class="form-check col-6 col-md-3 mb-3">
        <input class="form-check-input" type="radio" name="transport" id="transportVan">
        <label class="form-check-label" for="transportVan">Van</label>
    </div>
</div>

</div>

<div class="my-3">
<a href="#" class=" text-dark fw-semibold text-decoration-none"> + Next Day</a>
</div>


            <!-- Image Upload Section -->
            <div class="mb-3">
    <label for="firstimage" class="form-label fw-semibold">Add Images</label>
    <div class="row mx-auto">
    <!-- First box -->
    <div class="col-4 col-sm-6 col-md-4">
        <div class="small-box" style="border: 1px solid black; cursor: pointer;" onclick="document.getElementById('firstimage').click()">
        <img id="preview1" src="/packaged/{{$data->image}}" style="width: 100%; height: 150px; object-fit: cover; {{ $data->image ? '' : 'display: none;' }}" alt="Image Preview" />
        <input type="file" id="firstimage" class="visually-hidden" name="image" onchange="getImage(this, 'preview1');">
        </div>
    </div>
    <!-- Second box -->
    <div class="col-4 col-sm-6 col-md-4">
        <div class="small-box" style="border: 1px solid black; cursor: pointer;" onclick="document.getElementById('secondimage').click()">
            <img id="preview2" style="width: 100%; height: 150px; object-fit: cover; display: none;" alt="Image Preview" />
            <input type="file" id="secondimage" class="visually-hidden" onchange="getImage(this, 'preview2');">
        </div>
    </div>
    <!-- Third box -->
    <div class="col-4 col-sm-6 col-md-4">
        <div class="small-box" style="border: 1px solid black; cursor: pointer;" onclick="document.getElementById('thirdimage').click()">
            <img id="preview3" style="width: 100%; height: 150px; object-fit: cover; display: none;" alt="Image Preview" />
            <input type="file" id="thirdimage" class="visually-hidden" onchange="getImage(this, 'preview3');">
        </div>
    </div>
</div>

<div class="row mt-3 mx-auto">
        <div class="col-4 col-sm-6 col-md-4">
            <div class="small-box" style="border: 1px solid black; cursor: pointer;" onclick="document.getElementById('fourthimage').click()">
                <img id="preview4" style="width: 100%; height: 150px; object-fit: cover; display: none;" alt="Image Preview" />
                <input type="file" id="fourthimage" class="visually-hidden" onchange="getImage(this, 'preview4');">
            </div>
        </div>
        <div class="col-4 col-sm-6 col-md-4">
            <div class="small-box" style="border: 1px solid black; cursor: pointer;" onclick="document.getElementById('fifthimage').click()">
                <img id="preview5" style="width: 100%; height: 150px; object-fit: cover; display: none;" alt="Image Preview" />
                <input type="file" id="fifthimage" class="visually-hidden" onchange="getImage(this, 'preview5');">
            </div>
        </div>
        <div class="col-4 col-sm-6 col-md-4">
            <div class="small-box" style="border: 1px solid black; cursor: pointer;" onclick="document.getElementById('sixthimage').click()">
                <img id="preview6" style="width: 100%; height: 150px; object-fit: cover; display: none;" alt="Image Preview" />
                <input type="file" id="sixthimage" class="visually-hidden" onchange="getImage(this, 'preview6');">
            </div>
        </div>
    </div>


            <!-- Save Button -->
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-danger package-lead text-white px-2" onclick="confirmation(event)">Save</button>
            </div>
        </form>
    </div>
</div>


@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/edit_package.css') }}">
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/edit_package.js') }}"></script>
@endsection