<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
      var filename = window.location.href;
      filename = filename.substring(filename.lastIndexOf('/')+1, filename.length-4);
      document.getElementById('file').innerHTML = filename;
      filename = capitalizeFirstLetter(filename);
      document.getElementById('judul').innerHTML = filename;
  }
  )
  function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
};
</script>
</head>
<body>
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page" id="file"></li>
          </ol>
          <h6 class="font-weight-bolder mb-0" id="judul"></h6>
        </nav>
    </nav>
</body>
</html>