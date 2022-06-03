<?php 

class Regist extends Controller{
	public function index()
	{
		$data['judul'] = 'Daftar akun';
		$data['msk'] = $this->model('User_model')->getAllUser();
		$this->view('templates/header', $data);
		$this->view('regist/index', $data);
		$this->view('templates/footer', $data);
	}

	public function register()
	{
		if($this->model('User_model')->registrasi($_POST)>0)
		{
			Flasher::setFlash('berhasil', 'daftar', 'success');
			header('Location: '. BASEURL . '/regist');
			exit;
		}else {
			Flasher::setFlash('gagal', 'daftar', 'danger');
			header('Location: '. BASEURL . '/regist');
			exit;
		}
	}	

	public function signin()
	{
		if($this->model('User_model')->masuk($_POST)>0)
		{
			Flasher::setFlash('berhasil', 'masuk', 'success');
			header('Location: '. BASEURL . '/regist');
			exit;
		}else {
			Flasher::setFlash('gagal', 'masuk', 'danger');
			header('Location: '. BASEURL . '/regist');
			exit;
		}
	}
}

// // kalau dah teken register
// if(isset($_POST["register"])){
//   if(registrasi($_POST)>0){
//     echo "<script>
//         alert('user baru berhasil ditambahkan!');
//         </script>";
//   } else{
//     echo mysqli_error($conn);
//   }
// }