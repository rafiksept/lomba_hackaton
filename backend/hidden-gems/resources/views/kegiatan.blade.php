<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href=" {{ asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Bold-BS4-Header-with-HTML5-Video-Background.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dh-row-text-image-right-responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dh-row-titile-text-image-right-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Filter.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="{{ asset('css/Landing-Page---Parallax-Background---Logo-Heading-ButtonGIF.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Ludens---Index-v2-with-Backend--Frontend-Filters.css')}}">
    <link rel="stylesheet" href="{{ asset('css/Masonry-gallery-cards-responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Pretty-Footer-.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Product-Viewer-1-untitled.css')}}">
    <link rel="stylesheet" href="{{ asset('css/Tricky-Grid---2-Column-on-Desktop--Tablet-Flip-Order-of-12-Column-rows-on-Mobile.css')}}">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md sticky-top navbar-shrink py-3" id="mainNav" style="background: var(--bs-gray-100);color: var(--bs-primary);">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><img src="{{ asset('img/logo%201.png') }}" style="width: 20px;transform: scale(4.04);"><span style="margin-top: 0px;font-family: Aclonica, sans-serif;color: rgba(0,0,0,0.9);margin-left: 20px;">Lokalinaja</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto" style="transform: scale(1.14);font-family: Poppins, sans-serif;color: rgba(228,0,0,0.3);">
                    <li class="nav-item"><a class="nav-link" href="/" style="color: rgb(0,0,0);">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/tempat-wisata" style="color: #000000;">Tempat Wisata</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about-us" style="color: rgb(0,0,0);">About Us</a></li>
                </ul><a class="btn btn-primary shadow" role="button" href="signup.html" style="background: rgb(225,137,3);font-family: Poppins, sans-serif;color: rgb(0,0,0);">Sign up</a>
            </div>
        </div>
    </nav>
    <section class="py-5" style="margin-top: -48px;">
        <div></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <section class="m-5"></section>
                    </div>
                    <div class="wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-1 product">
                                    <div class="row">
                                        <div class="col-md-7">
                                            @php
                                                $string = $tempat_pariwisata[0] -> image_post;
                                                $substring = substr($string, strpos($string, 'public/') + strlen('public/'));
                                            @endphp
                                            <div class="product-image">
                                                <div class="image img-fluid" style="background-image: url({{asset('storage/'.$substring)}});height:250px;"></div>
                                            </div>
                                            <h2 style="margin-left: 588px;padding-bottom: 0px;margin-top: -369px;font-family: Aclonica, sans-serif;font-weight: bold;">{{$tempat_pariwisata[0] -> name}}</h2>
                                            <p style="color: rgb(0,0,0);margin-left: 431px;padding-left: 160px;font-family: Poppins, sans-serif;"><span style="font-weight: normal !important; color: rgb(33, 37, 41);">{{$tempat_pariwisata[0] -> description}}</span></p>
                                            <p style="color: rgb(0,0,0);margin-left: 431px;padding-left: 160px;font-family: Poppins, sans-serif;"><button class="btn btn-primary" type="button" style="margin-left: -12px;padding-left: 37px;">Explore</button></p>
                                            <p style="color: rgb(0,0,0);margin-left: 431px;padding-left: 160px;font-family: Poppins, sans-serif;"></p>
                                            
                                        </div>
                                        <div class="col-md-5">
                                            <div class="product-details">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis rem, expedita, veritatis quibusdam harum nam quidem neque eos sapiente tempora repellat vero iste tenetur itaque sequi, consequatur? Illo, officiis, quidem!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div><script async="" src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"></script></div>
    </section>
    <main class="page catalog-page">
        <section class="clean-block clean-catalog dark">
            <div class="container">
                <div class="block-heading">
                    <div class="row mb-4 mb-lg-5" style="margin-top: 48px;margin-bottom: 28px;padding-bottom: 0px;">
                        <div class="col-md-8 col-xl-6 text-center mx-auto">
                            <h2 class="fw-bold">Rekomendasi Destinasi</h2>
                            <p class="text-muted">Temukan Destinasi Wisata Sesuai Keinginan Anda</p>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="d-none d-md-block">
                                <div class="filters">
                                    <div class="filter-item">
                                        <h3 style="font-size: 20px;font-family: Poppins, sans-serif;font-weight: bold;">Urutkan</h3>
                                        <div id="floating-label-10" class="form-floating mb-3"><select onchange="goToPage(this)" class="form-select" for="floatinginput" placeholder="HGsOFT" style="font-family: Poppins, sans-serif;font-size: 14px;width: 224px;">
                                                <optgroup label="This is a group" >
                                                    <option value="1"><a href="/kegiatan/{{$tempat_pariwisata[0] ->id}}">Harga</a></option>
                                                    <option value="2">This is item 2</option>
                                                    <option value="3">This is item 3</option>
                                                </optgroup>
                                            </select><label class="form-label" id="floating-label-11" for="floatinginput" style="font-family: Poppins, sans-serif;">Select ...</label></div>
                                    </div>
                                    <div id="floating-label-12" class="form-floating mb-3"></div>
                                    <div class="filter-item"></div>
                                    <div id="floating-label-14" class="form-floating mb-3"></div>
                                    <div id="floating-label-16" class="form-floating mb-3"></div>
                                    <div class="filter-item">
                                        <div id="floating-label-17" class="form-floating mb-3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="products">
                                <div>
                                    <div class="row" data-masonry="{&quot;percentPosition&quot;: true }">
                                        @foreach ($kegiatans as $kegiatan)
                                        @php
                                                $string = $kegiatan -> image_post;
                                                $substring = substr($string, strpos($string, 'public/') + strlen('public/'));
                                            @endphp
                                            <div class="col-sm-6 col-lg-4 mb-4">
                                                <div class="card">
                                                    <picture type="" srcset=""><img class="card-img-top p-3" src="{{ asset('storage/'.$substring) }}" alt="" style="border-radius: 24px;object-fit: cover; height:206px;"></picture>
                                                    <div class="card-body">
                                                        <h5 class="card-title" style="font-family: Aclonica, sans-serif;font-weight: bold;">{{$kegiatan -> name}}</h5>
                                                        <p class="card-text text-muted" style="font-family: Poppins, sans-serif;">{{  Illuminate\Support\Str::limit($kegiatan -> description, $limit = 100, $end = '...') }}</p>
                                                        <p class="fw-bold text-dark mb-2" style="text-align: left;color: var(--bs-black);margin-top: -12px;font-family: Alatsi, sans-serif;font-weight: bold;font-size: 24px;">Rp. {{$kegiatan -> harga}}</p>
                                                        <p class="fw-bold text-dark mb-2" style="text-align: right;color: var(--bs-danger);font-family: Abel, sans-serif;font-size: 18px;"><span style="color: rgb(0, 0, 0);">&nbsp;</span><img src="{{asset('img/star.svg')}}" style="width: 23px;"><span style="color: rgb(0, 0, 0);">{{$kegiatan -> rating}}/5</span></p><button class="btn btn-primary" type="button" style="padding-left: 37px;transform: scale(0.75);margin-top: 3px;margin-left: -10px;"><i class="icon-basket"></i><a style="text-decoration: none;color:white;" href="/keranjangAction/{{$kegiatan -> id}}">&nbsp;Add</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        @endforeach
                                        
                                    </div><script async="" src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div id="empresa" style="padding: 20px;margin: 1px;">
        <footer style="background: rgb(60,151,163);">
            <div class="row">
                <div class="col-sm-6 col-md-4 footer-navigation">
                    <h3><a href="#">Lokalinaja</a><img data-aos="fade" data-aos-duration="2500" data-aos-delay="700" id="logoimage-2" src="assets/img/logo%201.png" style="padding-top: 0px;margin: 36px 0px 0px;margin-top: 2px;width: 49px;transform: scale(2.01);margin-left: 50px;"></h3>
                    <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
                    <p class="company-name">Company Name © 2015 </p>
                </div>
                <div class="col-sm-6 col-md-4 footer-contacts">
                    <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                        <p><span class="new-line-span">21 Revolution Street</span> Paris, France</p>
                    </div>
                    <div><i class="fa fa-phone footer-contacts-icon"></i>
                        <p class="footer-center-info email text-start"> +1 555 123456</p>
                    </div>
                    <div><i class="fa fa-envelope footer-contacts-icon"></i>
                        <p> <a href="#" target="_blank" style="color: rgb(255,255,255);">support@company.com</a></p>
                    </div>
                </div>
                <div class="col-md-4 footer-about">
                    <h4>About the company</h4>
                    <p style="color: rgb(255,255,255);"> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet. </p>
                    <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}">
    <script src="{{ asset('js/aos.min.js') }}"></script>
    <script src="{{ asset('js/bs-init.js') }}">
    <script src="{{ asset('js/bold-and-bright.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="{{ asset('js/Ludens---Index-v2-with-Backend--Frontend-Filters-Ludens---1-Index-Table-with-Search--Sort-Filters-v20-1.js') }}"></script>
    <script src="{{ asset('js/Ludens---Index-v2-with-Backend--Frontend-Filters-Ludens---1-Index-Table-with-Search--Sort-Filters-v20.js')}}"></script>
    <script src="{{ asset('js/Product-Viewer-1-3.1.1-jquery.min..js') }}"></script>
    <script src="{{ asset('js/Product-Viewer-1-untitled.js') }}"></script>
    <script>
    function goToPage(element) {
            var selectedValue = element.value;
            if (selectedValue) {
                window.location.href = selectedValue;
            }
            }
    </script>
</body>

</html>