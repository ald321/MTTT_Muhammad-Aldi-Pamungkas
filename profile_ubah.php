<?php
session_start();


if (!isset($_SESSION["login"])){
header("Location: index.php");
exit;
}

include "FH/header.php";
include "App/class_akun.php";
  // ini adalah objek
  $mysqli = new profile();
  $id= $_GET["id"];
 $data = "SELECT * FROM user_profile WHERE id = $id ";
$ubah=$mysqli->query($data)[0];


if (isset($_POST["ubah"])) {
	if ($mysqli->ubah_profile($_POST)) {
      echo "
            <script>
            alert('data berhasil ubah!');
           document.location.href = 'profile.php';
            </script>
            ";

        }else {
            echo "
            <script>
            alert('data gagal di ubah!');
            
            </script>
            ";



  }
}

?>

<form action="" method="post">
<div class="form-group">
					<input type="hidden" name="id" id="id" value="<?= $ubah["id"]; ?>">
                    <input class="form-control form-control-lg" id="nama" type="text" name="nama" required="" value="<?= $ubah["nama"]; ?>" autocomplete="off">
                </div>
                <div class="form-group">
                   <input class="form-control form-control-lg" id="alamat" type="text" name="alamat" required="" value="<?= $ubah["alamat"]; ?> "autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="lahir" type="date" name="lahir" required="" value="<?= $ubah["tanggal_lahir"]; ?> " autocomplete="off" required>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="email" type="email" name="email" required="" value="<?= $ubah["email"]; ?> " autocomplete="off">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-warning" type="submit" name="ubah" >Ubah</button>
                </div>

            </div>
</form>

<?php 

include "FH/footer.php";

?>