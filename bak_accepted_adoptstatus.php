<?php
    include 'bak_connection.php';

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $pid=$_POST['id'];
        $sql="UPDATE `adopt` SET `status`='Accepted' WHERE `p_id`= '$pid'";
        $result=mysqli_query($conn,$sql);
        echo "<script>
        window.location.href='admin_adopt_request.php';
        </script>";
    }
?>