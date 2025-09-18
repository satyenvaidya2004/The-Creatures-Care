<?php
    include 'bak_connection.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_POST['id'];
        $user = $_POST['user'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];

        echo  $gender;

        $sql="UPDATE `registration` SET `username`='$user',`email`='$email',`gender`='$gender',`city`='$city' WHERE  `id`='$id'";
        $result=mysqli_query($conn,$sql);

        echo'<script>
                window.location = "account.php";
            </script> ';
    }
?>