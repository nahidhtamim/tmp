@extends('layouts.front')

@section('title')
Home | TMP Manufacturing Ltd
@endsection

@section('contents')


<!-- Navbar & Carousel Start -->
<div class="header-carousel container-fluid position-relative py-5" style=" background: #8C181B">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="p-3" style="max-width: 900px;">
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">From Concept to Reality
                    </h1>
                    <p class="text-white text-uppercase mb-3 animated slideInDown"
                        style="font-size: 26px; line-height: 26px;">FROM AUTOMOTIVE TO ARCHITECTURAL</p>
                    <p class="text-white text-uppercase mb-3 animated slideInDown"
                        style="font-size: 26px; line-height: 26px;">MANUFACTURED & ASSEMBLED TO SAVE YOU TIME & MONEY</p>
                    <a href="{{url('/page/About')}}" class="btn btn-light py-md-3 px-md-5 me-3 animated slideInLeft">About</a>
                    <a href="{{url('/contact')}}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <video autoplay muted loop playsinline="" id="bg-video" width="100%">
                    <source src="{{ asset('upload/video/'.$video->video)}}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Carousel End -->


<!-- Facts Start -->
<div class="container-fluid facts py-5 pt-lg-0">
    <div class="container-fluid py-5 pt-lg-0">
        <div class="row gx-0">
            @foreach ($equipment_cards as $card)
            <div class="col-lg-3 mx-auto wow zoomIn" data-wow-delay="0.1s">
                <div class="@if($card->serial % 2 == 0) bg-light @elseif($card->serial % 2 != 0) bg-primary @endif shadow d-flex align-items-center justify-content-center p-4"
                    style="height: 280px;">
                    <div class="@if($card->serial % 2 == 0) bg-primary @elseif($card->serial % 2 != 0) bg-light @endif d-flex align-items-center justify-content-center rounded mb-2"
                        style="width: 180px; height: 180px;">
                        <img src="{{asset('upload/equipment/'.$card->image)}}" alt="" style="width: 160px; height: 160px;">
                    </div>
                    <div class="ps-4">
                        <a href="{{$card->link}}">
                            @if($card->serial % 2 != 0) 
                                <h4 class="text-white mb-0">{{$card->title}}</h4>
                                <h4><i class="fa fa-arrow-right text-white"></i></h4>
                            @elseif($card->serial % 2 == 0) 
                                <h4 class="text-primary mb-0">{{$card->title}}</h4>
                                <h4><i class="fa fa-arrow-right text-primary"></i></h4>
                            @endif
                            
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Facts Start -->

<!-- Features Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 100%;">
            <h2 class="fw-bold text-primary">Custom Manufacturing <span class="text-dark">Solutions</span> From
                Start to Finish</h2>
            <h5 class="mb-0">TMP Manufacturing supports clients globally with a depth of expertise across multiple 	sectors</h5>
        </div>
        <div class="row g-5 text-center">
            @foreach ($turn_Key_solutions as $solution)
            <div class="col-lg-3 col-md-4 col-6 mx-auto wow zoomIn solutions" data-wow-delay="0.2s">
                <img src="{{asset('upload/solution/'.$solution->image)}}" alt="">
                <h4 class="py-3">{{$solution->title}}</h4>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Features Start -->

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

<!-- Blog Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="fw-bold text-primary text-uppercase">Latest Blogs / News</h1>
        </div>
        <div class="row g-5 py-5">
            @foreach($featured_blogs as $blog)
            <div class="col-lg-4 wow slideInUp my-4 mx-auto" data-wow-delay="0.3s" style="height: 100%; ">
                <div class="blog-item bg-light rounded overflow-hidden" style=" box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px; min-height: 540px;">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset('upload/blog/'.$blog->image)}}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                            href="">{{$blog->name}}</a>
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3">{{$blog->name}}</h4>
                        <p>{!! substr($blog->description_one, 0, 150)."......" !!}</p>
                        <a class="text-uppercase" href="{{url('/blog-details/'.$blog->slug)}}">Learn More<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Blog Start -->

<!-- Quote Start -->
<div class="container-fluid py-5 quote wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow slideInUp p-2" data-wow-delay="0.6s">
                <div class="bg-primary rounded h-100 d-flex align-items-center p-4 wow zoomIn"
                    data-wow-delay="0.9s">
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
                    <form>
                        <div class="row g-3">
                            <div class="col-lg-12">
                                <h3 class="text-white text-center">Let Us Know About Your Requirements</h3>
                            </div>
                            <div class="col-lg-6">
                                <select class="form-select bg-light border-0" style="height: 40px;" name="region">
                                    <option selected>Select A Region *</option>
                                    <option value="UK">UK</option>
                                    <option value="Europe">Europe</option>
                                    <option value="North America">North America</option>
                                    <option value="Middle East">Middle East</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control bg-light border-0" name="subject" placeholder="Subject *"
                                    style="height: 40px;">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control bg-light border-0" name="name" placeholder="Your Name*"
                                    style="height: 40px;">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" class="form-control bg-light border-0" name="phone" placeholder="Your Phone *"
                                    style="height: 40px;">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control bg-light border-0" name="email" placeholder="Your Email"
                                    style="height: 40px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-light border-0" name="content" rows="1"
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
                                <span class="text-white"> By selecting the "Submit Request" button, your data entered
                                    in the contact form will be collected and processed for the purpose of
                                    responding to your request.</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 wow slideInUp p-2" data-wow-delay="0.6s">
                <div class="image-text-overlay text-top-left"
                    style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                    <div class="texts">
                        <p class="overlay-title text-dark px-4 pt-5">Introducing</p>
                        <h2 class="overlay-title text-primary px-4">Total Metal Products</h2>
                        <p class="text-dark px-4" style="z-index: 100"><b>Established in 2010 Total Metal Products Ltd (TMP) are a sector leading machine design and tool making company, specialising in stretch bending, roll forming and, welding & assembly jigs.</b></p>
                        <img src="{{ asset('frontend/img/product-cropped.gif')}}" alt="" width="100%">
                        <a href="{{url('/page/Total-Metal-Products')}}" class="btn btn-primary py-md-3 px-md-5 me-3 mx-3 animated slideInLeft">Find Out More</a>
                    </div>
                    <div class="overlay-white"></div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Quote End -->

@endsection