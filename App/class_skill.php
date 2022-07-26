<?php 
	class koneksi {
 
 
		public $host = 'localhost';
		public $name = 'root';
		public $pass = '';
		public $dbname = 'mandiri_inhealth';
		
		public $mysqli_skill;
 
		function __construct (){
 
		$this->mysqli_skill = new mysqli($this->host, $this->name, $this->pass, $this->dbname);
 
		if ($this->mysqli_skill->connect_errno) {
			echo "DATABASE TIDAK ADA !  ";
			exit;
		}
 
	}
 
 
	public function query($data){

		$conn = $this->mysqli_skill;
		$hasil = $conn->query($data);
 
		while ($d = mysqli_fetch_array($hasil)){
			$result[] = $d;
		}
 
		return $result;
	}
}

class skill extends koneksi{
	
	
	public function tambah_skill($data){

	$conn= $this->mysqli_skill;
	$skill = htmlspecialchars( $data["skill"]);
	$skil=$conn->query("INSERT INTO skill VALUES ('','$skill')");

	return $skil;
}

	public function hapus_skill($id){

		$conn= $this->mysqli_skill;
		$conn->query("DELETE FROM skill WHERE id = $id");
		return mysqli_affected_rows($conn);
	
}

	public function ubah_skill($ubah){
	
	$conn= $this->mysqli_skill;
	// id tidak di input ulang
	$id= $ubah["id"];
	$skill = htmlspecialchars($ubah["skill"]);

	$conn->query("UPDATE skill SET 
					skill = '$skill'
					WHERE id = $id");
	return mysqli_affected_rows($conn);

}

}

/**
 * 
 */
class user_skill extends koneksi
{
	
	public function tambah_user_skill($data){

	$conn= $this->mysqli_skill;
	$username = htmlspecialchars( $data["username"]);
	$skill = htmlspecialchars( $data["skill"]);
	$skill_level = htmlspecialchars( $data["skill_level"]);
	$us_kil=$conn->query("INSERT INTO user_skill VALUES ('','$username','$skill','$skill_level')");

	return $us_kil;

	}
}