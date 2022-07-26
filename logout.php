<?php



session_start();
if (isset($_SESSION["login"])){

$_SEESION = [];
session_unset();
session_destroy();





 echo "<script>
        alert('Akun berhasil di logout!');
        document.location.href = 'index.php';
        </script>";

}

?>