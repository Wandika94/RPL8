<?php 

class Masakan extends Controller{
	public function index()
	{
		$data['judul'] = 'Daftar Masakan ';
		$data['msk'] = $this->model('Masakan_model')->getAllMasakan();
		$this->view('templates/header', $data);
		$this->view('masakan/index', $data);
		$this->view('templates/footer', $data);
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Masakan ';
		$data['msk'] = $this->model('Masakan_model')->getMasakanById($id);
		$this->view('templates/header', $data);
		$this->view('masakan/detail', $data);
		$this->view('templates/footer', $data);
	}

	public function tambah()
	{
		if($this->model('Masakan_model')->tambahDataMasakan($_POST)>0)
		{
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location: '. BASEURL . '/masakan/resepku.php');
			exit;
		}else {
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('Location: '. BASEURL . '/masakan');
			exit;
		}
	}

	public function hapus($id)
	{
		if($this->model('Masakan_model')->hapusDataMasakan($id)>0)
		{
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('Location: '. BASEURL . '/masakan');
			exit;
		}else {
			Flasher::setFlash('gagal', 'dihapus', 'danger');
			header('Location: '. BASEURL . '/masakan');
			exit;
		}
	}

	public function getUbah()
	{
		echo json_encode($this->model('Masakan_model')->getMasakanById($_POST['id']));
	}

	public function ubah()
	{
		if($this->model('Masakan_model')->ubahDataMasakan($_POST)>0)
		{
			Flasher::setFlash('berhasil', 'diubah', 'success');
			header('Location: '. BASEURL . '/masakan');
			exit;
		}else {
			Flasher::setFlash('gagal', 'diubah', 'danger');
			header('Location: '. BASEURL . '/masakan');
			exit;
		}
	}

	public function cari()
	{
		$data['judul'] = 'Daftar Masakan ';
		$data['msk'] = $this->model('Masakan_model')->cariDataMasakan();
		$this->view('templates/header', $data);
		$this->view('masakan/cari', $data);
		$this->view('templates/footer', );
	}
}