 <div style="display :flex; background : #ffff;" >
    <!--sidebar-->
      <aside>
        <h2 style="margin-top: 30px; margin-left: 70px; color: #062925;">TULIS <br> RESEPMU <br> SENDIRI</h2>
        <img src="<?= BASEURL; ?>/img/Group 37 (1).png" class="img-fluid mx-5" alt="Desktop">
      </aside>

    <!--form tambah resep-->
      <main style="background : #BBCECC;">
        <div class="tulis-body">
        <form action="<?= BASEURL; ?>/masakan/tambah" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id">
        <input type="hidden" name="gambar1" id="gambar1">
            <!--judul-->
            <div class="row mb-3 mt-4 mx-5">
              <label for="nama" class="col-sm-2 col-form-label"style="color: #062925;"><h6>Judul</h6></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" required>

              </div>
            </div>

            <!--budget-->
            <div class="row mb-3 mx-5">
              <label for="budget" class="col-sm-2 col-form-label"style="color: #062925;"><h6>Budget</h6></label>
              <div class="col-sm-10">
                <div class="input-group mb-6">
                    <span class="input-group-text">Rp</span>
                    <input type="text" class="form-control" id="budget" name="budget" required>
                </div>
              </div>
            </div>
            
            <!--Bahan-->
            <div class="row mb-3 mx-5">
                <label for="bahan" class="col-sm-2 col-form-label" style="color: #062925;"><h6>Bahan</h6></label>
                <div class="col-sm-10">
                    <textarea style="resize:none;width:630px;height:120px;" class="form-control" id="bahan" name="bahan"></textarea required>
                </div>
            </div>

            <!--langkah pembuatan-->
            <div class="row mb-3 mx-5">
                <label for="langkah" class="col-sm-2 col-form-label"style="color: #062925;"><h6>Langkah Pembuatan</h6></label>
                <div class="col-sm-10">
                    <textarea style="resize:none;width:630px;height:220px;" class="form-control" id="langkah" name="langkah" required></textarea>
                </div>
            </div>

            <!--upload foto-->
            <div class="row mb-3 mx-5">
                <label for="formFile" class="col-sm-2 col-form-label"style="color: #062925;"><h6>Tambah Foto</h6></label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="gambar" name="gambar" required>
                </div>
              </div>

            <span style="float: right" class="button d-flex tombolEdit">
                <a href="<?= BASEURL; ?>/home">
                <button type="button" class="btn btn-outline-secondary"><b>BATAL</b></button></a>
                <button type="submit" class="btn btn-outline-success mx-4 me-5 tombolTambahData" id="labelSave"><b>UNGGAH</b></button>
            </span>

          </form>

           <!-- COBA -->
           <!-- <div class="row row-cols-1 row-cols-md-4">
            <?php foreach($data['msk'] as $msk): ?>
          <div class="col ">
            <div class="card">
              <img style="max-height: 140px" src="<?= BASEURL; ?>/img/<?= $msk['gambar']; ?>" class="card-img-top" alt="ayam-suwir-pedas" />
              <div class="card-body">
                <h6 class="title"><?= $msk['nama']; ?></h6>
                <h7 class="budget"><?= $msk['budget']; ?></h7>
                <a href="<?= BASEURL; ?>/masakan/detail/<?= $msk['id']; ?>" class="badge text-bg-primary float-right ml-2">detail</a>
                <a href="<?= BASEURL; ?>/tulisresep/" class="badge text-bg-success float-right ml-2 tampilUbah" data-id="<?= $msk['id']; ?>">ubah</a>

                            <a href="<?= BASEURL; ?>/masakan/hapus/<?= $msk['id']; ?>" class="badge text-bg-danger float-right ml-2" onclick="return confirm('yakin?')">hapus</a>
              </div>
            </div>
          </div>
          <?php endforeach; ?> -->

        </div>
      </div>
      </main>
    </div>