<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="photos/logo1.png">
    <title>User Manage - Admin | The Creature's Care</title>
    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Javascript link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="admin_header.css">
    <style>
    .btn_add {
        float: left;
        margin-left: 10px;
        padding: 5px;
        width:100px;
        background-color: black;
        color: white;
        border: 2px solid rgb(248, 188, 48);
        border-radius: 10px;
        cursor: pointer;
        font-size: 24px;
        box-shadow: 1px 1.5px rgb(248, 188, 48);
    }

    .lbl_add {
        font-size: 24px;
        float: left;
        /* margin: 10px 0px 0px 100px; */
        margin: 7px 0px 0px 100px;
    }

    .bg {
        font-family: 'Cedarville Cursive';
        color: rgb(248, 188, 48);
        background-color: black;
        border-radius: 10px;
        border: 2px solid rgb(248, 188, 48);
        font-size: 22px;
        width: 600px;
        margin-left: -40px;
    }

    /* Text, Email and Paasword input tags */
    input[type="text"],
    input[type="password"],
    input[type="email"] {
        width: 300px;
        margin: 0px 10px 14px 0px;
        padding: 10px 10px 10px 20px;
        border: 2px solid rgb(248, 188, 48);
        box-shadow: 0.5px 0.5px 1px 1px rgb(248, 188, 48);
        border-radius: 10px;
        background-color: black;
        color: white;
    }

    .lbl {
        padding-top: 10px;
    }

    /* Your Role and City Select Tag */
    .city {
        margin: -100px 0px 5px 0px;
        color: white;
        background-color: black;
        border: 2px solid rgb(248, 188, 48);
        box-shadow: 0.5px 0.5px 1px 1px rgb(248, 188, 48);
        border-radius: 10px;
        padding: 10px;
    }

    input[type="submit"],
    input[type="reset"] {
        width: 100px;
        padding: 5px;
        background-color: black;
        color: white;
        border: 2px solid rgb(248, 188, 48);
        border-radius: 10px;
        cursor: pointer;
    }

    .img_search {
        float: right;
        height: 50px;
        width: 45px;
        padding: 10px 8px 13px 10px;
        margin-right: -290px;
        opacity: 0.7;
    }

    #search {
        float: right;
        width: 300px;
        font-size: 20px;
        margin: 0px 100px 30px 0px;
        padding: 8px 10px 8px 20px;
        border: 2px solid rgb(248, 188, 48);
        box-shadow: 0.5px 0.5px 1px 1px rgb(248, 188, 48);
        border-radius: 10px;
        background-color: Black;
        color: white;
    }

    table {
        width: 96%;
        margin: -10px auto;
        border: 1px solid white;
        font-size: 24px;
        color: rgb(248, 188, 48);
    }

    td {
        padding: 10px 18px;
        color: white;
    }


    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: red;
        /* -webkit-transition: .4s; */
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        /* -webkit-transition: .4s; */
        transition: .4s;
    }

    input:checked+.slider {
        background-color: green;
    }

    input:checked+.slider:before {
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
    </style>
</head>

<body>
    <header>
        <?php include 'admin_nav.php';?>
        <div style="border: 1px solid white; margin-bottom: 2px;"></div>
    </header>

    <h1 style="text-align:center;">User Manage</h1><br>
    <label for="" class="lbl_add">Add New User:</label>
    <button type="button" class="btn_add" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</button>
    <!-- Vertically centered modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-dialog">
                <div class="modal-content bg">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Add User</h3>
                        <div data-bs-theme="dark">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="row">
                                <!-- Username textbox -->
                                <div class="col-md-4">
                                    <label for="user" class="lbl"> Username: </label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="user" name="user" required>
                                </div>

                                <!-- Password textbox -->
                                <div class="col-md-4">
                                    <label for="passwd" class="lbl"> Password: </label>
                                </div>
                                <div class="col-md-8" class="lbl">
                                    <input type="password" id="passwd" name="passwd" required>
                                </div>

                                <!-- Confirm Password textbox -->
                                <div class="col-md-4">
                                    <label for="cpasswd" class="lbl"> Confirm Password: </label>
                                </div>
                                <div class="col-md-8">
                                    <input type="password" id="cpasswd" name="cpasswd" required>
                                </div>

                                <!-- Email textbox -->
                                <div class="col-md-4">
                                    <label for="email" class="lbl"> Email: </label>
                                </div>
                                <div class="col-md-8">
                                    <input type="email" id="email" name="email" required>
                                </div>

                                <!-- Contact Number textbox -->
                                <div class="col-md-4">
                                    <label for="contactno" class="lbl"> Contact No.: </label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="contactno" name="contactno" required>
                                </div>

                                <!-- Gender Select -->
                                <div class="col-md-4">
                                    <label for="gender"> Gender: </label>
                                </div>
                                <div class="col-md-8">
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
                        <input type="submit" value="Submit" id="submit" name="submit">&nbsp;&nbsp;&nbsp;
                        <?php include 'bak_add_user.php';?>
                        <input type="reset" value="Reset" id="reset" name="reset">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table style="border:0px">
        <tr>
            <!-- <td> -->
            <div id="search-bar">
                <input type="text" name="search" id="search" placeholder="Search Here.." autocomplete="off">
                <img src="photos/search.png" alt="" class="img_search">
            </div>
            <!-- </td> -->
        </tr>

        <tr>
            <td id="table-data">
            </td>
        </tr>
    </table>

    <br><br>

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        // Load Table Records
        function loadTable() {
            $.ajax({
                url: "bak_show_userdata.php",
                type: "POST",
                success: function(data) {
                    $("#table-data").html(data);
                }
            });
        }
        loadTable(); // Load Table Records on Page Load


        // Live Search
        $("#search").on("keyup", function() {
            var search_term = $(this).val();

            $.ajax({
                url: "bak_search_userdata.php",
                type: "POST",
                data: {
                    search: search_term
                },
                success: function(data) {
                    $("#table-data").html(data);
                }
            });
        });
    });
    </script>
</body>

</html>