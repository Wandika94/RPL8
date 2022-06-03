<?php 
class User_model{
	private $table = 'user';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}
	public function getAllUser()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}
	public function getUsername($username)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE username =:username ');
		$this->db->bind('username', $username);
		return $this->db->resultSet();
	}
	public function registrasi($data){
		$password = password_hash($data['password'], PASSWORD_DEFAULT);
		$query = "INSERT INTO user 
					VALUES
				('', :username, :password)";
		$this->db->query($query);
		$this->db->bind('username', $data['username']);
		// $this->db->bind('email', $data['email']);
		$this->db->bind('password', $password);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function masuk($data){
	    // bikin variabel biar gak ribet ada post nya
	    $username = $data["username"];
	    $password = $data["password"];

	    $query = 'SELECT * FROM ' . $this->table . ' WHERE username =:username ';
	    $this->db->bind('username', $username);
	    $this->db->execute();

	    // kalau ditemukan barisnya
	     if($this->db->rowCount()===1){
	            $row = $this->db->resultSet();
	            // buat ngecek password dengan hasil enkripsinya
	            if(password_verify($password, $row["password"])){
	                $_SESSION['login'] = true;
	                // if(isset($_POST['remember'])){
	                //     setcookie('id', $row['id'], time()+60);
	                //     setcookie('key', hash('sha256', $row['usernames'], time()+60));
	                // }
	               header('Location: '. BASEURL . '/home'); 
	                exit;
	            }
	     }
	     $error = true;
	 }
}