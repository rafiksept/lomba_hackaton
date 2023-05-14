<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Product - Brand</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
    <link rel="stylesheet" href="../../fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../../fonts/material-icons.min.css">
    <link rel="stylesheet" href="../../css/Bold-BS4-Header-with-HTML5-Video-Background.css">
    <link rel="stylesheet" href="../../css/Calendar-BS4-news.css">
    <link rel="stylesheet" href="../../css/Calendar-BS4.css">
    <link rel="stylesheet" href="../../css/dh-row-text-image-right-responsive.css">
    <link rel="stylesheet" href="../../css/dh-row-titile-text-image-right-1.css">
    <link rel="stylesheet" href="../../css/Filter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="../../css/Landing-Page---Parallax-Background---Logo-Heading-ButtonGIF.css">
    <link rel="stylesheet" href="../../css/Ludens---Index-v2-with-Backend--Frontend-Filters.css">
    <link rel="stylesheet" href="../../css/Ludens---Show-Details-v2.css">
    <link rel="stylesheet" href="../../css/Masonry-gallery-cards-responsive.css">
    <link rel="stylesheet" href="../../css/Pretty-Footer-.css">
    <link rel="stylesheet" href="../../css/Product-Viewer-1-untitled.css">
    <link rel="stylesheet" href="../../css/Recipe-Card.css">
    <link rel="stylesheet" href="../../css/Tricky-Grid---2-Column-on-Desktop--Tablet-Flip-Order-of-12-Column-rows-on-Mobile.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md sticky-top navbar-shrink py-3" id="mainNav" style="background: var(--bs-gray-100);color: var(--bs-primary);">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/"><img src="../../img/logo%201.png" style="width: 20px;transform: scale(4.04);"><span style="margin-top: 0px;font-family: Aclonica, sans-serif;color: rgba(0,0,0,0.9);margin-left: 20px;">Lokalinaja</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto" style="transform: scale(1.14);font-family: Poppins, sans-serif;color: rgba(228,0,0,0.3);">
                    <li class="nav-item"><a class="nav-link" href="/" style="color: rgb(0,0,0);">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/tempat-wisata" style="color: #000000;">Tempat Wisata</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about-us" style="color: rgb(0,0,0);">About Us</a></li>
                </ul>
                @if(auth()->check())
                <a class="btn btn-primary shadow" role="button" href="/keranjang" style="background: rgb(225,137,3);font-family: Poppins, sans-serif;color: rgb(0,0,0);">Keranjang</a>
                <a class="btn btn-primary shadow" role="button" href="/logout" style="background: rgb(225,137,3);font-family: Poppins, sans-serif;color: rgb(0,0,0);">Logout</a>
                <!-- Tampilkan sesuatu untuk user yang sudah login -->
                @else
                    <!-- Tampilkan sesuatu untuk user yang belum login -->
                    <a class="btn btn-primary shadow" role="button" href="/login" style="background: rgb(225,137,3);font-family: Poppins, sans-serif;color: rgb(0,0,0);">Login</a>
                @endif
            </div>
        </div>
    </nav>
    <div class="cont_principal" style="margin-top: -128px;">
        <div class="cont_central"></div>
    </div>
    <div class="cont_central">
        <div class="cont_modal cont_modal_active">
            <div class="cont_photo">
                <div class="cont_img_back"><img src="../../img/57989f2a2e186e38bf93429aa395120c.jpg" style="background: #232729;"></div>
                <div class="cont_mins">
                    <div class="sub_mins" style="padding-top: 4px;font-family: Abel, sans-serif;background: rgba(255,255,255,0.8);">
                        <h3 style="font-family: Alatsi, sans-serif;font-size: 21px;margin-top: 11px;margin-bottom: -13px;">4.5/5</h3><span style="font-family: Alatsi, sans-serif;">Rate</span>
                    </div>
                    <div class="cont_icon_right"><a href="#"><i class="material-icons">bookmark_border</i></a></div>
                </div>
                <div class="cont_servings" style="padding-top: 12px;font-family: Actor, sans-serif;background: rgba(255,255,255,0.8);">
                    <h3 style="font-size: 27px;font-family: Cookie, serif;padding-top: 3px;margin-bottom: -19px;margin-top: -6px;">Bali</h3><span style="font-family: Aclonica, sans-serif;">Indonesia</span>
                </div>
                <div class="cont_detalles">
                    <h3 style="font-family: Aclonica, sans-serif;margin-top: 58px;">Kelas Memasak Bali</h3>
                    <p style="font-family: 'Nunito Sans', sans-serif;">Kelas Memasak yang berlangsung 3 hari dalam sekali mengajar</p>
                </div>
            </div>
            <div class="cont_text_ingredients">
                <div class="cont_over_hidden">
                    <div class="cont_tabs">
                        <ul></ul>
                        <h3 style="font-family: Aclonica, sans-serif;font-weight: bold;">Detail Tiket</h3>
                    </div>
                    <div style="margin: 46px;"></div>
                    <div style="margin: 46px;margin-bottom: 78px;margin-top: -72px;padding-top: 0px;"></div>
                    <div class="cont_text_det_preparation">
                        <div class="cont_text_det_preparation"></div>
                    </div>
                    <div class="cont_btn_mas_dets"><a href="#"><i class="material-icons">keyboard_arrow_down</i></a></div>
                    <div class="cont_info_preparation" style="transform: scale(0.79);padding-bottom: 0px;margin-bottom: 1px;padding-top: 0px;margin-top: -127px;">
                        <div style="margin: 46px;margin-top: 115px;font-family: 'Nunito Sans', sans-serif;"><div class="row row-striped">
			<div class="col-2 text-center ">
				<h1 class="display-4 "><span class="badge date-green">1</span></h1>
				<h2>APR</h2>
			</div>
			<div class="col-10">
				<h3 class="text-uppercase"><strong>Culture's Day</strong></h3>
				<ul class="list-inline">
				    <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Wednesday</li>
					<li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i>Rp 100000</li>
					<li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> Restaurant</li>
				</ul>
				<p style="color: #000000">Lorem ipsum dolsit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</div></div>
                    </div>
                </div>
                <div class="cont_btn_open_dets"><a href="#e" onclick="open_close()"><i class="material-icons">keyboard_arrow_left</i></a></div>
            </div>
        </div>
    </div>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../../js/bold-and-bright.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="../../js/Ludens---Index-v2-with-Backend--Frontend-Filters-Ludens---1-Index-Table-with-Search--Sort-Filters-v20-1.js"></script>
    <script src="../../js/Ludens---Index-v2-with-Backend--Frontend-Filters-Ludens---1-Index-Table-with-Search--Sort-Filters-v20.js"></script>
    <script src="../../js/Product-Viewer-1-3.1.1-jquery.min..js"></script>
    <script src="../../js/Product-Viewer-1-untitled.js"></script>
</body>

</html>