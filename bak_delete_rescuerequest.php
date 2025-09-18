<?php
    include 'bak_connection.php';

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $rid=$_POST["r_id"];
        $sql="UPDATE `rescue` SET `status` = 'Cancelled' WHERE `rescue`.`r_id` = '$rid'";
        $result=mysqli_query($conn,$sql);
        echo "<script>
                window.location.href='rescue_request.php';
            </script>";
    }
?>