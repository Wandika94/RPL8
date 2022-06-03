 	<div class="row">
 		<div class="col-lg-50">
 			<?php Flasher::flash(); ?>
 		</div>
 	</div>
 	
  <!-- JUMBOTRON -->
  <div class="jumbotron jumbotron-fluid md-4 mt-4">
    <div class="container" style="display :flex;">
      <!--foto profil-->
      <img src="<?= BASEURL; ?>/img/huston.jpg" alt="sayurasem" style="width : 190px; height : 190px;" class="zoom transisi rounded-circle img-thumbnail my-4 ms-5" >
      <div class="row">
        <div class="col my-auto" style="margin-left: 50px; color: #ffff;">
          <h5><b>Nama: Huston Wilson</b></h5>
          <h5><b>Password: *****13</b></h5>
        </div>
      </div>
    </div>
  </div>

		<section class="resepsaya">
      <div class="container">
        <div class="row">
          <div class="col mt-2 mb-1" style="color: #062925;">
            <h5>Resep Saya</h5>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-md-4">
        	<?php foreach($data['msk'] as $msk): ?>
          <div class="col mb-2">
            <div class="card">
              <a href="<?= BASEURL; ?>/masakan/hapus/<?= $msk['id']; ?>" onclick="return confirm('yakin?')">
                <button type="button" class="btn-close btn-close-black ms-3"></button>
                </a>
              <a href="<?= BASEURL; ?>/masakan/detail/<?= $msk['id']; ?>">
              <img style="max-height: 140px" src="<?= BASEURL; ?>/img/<?= $msk['gambar']; ?>" class="btn btn-outline-light card-img-top" alt="ayam-suwir-pedas" />

              </a>
              <div class="card-body">
                <h6 class="title"><?= $msk['nama']; ?></h6>
                <h7 class="budget">Rp <?= $msk['budget']; ?>,-</h7>
               <!--  <a href="<?= BASEURL; ?>/tulisresep" class="badge text-bg-success float-right ml-2 tampilUbah" data-id="<?= $msk['id']; ?>">ubah</a> -->
              

						  	<!-- <a href="<?= BASEURL; ?>/masakan/hapus/<?= $msk['id']; ?>" class="badge text-bg-danger float-right ml-2" onclick="return confirm('yakin?')">hapus</a> -->
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
       </div>
     </section>

  <!-- Modal Register-->
    <div class="modal fade" id="daftar" tabindex="-1" aria-labelledby="daftarLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title mr-auto ml-auto d-block" id="daftarLabel">Yakin?</h6>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action = "<?= BASEURL; ?>/regist/logout" method="post">
            <div class="modal-footer">
              <div class="button-buat-akun mx-auto d-block"><button type="submit" class="btn btn-primary mx-auto d-block" name="register">Logout</button></div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Modal Register -->