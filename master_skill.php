<?php
session_start();


if (!isset($_SESSION["login"])){
header("Location: index.php");
exit;
}


include "FH/header.php";

  include "App/class_skill.php";
  // ini adalah objek
  $mysqli = new koneksi();

?>


    
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            
                            <div class="col-lg-12 px-xl-10">
                                <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                    <h3 class="h2 text-white mb-0">Master Skill</h3>       
                                   
                            </div>
                        </div>

                    </div>
                    <br>

                    <a href="skill_tambah.php" class="btn btn-primary"> Tambah </a>

                </div>
              
                       <div class="col-lg-12 mb-4 mb-sm-5">

                <table class="table">
  <thead class="thead-dark">
    <tr>

      <th scope="col">Skill Id</th>
      <th scope="col">Nama Skill</th>
      <th scope="col">Aksi</th>
      
    </tr>
  </thead>
  <tbody>
    <?php $data = "SELECT * FROM skill ORDER BY id DESC "; ?>
      <?php foreach (mysqli_query($mysqli->mysqli_skill, $data) as $show) { ?>
    <tr>
      <th><?php echo $show['id']; ?></th>
      <td><?php echo $show['skill']; ?></td>
      <td>
      	 <a href="skill_ubah.php?id=<?= $show["id"]; ?>" class="btn btn-warning"> Ubah </a>
         <a href="skill_hapus.php?id=<?= $show["id"]; ?>" class="btn btn-danger" onclick="return confirm(' Yakin Ingin Hapus?');"> Hapus </a>
      </td>
      
    </tr>
   <?php } ?>
  </tbody>
</table>
            </div>
            </div>
        
        </div>
    </div>
</section


    

<?php

include "FH/footer.php";

?>
