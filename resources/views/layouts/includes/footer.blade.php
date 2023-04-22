<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-4 col-md-6 footer-about">
                <div
                    class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-white p-4">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="m-0"><img src="{{ asset('frontend/img/logo.png')}}" alt="" width="220px"></h1>
                    </a>
                    <p class="mt-3 mb-4 text-left text-dark">
                        <b>TMP Manufacturing Ltd</b> <br>
                        Unit 2, Hawthorn Business Park <br>
                        Puddlebrook, Drybrook <br>
                        Gloucestershire <br>
                        <b>GL17 9HP</b>
                    </p>
                    <div class="d-flex">
                        <a class="btn btn-primary btn-square me-2" href="https://www.linkedin.com/company/16351194"><i
                                class="fab fa-linkedin-in fw-normal"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Get In Touch</h3>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-light me-2"></i>
                            <p class="mb-0">Europe: +44 (0)1594 543 222</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-light me-2"></i>
                            <p class="mb-0">North America: +1 (800) 690 1027</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-light me-2"></i>
                            <p class="mb-0">Middle East: +90 532 564 2946</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-light me-2"></i>
                            <p class="mb-0">info@tmpmanufacturing.com</p>
                        </div>
                        
                    </div>
                    <div class="col-lg-8 col-md-12 pt-0 pt-lg-5 mb-5">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="text-light mb-0">Certifications</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <div class="row">
                                @foreach($featured as $item)
                                <div class="col-lg-4 text-center">
                                    <img src="{{asset('upload/award_certificate/'.$item->image)}}" alt="" width="100%" class="p-1">
                                </div>
                                @endforeach
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-white" style="background: #000000;">
    <div class="container text-center">
        <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="min-height: 75px;">
                    <p class="mb-0">Company Registration: 09147279 VAT Number: GB 192 9816 61
                        <br>
                        &copy; TMP Manufacturing Ltd. 2023. All rights reserve
                        | <a class="text-white border-bottom" href="https://nahidhtamim.top">NHT</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->