<?php
    include 'bak_connection.php';
    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $user=$_POST["user"];
        $passwd=$_POST["passwd"];
        $login=false;
        

        $sql="SELECT * FROM `registration` WHERE `username` = '$user' AND `password` = '$passwd'";
        
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        if($num == 1){
            while($row=mysqli_fetch_assoc($result)){
                if($row['access'] == "yes"){
                    if($row['your_role'] == "user"){
                        session_start();
                        $login=true;
                        $_SESSION['user'] = $user;
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['access'] = $row['access'];
                        $_SESSION['contact_no'] = $row['contact_no'];
                        $_SESSION['login']=$login;
                        header("location:home1.php");
                    }
                    else{
                        header("location:admin_user.php");
                    }
                }
                else{
                    echo '<script>
                            alert("Your Access has been Denied.");
                        </script>';
                }
            }
        }
        else{
            echo '<script>
                    alert("Invalid credentials!");
                </script>';
        }
    }
?>