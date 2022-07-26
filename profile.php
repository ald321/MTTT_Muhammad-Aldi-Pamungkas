<?php
session_start();


if (!isset($_SESSION["login"])){
header("Location: index.php");
exit;
}


include "FH/header.php";
$id = $_SESSION["profile"]["id"];
$username = $_SESSION["profile"]["username"]
include "App/class_akun.php";

  $mysqli = new koneksi();

 

?>

                    
                  
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
<?php $data = "SELECT * FROM user_profile WHERE id = '$id' ORDER BY id DESC "; ?> 
<?php foreach (mysqli_query($mysqli->mysqli_akun, $data) as $show) { ?>
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            
                            <div class="col-lg-12 px-xl-10">
                                <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                    <h3 class="h2 text-white mb-0">Profile</h3>
                                    
                                </div>

                                <br>
                                <br>
                                <div>
                                  <a href="profile_ubah.php?id=<?= $show["id"];  ?>" class="btn btn-warning"> Ubah Profile </a>
                              <h5>Nama</h5>
                              <input class="form-control form-control-lg" id="nama" type="text" name="nama" required="" placeholder="<?= $show["nama"]; ?>" autocomplete="off" disabled="" >
                          </div>
                          <div>
                          <h5>Alamat</h5>
                            <textarea class="form-control form-control-lg" id="nama" type="text" name="nama" required="" placeholder="<?= $show["alamat"]; ?>" autocomplete="off" disabled="" ></textarea> 
                          </div>
                           <div>
                          <h5>Tanggal Lahir</h5>
                              <input class="form-control form-control-lg" id="nama" type="text" name="nama" required="" placeholder="<?= $show["tanggal_lahir"]; ?>" autocomplete="off" disabled="" >
                          </div>
                           <div>
                          <h5>Email</h5>
                              <input class="form-control form-control-lg" id="nama" type="text" name="nama" required="" placeholder="<?= $show["email"]; ?>" autocomplete="off" disabled="" >
                          </div>

                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <br>

  <a href="user_skill_tambah.php?id=<?= $id; ?>" class="btn btn-primary"> Tambah Skill </a>
            </div>
            <div class="col-lg-12 mb-4 mb-sm-5">
                <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Skill</th>
      <th scope="col">Level</th>
      <th scope="col">Aksi</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
   
      <th></th>
      <td></td>
      <td>
        <a href="user_skill_ubah.php?id=<?= $id; ?>" class="btn btn-warning"> Ubah </a>
         <a href="user_skill_hapus.php?id=<?= $id; ?>" class="btn btn-danger" onclick="return confirm(' Yakin Ingin Hapus?');"> Hapus </a>
      </td>
      
    </tr>
   
  </tbody>
</table>
            </div>
        </div>
    </div>
</section




<?php
include "FH/footer.php";

?>
