@extends('layouts.app')
@section('title','')
@section('main-content')

<section>
  <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators mb-2 mb-lg-5 mb-md-5">
      <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0" class="active bg-light" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1" aria-label="Slide 2" class="bg-light"></button>
      <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2" aria-label="Slide 3" class="bg-light"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active position-relative">
        <img src="{{ asset('img/travel1.jpg') }}" class="d-block p-0 w-100" style="height: 700px;" alt="">
        <div class="carousel-caption position-absolute d-flex flex-column justify-content-center align-items-start h-100 z-2">
          <p class="mb-3  text-white fw-bold display-4 px-md-5 px-lg-5 px-0">Make in your journey...</p>
          <a href="#" class="btn btn-danger fs-5 ms-5 py-1 px-4 border-0 fw-medium text-white mt-2">View Package</a>
        </div>
      </div>
      <div class="carousel-item position-relative">
        <img src="{{ asset('img/travel2.jpg') }}" class="d-block w-100" style="height: 700px;" alt="">
        <div class="carousel-caption d-flex position-absolute flex-column justify-content-center align-items-start h-100 z-2">
          <p class="mb-3 text-white fw-bold display-4 px-md-5 px-lg-5 px-0">Make in your journey...</p>
          <a href="#" class="btn btn-danger fs-5 ms-5 py-1 px-4 fw-medium border-0 text-white mt-2">View Package</a>
        </div>
      </div>
      <div class="carousel-item position-relative">
        <img src="{{ asset('img/travel3.jpg') }}" class="d-block w-100" style="height: 700px;" alt="">
        <div class="carousel-caption d-flex position-absolute flex-column justify-content-center align-items-start h-100 z-2">
          <p class="mb-3 fw-bold text-white display-4 px-md-5 px-lg-5 px-0">Make in your journey...</p>
          <a href="#" class="btn btn-danger fs-5 ms-5 py-1 px-4 fw-medium border-0 text-white mt-2">View Package</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="Home-1">
<div class="container py-5">
      <div class="row">
          <div class="col-12 col-md-6 col-sm-12 mb-3">
              <div class="text-left">
                  <h4 class="text-left text-dark fw-normal">Our Story</h2>
                  <h2 class="text-left text-primary fw-semibold mb-4">About Us</h2>
              </div>
              <p class="about-lead fw-normal">At Trezzert, we are dedicated to providing exceptional travel experiences across Sri Lanka. Specializing in customizable tour packages, we offer everything from cultural explorations to beach getaways, wildlife adventures, and more. Our mission is to make your journey seamless, offering accommodation, meals, and transportation tailored to your preferences. With a focus on safety and customer satisfaction, we travel with you throughout your trip, resolving any issues along the way. Whether you choose a pre-designed package or create your own, Trezzert is here to deliver a hassle-free, unforgettable Sri Lankan adventure.</p>
          </div>
          <div class="col-12 col-md-6 col-sm-12 position-relative">
                      <div class="custom-shape-1 position-absolute shape-top-left"></div>
                      <div class="custom-shape-2 position-absolute shape-bottom-right"></div>
              <!-- <img src="{{ asset('img/') }}" alt="Cinnamon Powder" class="object-fit-cover"> -->
          </div>
      </div>
  </div>

  <div class="container pb-5 d-md-none d-lg-block">
            <div class="row">
                <div class="col">
                    <h4 class="text-center text-dark fw-normal">Our Packages</h2>
                    <h2 class=" text-center text-primary fw-semibold mb-4">Fall into travel</h2>
                </div>
                <div class="d-flex flex-column align-items-end mb-3">
                     <a href="#" class="btn btn-light fs-5 ms-5 py-1 px-4 fw-medium border border-danger text-danger mt-2">See All</a>
                 </div>
                 <div class="text-muted">
                    <p class="package-lead">Discover customized travel packages designed for your dream journey, combining adventure, comfort, and the best prices for a hassle-free experience.</p>
                 </div>
            </div>
            <div class="row mt-3">

            <div class="col-xl-3 mb-3">
                    <div class="card hover-effects">
                        <img src="{{ asset('img/package.png') }}" class="package-img" alt="Packages">
                        <div class="d-flex justify-content-between bg-danger text-white p-2 rounded-0">
                             <div class="d-flex align-items-center">
                                     <!-- Price Icon -->
                                     <i class="fas fa-tag me-2"></i>
                                     Rs.XXXXX
                              </div>
                             <div class="d-flex align-items-center">
                                    <!-- People Icon -->
                                   <i class="fas fa-users me-2"></i>
                               5 People
                             </div>
                         </div>
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Package Name Package Name</h5>
                            <h6 class="card-subtitle mb-2 text-primary">Jaffna | Trinco | Batti</h6>
                            <p class="card-text text-muted">Qui tempore voluptate qui quia commodi commodi rem praesentium alias et.</p>
                            <div class="text-center">
                               <a href="#" class="btn btn-danger fs-5 ms-5 py-1 px-4 fw-medium border-0 text-white mt-2">View more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 mb-3 d-none d-md-block">
                    <div class="card hover-effects">
                        <img src="{{ asset('img/package.png') }}" class="package-img" alt="Packages">
                        <div class="d-flex justify-content-between bg-danger text-white p-2 rounded-0">
                             <div class="d-flex align-items-center">
                                     <!-- Price Icon -->
                                     <i class="fas fa-tag me-2"></i>
                                     Rs.XXXXX
                              </div>
                             <div class="d-flex align-items-center">
                                    <!-- People Icon -->
                                   <i class="fas fa-users me-2"></i>
                               5 People
                             </div>
                         </div>
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Package Name Package Name</h5>
                            <h6 class="card-subtitle mb-2 text-primary">Jaffna | Trinco | Batti</h6>
                            <p class="card-text text-muted">Qui tempore voluptate qui quia commodi commodi rem praesentium alias et.</p>
                            <div class="text-center">
                               <a href="#" class="btn btn-danger fs-5 ms-5 py-1 px-4 fw-medium border-0 text-white mt-2">View more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 mb-3 d-none d-md-block">
                    <div class="card hover-effects">
                        <img src="{{ asset('img/package.png') }}" class="package-img" alt="Packages">
                        <div class="d-flex justify-content-between bg-danger text-white p-2 rounded-0">
                             <div class="d-flex align-items-center">
                                     <!-- Price Icon -->
                                     <i class="fas fa-tag me-2"></i>
                                     Rs.XXXXX
                              </div>
                             <div class="d-flex align-items-center">
                                    <!-- People Icon -->
                                   <i class="fas fa-users me-2"></i>
                               5 People
                             </div>
                         </div>
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Package Name Package Name</h5>
                            <h6 class="card-subtitle mb-2 text-primary">Jaffna | Trinco | Batti</h6>
                            <p class="card-text text-muted">Qui tempore voluptate qui quia commodi commodi rem praesentium alias et.</p>
                            <div class="text-center">
                               <a href="#" class="btn btn-danger fs-5 ms-5 py-1 px-4 fw-medium border-0 text-white mt-2">View more</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 mb-3 d-none d-md-block">
                    <div class="card hover-effects">
                        <img src="{{ asset('img/package.png') }}" class="package-img" alt="Packages">
                        <div class="d-flex justify-content-between bg-danger text-white p-2 rounded-0">
                             <div class="d-flex align-items-center">
                                     <!-- Price Icon -->
                                     <i class="fas fa-tag me-2"></i>
                                     Rs.XXXXX
                              </div>
                             <div class="d-flex align-items-center">
                                    <!-- People Icon -->
                                   <i class="fas fa-users me-2"></i>
                               5 People
                             </div>
                         </div>
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">Package Name Package Name</h5>
                            <h6 class="card-subtitle mb-2 text-primary">Jaffna | Trinco | Batti</h6>
                            <p class="card-text text-muted">Qui tempore voluptate qui quia commodi commodi rem praesentium alias et.</p>
                            <div class="text-center">
                               <a href="#" class="btn btn-danger fs-5 ms-5 py-1 px-4 fw-medium border-0 text-white mt-2">View more</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</section>

<section id="Home-2">
        <div class="text-center pt-5">
                 <h2 class="mb-2 display-3 fw-bold text-white">Why choose Trezzert?</h2>
                 <h4 class="text-white">our services have been trusted by world travelers.</h4>
        </div>
        <div class="container mt-3">
    <!-- First Card (Full-width in its own row) -->
    <div class="row justify-content-center mb-4">
      <div class="col-md-6">
        <div class="card text-center p-4 shadow">
          <h3 class="card-title text-primary fw-bold">Customizable Packages</h3>
          <p class="card-text package-lead">Tailor your travel experience with flexible itineraries, accommodations, and activities that suit your preferences.</p>
        </div>
      </div>
    </div>
    <!-- Second Card (Full-width in its own row) -->
    <div class="row justify-content-center mb-4">
      <div class="col-md-6">
        <div class="card text-center p-4 shadow">
          <h3 class="card-title text-primary fw-bold">Safe & Reliable Travel</h3>
          <p class="card-text package-lead">Enjoy secure transportation, handpicked accommodations, and expert guidance throughout your journey.</p>
        </div>
      </div>
    </div>
    <!-- Third Card (Full-width in its own row) -->
    <div class="row justify-content-center mb-4">
      <div class="col-md-6">
        <div class="card text-center p-4 rounded shadow">
          <h3 class="card-title text-primary fw-bold">Comprehensive Support</h3>
          <p class="card-text package-lead">We offer 24/7 assistance, ensuring a seamless, worry-free trip from start to finish.</p>
        </div>
      </div>
    </div>
  </div>   
</section>

<section id="Home-3" class="pb-5">
  <div class="container py-5">
  <div class="row">
                <div class="col">
                    <h4 class="text-center text-dark fw-normal">Gallery</h2>
                    <h2 class=" text-center text-primary fw-semibold mb-4">Unforgettable moment</h2>
                </div>
        </div>

        <div class="row g-3">
            <!-- First Column -->
            <div class="col-md-6">
                <div class="position-relative d-flex align-items-flex-end">
                    <img src="{{ asset('img/jaffna.png') }}" class="img-fluid" alt="Jaffna">
                    <div class="position-absolute display-6 fw-semibold text-white bottom-0 start-0 m-4">JAFFNA</div>
                </div>
            </div>
            <!-- Second Column -->
            <div class="col-md-6">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="position-relative d-flex align-items-flex-end">
                            <img src="{{ asset('img/Trinco.png') }}" class="img-fluid" alt="Trinco">
                            <div class="position-absolute display-6 fw-semibold text-white bottom-0 start-0 m-4">TRINCO</div>
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="position-relative d-flex align-items-flex-end">
                            <img src="{{ asset('img/batti.jpg') }}" class="img-fluid rounded" alt="Batticaloa">
                            <div class="position-absolute display-6 fw-semibold text-white bottom-0 start-0 m-4">BATTI</div>
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="position-relative d-flex align-items-flex-center">
                            <img src="{{ asset('img/ampara.jpg') }}" class="img-fluid rounded" alt="Ampara">
                            <div class="position-absolute display-6 fw-semibold text-white bottom-0 start-0 m-4">AMPARA</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>

  <div class="container py-5">
  <div class="row">
                <div class="col">
                    <h4 class="text-center text-dark fw-normal">Testimonial</h2>
                    <h2 class=" text-center text-primary fw-semibold mb-4">What our client say</h2>
                </div>
                 <div class="text-muted text-center">
                    <p class="package-lead">Create  a visual identity for your company and a overall brand</p>
                 </div>
            </div>

  <div id="carouselExample" class="carousel">
  <div class="carousel-inner main-slide px-5">
    <div class="carousel-item active slider mx-2">
    <div class="card review-card">
          <div class="card-image position relative">
          <div class="d-flex align-items-center">
            <img src="{{ asset('img/review.png') }}" alt="" class="img-fluid object-fit-cover rounded-circle p-3">
            <h5 class="fw-semibold ms-3">Rajesh K<br>(India)</h5>
          </div>
          </div>
          <div class="card-body d-flex flex-direction-column align-items-center mt-0">
                            <p class="about-lead card-text text-muted">"Our Sri Lanka tour was nothing short of spectacular. Trezzert took care of everything, from airport pickup to hotel stays. The custom package allowed us to add extra stops, and the pricing was very reasonable. Truly an unforgettable experience!"</p>
            </div>
        </div>
    </div>

    <div class="carousel-item slider mx-2">
      <div class="card review-card">
          <div class="card-image position relative">
          <div class="d-flex align-items-center">
            <img src="{{ asset('img/review.png') }}" alt="" class="img-fluid object-fit-cover rounded-circle p-3">
            <h5 class="fw-semibold ms-3">Emma K<br>(India)</h5>
          </div>
          </div>
          <div class="card-body d-flex flex-direction-column align-items-center mt-0">
                            <p class="about-lead card-text text-muted">"Our Sri Lanka tour was nothing short of spectacular. Trezzert took care of everything, from airport pickup to hotel stays. The custom package allowed us to add extra stops, and the pricing was very reasonable. Truly an unforgettable experience!"</p>
            </div>
        </div>
    </div>

    <div class="carousel-item slider mx-3 ">
     <div class="card review-card">
          <div class="card-image position relative">
          <div class="d-flex align-items-center">
            <img src="{{ asset('img/review.png') }}" alt="" class="img-fluid object-fit-cover rounded-circle p-3">
            <h5 class="fw-semibold ms-3">Raj K<br>(India)</h5>
          </div>
          </div>
          <div class="card-body d-flex flex-direction-column align-items-center mt-0">
                            <p class="about-lead card-text text-muted">"Our Sri Lanka tour was nothing short of spectacular. Trezzert took care of everything, from airport pickup to hotel stays. The custom package allowed us to add extra stops, and the pricing was very reasonable. Truly an unforgettable experience!"</p>
            </div>
        </div>
    </div>

    <div class="carousel-item slider mx-2">
     <div class="card review-card">
          <div class="card-image position relative">
          <div class="d-flex align-items-center">
            <img src="{{ asset('img/review.png') }}" alt="" class="img-fluid object-fit-cover rounded-circle p-3">
            <h5 class="fw-semibold ms-3">Rani K<br>(India)</h5>
          </div>
          </div>
          <div class="card-body d-flex flex-direction-column align-items-center mt-0">
                            <p class="about-lead card-text text-muted">"Our Sri Lanka tour was nothing short of spectacular. Trezzert took care of everything, from airport pickup to hotel stays. The custom package allowed us to add extra stops, and the pricing was very reasonable. Truly an unforgettable experience!"</p>
            </div>
        </div>
    </div>

    <div class="carousel-item slider mx-2">
     <div class="card review-card">
          <div class="card-image position relative">
          <div class="d-flex align-items-center">
            <img src="{{ asset('img/review.png') }}" alt="" class="img-fluid object-fit-cover rounded-circle p-3">
            <h5 class="fw-semibold ms-3">Rajeev K<br>(India)</h5>
          </div>
          </div>
          <div class="card-body d-flex flex-direction-column align-items-center mt-0">
                            <p class="about-lead card-text text-muted">"Our Sri Lanka tour was nothing short of spectacular. Trezzert took care of everything, from airport pickup to hotel stays. The custom package allowed us to add extra stops, and the pricing was very reasonable. Truly an unforgettable experience!"</p>
            </div>
        </div>
    </div>

    <div class="carousel-item slider mx-2">
     <div class="card review-card">
          <div class="card-image position relative">
          <div class="d-flex align-items-center">
            <img src="{{ asset('img/review.png') }}" alt="" class="img-fluid object-fit-cover rounded-circle p-3">
            <h5 class="fw-semibold ms-3">Rajan K<br>(India)</h5>
          </div>
          </div>
          <div class="card-body d-flex flex-direction-column align-items-center mt-0">
                            <p class="about-lead card-text text-muted">"Our Sri Lanka tour was nothing short of spectacular. Trezzert took care of everything, from airport pickup to hotel stays. The custom package allowed us to add extra stops, and the pricing was very reasonable. Truly an unforgettable experience!"</p>
            </div>
        </div>
    </div>
    
  </div>
  
  <button class="carousel-control-prev me-5 pe-5" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next ms-5 ps-5" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button> 
</div>
  </div>
</section>

<section class="newsletter-section">
    <div class="container postion absolute top-0 mb-3 pb-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 col-11">
                <div class="newsletter-card p-3 bg-white rounded-4">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4 d-none d-md-flex d-lg-flex">
                            <img src="{{ asset('img/mail.png') }}" alt="Newsletter bird" class=" img-fluid">
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="px-5">
                                <h6 class="text-primary mb-2 fs-5 text-decoration-underline text-center text-md-start text-lg-start">Newsletters</h6>
                                <h2 class="newsletter-title text-danger fw-bold mb-3">Get Our Every Single Notification</h2>
                                <form class="align-items-center d-flex">
                                    <div class="col-md-7">
                                        <input type="email" class="form-control text-center" placeholder="Enter your email here">
                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn bg-danger fs-5 text-white ms-3">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/home.js') }}"></script>
@endsection