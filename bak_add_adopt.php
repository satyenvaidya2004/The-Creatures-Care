<?php
    include 'bak_connection.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $pname = $_POST['pname'];
        $category = $_POST['category'];
        $breed = $_POST['breed'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $vaccinated = $_POST['vaccinated'];
        $photo = $_FILES['photo']['name'];
        $tmp_name=$_FILES['photo']['tmp_name'];
        $folder='upload/'.$photo;
        move_uploaded_file($tmp_name,$folder);
                
        $insert="INSERT INTO `adopt`(`p_name`, `category`, `breed`, `age`, `gender`, `vaccinated`, `photo`, `status`, `date/time`, `id`) 
        VALUES ('$pname','$category','$breed','$age','$gender','$vaccinated','$folder','Pending...',current_timestamp(),1)";
        $result=mysqli_query($conn,$insert);
        //for show message of success
        if($result){
            echo'<script>
                    alert("Pet Added Successfully.");
                    window.location = "admin_pet.php";
                </script> ';
        }
        else{
            echo 'Error';
            echo $folder;
        }
    }
?>