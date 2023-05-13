<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
  </head>
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
                  <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
                  <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                  <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled>Disabled</button>
                  <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
                  <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
                </div>
              </div>
          </div>
        </div>
      </div>

      <div class="content">
        <div class="page-header">
            <h3 class="page-title"> Form Proses Surat Dosen </h3>
          </div>
          <div class="row">
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
                  <form class="forms-sample" method="POST">
                    @csrf
                    <div class="form-group mt-2 mb-2">
                      <label for="exampleInputName1">Name</label>
                      <input name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="{{$user -> name}}">
                    </div>
                    <div class="form-group mt-2 mb-2">
                      <label for="exampleInputNIK">NIK</label>
                      <input name="nik" type="nik" class="form-control" id="exampleInputNIK" placeholder="NIK" value="{{$user -> email}}" disabled>
                    </div>
                    <div class="form-group mt-2 mb-2">
                      <label for="exampleInputNIK">No Surat</label>
                      <input name="no_surat" type="nik" class="form-control" id="exampleInputNIK" placeholder="No Surat">
                    </div>
                    <div class="form-group mt-2 mb-2">
                      <label for="exampleSelectGender">Program Studi</label>
                      <select name="program_studi" class="form-control" id="exampleSelectGender">
                        <option>Teknologi Sains Data</option>
                        <option>Rekayasa Nanoteknologi</option>
                        <option>Teknik Elektro</option>
                        <option>Teknik Industri</option>
                        <option>Teknik Robotika dan Kecerdasan Buatan</option>
                      </select>
                    </div>
                    <div class="form-group mt-2 mb-2">
                      <label for="exampleSelectGender">Pilih Tipe Surat</label>
                      <select name= "tipe_surat" class="form-control" id="exampleSelectGender">
                        <option>Surat Tugas</option>
                        <option>Surat SK</option>
                      </select>
                    </div>
                    <div class="form-group mt-2 mb-2">
                      <label for="exampleTextarea1">Keterangan</label>
                      <textarea name="keterangan" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Reset</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

      </div>
    

      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>