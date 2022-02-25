<?php
include "koneksi.php";
if($_POST){
    $nama_petugas = $_POST['nama_petugas'];
    $nama = $_POST['nama'];
    $tgl_bayar = $_POST['tgl_bayar']; 
    $bulan_spp = $_POST['bulan_spp']; 
    $tahun_spp = $_POST['tahun_spp']; 
    $jumlah_bayar = $_POST['jumlah_bayar'];
    $status =$_POST['status'];
    $cek = mysqli_query($conn,"INSERT INTO pembayaran VALUES ('','$nama_petugas', '$nama', '$tgl_bayar', '$bulan_spp', '$tahun_spp', '$jumlah_bayar', '$status')");
    if($cek){
        echo "<script>alert('Sukses menambahkan transaksi');location.href='tampil_transaksi.php'</script>";
    }else{
        echo "<script>alert('Gagal menambahkan transaksi');location.href='tambah_transaksi.php'</script>";
    }
} else {
    echo 'a';
}
?>