<?php
    include 'bak_connection.php';

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $pid=$_POST['id'];
        $sql="DELETE FROM `adopt` WHERE `p_id`= '$pid'";
        $result=mysqli_query($conn,$sql);
        echo "<script>
        window.location.href='admin_pet.php';
        </script>";
    }
?>