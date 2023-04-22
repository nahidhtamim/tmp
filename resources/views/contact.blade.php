@extends('layouts.front')

@section('title')
    Contact | TMP Manufacturing Ltd
@endsection

@section('contents')

<!-- Navbar Start -->
<div class="container-fluid position-relative p-0">
    <div class="container-fluid bg-primary py-5 bg-header">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Contact Us</h1>
            </div>
        </div>
    </div>
</div>
<!-- Navbar End -->


<!-- Contact Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <!-- <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5> -->
            <h1 class="mb-0">For More Information Please Contact Us</h1>
        </div>
        <div class="row g-5 mb-5">
            
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">UK & Europe</h5>
                        <h4 class="text-primary mb-0">+44 (0)1594 543 222</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">North America</h5>
                        <h4 class="text-primary mb-0">+1 (800) 690 1027</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Middle East</h5>
                        <h4 class="text-primary mb-0">+90 532 564 2946</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5 mt-5 pb-5 bg-primary" style="border: 2px solid #8E191C; border-radius: 10px;">
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @elseif(session('warning'))
                <div class="alert alert-danger" role="alert">
                    {{ session('warning') }}
                </div>
                @endif
                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                <form action="{{route('contact.send')}}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <select class="form-select bg-light border-0" style="height: 55px;" name="region">
                                <option selected>Select A Region *</option>
                                <option value="UK">UK</option>
                                <option value="Europe">Europe</option>
                                <option value="North America">North America</option>
                                <option value="Middle East">Middle East</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control bg-light border-0" name="subject" placeholder="Subject *"
                                style="height: 55px;">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control bg-light border-0" name="name" placeholder="Your Name*"
                                style="height: 55px;">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control bg-light border-0" name="phone" placeholder="Your Phone *"
                                style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control bg-light border-0" name="email" placeholder="Your Email"
                                style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control bg-light border-0" name="content" rows="3"
                                placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                {!! NoCaptcha::renderJs() !!}
                    
                                {!! NoCaptcha::display() !!}
                                <span class="text-danger">
                                    @error('g-recaptcha-response')
                                        <p class="alert alert-danger">{{$message}}</p> 
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-dark w-100 py-3" type="submit">Submit Request</button>
                        </div>

                        <div class="col-12">
                            <span class="text-light"> By selecting the "Submit Request" button, your data entered in the contact form will be collected and processed for the purpose of responding to your request.</span>
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow slideInUp my-auto" data-wow-delay="0.6s">
                <img src="{{asset('frontend/img/TMP Global locations.png')}}" class="img-fluid" alt="" style="border: 2px solid #8E191C; border-radius: 10px;">
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<!-- Vendor Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 mb-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="fw-bold text-primary">Supporting the world’s biggest brands</h1>
        </div>
        <div class="bg-white">
            <div class="owl-carousel vendor-carousel">
                @foreach ($partners as $partner)
                <img src="{{asset('upload/partner/'.$partner->image)}}" alt="">
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->

@endsection
