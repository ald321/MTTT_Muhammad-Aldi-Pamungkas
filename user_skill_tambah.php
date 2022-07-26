<?php


include "Fh/header.php";
include "App/class_skill.php";

$mysqli = new user_skill();

$id= $_GET["id"];
$data = "SELECT * FROM user_profile WHERE id = $id ";
$ubah=$mysqli->query($data)[0];


  if(isset($_POST["tambah"])){
  if($mysqli->tambah_user_skill($_POST)){
      echo "
            <script>
            alert('data berhasil ditambahkan!');
           document.location.href = 'profile.php';
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




<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">

                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                    	<form action="" method="post">
                        <div class="row align-items-center">



 <input type="hidden" name="username" id="username" value="<?= $ubah["username"]; ?>">

 <div>
                            
    <div class="form-group">
                  <label>SKILL</label>
                  <select class="form-control" name="skill" required="">
                     <?php $data ="SELECT * FROM skill"; 
                     foreach ($mysqli->query($data) as $data):?>
                    <option value="<?= $data["id"]; ?>" ><?php echo $data["skill"]; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div>

                <div class="form-group">
                  <label>SKILL LEVEL</label>
                  <select class="form-control" name="skill_level" required="">
                     <?php $data ="SELECT * FROM skill_level"; 
                     foreach ($mysqli->query($data) as $data):?>
                    <option value="<?= $data["id"]; ?>" ><?php echo $data["skill_level"]; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                                  
                        
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      

			<button class="btn btn-primary" name="tambah">Tambah</button>
                    </div>
</form>
                </div>
            </div>
            </div>
        
        </div>
    </div>
</section


<?php
include "FH/footer.php";
?>