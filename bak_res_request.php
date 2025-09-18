<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap link -->
    <!-- Javascript link -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <style>
    .bg {
        font-family: 'Cedarville Cursive';
        color: rgb(248, 188, 48);
        background-color: black;
        border-radius: 10px;
        border: 2px solid rgb(248, 188, 48);
        font-size: 24px;
    }

    .modal-body {
        color: white;
    }

    .modal-footer a {
        text-decoration: none;
        color: white;
    }

    .btn_modal {
        width: 100px;
        margin: 20px 20px 20px 0px;
        padding: 5px;
        background-color: black;
        color: white;
        border: 2px solid rgb(248, 188, 48);
        border-radius: 10px;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="bg">

                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Note</h3>
                        <div data-bs-theme="dark">
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="modal-body">
                        Your Request has been Sent Successfully. For View the Request click on "Ok".
                    </div>
                    <div class="modal-footer" style="border:0px">
                        <?php
                        error_reporting(0);
                        $user='';
                        $user=$_SESSION['user'];
                        if (!isset($_SESSION['user'])) {
                            echo'
                            <button type="button" class="btn_modal"><a href="login1.php">Ok</a></button>
                            ';
                        }
                        else{
                            echo'
                                <button type="button" class="btn_modal"><a href="rescue_request.php">Ok</a></button>
                            ';
                        }
                        ?>
                        <button type="button" class="btn_modal" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
    include 'bak_connection.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $uname = $_POST['uname'];
        $contactno = $_POST['contactno'];
        $animal = $_POST['animal'];
        $situation = $_POST['situation'];
        $exactlocation = $_POST['exactlocation'];
        $photo = $_FILES['photo']['name'];
        $tmp_name=$_FILES['photo']['tmp_name'];
        $folder='upload/'.$photo;
        move_uploaded_file($tmp_name,$folder);

        
        $insert="INSERT INTO `rescue` (`name`, `contact_no`, `animal`, `current_situation`, `exact_location`, `photo`, `status`, `date/time`) 
        VALUES ('$uname', '$contactno', '$animal', '$situation', '$exactlocation', '$folder','Pending...', current_timestamp());";
        
        $res=mysqli_query($conn,$insert);
        if($res){
            echo"<script>
                    $('#myModal').modal('toggle');
                </script>";

        }
        else{
            echo "error";
            echo $folder;
        }
    }
    ?>