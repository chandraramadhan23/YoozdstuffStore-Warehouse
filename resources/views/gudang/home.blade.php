<!DOCTYPE html>
<html lang="en">

<head>

  @include('templates.head')
  <title>Sistem Informasi Pergudangan</title>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    @include('templates.sidebar')
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      @include('templates.header')

      <div class="container-fluid">
        <h3 class="mt-4">Selamat Datang di Sistem Informasi Gudang Yoozdstuff Store</h3>
        <br><br><br><br>
        <center><img class="mt-4" src="image/logo-yoodzstuff.jpg" alt="logo yoozdstuff" width="220"></center>
        <br><center><p>Muhammad Chandra Ramadhan, reference by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>StokCoding.com</a></p></center>
        
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  @include('templates.scripts')

</body>

</html>
