<?php
  require_once 'config/config.php';

if (isset($_POST["tambahTiket"])) {
  if (tambahTiket($_POST) > 0) {
    echo header("Location: success.html");
  } else {
    echo "<script>
            alert('Tiket Gagal Ditambahkan');
            
          </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tiket</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <br /><br />

    <div class="container-md">
      <div class="text-start">
        <h1>Pendaftaran Masterpiece 4.0</h1>
      </div>
      <br /><br />
      <form method="POST" action="" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="instansi" class="form-label">Email:</label>
          <input
            type="email"
            class="form-control"
            name="email"
            id="email"
            placeholder="Masukkan Email Anda"
          />
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama: </label>
          <input
            class="form-control"
            type="text"
            name="nama"
            id="nama"
            placeholder="Masukkan nama anda"
          />
        </div>
        <div class="mb-3">
          <label for="nik" class="form-label">NIK:</label>
          <input
            type="number"
            class="form-control"
            name="nik"
            id="nik"
            placeholder="Masukkan NIK/No KTP"
          />
        </div>
        <div class="mb-3">
          <label for="instansi" class="form-label">Universitas/Instansi:</label>
          <input
            type="text"
            class="form-control"
            name="instansi"
            id="instansi"
            placeholder="Dari instansi manakah anda"
          />
        </div>
        <label for="lomba" class="form-label">Lomba yang diikuti</label>
        <div class="input-group">
          <select class="form-select" id="lomba" name="lomba">
            <option selected>Pilih Lomba</option>
            <option value="Desain Poster">Desain Poster</option>
            <option value="Fotografi">Fotografi</option>
            <option value="Short Movie">Short Movie</option>
            <option value="Solo Singing">Solo Singing</option>
            <option value="Talkshow Only">Talkshow Only</option>
          </select>
        </div>
        <br />
        <div class="mb-3 form-check">
          <input
            type="checkbox"
            class="form-check-input"
            id="talkshow"
            required="required"
          />
          <label class="form-check-label" for="talkshow"
            >Saya juga mengikuti talkshow</label
          >
        </div>
        <button
          type="submit"
          class="btn btn-primary"
          name="tambahTiket"
          value="Submit"
        >
          Daftar
        </button>
      </form>
      <br />

      <button class="btn btn-primary" onclick="goBack()">
        Kembali Ke Halaman Awal
      </button>
      <script>
        function goBack() {
          window.history.back();
        }
      </script>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
