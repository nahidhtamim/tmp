@extends('layouts.front')

@section('title')
About | TMP Manufacturing Ltd
@endsection

@section('contents')

<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">About Us</h1>
            <a href="" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h4 text-white">About</a>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-light text-uppercase">About Us</h5>
                    <h1 class="display-5 mb-0">The World's Best Professionals That You Can Trust</h1>
                </div>
                <h4 class="text-light fst-italic mb-4">Diam dolor diam ipsum sit. Clita erat ipsum et lorem stet no lorem sit clita duo justo magna dolore</h4>
                <p class="mb-4 text-light">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                <p class="mb-4 text-light">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 wow zoomIn border-glow" data-wow-delay="0.9s" src="{{ asset('frontend/img/about.jpg')}}" style="object-fit: cover; border-radius: 15px">
                </div>
            </div>
            <div class="col-lg-12">
                <p class="mb-4 text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos perferendis aliquid officiis magnam similique sed nihil totam minima eligendi magni exercitationem quibusdam id explicabo eum aperiam, tenetur iusto. Sit, distinctio! Animi a voluptatum ex quos unde, non doloribus magnam eaque eos. Optio numquam eveniet eligendi corrupti veritatis neque distinctio expedita alias. Deserunt quibusdam ipsum, eaque assumenda incidunt vero, debitis tempora voluptates facere beatae distinctio ad ea fugit veniam quis iusto necessitatibus explicabo expedita dignissimos nisi. Impedit, exercitationem. Autem animi nesciunt, quis quia debitis adipisci commodi atque accusantium sequi laudantium repudiandae, placeat soluta! Adipisci aliquid iste velit maxime facere alias accusamus beatae aut cumque expedita voluptate quaerat deserunt, sapiente totam perspiciatis odit, vero iure sed itaque. Magni temporibus distinctio earum asperiores vero nisi. Exercitationem autem corrupti ipsum culpa pariatur quisquam consequuntur? Odio cumque inventore magnam animi minus laudantium quaerat autem nostrum asperiores possimus quia illum debitis fugit neque sapiente rem, dicta nobis? Cupiditate debitis exercitationem esse praesentium sit consectetur suscipit repudiandae corporis, quidem natus aut, quae magni alias magnam cum dolores commodi explicabo. Quibusdam ipsa rem, corrupti modi, qui voluptate nisi a possimus sint est officiis aliquid. Asperiores delectus tenetur itaque perspiciatis quibusdam non perferendis distinctio, officiis obcaecati, minima et magnam!</p>
                
                <h4 class="text-light fst-italic mb-4">Key Points</h4>
                <div class="row g-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                        <h5 class="mb-3"><i class="fa fa-check-circle text-light me-3"></i>Honesty</h5>
                        <h5 class="mb-3"><i class="fa fa-check-circle text-light me-3"></i>Responsibility</h5>
                        <h5 class="mb-3"><i class="fa fa-check-circle text-light me-3"></i>Respect</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                        <h5 class="mb-3"><i class="fa fa-check-circle text-light me-3"></i>Integrity</h5>
                        <h5 class="mb-3"><i class="fa fa-check-circle text-light me-3"></i>Excellence</h5>
                        <h5 class="mb-3"><i class="fa fa-check-circle text-light me-3"></i>Humility</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Partner Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 mb-5">
            <div class="col-lg-12">
                <div class="mb-5 text-center">
                    <h1 class="display-5 mb-0">Our Partners</h1>
                </div>
                <div class="row g-5">
                    @foreach($partners as $partner)
                    <div class="col-md-3 m-auto service-item wow zoomIn" data-wow-delay="0.6s">
                        <div class="rounded-top overflow-hidden">
                            <a href="{{$partner->link}}">
                                <img class="img-fluid" src="{{ asset('upload/partner/'.$partner->image)}}" alt="{{$partner->name}}">
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partner End -->


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
                    <form action="{{route('contact.send')}}" method="POST">
                        @csrf
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
                    style="background-image: url({{ asset('frontend/img/products.gif')}}); box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                    <div class="texts">
                        <p class="overlay-title text-dark px-4 pt-5">Introducing</p>
                        <h2 class="overlay-title text-primary px-4">Total Metal Products</h2>
                        <p class="text-dark px-4"><b>Established in 2010 Total Metal Products Ltd (TMP) are a sector leading machine design and tool making company, specialising in stretch bending, roll forming and, welding & assembly jigs.</b></p>
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