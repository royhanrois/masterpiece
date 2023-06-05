<?php

$id = $_GET["id"];

if (hapusTiket($id) > 0) {
    echo "<script>
            alert('Tiket Berhasil Dihapus');
            document.location.href = '?page=products';
        </script>";
} else {
    echo "<script>
            alert('Tiket Gagal Dihapus');
            document.location.href = '?page=products';
        </script>";

}

?>