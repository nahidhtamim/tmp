<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    {{-- <title>Home - TMP Manufacturing Ltd</title> --}}
    <!-- Favicon -->
    <link href="{{ asset('frontend/img/fav.ico')}}" rel="icon" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css')}}" rel="stylesheet">

    <style>
        #goog-gt-tt, .goog-te-balloon-frame{
            display: none !important;
        } 
        .goog-text-highlight { 
            background: none !important; box-shadow: none !important;
            
        }
        .goog-te-banner-frame.skiptranslate, .goog-te-gadget-simple img{
            display: none !important;
        }
        .goog-tooltip{
            display: none !important;
        }
        .goog-tooltip:hover{
            display: none !important;
        }
        .goog-text-highlight{
            background-color: transparent !important;
            border: none !important;
            box-shadow: none !important;
        }
        body{
            top: 0px !important;
        }
        .skiptranslate.goog-te-gadget span{
            display: none !important;
        }
        .skiptranslate.goog-te-gadget{
            color: transparent !important;
        }
        /* .skiptranslate.goog-te-gadget div{
            padding-top: 10px !important;
        } */
        .skiptranslate.goog-te-gadget .goog-te-combo{
            background: #2B2A2A !important;
            border: 1px solid #ddd8d85e !important;
            color: #ddd8d8 !important;
            border-radius: 5px !important;
            height: 35px !important;
            width: 200px !important;
        }

        /* .skiptranslate{
            display: none !important;
        } */
        .google_translate_element {
            display: block !important;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    {{-- <select class="form-select bg-dark text-light border-0" style="height: 40px;">
                        <option selected>Select Language</option>
                        <option value="1">UK</option>
                        <option value="2">Europe</option>
                        <option value="3">North America</option>
                        <option value="3">Turkey</option>
                    </select> --}}
                    <span class="navbar-nav mr-sm-2" id="google_translate_element">

                    </span>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle mx-3" href="mailto: info@tmpmanufacturing.com"><i
                            class="fa fa-envelope-open fw-normal"></i></a> <span class="text-light">
                                info@tmpmanufacturing.com</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    @if( Request::is('/'))
    @include('layouts.includes.header')
    @else
    @include('layouts.includes.header2')
    @endif

    <!-- Start Main Content  -->
    @yield('contents')
    <!-- End Main Content  -->

    @include('layouts.includes.footer')


    
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('frontend/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js')}}"></script>

    <script>
        var onloadCallback = function(){
            alert("grecaptcha is ready!");
        }
    </script>

    {{-- <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'en'},
                'google_translate_element'
            );
        }
    </script> --}}

<script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    
      var $googleDiv = $("#google_translate_element .skiptranslate");
      var $googleDivChild = $("#google_translate_element .skiptranslate div");
      $googleDivChild.next().remove();
    
      $googleDiv.contents().filter(function(){
          return this.nodeType === 3 && $.trim(this.nodeValue) !== '';
      }).remove();
    
    }
</script>


<script>
    $(document).ready(function() {
        $(".gallery").magnificPopup({
            delegate: "a",
            type: "image",
            tLoading: "Loading image #%curr%...",
            mainClass: "mfp-img-mobile",
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
            }
        });
    });

</script>
    
</body>

</html>