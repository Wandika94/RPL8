 <?php 
// session_start();
// require 'fungsi.php';

// if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
//     $id = $_COOKIE['id'];
//     $key = $_COOKIE['key'];

//     $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
//     $row = mysqli_fetch_assoc($result);

//     if($key == hash('sha256', $row['username'])){
//         $_SESSION['login'] = true;
//     }
// }

// if(isset($_SESSION['login'])){
//     header("Location:../beranda/index.php");
//     exit;
// }

if(isset($_SESSION['login'])){
    header('Location: '. BASEURL . '/home');
    exit;
}

 ?>
 <!-- carousel -->
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="col-lg-7">
      <?php Flasher::flash(); ?>
      </div>
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="<?= BASEURL; ?>/img/gambar1.png" class="d-block w-100" alt="gambar1">
            <div class="carousel-caption d-none d-md-block ">
              <h6>Berhemat dengan memasak makananmu sendiri</h6>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="<?= BASEURL; ?>/img/gambar2.png" class="d-block w-100" alt="gambar2">
            <div class="carousel-caption d-none d-md-block">
              <h6>Cari inspirasi resep makanan enak dengan budget minimal</h6>
            </div>
          </div>
          <div class="carousel-item">
            <img src="<?= BASEURL; ?>/img/gambar3.png" class="d-block w-100" alt="gambar3">
            <div class="carousel-caption d-none d-md-block">
              <h6>Kamu juga bisa berbagi resep andalanmu di sini</h6>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <!-- akhir carousel -->

       <!-- Modal Register-->
    <div class="modal fade" id="daftar" tabindex="-1" aria-labelledby="daftarLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title mx-auto d-block" id="daftarLabel">Silakan masukkan nama, email, dan kata sandi</h6>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action = "<?= BASEURL; ?>/home/register" method="post">
              <div class="mb-3">
                <label for="nama" class="col-form-label">Nama</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Nama" />
              </div>
             <!--  <div class="mb-3">
                <label for="email" class="col-form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" />
              </div> -->
              <div class="mb-3">
                <label for="password" class="col-form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi" />
              </div>
              <div class="mb-3">
                <label for="re-password" class="col-form-label">Konfirmasi Kata Sandi</label>
                <input type="password" class="form-control" id="password2" name="password2" placeholder="Konfirmasi Kata Sandi" />
              </div>
            <div class="modal-footer">
              <div class="button-buat-akun mx-auto d-block"><button type="submit" class="btn btn-primary mx-auto d-block" name="register">Buat Akun</button></div>
            </div>
            <div class="text-center">
              Sudah punya akun? <a data-bs-toggle="modal" data-bs-target="#masuk" data-bs-dismiss="modal" href="#masuk"><b>Masuk</b></a>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Modal Register -->

  <!-- Modal login-->
    <div class="modal fade" id="masuk" tabindex="-1" aria-labelledby="masukLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title mx-auto d-block" id="masukLabel">Silakan masukkan email dan kata sandi</h6>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="<?= BASEURL; ?>/home/signin" method="post">
              <div class="mb-3">
                <label for="username" class="col-form-label">Username</label>
                <input type="username" class="form-control" id="username" placeholder="Username" />
              </div>
              <div class="mb-3">
                <label for="password" class="col-form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="password" placeholder="Kata Sandi" />
              </div>
            <div class="modal-footer">
              <div class="button-masuk mx-auto d-block"><button type="submit" class="btn btn-primary mx-auto d-block" name="login">Masuk</button></div>
            </div>
            <div class="text-center">
              Belum punya akun? <a data-bs-toggle="modal" data-bs-target="#daftar" data-bs-dismiss="modal" href="#daftar"><b>Daftar</b></a>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Modal login-->

<!--Rekomendasi-->
    <section class="rekomendasi">
      <div class="container">
        <div class="row">
          <div class="col">
            <h5><b>Rekomendasi Resep</b></h5>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-md-4">
          <div class="col ">
            <div class="card">
              <img style="max-height: 150px" src="img/ayam-suwir-pedas.jpg" class="card-img-top" alt="ayam-suwir-pedas" />
              <div class="card-body">
                <h6 class="title">Ayam Suwir Pedas</h6>
                <h7 class="budget"> Rp 20.000</h7>
              </div>
            </div>
          </div>
          <div class="col ">
            <div class="card">
              <img style="max-height: 150px" src="img/tumistahu.jpg" class="card-img-top" alt="tumistahu" />
              <div class="card-body">
                <h6 class="title">Tumis Tahu</h6>
                <h7 class="budget"> Rp 10.000</h7>
              </div>
            </div>
          </div>
          <div class="col ">
            <div class="card">
              <img style="max-height: 150px" src="img/sayurasem.jpg" class="card-img-top" alt="sayurasem" />
              <div class="card-body">
                <h6 class="title">Sayur Asem</h6>
                <h7 class="budget"> Rp 15.000</h7>
              </div>
            </div>
          </div>
          <div class="col ">
            <div class="card">
              <img style="max-height: 150px" src="img/ayam-serundeng.jpg" class="card-img-top" alt="ayam-serundeng" />
              <div class="card-body">
                <h6 class="title">Ayam Serundeng</h6>
                <h7 class="budget"> Rp 30.000</h7>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Akhir Rekomendasi-->
