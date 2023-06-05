<?php

$id = $_GET["id"];

$product = query("SELECT * FROM tiket WHERE kode_tiket = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="d-grid gap-1 col-2 mx-auto" style="margin-top: 140px;"> 
<a href="mailto:
<?= $product["email"] ?>
">
<button class="btn btn-primary"
          name="emailTiket"
          value="Submit"

        >
          Email
        </button></a>
</div>
</body>
</html>