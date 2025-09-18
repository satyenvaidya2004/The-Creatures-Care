<?php
    include 'bak_connection.php';

    if(isset($_POST['toggle']) && ($_POST['toggle'] == 'on')){
        $id=$_POST['id'];
        $sql="UPDATE `registration` SET `access`='yes' WHERE `id`= '$id'";
        $result=mysqli_query($conn,$sql);
        echo "<script>
        window.location.href='admin_user.php';
        </script>";
    }
    else{
        $id=$_POST['id'];
        $sql="UPDATE `registration` SET `access`='no' WHERE `id`= '$id'";
        $result=mysqli_query($conn,$sql);
        echo "<script>
        window.location.href='admin_user.php';
        </script>";

    }
?>