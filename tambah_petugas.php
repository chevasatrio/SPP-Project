<!doctype html>
<html lang="en">
  <head>
  	<title>Pembayaran SPP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1><a href="index.html" class="logo"> GO-SPP <span>Pendidikan Coding</span></a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
			  <a href="home.php"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>
	          <li>
	              <a href="data_siswa.php"><span class="fa fa-user mr-3"></span> Data Siswa</a>
	          </li>
	          <li>
              <a href="data_kelas.php"><span class="fa fa-briefcase mr-3"></span> Data Kelas</a>
	          </li>
              <li>
              <a href="data_spp.php"><span class="fa fa-briefcase mr-3"></span> Data SPP</a>
	          </li>
	          <li>
              <a href="tampil_petugas.php"><span class="fa fa-sticky-note mr-3"></span> Petugas</a>
	          </li>
	          <li>
			  <a href="tampil_transaksi.php"><span class="fa fa-suitcase mr-3"></span> Transaksi</a>
	          </li>
              <li>
              <a href="histori.php"><span class="fa fa-sticky-note mr-3"></span> History</a>
	          </li>
	          <li>
              <a href="cetak.php"><span class="fa fa-cogs mr-3"></span> Cetak Transaksi</a>
	          </li>
	          <li>
              <a href="logout.php"><span class="fa fa-paper-plane mr-3"></span> Logout </a>
	          </li>
	        </ul>

	        <div class="mb-5">
						<h3 class="h6 mb-3">Subscribe for newsletter</h3>
						<form action="#" class="subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form>
					</div>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
        <h3>Tambah Petugas</h3>
    <a href="home.php" class="btn btn-success">Back to Home Page</a><br>
    <form action="proses_tambah_petugas.php" method="post">
        Username :
        <input type="text" name="username" value="" class="form-control">
        Password :
        <input type="text" name="password" value="" class="form-control">
        Nama : 
        <input type="text" name="nama_petugas" value="" class="form-control">
        Level : 
        <select name="level" class="form-control">
             <option></option>
             <option value="petugas">Petugas</option>
             <option value="admin">Admin</option>
        </select>
        <input type="submit" name="simpan" value="Ubah Petugas" class="btn btn-primary">

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>