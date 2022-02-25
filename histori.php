<!doctype html>
<?php
include "koneksi.php";
session_start();

// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
  header("location:../login.php?pesan=gagal");
}elseif ($_SESSION['level']!="admin") {
  header("location:../login.php?pesan=gagal");
}
?>
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
                <h1><a href="home.php" class="logo"> GO-SPP <span>Pendidikan Coding</span></a></h1>
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
      <section class="section">
          <div class="section-header">
        </div>
        <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4>History Pembayaran</h4>
                    <div class="card-header-form">
                    </div>
                  </div>
        <form action="" method="get">
                      <table class="table">
                      <tr>
                      <td>NISN  :</td>
                      <td>
                      <input class="form-control" type="number" name="nisn" placeholder="--Masukan NISN--">
                      </td>
                      <td>
                      <button class="btn btn-success" type="submit" name="cari">Cari</button>
                      </td>
                      </tr>

                      </table>
                      </form>
                <?php 
                if (isset($_GET['nisn']) && $_GET['nisn']!='') {
                  $query = mysqli_query($conn, "SELECT * FROM siswa WHERE nisn='$_GET[nisn]'");
                  $data = mysqli_fetch_array($query);
                  $nisn = $data['nisn'];
                ?>

                <h2>DATA SISWA</h2>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">NISN</th>
                      <th scope="col">NAMA SISWA</th>
                      <th scope="col">ID KELAS</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <td><?php echo $data['nisn']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['id_kelas']; ?></td>
                  </tbody>
                </table>

                <h2>DATA SPP SISWA</h2>
              <table class="table table-striped">
                <thead> 
                  <tr>
               
               <th scope="col"> NISN</th>
                <th scope="col">Tanggal Bayar</th>
                <th scope="col">Bulan Bayar</th>
                <th scope="col">Tahun Bayar</th>             
                <th scope="col">Nominal Bayar</th>
                <th scope="col">Status</th>

                  </tr>
                </thead>

                <tbody>
                  <?php 
    
              
                  $query = mysqli_query($conn,"SELECT * FROM pembayaran WHERE nisn='$data[nisn]' ORDER BY bulan_spp ASC");
                  
                  

                  while ($data=mysqli_fetch_array($query)) {
                    
                
                    echo "<tr>
                 
                          <td>  $data[nisn]</td>
                          <td>  $data[tgl_bayar]</td>
                          <td>  $data[bulan_spp]</td>
                          <td>  $data[tahun_spp]</td>                        
                          <td>  $data[jumlah_bayar]</td>
                          <td>  $data[status]</td>
                        </tr>";
                        
                  }

                   ?>

                </tbody>

              </table>  
                
    <?php 
    }
    if(isset($_GET['lunas'])){
      $id = $_GET['id'];
      $ambilData = mysqli_query($conn, "SELECT * FROM pembayaran JOIN spp ON pembayaran.id_spp=spp.id_spp 
                                      WHERE id_pembayaran = '$id'");
      $row = mysqli_fetch_assoc($ambilData);
      $sisa = $row['nominal'] - $row['jumlah_bayar'];
      $hasil = $row['jumlah_bayar'] + $sisa;
      $update = mysqli_query($conn, "UPDATE pembayaran SET jumlah_bayar='$hasil' WHERE id_pembayaran='$id'");
      if($update){
          echo "<script>alert('Data Berhasil Ditambahkan !');location.href='../transaction/transaksi.php';</script>";
      }
  }
    ?>      
        
        </div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>