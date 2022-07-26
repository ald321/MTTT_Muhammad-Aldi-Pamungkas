


<?php

class koneksi{
	
		public $host = 'localhost';
		public $name = 'root';
		public $pass = '';
		public $dbname = 'mandiri_inhealth';
		
		public $mysqli_akun;
 
		function __construct (){
 
		$this->mysqli_akun = new mysqli($this->host, $this->name, $this->pass, $this->dbname);
 
		if ($this->mysqli_akun->connect_errno) {
			echo "DATABASE TIDAK ADA !  ";
			exit;
		}
	}

		public function query($data){

		$conn = $this->mysqli_akun;
		$hasil = $conn->query($data);
 
		while ($d = mysqli_fetch_array($hasil)){
			$result[] = $d;
		}
 
		return $result;
	}
 
	}



class registrasi extends koneksi{
	
	// registrasi pembuatan akun
public function reg($data){
	$conn = $this->mysqli_akun;
	$nama =  stripslashes( $data["nama"]);
	$alamat =  stripslashes( $data["alamat"]);
	$lahir =  stripslashes( $data["lahir"]);
	$email = $data["email"];
	$username = strtolower( stripslashes( $data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);



	//cek username sudah ada atau belum
	$result = $conn->query("SELECT username FROM user WHERE username = '$username'");
	if(mysqli_fetch_assoc($result)){
		echo "<script>
			alert('Username yang di gunakan sudah terdaftar!')
			</script>";
			return false;
	}


	//cek konfirmasi password pertama dan yg kedua
	if($password !== $password2){
		echo "<script>
				alert('Konfrimasi password tidak sesuai!');
		      </script>";
	 return false;
	}


	// enkripsi password terlebih dahulu atau mengamankan password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan user baru ke database
	$layan = $conn->query("INSERT INTO user VALUES ('','$username','$password')");
	$layan = $conn->query("INSERT INTO user_profile VALUES ('','$username','$nama','$alamat','$lahir','$email')");


	   return mysqli_affected_rows($conn);
}
}
$conn = new koneksi();

$conn = $conn->mysqli_akun;

if( isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["pass"];


    $result=mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    $result_profile=mysqli_query($conn, "SELECT * FROM user_profile WHERE username = '$username'");

    //cek username


    if( mysqli_num_rows($result)=== 1){

        $row_profile = mysqli_fetch_assoc($result_profile);
        $row = mysqli_fetch_assoc($result);
 
     
        if(password_verify($password, $row['password'])){

            //set session
            $_SESSION["profile"] = $row_profile;
            $_SESSION["user"] = $row;
            $_SESSION["login"]= true;
            header("location: profile.php ");
            exit;
            

            }
            //user di jadikan sebagai aray
            $error = true;
            
        }
        
        
       
    } 


/**
 * 
 */
