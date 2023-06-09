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
        <button class = "btn btn-success mt-2 mb-2"><a  class = "btn btn-success" href="/admin/tempat-wisata/buat" style="text-decoration:none;color:white;">Buat tempat wisata</a></button>
          <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Desa</th>
                    <th scope="col">Kota</th>
                    <th scope="col">Provinsi</th>
                    <th scope="col">Action</th>
                  </tr>
            </thead>
            <tbody>
                @foreach ($tempat_wisatas as $tempat_wisata)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $tempat_wisata -> name}}</td>
                    <td>{{ $tempat_wisata -> desa}}</td>
                    <td>{{ $tempat_wisata -> kota }}</td>
                    <td>{{ $tempat_wisata -> provinsi }}</td>
                    <td>
                        <button type="button" class="btn btn-primary"><a href="/admin/tempat-wisata/{{$tempat_wisata -> id}}" style = "text-decoration: none; color:white;">Update</a></button>
                        <button onclick="confirmDelete({{$tempat_wisata -> id}})"  type="button" class="btn btn-danger">Delete</button>

                    </td>
                </tr>
                    @endforeach
    
            </tbody>
          </table>

      </div>
    

  
<script>
  function confirmDelete(id) {
      if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
          // Jika user menekan tombol OK, lanjutkan dengan menghapus data
          window.location.href = "/admin/tempat-wisata/actionDelete/" + id; // Ganti dengan URL untuk menghapus data
      } else {
          // Jika user menekan tombol Cancel, batalkan penghapusan
          return false;
      }
  }
</script>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>