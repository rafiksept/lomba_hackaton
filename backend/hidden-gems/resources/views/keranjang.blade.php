<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Shopping Cart - Brand</title>
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
    <link rel="stylesheet" href="assets/css/CheckOutPage-V10.css">
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
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><img src="../../img/logo%201.png" style="width: 20px;transform: scale(4.04);"><span style="margin-top: 0px;font-family: Aclonica, sans-serif;color: rgba(0,0,0,0.9);margin-left: 20px;">Lokalinaja</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto" style="transform: scale(1.14);font-family: Poppins, sans-serif;color: rgba(228,0,0,0.3);">
                  <li class="nav-item"><a class="nav-link" href="/" style="color: rgb(0,0,0);">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="/tempat-wisata" style="color: #000000;">Tempat Wisata</a></li>
                  <li class="nav-item"><a class="nav-link" href="/about-us" style="color: rgb(0,0,0);">About Us</a></li>
                </ul>
                
                @if(auth()->check())
                <a class="btn btn-primary shadow" role="button" href="/keranjang" style="background: rgb(225,137,3);font-family: Poppins, sans-serif;color: rgb(0,0,0);">Keranjang</a>
                    <!-- Tampilkan sesuatu untuk user yang sudah login -->
                    <a class="btn btn-primary shadow" role="button" href="/logout" style="background: rgb(225,137,3);font-family: Poppins, sans-serif;color: rgb(0,0,0);">Logout</a>
                    <!-- Tampilkan sesuatu untuk user yang sudah login -->
                @else
                    <!-- Tampilkan sesuatu untuk user yang belum login -->
                    <a class="btn btn-primary shadow" role="button" href="/login" style="background: rgb(225,137,3);font-family: Poppins, sans-serif;color: rgb(0,0,0);">Login</a>
                @endif
            </div>
        </div>
    </nav><div class="shopping-cart">
<div class="px-4 px-lg-0">

  <div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">

          <!-- Shopping cart table -->
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 px-3 text-uppercase">Product</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Price</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Quantity</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Remove</div>
                  </th>
                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Checkout</div>
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($charts as $chart)
                <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      @php
                      $string = $chart -> image_post;
                      $substring = substr($string, strpos($string, 'public/') + strlen('public/'));
                       @endphp
                      <img src="{{ asset('storage/'.$substring) }}" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">{{$chart -> name}}</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: kebudayaan</span>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle"><strong>{{$chart -> harga}}</strong></td>
                  <td class="border-0 align-middle" id="quantity">
                    <div class="input-group">
                      <input type="number" class="form-control" value="{{$count[$chart -> id]}}" style="max-width: 100px;">
                    </div>                      
                  </td>
                  <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a></td>
                  <td class="border-0 align-middle"><a href="/checkout/{{$chart -> id}}/{{$count[$chart -> id]}}" class="text-dark">
                    <button class="btn btn-primary">Checkout</button>
                  </td>
                </tr>
                    
                @endforeach
 
              </tbody>
            </table>
          </div>
          <!-- End -->
        </div>
      </div>
    </div>
  </div>
</div>
</div>
    <div id="empresa" style="padding: 20px;margin: 1px;">
        <footer style="background: rgb(60,151,163);">
            <div class="row">
                <div class="col-sm-6 col-md-4 footer-navigation">
                    <h3><a href="#">Lokalinaja</a><img data-aos="fade" data-aos-duration="2500" data-aos-delay="700" id="logoimage-2" src=../../img/logo%201.png" style="padding-top: 0px;margin: 36px 0px 0px;margin-top: 2px;width: 49px;transform: scale(2.01);margin-left: 50px;"></h3>
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
    <script>
      function ubahQuantity() {
        var quantity = document.getElementById("quantity").getElementsByTagName("input")[0].value;
        quantity = parseInt(quantity);
        quantity++;
        document.getElementById("quantity").getElementsByTagName("input")[0].value = quantity;
      }
    </script>
    <script src=../../bootstrap/js/bootstrap.min.js"></script>
    <script src=../../js/aos.min.js"></script>
    <script src=../../js/bs-init.js"></script>
    <script src=../../js/bold-and-bright.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src=../../js/Ludens---Index-v2-with-Backend--Frontend-Filters-Ludens---1-Index-Table-with-Search--Sort-Filters-v20-1.js"></script>
    <script src=../../js/Ludens---Index-v2-with-Backend--Frontend-Filters-Ludens---1-Index-Table-with-Search--Sort-Filters-v20.js"></script>
    <script src=../../js/Product-Viewer-1-3.1.1-jquery.min..js"></script>
    <script src=../../js/Product-Viewer-1-untitled.js"></script>
</body>

</html>