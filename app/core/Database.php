<?php 	

class Database{
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $dbname = DB_NAME;

	private $dbh; // handler
	private $stmt; // statement

	public function __construct()
	{
		// data dource name
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
		$option = [
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		];
		// cek koneksi berhasil/tidak
		try{
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
		} catch(PDOException $e){
			die($e->getMessage());
		}
	}

	public function query($query)
	{
		$this->stmt = $this->dbh->prepare($query);
	}

	public function bind($param, $value, $type = null)
	{
		if(is_null($type)){
			switch(true){
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
				default:
					$type = PDO::PARAM_STR;	
			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}


	public function execute()
	{
		$this->stmt->execute();
	}

	public function resultSet()
	{
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function single()
	{
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function rowCount()
	{
		return $this->stmt->rowCount();
	}
	public function upload(){
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// kode error ga upload
	if($error == 4){
		echo "<scirpt>alert('pilih gambar terlebih dahulu'); 
		</script>";
		return false;
	}

	$ekstensi = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	// end - buat delimiter diambil dari akhir
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	// mengecek string dalam sebuah array
	if(!in_array($ekstensiGambar, $ekstensi)){
		echo "<scirpt>alert('bukan gambar'); </script>";
		return false;
	}

	// Batasan size
	if($ukuranFile>1000000){
		echo "<scirpt>alert('ukuran gambar terlalu besar'); </script>";
		return false;
	}

	// supaya tidak menimpah nama gambar yang sama
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/'.$namaFileBaru);
	return $namaFileBaru;
}
}
