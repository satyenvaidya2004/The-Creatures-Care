<?php
    include 'bak_connection.php';

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $cu_id=$_POST['id'];
        echo $cu_id;
        $sql="DELETE FROM `contact_us` WHERE `cu_id`= '$cu_id'";
        $result=mysqli_query($conn,$sql);
        echo "<script>
        window.location.href='admin_contact_us.php';
        </script>";
    }
?>