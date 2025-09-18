<?php
    include 'bak_connection.php';

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $pid=$_POST['p_id'];
        
        $sql = "SELECT * FROM `adopt` WHERE `p_id` = '$pid'";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        if($num >= 1){
            while($row=mysqli_fetch_assoc($result)){
                
                echo'
                    <h1 class="heading">'.$row['p_name'].'</h1><br>
                    <h2 class="describe">Hey !!! My name is '.$row['p_name'].'.</h2><br><br>
                
                    <div class="adoptnpart">
                        <!-- Image Signup Left Side -->
                        <img src="'.$row['photo'].'" class="adopt-left">

                        <!-- Form Signup Right Side -->
                        <div class="adopt-right">
                            <form action="bak_update_adoptrequest.php" method="post">
                                <div class="row" style="width:600px;">
                                    <div class="col-md-4">
                                        <p>Pet Id</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>'.$row['p_id'].'</p>
                                    </div>

                                    <div class="col-md-4">
                                        <p>Category</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>'.$row['category'].'</p>
                                    </div>

                                    <div class="col-md-4">
                                        <p>Breed</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>'.$row['breed'].'</p>
                                    </div>

                                   <div class="col-md-4">
                                        <p>Age</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>'.$row['age'].' Years Old</p>
                                    </div>

                                    <div class="col-md-4">
                                        <p>Gender</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>'.$row['gender'].'</p>
                                    </div>

                                    <div class="col-md-4">
                                        <p>Vaccinated</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>'.$row['vaccinated'].'</p>
                                    </div> 

                                    <div class="col-md-12" style="text-align:center;width: 500px;">
                                        <input type="hidden" name="p_id" value="'.$row['p_id'].'">
                                        <input type="submit" value="Adopt" id="submit" name="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                ';
            }
        }
        else {
            echo "No Request Found";
        }            
    }

?>