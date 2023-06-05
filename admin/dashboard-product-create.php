<?php

if (isset($_POST["tambahTiket"])) {
  if (tambahTiket($_POST) > 0) {
    echo "<script>
            alert('Produk Berhasil Ditambahkan');
            document.location.href = '?page=products';
          </script>";
  } else {
    echo "<script>
            alert('Produk Gagal Ditambahkan');
            document.location.href = '?page=products';
          </script>";
  }
}

?>

<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" data-aos="fade-down">
  <div class="container-fluid">
    <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
      &laquo; Menu
    </button>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collpase navbar-collapse" id="navbarResponsive">
      

      <!-- mobile app -->
      <ul class="navbar-nav d-block d-lg-none">
        <li class="nav-item">
          <a href="" class="nav-link"> Hi, </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Create Tiket</h2>
      <p class="dashboard-subtitle">Create your own tiket</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12 mt-2">
          <form action="" method="POST">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <!-- <div class="form-group">
                      <label for="name">Nama Produk</label>
                      <input type="text" name="name" id="name" class="form-control" required />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="price">Harga Produk</label>
                      <input type="number" name="price" id="price" class="form-control" min="0" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="category">Category</label>
                      <?php

                      $categories = query("SELECT * FROM categories");

                      ?>
                      <select name="category" id="category" class="form-control" required>
                        <?php foreach ($categories as $category) : ?>
                          <option value="<?= $category["id"]; ?>"><?= $category["category_name"]; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="stock">Stok Produk</label>
                      <input type="number" name="stock" id="stock" class="form-control" min="0" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Descriptions</label>
                      <textarea name="descriptions" id="editor" required></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 text-right">
                    <button type="submit" name="tambahProduk" class="btn btn-success px-4">
                      Save Now
                    </button>
                  </div> -->
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
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>