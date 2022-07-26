<?php
require 'App/class_akun.php';

$reg = new registrasi();

if(isset($_POST["register"])) {


    if ($reg->reg($_POST) > 0){
        echo "<script>
                alert('Akun baru berhasil di buat, silahkan login!');
                document.location.href = 'index.php';
                </script>";
    }else{

        echo mysqli_error($reg->mysqli_akun);
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mandiri-inhealth</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

  <form action="" method="post">

  <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

             <div class="form-group">
                    <input class="form-control form-control-lg" id="nama" type="text" name="nama" required="" placeholder="Nama" autocomplete="off">
                </div>
                <div class="form-group">
                   <textarea class="form-control form-control-lg" id="alamat" type="text" name="alamat" required="" placeholder="Alamat" autocomplete="off"></textarea>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="lahir" type="date" name="lahir" required="" placeholder="Tanggal Lahir" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="email" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                </div>
                
                 <div class="form-group">
                    <input class="form-control form-control-lg" id="username" type="text" name="username" required="" placeholder="Username" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="password" type="password" name="password" required="" placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="password2" type="password" name="password2" required="" placeholder="Confirm Password">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit" name="register" >Registrasi</button>
                </div>

            </div>

            <div >
                <p><a href="index.php" class="text-white">LOGIN</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>