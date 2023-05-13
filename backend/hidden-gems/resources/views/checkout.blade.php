<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Shopping Cart - Brand</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap"> 
    <link rel="stylesheet" href="../../fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/aos.min.css">
    <link rel="stylesheet" href="../../css/Bold-BS4-Header-with-HTML5-Video-Background.css">
    <link rel="stylesheet" href="../../css/CheckOutPage-V10.css">
    <link rel="stylesheet" href="../../css/dh-row-text-image-right-responsive.css">
    <link rel="stylesheet" href="../../css/dh-row-titile-text-image-right-1.css">
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-JZ8CHpk6zTzAJPq-"></script>
    <link rel="stylesheet" href="../../css/Filter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="../../css/Landing-Page---Parallax-Background---Logo-Heading-ButtonGIF.css">
    <link rel="stylesheet" href="../../css/Ludens---Index-v2-with-Backend--Frontend-Filters.css">
    <link rel="stylesheet" href="../../css/Masonry-gallery-cards-responsive.css">
    <link rel="stylesheet" href="../../css/Pretty-Footer-.css">
    <link rel="stylesheet" href="../../css/Product-Viewer-1-untitled.css">
    <link rel="stylesheet" href="../../css/Tricky-Grid---2-Column-on-Desktop--Tablet-Flip-Order-of-12-Column-rows-on-Mobile.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md sticky-top navbar-shrink py-3" id="mainNav" style="background: var(--bs-gray-100);color: var(--bs-primary);">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><img src="../../img/logo%201.png" style="width: 20px;transform: scale(4.04);"><span style="margin-top: 0px;font-family: Aclonica, sans-serif;color: rgba(0,0,0,0.9);margin-left: 20px;">Lokalinaja</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto" style="transform: scale(1.14);font-family: Poppins, sans-serif;color: rgba(228,0,0,0.3);">
                    <li class="nav-item"><a class="nav-link" href="index.html" style="color: rgb(0,0,0);">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="kegiatan.html" style="color: #000000;">Kegiatan</a></li>
                    <li class="nav-item"><a class="nav-link" href="cendramata.html" style="color: rgb(0,0,0);">Cendramata</a></li>
                </ul><a class="btn btn-primary shadow" role="button" href="signup.html" style="background: rgb(225,137,3);font-family: Poppins, sans-serif;color: rgb(0,0,0);">Keranjang</a>
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
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row" class="border-0">
                    <div class="p-2">
                      @php
                      $string = $kegiatans[0] -> image_post;
                      $substring = substr($string, strpos($string, 'public/') + strlen('public/'));
                       @endphp
                      <img src="{{ asset('storage/'.$substring) }}" alt="" width="70" class="img-fluid rounded shadow-sm">
                      <div class="ml-3 d-inline-block align-middle">
                        <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">{{$kegiatans[0] -> name}}</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: Watches</span>
                      </div>
                    </div>
                  </th>
                  <td class="border-0 align-middle"><strong>{{$kegiatans[0] -> harga}}</strong></td>
                  <td class="border-0 align-middle" id="quantity">
                    <div class="input-group">
                      <input type="number" class="form-control" value="{{$pax}}" style="max-width: 100px;">
                    </div>                      
                  </td>
                
                </tr>
              </tbody>
            </table>
          </div>
          <!-- End -->
        </div>
      </div>

      <div class="row py-5 p-4 bg-white rounded shadow-sm">
        <div class="col-lg-6">
          <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
          <div class="p-4">
            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tanggal Pergi</strong><strong>
                <div class='input-group date' id='picker'>
                  <input type='date' class="form-control" />
                  <span class="input-group-addon">
                  <span class="glyphicon glyphicon-calendar"></span></span>
                </div>  
              
              </strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>{{$kegiatans[0] -> harga * $pax}}</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>{{$kegiatans[0] -> harga * $pax * 0.02}}</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                <h5 class="font-weight-bold">{{$kegiatans[0] -> harga * $pax * 1.02}}</h5>
              </li>
            </ul><button href="" id = "pay-button" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</button>
          </div>
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
                    <h3><a href="#">Lokalinaja</a><img data-aos="fade" data-aos-duration="2500" data-aos-delay="700" id="logoimage-2" src="../../img/logo%201.png" style="padding-top: 0px;margin: 36px 0px 0px;margin-top: 2px;width: 49px;transform: scale(2.01);margin-left: 50px;"></h3>
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
    <script type="text/javascript">
      // For example trigger on button clicked, or any time you need
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay("{{$snapToken}}");
        // customer will be redirected after completing payment pop-up
      });
    </script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../../js/aos.min.js"></script>
    <script src="../../js/bs-init.js"></script>
    <script src="../../js/bold-and-bright.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="../../js/Ludens---Index-v2-with-Backend--Frontend-Filters-Ludens---1-Index-Table-with-Search--Sort-Filters-v20-1.js"></script>
    <script src="../../js/Ludens---Index-v2-with-Backend--Frontend-Filters-Ludens---1-Index-Table-with-Search--Sort-Filters-v20.js"></script>
    <script src="../../js/Product-Viewer-1-3.1.1-jquery.min..js"></script>
    <script src="../../js/Product-Viewer-1-untitled.js"></script>
</body>

</html>