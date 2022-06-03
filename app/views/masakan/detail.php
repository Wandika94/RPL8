	<div style="display :flex;">
        <div class="leftbar">
          <img style="width : 400px; height : 250px;" src="<?= BASEURL ?>/img/<?= $data['msk']['gambar']; ?>" class="rounded mt-4 ms-5" alt="steak-tempe">

          <div class="card mt-3 ms-5" style="width: 400px; height : 60px;">
            <div class="card-body">
              <h5 class="card-title">Budget : <?= $data['msk']['budget']; ?></h5>
            </div>
          </div>

          <div class="card mt-3 ms-5 mb-4" style="width: 400px; height : 207px;">
            <div class="card-body">
              <h5 class="card-title">Bahan-bahan: </h5>
              <p class="card-text"><?= $data['msk']['bahan']; ?></p>
            </div>
          </div>
        </div>

	   <div class="rightbar ms-5 mt-5">
          <div style="display :flex;">
            <h3><?= $data['msk']['nama']; ?></h3>
            <span class="button d-flex">
            <a href="<?= BASEURL; ?>/tulisresep/<?= $data['msk']['id'] ?>">
              <button type="button" data-toggle="modal" data-target="#formModal"class="btn btn-success btn-md ms-5 tampilUbah">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="20px" height="20px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M4.42 20.579a1 1 0 0 1-.737-.326a.988.988 0 0 1-.263-.764l.245-2.694L14.983 5.481l3.537 3.536L7.205 20.33l-2.694.245a.95.95 0 0 1-.091.004ZM19.226 8.31L15.69 4.774l2.121-2.121a1 1 0 0 1 1.415 0l2.121 2.121a1 1 0 0 1 0 1.415l-2.12 2.12l-.001.001Z"/></svg>
                <b>EDIT RESEP</b>
              </button></a>

              <a href="<?= BASEURL; ?>/masakan/hapus/<?= $data['msk']['id'] ?>">
              <button type="button" class="btn btn-success btn-sm ms-3">

                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="20px" height="20px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="currentColor" d="M10 1.25a2.75 2.75 0 0 1 2.739 2.5H17a.75.75 0 0 1 .102 1.493L17 5.25h-.583L15.15 16.23A2 2 0 0 1 13.163 18H6.837a2 2 0 0 1-1.987-1.77L3.582 5.25H3a.75.75 0 0 1-.743-.648L2.25 4.5a.75.75 0 0 1 .648-.743L3 3.75h4.261A2.75 2.75 0 0 1 10 1.25ZM8.5 7.5c-.245 0-.45.155-.492.359L8 7.938v6.125l.008.078c.042.204.247.359.492.359s.45-.155.492-.359L9 14.062V7.939l-.008-.08C8.95 7.656 8.745 7.5 8.5 7.5Zm3 0c-.245 0-.45.155-.492.359L11 7.938v6.125l.008.078c.042.204.247.359.492.359s.45-.155.492-.359l.008-.079V7.939l-.008-.08c-.042-.203-.247-.358-.492-.358ZM10 2.75c-.605 0-1.11.43-1.225 1h2.45c-.116-.57-.62-1-1.225-1Z"/></svg>
                  <b>HAPUS</b>
              </button></a>
            </span>
          </div>
          <h5 style="margin-top: 10px;">Ala  <a href="">Nama Pembuat</a></h5>

          <div class="card mt-3 mb-4" style="width: 700px; height: 440px;">
            <div class="card-body">
              <h5 class="card-title">Langkah Pembuatan: </h5>
              <p class="card-text"><?= $data['msk']['langkah']; ?></p>
            </div>
          </div>
        </div>
      </div>

	  <div class="card-body mx-5">
      <a href="<?= BASEURL; ?>/masakan">
      <button type="button" class="btn btn-outline-secondary"><b>Kembali</b></button></a>
	  </div>

</div>