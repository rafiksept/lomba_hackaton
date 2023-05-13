<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dh-row-text-image-right-responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dh-row-titile-text-image-right-1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Filter.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Landing-Page---Parallax-Background---Logo-Heading-ButtonGIF.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Masonry-gallery-cards-responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Pretty-Footer-.css') }}">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md sticky-top navbar-shrink py-3" id="mainNav" style="background: var(--bs-gray-100);color: var(--bs-primary);">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><img src="{{ asset('img/logo%201.png') }}" style="width: 20px;transform: scale(4.04);"><span style="margin-top: 0px;font-family: Aclonica, sans-serif;color: rgba(0,0,0,0.9);margin-left: 20px;">Lokalinaja</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto" style="transform: scale(1.14);font-family: Poppins, sans-serif;color: rgba(228,0,0,0.3);">
                    <li class="nav-item"><a class="nav-link active" href="index.html" style="color: rgb(0,0,0);">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="kegiatan.html" style="color: #000000;">Kegiatan</a></li>
                    <li class="nav-item"><a class="nav-link" href="projects.html" style="color: rgb(0,0,0);">Cendramata</a></li>
                </ul><a class="btn btn-primary shadow" role="button" href="/login" style="background: rgb(225,137,3);font-family: Poppins, sans-serif;color: rgb(0,0,0);">Login</a>
            </div>
        </div>
    </nav>
    <header class="bg-primary-gradient"></header>
    <section class="py-5" style="margin-top: -48px;">
        <div>
            <div id="box-2" style="color: rgb(254,0,0);padding-bottom: 0px;margin-bottom: -4px;padding-top: 0px;margin-top: 0px;"><img data-aos="fade" data-aos-duration="2500" data-aos-delay="700" id="logoimage1" src="{{ asset('img/logo%201.png') }}" style="padding-top: 0px;margin-top: 2px;transform: scale(1.14);">
                <h1 data-aos="fade" data-aos-duration="2000" data-aos-delay="1300" id="heading1" style="font-family: Aclonica, sans-serif;font-weight: bold;font-size: 31px;padding-top: 0px;color: #ffffff;">YOUR TRAVELING FRIEND</h1><a href="#"><button class="btn btn-primary" data-bss-hover-animate="pulse" id="button1" type="button" style="color: rgb(255,0,0);"><img style="width: 20px;height: 20px;transform: rotate(270deg) translateX(2px);" src="{{ asset('img/arrowwhite.gif') }}"><span style="font-family: Aclonica, sans-serif;color: rgb(204,125,5);"><strong>DISCOVER</strong></span><img style="width: 20px;height: 20px;transform: rotate(90deg) translateX(-2px);" src="{{ asset('img/arrowwhite.gif') }}"></button></a>
            </div>
        </div>
        <div class="container text-center py-5"><div class="filter">
</div></div>
        <div>
            <div class="row" data-masonry="{&quot;percentPosition&quot;: true }">
                @foreach ($tempat_pariwisatas as $tempat_pariwisata)
                <div class="col-sm-6 col-lg-4 mb-4" style="position: relative">
                    <div class="card">
                        @php
                              $string = $tempat_pariwisata -> image_post;
                              $substring = substr($string, strpos($string, 'public/') + strlen('public/'));
                          @endphp
                        <picture type="" srcset=""><img class="card-img-top p-3 landing-page-image" src="{{ asset('storage/'.$substring) }}" alt="" style="border-radius: 24px;object-fit: cover;"></picture>
                        <div class="card-body">
                            <h5 class="card-title" style="font-family: Poppins, sans-serif;font-weight: bold;">{{$tempat_pariwisata -> name}}</h5>
                            <p class="card-text text-muted" style="font-family: Poppins, sans-serif;">{{  Illuminate\Support\Str::limit($tempat_pariwisata -> description, $limit = 100, $end = '...') }}</p>
                            <p class="fw-bold text-dark mb-2 " id="hasil-perbandingan" style="text-align: right;color: var(--bs-danger);">loading...</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><script async="" src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"></script>
        </div>
        <div class="row clearmargin clearpadding row-image-txt" style="background: rgb(60,151,163);">
            <div class="col-xs-12 col-sm-6 col-md-6 clearmargin clearpadding col-sm-push-6" style="background-image: url(../../img/sumatra.jpg);background-size: cover;height: 400px;background-position: center;transform: scale(0.75);">
                <div></div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-sm-pull-6" style="padding: 20px;">
                <h1 style="font-family: Aclonica, sans-serif;font-weight: bold;">Heading</h1>
                <hr>
                <p style="font-family: Poppins, sans-serif;text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel lorem a lectus finibus bibendum ut sagittis diam. Nunc egestas nulla in elit congue, id pellentesque ex semper. Aenean euismod tellus tincidunt massa eleifend, a efficitur lectus ultricies. Aliquam bibendum et leo quis consectetur. Integer consequat consequat mauris, id porttitor sem feugiat eu. Proin ac neque eu nisi viverra mattis. Curabitur molestie lectus ac sollicitudin faucibus. Duis congue ipsum eget justo egestas blandit.</p>
            </div>
        </div>
    </section>
    <div id="empresa" style="padding: 20px;margin: 1px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-7 col-lg-7">
                    <h1 style="color: rgb(0,0,0);font-family: Aclonica, sans-serif;">Heading</h1>
                    <p style="color: rgb(0,0,0);font-family: Poppins, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis mauris accumsan, aliquet dui vel, rutrum dolor. Nunc vitae auctor metus. Quisque posuere nibh ut sem tincidunt, quis feugiat elit lobortis. Sed ut fringilla purus. Suspendisse volutpat ex non sem vehicula venenatis ut sed purus. Nunc eget fermentum metus, non consectetur velit. Donec semper leo a tellus posuere mollis. Duis a eleifend metus. Sed viverra enim sit amet mattis viverra. Ut euismod viverra lectus id aliquam. Cras eget odio mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec ipsum nulla, vestibulum id diam eu, malesuada malesuada ex. Vestibulum et volutpat mauris. Donec sagittis sem vitae lacinia pellentesque. Ut mattis viverra aliquam. </p>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-5"><img src="{{ asset('img/law-document.jpeg') }}"></div>
            </div>
        </div>
        <footer style="background: rgb(60,151,163);">
            <div class="row">
                <div class="col-sm-6 col-md-4 footer-navigation">
                    <h3><a href="#">Lokalinaja</a><img data-aos="fade" data-aos-duration="2500" data-aos-delay="700" id="logoimage-2" src="{{ asset('img/logo%201.png') }}" style="padding-top: 0px;margin: 36px 0px 0px;margin-top: 2px;width: 49px;transform: scale(2.01);margin-left: 50px;"></h3>
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
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/aos.min.js') }}"></script>
    <script src="{{ asset('js/bs-init.js') }}"></script>
    <script src="{{ asset('js/bold-and-bright.js') }}"></script>
    <script>
        // Mendapatkan latitude dan longitude user sekarang
        navigator.geolocation.getCurrentPosition(function(position) {
          var userLat = position.coords.latitude;
          var userLng = position.coords.longitude;
      
          // Melakukan perulangan untuk setiap data latitude dan longitude dari database
          @foreach($tempat_pariwisatas as $tempat_pariwisata)
            var dLat = {{ $tempat_pariwisata->latitude }};
            var dLng = {{ $tempat_pariwisata->longitude }};
      
            // Menghitung jarak antara lokasi user sekarang dan lokasi pada database
            var distance = calculateDistance(userLat, userLng, dLat, dLng);
      
            // Memeriksa apakah jaraknya kurang dari 1 km
            document.getElementById("hasil-perbandingan").innerHTML = Math.round(distance,0) + " Km From You";
          @endforeach
        });
      
        // Fungsi untuk menghitung jarak antara dua titik
        function calculateDistance(lat1, lon1, lat2, lon2) {
          var radlat1 = Math.PI * lat1/180;
          var radlat2 = Math.PI * lat2/180;
          var theta = lon1-lon2;
          var radtheta = Math.PI * theta/180;
          var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
          dist = Math.acos(dist);
          dist = dist * 180/Math.PI;
          dist = dist * 60 * 1.1515;
          dist = dist * 1.609344; // Konversi ke km
          return dist;
        }
      </script>
      
    
</body>

</html>