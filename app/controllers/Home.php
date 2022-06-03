<?php 

// anak dari controller supaya bisa mengakses fungsi view
class Home extends Controller{
	public function index()
	{
		// mengambil data dari url
		$data['judul'] = 'Home';
		$data['msk'] = $this->model('User_model')->getAllUser();

		// fungsi view dari core/Controller
		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}

	public function register()
	{
		if($this->model('User_model')->registrasi($_POST)>0)
		{
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location: '. BASEURL . '/home');
			exit;
		}else {
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('Location: '. BASEURL . '/home');
			exit;
		}
	}

	public function login()
	{
		if(isset($_POST['login'])){
	    // header('Location: '. BASEURL . '/masakan');
			// $this->model('User_model')->masuk();
	    // exit;
		}
	}

	public function logout()
	{
		session_start();
		$_SESSION = [];
		session_unset();
		session_destroy();

		setcookie('id', '', time()-60);
		setcookie('key', '', time()-60);

		header('Location: '. BASEURL . '/home');
		exit;
	}
}