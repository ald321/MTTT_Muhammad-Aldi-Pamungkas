<?php
session_start();


if (!isset($_SESSION["login"])){
header("Location: index.php");
exit;
}


include "FH/header.php";

?>

                    
                    <label><?php echo $_SESSION["user"]["username"]; ?></label>
                    <label><?php echo $_SESSION["profile"]["email"]; ?></label>
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
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
                              <h5>Nama</h5>
                              <input class="form-control form-control-lg" id="nama" type="text" name="nama" required="" placeholder="<?php echo $_SESSION["profile"]["nama"]; ?>" autocomplete="off" disabled="" >
                          </div>
                          <div>
                          <h5>Alamat</h5>
                            <textarea class="form-control form-control-lg" id="nama" type="text" name="nama" required="" placeholder="<?php echo $_SESSION["profile"]["alamat"]; ?>" autocomplete="off" disabled="" ></textarea> 
                          </div>
                           <div>
                          <h5>Tanggal Lahir</h5>
                              <input class="form-control form-control-lg" id="nama" type="text" name="nama" required="" placeholder="<?php echo $_SESSION["profile"]["tanggal_lahir"]; ?>" autocomplete="off" disabled="" >
                          </div>
                           <div>
                          <h5>Email</h5>
                              <input class="form-control form-control-lg" id="nama" type="text" name="nama" required="" placeholder="<?php echo $_SESSION["profile"]["email"]; ?>" autocomplete="off" disabled="" >
                          </div>

                            </div>
                        </div>
                    </div>
                </div>
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
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      
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