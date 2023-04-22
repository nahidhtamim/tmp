@extends('layouts.front')

@section('title')
{{$blog->name}} | TMP Manufacturing Ltd
@endsection

@section('contents')

<!-- Navbar Start -->
<div class="container-fluid position-relative p-0">
    <div class="container-fluid bg-primary py-5 bg-header">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">{{$blog->name}}</h1>
            </div>
        </div>
    </div>
</div>
<!-- Navbar End -->

<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-10 m-auto">
                <p class="mb-4">{!! $blog->description_one !!}</p>
            </div>
            <div class="col-lg-5 m-auto">
                <div class="position-relative h-100">
                    <img class="img-fluid rounded wow zoomIn cover-image" data-wow-delay="0.9s"
                        src="{{ asset('upload/blog/'.$blog->image)}}" style="object-fit: cover; border-radius: 20px !important; box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                </div>
            </div>
            @if($blog->description_two != null)
            <div class="col-lg-10 m-auto">
                <p class="mb-4">{!! $blog->description_two !!}</p>
            </div>
            @endif
        </div>
    </div>
</div>
<!-- About End -->

<!-- Gallery Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        {{-- <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="fw-bold text-primary text-uppercase">Gallery</h1>
        </div> --}}
        <div class="row gallery">
            @foreach($galleries as $gallery)
                @if($gallery->blog_id == $blog->id)
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a href="{{asset('upload/images/'.$gallery->image_info->image)}}">
                        <figure><img class="img-fluid img-thumbnail" src="{{asset('upload/images/'.$gallery->image_info->image)}}"
                                alt="Random Image"></figure>
                    </a>
                </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
<!-- Gallery End -->

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

<style>
    /* Start Gallery CSS */
    .thumb {
        margin-bottom: 15px;
    }

    .thumb:last-child {
        margin-bottom: 0;
    }

    /* CSS Image Hover Effects: https://www.nxworld.net/tips/css-image-hover-effects.html */
    /* .thumb figure img {
        -webkit-filter: grayscale(20%);
        filter: grayscale(20%);
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out;
    }

    .thumb figure:hover img {
        -webkit-filter: grayscale(0);
        filter: grayscale(0);
    } */
</style>
@endsection