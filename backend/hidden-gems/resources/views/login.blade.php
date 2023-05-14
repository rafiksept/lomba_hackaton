<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Log in - Brand</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&amp;display=swap">
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
    <div class="container py-md-5">
        <div class="row">
            <div class="col-md-6 text-center"><img class="img-fluid w-100" src="{{ asset('img/illustrations/1.png') }}"></div>
            <div class="col-md-5 col-xl-4 text-center text-md-start" style="margin-top: 90px;">
                <h2 class="display-6 fw-bold mb-5" style="padding-bottom: 0px;margin-bottom: 43px;margin-top: 5px;font-weight: bold;font-family: Poppins, sans-serif;"><span style="margin-top: 14px;margin-bottom: 14px;padding-bottom: 0px;padding-top: 0px;font-family: Inter, sans-serif;font-weight: bold;"><strong>Login</strong></span></h2>
                <form method="post" action="{{ route('actionLogin') }}" style="margin-top: -30px;">
                    @csrf
                    @if (session('error'))
                    <p class="error-login">{{ session('error') }}</p>
                    @endif
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <ul>
                            <li><p class="error-login">{{ $error }}</p></li>
                        </ul>
                        
                        
                        @endforeach
                    </div>
                    @endif
                    <div class="mb-3"><input class="shadow form-control" type="email" name="email" placeholder="Email" style="font-family: Poppins, sans-serif;"></div>
                    <div class="mb-3"><input class="shadow form-control" type="password" name="password" placeholder="Password" style="font-family: Poppins, sans-serif;"></div>
                    <div class="mb-5"><button class="btn btn-primary shadow" type="submit" style="font-family: Poppins, sans-serif;">Log in</button></div>
                    <p class="text-muted"><a href="forgotten-password.html">Forgot your password?</a></p>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>