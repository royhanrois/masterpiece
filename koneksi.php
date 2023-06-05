<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert page page</title>
</head>
<body>
    <center>
    <?php

$koneksi = mysqli_connect("localhost","root","","masterpiece");


if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

 // Taking all 4 values from the form data(input)
 $email =  $_REQUEST['email'];
 $nama =  $_REQUEST['nama'];
 $nik = $_REQUEST['nik'];
 $instansi =  $_REQUEST['instansi'];
 $lomba = $_REQUEST['lomba'];

 // Performing insert query execution
        // here our table name is tiket
        $sql = "INSERT INTO tiket(email,nama,nik,instansi,lomba) VALUES ('$email','$nama',
            '$nik','$instansi','$lomba')";
         
        if(mysqli_query($koneksi, $sql)){
            header("Location: success.html");
exit();
 
            echo nl2br("\n$nama\n $nik\n "
                . "$instansi\n $lomba");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($koneksi);
        }
         
        // Close connection
        mysqli_close($koneksi);
?>
    </center>
</body>
</html>


