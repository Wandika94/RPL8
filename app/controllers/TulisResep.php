<?php 

class TulisResep extends Controller{
	public function index()
	{
		$data['judul'] = 'Tambah Masakan ';
		$data['msk'] = $this->model('Masakan_model')->getAllMasakan();
		$this->view('templates/header', $data);
		$this->view('tulisresep/index', $data);
		$this->view('templates/footer', $data);
	}

	public function tambah()
	{
		if($this->model('Masakan_model')->tambahDataMasakan($_POST)>0)
		{
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location: '. BASEURL . '/masakan');
			exit;
		}else {
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
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
			header('Location: '. BASEURL . '/tulisresep');
			exit;
		}else {
			Flasher::setFlash('gagal', 'diubah', 'danger');
			header('Location: '. BASEURL . '/masakan');
			exit;
		}
	}
}