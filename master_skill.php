<?php
session_start();


if (!isset($_SESSION["login"])){
header("Location: index.php");
exit;
}


include "FH/header.php";

?>


    
<section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Master Skill</h4>

                   

                   

                </div>
            </div>

    </section>


    

<?php

include "FH/footer.php";

?>