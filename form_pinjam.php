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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
</head>

<body class="g-sidenav-show  bg-gray-200">
  <!-- sidenav -->
  <?php
    @include 'sidenav.php';
  ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php
      @include 'navbar.php';
    ?>
    <!-- End Navbar -->
    <!-- FORM PEMINJAMAN -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Form Peminjaman</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <form id="inputform" method="POST">

                  <div class="mb-3 ms-5 me-5 col-4">
                    <label for="nrp" class="form-label">Masukkan NRP</label>
                    <input type="text" class="form-control" name="nrp" id="nrp">
                  </div>

                    <div class="mb-3 ms-5 me-5 col-4">
                      <label for="id_buku" class="form-label">Masukkan ID Buku</label>
                      <input type="text" placeholder="Search id Buku" class="form-control d-inline" name="id_buku" onchange="show()" id="id_buku">
                    </div>

                    <div class="table-responsive p-0 mb-3 ms-5 me-5" id="show">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">Id Buku</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul Buku</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pengarang</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Penerbit</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                          </tr>
                        </thead>
                        <tbody id="isi">
                          
                        </tbody>
                      </table>
                    </div>

                  <input type="button" class="btn btn-primary ms-5 me-5 float-end" name="submit" onclick="kerjakan()" value="SUBMIT">
              </form>
            </div>
            <!-- end form -->
            <!-- show notif -->
              <button class="btn bg-gradient-success w-100 mb-0 toast-btn" style="display: none;" id="success" type="button" data-target="successToast">Success</button>
              <button class="btn bg-gradient-danger w-100 mb-0 toast-btn" style="display: none;" id="failed" type="button" data-target="dangerToast">Failed</button>
              <button class="btn bg-gradient-danger w-100 mb-0 toast-btn" style="display: none;" id="bahaya" type="button" data-target="warningToast">Failed</button>
          </div>
        </div>
      </div>
    </div>
  <!-- NOTIF -->
                  
  <div class="position-fixed bottom-1 end-1 z-index-2">
        <div class="toast p-2 bg-white" role="alert" aria-live="assertive" id="successToast" aria-atomic="true">
          <div class="toast-header border-0">
            <i class="material-icons text-success me-2">
        check
      </i>
            <span class="me-auto font-weight-bold">SIM PERPUSTAKAAN</span>
            <small class="text-body"><?php date("h:i:sa"); ?></small>
            <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
          </div>
          <hr class="horizontal dark m-0">
          <div class="toast-body">
            Data Berhasil Ditambahkan
          </div>
        </div>
        <div class="toast fade hide p-2 mt-2 bg-gradient-info" role="alert" aria-live="assertive" id="infoToast" aria-atomic="true">
          <div class="toast-header bg-transparent border-0">
            <i class="material-icons text-white me-2">
        notifications
      </i>
            <span class="me-auto text-white font-weight-bold">SIM PERPUSTAKAAN</span>
            <small class="text-white"><?php date("h:i:sa"); ?></small>
            <i class="fas fa-times text-md text-white ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
          </div>
          <hr class="horizontal light m-0">
          <div class="toast-body text-white">
            Duplikat Data
          </div>
        </div>
        <div class="toast fade hide p-2 mt-2 bg-white" role="alert" aria-live="assertive" id="warningToast" aria-atomic="true">
          <div class="toast-header border-0">
            <i class="material-icons text-warning me-2">
        travel_explore
      </i>
            <span class="me-auto font-weight-bold">SIM PERPUSTAKAAN</span>
            <small class="text-body"><?php date("h:i:sa"); ?></small>
            <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
          </div>
          <hr class="horizontal dark m-0">
          <div class="toast-body">
            Duplikat Data.
          </div>
        </div>
        <div class="toast fade hide p-2 mt-2 bg-white" role="alert" aria-live="assertive" id="dangerToast" aria-atomic="true">
          <div class="toast-header border-0">
            <i class="material-icons text-danger me-2">
        campaign
      </i>
            <span class="me-auto text-gradient text-danger font-weight-bold">SIM PERPUSTAKAAN</span>
            <small class="text-body"><?php date("h:i:sa"); ?></small>
            <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
          </div>
          <hr class="horizontal dark m-0">
          <div class="toast-body">
            NRP atau id Buku tidak tersedia.
          </div>
        </div>
      </div>
  </main>
  

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>

  <!-- button to show notif -->
  <script>
  function kerjakan(){
    $.ajax({
      type: 'POST',
      url:'ajax_form_pinjam.php',
      data: $('#inputform').serialize(),
      success: function(data){
        if(data=='success'){
          document.getElementById('success').click();
        }else if(data=='duplikat'){
          document.getElementById('bahaya').click();
        }else{
          document.getElementById('failed').click();
        } 
      },
      error: function(){
        alert('error')
      }
    })
  }
  $(document).ready(function(){
        $('#show').hide();
      })
  function show(){
    $.ajax({
      type: 'POST',
      url:'tampilbuku.php',
      data: $('#inputform').serialize(),
      success: function(data){
        //alert(data);
        $('#show').show();
        $('#isi').html(data);
      },
      error: function(){
        alert('error')
      }
    })
  }
  </script>
</body>

</html>