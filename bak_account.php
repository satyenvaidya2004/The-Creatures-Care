<?php
    include 'bak_connection.php';
    $id=$_SESSION['id'];

    $sql="SELECT * FROM `registration` WHERE `id` = '$id'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num == 1){
        while($row=mysqli_fetch_assoc($result)){
            echo'
                <img src="photos/account.jpg" alt="" class="account_banner">
                <div class="container" style="margin-top:-70px">
                    <div class="row set">
                        <div class="col-md-6 pf">
                            <img src="photos/profile.png" alt="" id="profile">
                            <h1>Hello,'.$row['username'].'</h1>
                        </div>';     
        }
    }
?>

<?php
    // session_start();
    include 'bak_connection.php';
    $contactno=$_SESSION['contact_no'];
        
    $sql="SELECT * FROM `rescue` WHERE `contact_no`=$contactno AND `status`='Accepted'";
    
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num >= 1){
        echo'<div class="col-md-3" style="margin:50px 0px 0px 20px;">
                <p style="text-align: center;">'.$num.'</p>
                <p style="color:rgb(248,188,48); margin-top:-16px; text-align: center;">Rescued</p>
            </div>';
        }
        else{
            echo'<div class="col-md-3" style="margin:50px 0px 0px 20px;">
                    <p style="text-align: center;">'.$num.'</p>
                    <p style="color:rgb(248,188,48); margin-top:-16px; text-align: center;">Rescued</p>
                </div>';
    }
?>
<?php
    // session_start();
    include 'bak_connection.php';
    $id=$_SESSION['id'];
        
    $sql="SELECT * FROM `adopt` WHERE `id`=$id AND `status`='Accepted'";
    
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num >= 1){
        echo'<div class="col-md-3" style="margin:50px 0px 0px 20px;">
                <p style="text-align: center;">'.$num.'</p>
                <p style="color:rgb(248,188,48); margin-top:-16px; text-align: center;">Adopted</p>
                <button class="edit"  data-bs-toggle="modal" data-bs-target="#exampleModal">Edit profile</button>
            </div>
            ';
        }
        else{
            echo'<div class="col-md-3" style="margin:50px 0px 0px 20px;">
                    <p style="text-align: center;">'.$num.'</p>
                    <p style="color:rgb(248,188,48); margin-top:-16px; text-align: center;">Adopted</p>
                    <button class="edit"  data-bs-toggle="modal" data-bs-target="#exampleModal">Edit profile</button>
                </div>
                ';
    }
?>
<?php
    include 'bak_connection.php';
    $id=$_SESSION['id'];

    $sql="SELECT * FROM `registration` WHERE `id` = '$id'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num == 1){
        while($row=mysqli_fetch_assoc($result)){

            echo'
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-dialog">
                    <div class="modal-content bg">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">Edit Profile</h3>
                            <div data-bs-theme="dark">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form action="bak_update_profile.php" method="post">
                                <div class="row">
                                    <!-- Username textbox -->
                                    <div class="col-md-4">
                                        <label for="user" class="lbl"> Username: </label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" id="user" name="user" value="'.$row['username'].'" required>
                                    </div>

                                    <!-- Email textbox -->
                                    <div class="col-md-4">
                                        <label for="email" class="lbl"> Email: </label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="email" id="email" name="email" value="'.$row['email'].'" required>
                                    </div>

                                    <!-- Contact Number textbox -->
                                    <div class="col-md-4">
                                        <label for="contactno" class="lbl"> Contact No.: </label>
                                    </div>
                                    <div class="col-md-8 lbl">
                                        '.$row['contact_no'].'
                                    </div>

                                    <!-- Gender Select -->
                                    <div class="col-md-4 lbl">
                                        <label for="gender"> Gender: </label>
                                    </div>
                                    <div class="col-md-8 lbl">
                                        <input type="radio" id="male" name="gender" value="Male"> Male
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="radio" id="Female" name="gender" value="Female"> Female
                                    </div>

                                    <!-- City Select -->
                                    <div class="col-md-4"><br>
                                        <label for="city"> City: </label>
                                    </div>
                                    <div class="col-md-8"><br>
                                        <select name="city" id="city" class="city" alt="Select city name">
                                            <option value="Navsari">Navsari</option>
                                            <option value="Surat">Surat</option>
                                            <option value="Valsad">Valsad</option>
                                            <option value="Ahmedabad">Ahmedabad</option>
                                            <option value="Gandhinagar">Gandhinagar</option>
                                            <option value="Vadodra">Vadodra</option>
                                            <option value="Bardoli">Bardoli</option>
                                            <option value="Jamnagar">Jamnagar</option>
                                            <option value="Bhavnagar">Bhavnagar</option>
                                            <option value="Rajkot">Rajkot</option>
                                        </select>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id" value="'.$row['id'].'">
                            <input type="submit" value="Submit" id="submit" name="submit">&nbsp;&nbsp;&nbsp;
                            <input type="reset" value="Reset" id="reset" name="reset">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>';}}

?>