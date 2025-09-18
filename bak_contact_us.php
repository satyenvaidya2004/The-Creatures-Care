<?php
    include 'bak_connection.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $cu_name = $_POST['cu_name'];
        $cu_contact_no = $_POST['cu_contact_no'];
        $cu_email = $_POST['cu_email'];
        $cu_comment = $_POST['cu_comments'];
                
        $insert="INSERT INTO `contact_us`(`cu_name`, `cu_contact_no`, `cu_email`, `cu_comment`) VALUES ('$cu_name','$cu_contact_no','$cu_email','$cu_comment')";
        $result=mysqli_query($conn,$insert);
        //for show message of success
        if($result){
            echo'<script>
                    alert("Contact request Successfully Send...");
                    window.location = "home1.php";
                </script> ';
        }
        else{
            echo 'Error';
        }
    }
?>