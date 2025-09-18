<?php
    include 'bak_connection.php';
       
    $showAlert=false;
    $showError=false;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        $user=$_POST["user"];
        $email=$_POST["email"];
        $passwd=$_POST["passwd"];
        $cpasswd=$_POST["cpasswd"];
        $contactno=$_POST["contactno"];
        $gender=$_POST["gender"];
        $city=$_POST["city"];
        // $role=$_POST["role"];
        $exists=false;
    
        //for passwd is same as confirm passwd
        if(($passwd == $cpasswd) && $exists==false){
            $sql="INSERT INTO `registration` (`username`, `email`, `password`, `contact_no`, `gender`, `city`, `your_role`, `access`, `date/time`) 
            VALUES ('$user', '$email', '$passwd', '$contactno', '$gender', '$city', 'user', 'yes', current_timestamp())";
            
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
                alert("User accont is created.");
                window.location = "admin_user.php";
            </script> ';
    }

    //for show message passwd missmatch
    if($showError){
        echo'<script>
                alert("Passwords do not match with confirm password!");
                window.location = "admin_user.php";
            </script> ';
    }
?>