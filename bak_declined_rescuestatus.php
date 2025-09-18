<?php
    include 'bak_connection.php';

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $id=$_POST['id'];
        $sql="UPDATE `rescue` SET `status`='Declined' WHERE `r_id`= '$id'";
        $result=mysqli_query($conn,$sql);
        echo "<script>
        window.location.href='admin_rescue.php';
        </script>";
    }
?>