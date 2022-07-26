

<!DOCTYPE html>
<html lang="zxx">

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
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

   
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top" >
            <div class="container" >
                <div class="row" >
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <?php
                            ini_set('date.timezone','Asia/Jakarta');
                            ?>
                            <p><?php echo "Tanggal: ". (date('d-m-y')); ?></p>
                            <p><?php echo "Jam: ". (date('H:i:s'));  ?></p>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
        <div class="container">
            <div  class="p-3 mb-2 bg-white text-dark">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div>
                        <a href="./index.html"><img src="img/Logopit.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="./master_skill.php">Master Skill</a></li>
                            <li><a href="./profile.php">Profile</a></li>
                             <button type="button" class="btn btn-danger"><a class="text-white" href="logout.php">LOGOUT</a></button>
                        </ul>
                    </nav>
                       
                </div>
              </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->

    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-7 col-md-8">