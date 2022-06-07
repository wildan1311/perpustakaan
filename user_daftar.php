<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Form Registrasi
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900%7CRoboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script defer src="user_daftar_validation.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <?php
    @include 'sidenav.php';
  ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php
     @include 'navbar.php';
    ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">

          <div class="card my-4">

            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Form Mahasiswa</h6>
              </div>
            </div>

            <div class="card-body px-0 pb-2">
              <form action="user_insert_registration_data.php" method="POST" id="form">

                <div class="mb-3 ms-5 me-5">
                  <label for="nama" class="form-label" id="nama_label">Nama Mahasiswa</label>
                  <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama_label" required>
                </div>

                <div class="mb-3 ms-5 me-5">
                  <label for="nrp" class="form-label">NRP</label>
                  <input type="text" class="form-control" id="nrp" name="nrp">
                </div>

                <div class="mb-3 ms-5 me-5">
                  <label for="email" class="form-label" id="email_label">Email</label>
                  <input type="text" class="form-control" id="email" name="email" aria-describedby="email_label" required>
                </div>

                <div class="mb-3 ms-5 me-5">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>

                <div class="mb-3 ms-5 me-5">
                  <label for="formFile" class="form-label">Gambar</label>
                  <input class="form-control" type="file" id="formFile" name="gambar">
                </div>

                <input type="submit" class="btn btn-primary ms-5 me-5 float-end" value="SUBMIT">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

</body>
</html>