<?php 
class Masakan_model{
	private $table = 'masakan';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllMasakan()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}


	public function getMasakanById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id =:id ');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function tambahDataMasakan($data)
	{
		$gambar = $this->db->upload();
		$query = "INSERT INTO masakan 
					VALUES
				('', :nama, :budget, :bahan, :langkah, :gambar)";
		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('budget', $data['budget']);
		$this->db->bind('bahan', $data['bahan']);
		$this->db->bind('langkah', $data['langkah']);
		$this->db->bind('gambar', $gambar);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function hapusDataMasakan($id)
	{
		$query = "DELETE FROM masakan WHERE id = :id";
		$this->db->query($query);
		$this->db->bind('id', $id);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function ubahDataMasakan($data)
	{
		// $gambarLama = $data['gambar1'];
		// if($_FILES['gambar']['error'] === 4){
		// 	$gambar = $gambarLama;
		// } else{
		// 	$gambar = $this->db->upload();
		// }
		$gambar = $this->db->upload();
		$query = "UPDATE masakan SET
					nama = :nama,
					budget = :budget,
					bahan = :bahan,
					langkah = :langkah,
					gambar = :gambar
					WHERE id = :id" ;
		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('budget', $data['budget']);
		$this->db->bind('bahan', $data['bahan']);
		$this->db->bind('langkah', $data['langkah']);
		$this->db->bind('gambar', $gambar);
		$this->db->bind('id', $data['id']);

		$this->db->execute();
		return $this->db->rowCount();
	}

	public function cariDataMasakan()
	{
		$keyword = $_POST['keyword'];
		$query = "SELECT * FROM masakan WHERE nama LIKE :keyword";
		$this->db->query($query);
		$this->db->bind('keyword', "%$keyword%");
		return $this->db->resultSet();
	}

	
}