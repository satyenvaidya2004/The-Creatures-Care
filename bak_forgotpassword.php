<?php
    include 'bak_connection.php';
   
    $showAlert=false;
    $showError=false;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $contactno=$_POST["contactno"];
        $passwd=$_POST["passwd"];    
        $cpasswd=$_POST["cpasswd"];

        //for passwd is same as confirm passwd
        if(($passwd == $cpasswd) && $exists==false){
            $sql="UPDATE `registration` SET `password`='$passwd' WHERE `contact_no`= '$contactno'";
            
            $result=mysqli_query($conn,$sql);
            if($result){
                $showAlert=true;
            }
        }
        else{
            $showError=true;
        }
    }
    
    //for show message of success
    if($showAlert){
        echo'<script>
                alert("Your Passoword has been changed successfully and you can login.");
                window.location = "login1.php";
            </script> ';
    }

    //for show message passwd missmatch
    if($showError){
        echo'<script>
                alert("Passwords do not match with confirm password!");
                window.location = "forgotpassword.php";
            </script> ';
    }
?>