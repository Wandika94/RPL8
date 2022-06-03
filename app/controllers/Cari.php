<?php 
class Cari extends Controller{
	public function index()
	{
		$data['judul'] = 'Cari';
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$this->view('templates/header', $data);
		$this->view('cari/index', $data);
		$this->view('templates/footer');
	}
	public function cari()
	{
		$data['judul'] = 'Daftar Masakan ';
		$data['msk'] = $this->model('Masakan_model')->cariDataMasakan();
		$this->view('templates/header', $data);
		$this->view('masakan/index', $data);
		$this->view('templates/footer', );
	}
}