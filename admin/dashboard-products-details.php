<?php 

$id = $_GET["id"];

$product = query("SELECT * FROM tiket WHERE kode_tiket = $id")[0];

if (isset($_POST["updateTiket"])) {
  if (updateTiket($_POST) > 0) {
    echo "<script>
            alert('TIket Berhasil Diubah');
            document.location.href = '?page=products';
          </script>";
  } else {
    echo "<script>
            alert('Tiket Gagal Diubah');
            document.location.href = '?page=products';
          </script>";
  }
}

?>
<nav
  class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
  data-aos="fade-down"
>
  <div class="container-fluid">
    <button
      class="btn btn-secondary d-md-none mr-auto mr-2"
      id="menu-toggle"
    >
      &laquo; Menu
    </button>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarResponsive"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collpase navbar-collapse" id="navbarResponsive">
      <!-- dekstop menu -->
      <ul class="navbar-nav d-none d-lg-flex ml-auto">
        <li class="nav-item dropdown">
          <!-- <a
            href="#"
            class="nav-link"
            id="navbarDropdown"
            role="button"
            data-toggle="dropdown"
          >
            <img
              src="../assets/images/person-circle.svg"
              alt="profile"
              height="40px"
              class="rounded-circle mr-2 profile-picture"
            />
            <?php 
              //$id_user = $_SESSION['user'];
              //$user = query("SELECT * FROM users WHERE id_user = $id_user")[0];
            ?>
            Hi, <?php //$user["name"]; ?>
          </a> -->
          <div class="dropdown-menu">
            <a href="../index.php" class="dropdown-item">Back To Home</a>
            <div class="dropdown-divider"></div>
            <a href="../logout.php" class="dropdown-item">logout</a>
          </div>
        </li>
      </ul>

      <!-- mobile app -->
      <ul class="navbar-nav d-block d-lg-none">
        <li class="nav-item">
          <a href="" class="nav-link"> Hi,  </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title"><?= $product["nama"]; ?></h2>
      <p class="dashboard-subtitle">Product Details</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12 mt-2">
          <form action="" method="POST">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                  <input type="hidden" value="<?= $product["kode_tiket"]; ?>" name="id">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input
                        type="text"
                        name="email"
                        id="email"
                        class="form-control"
                        value="<?= $product["email"]; ?>"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input
                        type="text"
                        name="nama"
                        id="nama"
                        class="form-control"
                       
                        value="<?= $product["nama"]; ?>"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="nik">NIK</label>
                      <input
                        type="number"
                        name="nik"
                        id="nik"
                        class="form-control"
                        min="0"
                        value="<?= $product["nik"]; ?>"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="instansi">Instansi</label>
                      <input
                        type="text"
                        name="instansi"
                        id="instansi"
                        class="form-control"
                        
                        value="<?= $product["instansi"]; ?>"
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="lomba">Lomba</label>
                      <select
                        name="lomba"
                        id="lomba"
                        class="form-control"
                      >
                      <option value="Desain Poster">Desain Poster</option>
                      <option value="Fotografi">Fotografi</option>
                      <option value="Short Movie">Short Movie</option>
                      <option value="Solo Singing">Solo Singing</option>
                      </select>
                    </div>
                  </div>
                  <div><br></div>
                  <div class="col-12">
                    <button
                      type="submit"
                      name="updateTiket"
                      class="btn btn-success btn-block py-2"
                    >
                      Update Tiket
                    </button>
                  </div>
                </div>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>