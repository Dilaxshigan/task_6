@extends('layouts.app')
@section('title','')
@section('main-content')

<div class="bg-image d-flex align-items-center">
    <div class="container m-5 position-relative justify-content-center text-center align-items-center z-2">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center justify-content-center">
                <h1 class="text-white fw-semibold mb-4">
                Contact Us
                </h2>
            </div>
        </div>
    </div>
</div>

<div id="content" class="no-bottom no-top">

     <div class="container-md">
        <div class="row">
            <div class="col-md-6">
            <div class="text-center pt-5">
                  <h2 class="text-primary fw-semibold mb-4">Get in Touch</h2>
              </div>
              <div class="container">
                            <div>
                                <div class="row ">
                                    <div class="col-12">
                                                                              
                                        <form id="contactForm" action="#" method="POST">
                                            <input type="hidden" name="_token" value="fmhc1VDqqAkhQSCf1FCQL31UdkY6HfFmtsjBjL2h" autocomplete="off">                                            <div class="mb-3">
                                                <label for="formGroupExampleInput" class="form-label"></label>
                                                <input type="text" class="form-control shadow package-lead"
                                                    style="background-color: #FFEFEF !important;" id="formGroupExampleInput"
                                                    placeholder="Your Name" name="name" required
                                                    pattern="[A-Za-z\s]{3,25}"
                                                    title="Please enter only letters and spaces (min 3 characters, max 25 characters)">
                                                <div id="error_name" style="display:none;color:red;">
                                                    *Please enter your name.
                                                </div>
                                                <input type="hidden" id="honeypot" value name="honeypot">
                                            </div>

                                            <div class="mb-3">
                                                <label for="formGroupExampleInput2" class="form-label"></label>
                                                <input type="tel" required class="form-control shadow package-lead"
                                                    style="background-color: #FFEFEF !important;" id="formGroupExampleInput2"
                                                    placeholder="Phone Number" name="phone" pattern="^\+\d{2}\d{7,17}$"
                                                    title="Please enter a phone number in the format +XXXXXXXXX (country code must)">

                                            </div>

                                            <div class="mb-3">
                                                <label for="formGroupExampleInput3" class="form-label"></label>
                                                <input type="text" class="form-control shadow package-lead"
                                                    style="background-color: #FFEFEF !important;" id="formGroupExampleInput3"
                                                    placeholder="Your Email" name="text" pattern=".+@.+\..+"
                                                    title="Please enter a valid email address" required>

                                            </div>

                                            <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label"></label>
                                                <input type="text" class="form-control shadow package-lead"
                                                    style="background-color: #FFEFEF !important;" id="formGroupExampleInput"
                                                    placeholder="Your Subject" name="subject" required
                                                    pattern="[A-Za-z\s]{3,25}"
                                                    title="Please enter only letters and spaces (min 3 characters, max 25 characters)">
                                                <div id="error_name" style="display:none;color:red;">
                                                    *Please enter your subject.
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1"
                                                    class="form-label"></label>
                                                <textarea class="form-control shadow package-lead" style="background-color: #FFEFEF !important;" id="exampleFormControlTextarea1"
                                                    placeholder="Your Message" rows="3" name="message" required></textarea>
                                                <div id="error_text" style="display:none;color:red;">
                                                    *Your message must be at least 3 characters long.
                                                </div>
                                            </div>
                                            <div style="width: 50% !important;">
                                                
                                                    <div class="g-recaptcha" data-sitekey="6LecBFAqAAAAAD9ZbAHBXlO2lIUdc547ryvaGkUQ" data-size="normal" data-theme="light" id="recaptcha-element"></div>
                                            </div>

                                            <div id="error_captcha" style="display:none;color:red;">
                                                *Please complete the CAPTCHA.
                                            </div>
                                            <div class="clearfix pt-2 text-center">
                                                <input type="submit" value="Send Message" class="btn btn-danger mb-4 package-lead">
                                            </div>

                                        </form>
                                    </div>
                            </div>
                    </div>
               </div>
            </div>

            <div class="col-md-6 mt-0 pt-0 mt-md-5 pt-md-5">
                <div class="ms-3 ms-md-5 mt-0 pt-0 mt-md-5 pt-md-4">
                            <div class="shadow-lg mt-5 p-3 mb-4 bg-body" style="border-radius: 20px;">
        
                                <address class="ms-3 mb-1 mt-2">
                                    <div class="d-flex bd-highlight mt-2">
                                        <div class="flex-shrink-1 pe-3 bd-highlight"> <a href="tel:+94777538775"><i
                                                    style="color: red; font-size: 26px"
                                                    class="fa fa-phone fa-lg contact"></i></a> </div>
                                        <div class="w-100"><a href="tel:+94777538775" title="Phone number"
                                                class="text-decoration-none text-danger package-lead">+94777538775</a></div>
                                    </div>
                                
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-1 pe-3 bd-highlight"> <a target="_blank"
                                                href="mailto:info@halecinnamon.com">
                                                <i style="color: red; font-size: 23px"
                                                    class="fa fa-envelope fa-lg contact"></i>
                                            </a></div>
                                        <div class="w-100"><a href="mailto:info@halecinnamon.com"
                                                target="_blank" class="text-decoration-none text-danger package-lead"
                                                title="Mail">info@halecinnamon.com</a></div>
                                    </div>
                                    <div class="d-flex mt-4 mb-3">
                                        <div class="flex-shrink-1 ms-1 pe-3"><a target="_blank"
                                                href="https://www.google.com/maps/place/Your+Address+Here">
                                                <i style="color: red; font-size: 26px"
                                                    class="fa fa-map-marker fa-lg contact"></i>
                                            </a></div>
                                        <div class="w-100"><a target="_blank"
                                                href="https://www.google.com/maps/place/Your+Address+Here"
                                                class="text-decoration-none disabled text-danger package-lead " title="Address"> No 032, main street,
                                                Colombo, Sri Lanka.</a></div>
                                    </div>
                                </address>

                            </div>
                            <div class="ms-5 my-3">
                                <h3 class="text-uppercase mb-3 text-center font-weight-bold text-primary">Follow us</h3>
                                <div class="text-center">
                                    <span class="me-3"><i class="fa-brands fa-facebook" style="color: red; font-size: 26px"></i></span>
                                    <span class="me-3"><i class="fa-brands fa-instagram" style="color: red; font-size: 26px"></i></span>
                                    <span class="me-3"><i class="fa-brands fa-whatsapp" style="color: red; font-size: 26px"></i></span>
                                </div>
                            </div>
                     </div>
                </div>
         </div>
         <div class="row pb-5">
         <div class="col-12 text-center">
                            <div class="shadow-lg p-3 mb-5 bg-body" style="border-radius: 20px;">
                                <div><iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31684.85182541906!2d79.86884887235055!3d6.937546014950635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1718445403106!5m2!1sen!2slk"
                                        width="100%" height="568" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                            </div>
                        </div>
                    </div>
         </div>
    </div>

</div>

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
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="{{ asset('js/contact.js') }}"></script>
@endsection