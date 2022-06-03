<!--tampilan resep-->
    <div style="display :flex;">
      <aside>
        <h2 style="margin-top: 1cm; margin-left: 2.5cm;">INI RESEP <br> YANG KAMU <br> CARI!</h2>
        <img src="<?= BASEURL; ?>/img/Group 37 (1).png" class="img-fluid" alt="Desktop">
      </aside>

      <main>
        <?php foreach($data['msk'] as $msk): ?>
        <div class="card mt-4 mx-auto" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <a href="<?= BASEURL; ?>/masakan/detail/<?= $msk['id']; ?>">
              <img style="max-height: 130px" src="<?= BASEURL; ?>/img/<?= $msk['gambar']; ?>" alt="steak-tempe">
              </a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?= $msk['nama']; ?></h5>
                <p class="card-text"> Ala pembuat</p>
                <p class="card-text"><medium class="text-muted">Rp <?= $msk['budget']; ?>,-</medium></p>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </main>
    </div>
    <!--akhir tampilan resep-->