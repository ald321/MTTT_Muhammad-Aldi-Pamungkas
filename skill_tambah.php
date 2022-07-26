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
  

  if(isset($_POST["kirim"])){
  if($mysqli->tambah_skill($_POST)){
      echo "
            <script>
            alert('data berhasil ditambahkan!');
           document.location.href = 'master_skill.php';
            </script>
            ";

        }else {
            echo "
            <script>
            alert('data gagal di tambahkan!');
            
            </script>
            ";


  }
}

?>


<form action="" method="post">
  <div class="form-row">
    <div class="form-group col-md-12">
      <h4>Tambahkan skill</h4>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Tambahkan skill" name="skill" required>
    </div>
  </div>
  <div>
  	<button type="submit" class="btn btn-primary" name="kirim">Tambah</button>
  </div>

</form>


<?php

include "FH/footer.php";

?>