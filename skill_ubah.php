<?php
session_start();


if (!isset($_SESSION["login"])){
header("Location: index.php");
exit;
}


include "FH/header.php";




  include "App/class_skill.php";
  // ini adalah objek
  $mysqli = new skill();
  $id= $_GET["id"];
  $data = "SELECT * FROM skill WHERE id = $id ";
$ubah=$mysqli->query($data)[0];



if (isset($_POST["ubah"])) {
	if ($mysqli->ubah_skill($_POST)) {
      echo "
            <script>
            alert('data berhasil ubah!');
           document.location.href = 'master_skill.php';
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
  <div class="form-row">
    <div class="form-group col-md-12">
      <h4>Ubah skill</h4>
      <input type="hidden" name="id" id="id" value="<?= $ubah["id"]; ?>">
      <input type="text" class="form-control" id="inputEmail4" placeholder="<?= $ubah["skill"]; ?> " name="skill" required>
    </div>
  </div>
  <div>
  	<button type="submit" class="btn btn-primary" name="ubah">Ubah</button>
  </div>

</form>


<?php

include "FH/footer.php";

?>