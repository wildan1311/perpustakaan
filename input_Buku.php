<!--
=========================================================
* Material Dashboard 2 - v=3.0.2
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
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
                <h6 class="text-white text-capitalize ps-3">Form Buku</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <form action="inputbuku.php" method="post"></form>
                <div class="mb-3 ms-5 me-5">
                  <label for="id_buku" class="form-label">Id Buku</label>
                  <input type="text" class="form-control" id="id_buku" name="id_buku" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3 ms-5 me-5">
                  <label for="judul" class="form-label">Judul</label>
                  <input type="text" class="form-control" id="Penerbit" name="judul">
                </div>
                <div class="mb-3 ms-5 me-5">
                  <label for="Pengarang" class="form-label">Pengarang</label>
                  <input type="text" class="form-control" id="Pengarang" name="Pengarang" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3 ms-5 me-5">
                  <label for="Penerbit" class="form-label">Penerbit</label>
                  <input type="text" class="form-control" id="Penerbit" name="Penerbit">
                </div>
                <!-- <div class="mb-3 ms-5 me-5 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
                <button type="submit" class="btn btn-primary ms-5 me-5 float-end">Submit</button>
                </div>
              </form>
          </div>

</body>
</html>