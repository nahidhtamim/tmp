@extends('layouts.front')

@section('title')
Services | TMP Manufacturing Ltd
@endsection

@section('contents')

<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Our Services</h1>
            <a href="" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h4 text-white">Services</a>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Service Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 mb-5">
            <div class="col-lg-12">
                {{-- <div class="mb-5 text-center">
                    <h1 class="display-5 mb-0">We Offer The Best Quality Services</h1>
                </div> --}}
                <div class="row g-5 py-5">
                    @foreach($services as $service)
                    <div class="col-md-4 service-item wow zoomIn m-auto py-3" data-wow-delay="0.6s">
                        <div class="rounded-top overflow-hidden">
                            <img class="img-fluid" src="{{ asset('upload/service/'.$service->image)}}" alt="">
                        </div>
                        <div class="position-relative bg-white rounded-bottom text-center p-4">
                            <a href="{{url('service-details/'.$service->slug)}}" class="">
                                <h5 class="m-0">{{$service->name}}</h5>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


@endsection