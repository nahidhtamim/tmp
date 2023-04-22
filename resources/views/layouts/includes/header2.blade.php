<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg bg-light navbar-light px-5 py-3 py-lg-0">
        <a href="{{url('/')}}" class="navbar-brand p-0">
            <div class="row">
                <div class="col-8 m-0 p-0">
                    <img class="navbar-logo" src="{{ asset('frontend/img/logo.png')}}" alt="" style="padding-right: 10px; border-right:1px solid #8E191C;"> 
                </div>
                <div class="col-4 m-0 p-0 navbar-texts">
                    <p class="m-0 p-0 text-primary">Custom</p>
                    <p class="m-0 p-0 text-primary">Manufacturing</p>
                    <p class="m-0 p-0 text-primary">Solutions </p>
                </div>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Services</a>
                    <div class="dropdown-menu m-0">
                        @foreach($services as $service)
                        <a href="{{url('/our-services/'.$service->slug)}}" class="dropdown-item">{{$service->name}}</a>
                        @endforeach
                    </div>
                </div>
                @if(count($solutions) > 0)
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Turn-Key Solutions</a>
                    <div class="dropdown-menu m-0">
                        @foreach($solutions as $solution)
                        <a href="{{url('/turn-key-solutions/'.$solution->slug)}}" class="dropdown-item">{{$solution->name}}</a>
                        @endforeach
                    </div>
                </div>
                @endif
                @if(count($sectors) > 0)
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Sectors</a>
                    <div class="dropdown-menu m-0">
                        @foreach($sectors as $sector)
                        <a href="{{url('/our-sectors/'.$sector->slug)}}" class="dropdown-item">{{$sector->name}}</a>
                        @endforeach
                    </div>
                </div>
                @endif
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">TMP Manufacturing</a>
                    <div class="dropdown-menu m-0">
                        @foreach($pages as $page)
                        <a href="{{url('/page/'.$page->slug)}}" class="dropdown-item">{{$page->name}}</a>
                        @endforeach
                        {{-- <a href="" class="dropdown-item">About</a>
                        <a href="" class="dropdown-item">Global Reach</a>
                        <a href="" class="dropdown-item">Corporate Responsibility</a>
                        <a href="" class="dropdown-item">Accreditations</a>
                        <a href="" class="dropdown-item">Compliance</a>
                        <a href="" class="dropdown-item">New Capabilities</a>
                        <a href="" class="dropdown-item">Partner Companies</a> --}}
                        <a href="{{url('/customers')}}" class="dropdown-item">Customers</a>
                        <a href="{{url('/timeline')}}" class="dropdown-item">Our Journey</a>
                        <a href="{{url('/awards-and-certifications')}}" class="dropdown-item">Awards and Certifications</a>
                        <a href="{{url('/blogs')}}" class="dropdown-item">News / Blog</a>
                    </div>
                </div>
            </div>
            <a href="{{url('/contact')}}" class="btn btn-primary py-2 px-4 ms-3">Contact</a>
        </div>
    </nav>
</div>
<!-- Navbar & Carousel End -->