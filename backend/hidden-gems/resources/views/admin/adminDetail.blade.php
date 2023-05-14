<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h5 class="text-white h4">Collapsed content</h5>
          <span class="text-body-secondary">Toggleable via the navbar brand.</span>
        </div>
      </div>
      <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
{{-- 
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
        Buka 
      </button>
       --}}
      <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="staticBackdropLabel">Navbar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div>
            <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <button class="nav-link active " id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
                  <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                  <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled>Disabled</button>
                  <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
                  <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
                </div>
              </div>
          </div>
        </div>
      </div>

    <div class="page-header m-2">
        <h3 class="page-title"> Buat Tempat Wisata </h3>
      </div>
      <div class="row m-2">
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              @if(session('message1'))
              <div class="success-message">
                  {{session('message1')}}
              </div>
              @endif
              @if (count($errors) > 0)
                  @foreach ($errors->all() as $error)
                  <ul>
                    <li class="item-error error-message"> {{ $error }}</li>

                  </ul>
                 
                  @endforeach
              @endif
              @if ($edited)
              <form class="forms-sample"  action="{{route('userUpdateAction',['id' => $tempat_wisatas[0] -> id])}}" method="POST" enctype="multipart/form-data">
                  
              @else
              <form class="forms-sample"  action="{{route('userCreateAction')}}" method="POST" enctype="multipart/form-data">
                  
              @endif
                @csrf
                @if ($edited)
                <div class="form-group mt-2 mb-2">
                  <label>Name</label>
                  <input name="name" type="text" class="form-control" placeholder="{{$tempat_wisatas[0] -> name}}" value="{{$tempat_wisatas[0] -> name}}">
                </div>
                <div class="form-group mt-2 mb-2">
                    <label >Deskripsi</label>
                    <textarea name="description" class="form-control"  rows="4" >{{$tempat_wisatas[0] -> description}}</textarea>
                  </div>
                <div class="form-group mt-2 mb-2">
                  <label >Desa</label>
                  <input name="desa"class="form-control"  placeholder="{{$tempat_wisatas[0] -> desa}}" value="{{$tempat_wisatas[0] -> desa}}">
                </div>
                <div class="form-group mt-2 mb-2">
                  <label >Kota</label>
                  <input name="kota"class="form-control"  placeholder="{{$tempat_wisatas[0] -> kota}}" value="{{$tempat_wisatas[0] -> kota}}">
                </div>
                <div class="form-group mt-2 mb-2">
                  <label >Provinsi</label>
                  <input name="provinsi"class="form-control"  placeholder="{{$tempat_wisatas[0] -> provinsi}}" value="{{$tempat_wisatas[0] -> provinsi}}">
                </div>
                <div class="form-group mt-2 mb-2">
                  <label >Longitude</label>
                  <input name="longitude"class="form-control"  placeholder="longitude" value="{{$tempat_wisatas[0] -> longitude}}">
                </div>
                <div class="form-group mt-2 mb-2">
                  <label >Latitude</label>
                  <input name="latitude"class="form-control"  placeholder="latitude" value="{{$tempat_wisatas[0] -> latitude}}">
                </div>
                <div class="form-group mt-2 mb-2">
                  <label >jenis</label>
                  <input name="jenis"class="form-control"  placeholder="jenis"  value="{{$tempat_wisatas[0] -> jenis}}">
                </div>
                <div class="form-group mb-2 mt-2">
                  @php
                        $string = $tempat_wisatas[0] -> image_post;
                        $substring = substr($string, strpos($string, 'public/') + strlen('public/'));
                    @endphp
                  <label for="exampleTextarea1">Foto Thumbnail</label>
                  <br>
                  <a href="{{ asset('storage/'.$substring) }}">Download File</a>
                  <br>
                  <input type="file" name="image_post" class="file-upload-default">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light"></button>
                @else
                <div class="form-group mt-2 mb-2">
                  <label>Name</label>
                  <input name="name" type="text" class="form-control" placeholder="name">
                </div>
                <div class="form-group mt-2 mb-2">
                    <label >Deskripsi</label>
                    <textarea name="description" class="form-control"  rows="4" ></textarea>
                  </div>
                <div class="form-group mt-2 mb-2">
                  <label >Desa</label>
                  <input name="desa"class="form-control"  placeholder="desa">
                </div>
                <div class="form-group mt-2 mb-2">
                  <label >Kota</label>
                  <input name="kota"class="form-control"  placeholder="kota">
                </div>
                <div class="form-group mt-2 mb-2">
                  <label >Provinsi</label>
                  <input name="provinsi"class="form-control"  placeholder="provinsi" >
                </div>
                <div class="form-group mt-2 mb-2">
                  <label >Longitude</label>
                  <input name="longitude"class="form-control"  placeholder="longitude">
                </div>
                <div class="form-group mt-2 mb-2">
                  <label >Latitude</label>
                  <input name="latitude"class="form-control"  placeholder="latitude">
                </div>
                <div class="form-group mt-2 mb-2">
                  <label >jenis</label>
                  <input name="jenis"class="form-control"  placeholder="jenis">
                </div>
                <div class="form-group mb-2 mt-2">
                    <label>Foto Thumbnail</label>
                    <input type="file" name="image_post" class="file-upload-default">
                  </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Kembali</button>
                @endif
                
              </form>
            </div>
          </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>