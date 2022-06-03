<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman <?= $data['judul']; ?></title>
  <!-- Koneksi ke bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/setel.css">
</head>
<body style="background-color: #BBCECC;">

  <!--Navbar-->
    <nav class="navbar navbar-expand-lg shadow-sm" style="background-color: #3a9188">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="<?= BASEURL; ?>">
          <img src="<?= BASEURL; ?>/img/gambar4.webp" alt="" width="30" height="24" class="d-inline-block align-text-top" />
          MacOok
        </a>
        <ul class="navbar-nav justify-content-end">
          <li>
            <form action="<?= BASEURL; ?>/masakan/cari" method="post" class="d-flex justify-content-end mx-4">
              <input class="form-control me-2" type="search" placeholder="Cari resep / masakan" aria-label="Search" name="keyword" id="keyword">
              <button class="btn btn-outline-light"  type="submit">CARI</button>
            </form>
          </li>
          <li class="nav-item mx-2">
            <a class="btn btn-outline nav-link text-white" href="<?= BASEURL; ?>/tulisresep"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 576 576"><path fill="currentColor" d="m402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z"/></svg>     <b>TULIS RESEP</b></a>
          </li>
          <li class="nav-item mx-2 me-4" id="log">
            <a href="<?= BASEURL; ?>/regist/registrasi.php"class="btn btn-outline nav-link text-white" data-bs-toggle="modal" data-bs-target="#daftar" href="#daftar"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 17 17"><path fill="currentColor" d="M3 14s-1 0-1-1s1-4 6-4s6 3 6 4s-1 1-1 1H3zm5-6a3 3 0 1 0 0-6a3 3 0 0 0 0 6z" /></svg>     <b>DAFTAR</b></a>
          </li>
        </ul>
      </div>
    </nav>
    <!--Akhir Navbar-->



