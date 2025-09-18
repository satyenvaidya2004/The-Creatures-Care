<?php
    session_start();
    include 'bak_connection.php';
    $p_id=$_POST['p_id'];
    $id=$_SESSION['id'];
    echo $id;
    echo '<br>';
    echo $p_id;

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $sql="UPDATE `adopt` SET `id` = '$id' , `status` = 'Requested'  WHERE `p_id` = '$p_id'";
        $result=mysqli_query($conn,$sql);
        echo "<script>
                window.location.href='adopt_request.php';
            </script>";
    }
?>