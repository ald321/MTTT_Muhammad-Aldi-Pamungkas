<?php
session_start();


if (!isset($_SESSION["login"])){
header("Location: index.php");
exit;
}


include "FH/header.php";

include "App/class_skill.php";

$mysqli= new skill();
$id = $_GET["id"];


if($mysqli->hapus_skill($id)>0){
	echo "<script>
            alert('data berhasil dihapus!');
            document.location.href = 'master_skill.php';
            </script>
            ";
}
else {

	echo "<script>
            alert('data gagal dihapus!');
            document.location.href = '';
            </script>
            ";

}

?>







<?php

include "FH/footer.php";

?>