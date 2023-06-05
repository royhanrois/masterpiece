<?php

// include"koneksi.php";
if(isset($_POST['proses'])){

  // mysqli_query($koneksi,"INSERT INTO tiket(kode_tiket,nama,nik,instansi,lomba)VALUES
  //   ('',$nama,$nik,$instansi,$lomba)");

    mysqli_query($koneksi, "insert into tiket set
    kode_tiket = '',
    nama = '$_POST[nama]',
    nik = '$_POST[nik]'
    instansi = '$_POST[instansi]',
    lomba = '$_POST[lomba]'
    ");

    if (!$koneksi) {
      die("Connection Failed");
  }
  
  echo "Anda sudah mendaftar";
}

?>

<!-- 
//   include"koneksi.php";
//   $koneksi = mysqli_connect("localhost","root","","masterpiece");

//   $nama = $_POST['nama'];
//   $nik = $_POST['nik'];
//   $instansi = $_POST['instansi'];
//   $lomba = $_POST['lomba'];
  // $nama = $_POST['nama'];
  // $nik = $_POST['nik'];
  // $instansi = $_POST['instansi'];
  // $lomba = $_POST['lomba'];

//   if(isset($_POST['proses'])){

//   mysqli_query($koneksi,"INSERT INTO tiket(kode_tiket,nama,nik,instansi,lomba)VALUES
//     ('',$nama,$nik,$instansi,$lomba)");
//     mysqli_query($koneksi, "insert into tiket set
//     kode_tiket = '',
//     nama = '$_POST[nama]',
//     nik = '$_POST[nik]'
//     instansi = '$_POST[instansi]',
//     lomba = '$_POST[lomba]'
//     ");

    // $query = "INSERT INTO tiket VALUES('$nama','$nik','$instansi','$lomba')";
    // mysqli_query($koneksi,$query);

    // echo "Anda Sudah Mendaftar";
  

// include 'koneksi.php';
// // menyimpan data kedalam variabel

// if(isset($_POST['proses'])){
// $nama = $_POST['nama'];
// $nik = $_POST['nik'];
// $instansi = $_POST['instansi'];
// $lomba = $_POST['lomba'];

// // query SQL untuk insert data
// $query="INSERT INTO tiket SET nama='$nama',nik='$nik',instansi=$nik',lomba='$lomba'";
// mysqli_query($koneksi, $query);
// // mengalihkan ke halaman index.php
// header("location:index.php");
// }
?> -->