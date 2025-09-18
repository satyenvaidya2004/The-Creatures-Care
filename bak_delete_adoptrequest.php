<?php
    include 'bak_connection.php';

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $pid=$_POST["p_id"];
        $sql="UPDATE `adopt` SET `status` = 'Cancelled' WHERE `adopt`.`p_id` = '$pid'";
        $result=mysqli_query($conn,$sql);
        echo "<script>
                window.location.href='adopt_request.php';
            </script>";
    }
?>