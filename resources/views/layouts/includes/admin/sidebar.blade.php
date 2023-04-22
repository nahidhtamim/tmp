<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{url('/dashboard')}}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"> <i class="fa fa-hashtag me-2"></i>TMP Manufacturing Ltd</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <i class="fa fa-user p-2 bg-primary"></i>
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{Auth::user()->name}}</h6>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{url('/dashboard')}}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{url('/view-equipment-cards')}}" class="nav-item nav-link"><i class="fa fa-address-card me-2"></i>Equipment Cards</a>
            <a href="{{url('/view-solutions')}}" class="nav-item nav-link"><i class="fa fa-list me-2"></i>Solutions</a>
            <a href="{{url('/view-partners')}}" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Partners</a>
            <a href="{{url('/view-services')}}" class="nav-item nav-link"><i class="fa fa-cogs me-2"></i>Services</a>
            <a href="{{url('/view-pages')}}" class="nav-item nav-link"><i class="fa fa-list me-2"></i>Page</a>
            <a href="{{url('/view-awards-certificates')}}" class="nav-item nav-link"><i class="fa fa-certificate me-2"></i>Certificates</a>
            <a href="{{url('/view-blogs')}}" class="nav-item nav-link"><i class="fa fa-info me-2"></i>Blogs</a>
            <a href="{{url('/view-timelines')}}" class="nav-item nav-link"><i class="fa fa-paper-plane me-2"></i>Timelines</a>
            <a href="{{url('/view-images')}}" class="nav-item nav-link"><i class="fa fa-image me-2"></i>Images</a>
            {{-- <a href="{{url('/view-services')}}" class="nav-item nav-link"><i class="fa fa-info me-2"></i>Services</a>
            <a href="{{url('/view-resources')}}" class="nav-item nav-link"><i class="fa fa-info me-2"></i>Resources</a>
            <a href="{{url('/view-socials')}}" class="nav-item nav-link"><i class="fa fa-info me-2"></i>Social Media</a>
            <a href="{{url('/view-teams')}}" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Team</a>
            <a href="{{url('/view-testimonials')}}" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Testimonials</a> --}}
        </div>
    </nav>
</div>
