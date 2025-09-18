<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="photos/logo1.png">
    <title>Pet Information - Admin | The Creature's Care</title>
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
        width:100px;
        padding: 5px;
        background-color: black;
        color: white;
        border: 2px solid rgb(248, 188, 48);
        border-radius: 10px;
        cursor: pointer;
        font-size: 24px;
    }
    
    .lbl_add {
        font-size: 24px;
        float: left;
        /* margin: 1px 0px 0px 100px; */
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
        margin: 0px 0px 0px -40px;
    }

    /* Text, Email and Paasword input tags */
    input[type="text"],
    input[type="number"],
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
    .category {
        margin: 0px 10px 14px 0px;
        color: white;
        background-color: black;
        border: 2px solid rgb(248, 188, 48);
        box-shadow: 0.5px 0.5px 1px 1px rgb(248, 188, 48);
        border-radius: 10px;
        padding: 10px;
    }

    input[type=file]::file-selector-button {
        width: 140px;
        margin: 0px 10px 20px 0px;
        padding:5px;
        background-color: black;
        color: white;
        border: 2px solid rgb(248, 188, 48);
        border-radius: 10px;
        cursor: pointer;
    }

    #image-preview {
        /* max-width: 100%; */
        /* max-height: 200px; */
        max-height: 100px;
        max-width: 100px;
        border: 2px solid white;
        margin: -7px 0px 15px 0px;
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
        margin: 0px 0px -10px 0px;
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
        background-color: black;
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

    .bak_img {
        width: 35px;
        height: 35px;
    }

    .btn_yes,
    .btn_no {
        background-color: transparent;
        border: 0px solid white;
        border-radius: 50%;
        opacity: 0.8;
    }
    </style>
</head>

<body>
    <header>
        <?php include 'admin_nav.php';?>
        <div style="border: 1px solid white; margin-bottom: 2px;"></div>
    </header>

    <h1 style="text-align:center;">Pet Information</h1><br>
    <label for="" class="lbl_add">Add New Pet:</label>
    <button type="button" class="btn_add" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</button>
    <!-- Vertically centered modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Add Pet</h3>
                    <div data-bs-theme="dark">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <!-- Username textbox -->
                            <div class="col-md-4">
                                <label for="pname" class="lbl"> Pet Name: </label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="pname" name="pname" required>
                            </div>

                            <!-- Password textbox -->
                            <div class="col-md-4">
                                <label for="category" class="lbl"> Category: </label>
                            </div>
                            <div class="col-md-8" class="lbl">
                                <select name="category" id="category" class="category" alt="Select Category name">
                                    <option value="Dog">Dog</option>
                                    <option value="Cat">Cat</option>
                                    <option value="Bird">Bird</option>
                                </select>
                            </div>

                            <!-- Confirm Password textbox -->
                            <div class="col-md-4">
                                <label for="breed" class="lbl"> Breed: </label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="breed" name="breed" required>
                            </div>

                            <!-- Email textbox -->
                            <div class="col-md-4">
                                <label for="age" class="lbl"> Age: </label>
                            </div>
                            <div class="col-md-8">
                                <input type="number" id="age" name="age" required>
                            </div>

                            <!-- Contact Number textbox -->
                            <div class="col-md-4">
                                <label for="vaccinated"> Vaccinated: </label>
                            </div>
                            <div class="col-md-8">
                                <input type="radio" id="yes" name="vaccinated" value="yes"> Yes
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" id="no" name="vaccinated" value="no"> No
                            </div>

                            <!-- Gender Select -->
                            <div class="col-md-4" style="margin-top:10px;">
                                <label for="gender"> Gender: </label>
                            </div>
                            <div class="col-md-8" style="margin-top:10px;">
                                <input type="radio" id="male" name="gender" value="Male"> Male
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" id="Female" name="gender" value="Female"> Female
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" id="Other" name="gender" value="Other"> Other
                            </div>

                            <!-- City Select -->
                            <div class="col-md-4" style="margin-top:-0px;"><br>
                                <label for="photo"> Photo: </label>
                            </div>
                            <div class="col-md-8"><br>
                                <input type="file" name="photo" id="photo" required>
                                <img id="image-preview" src="#">
                                <script>
                                const fileInput = document.getElementById('photo');
                                const imagePreview = document.getElementById('image-preview');

                                fileInput.addEventListener('change', function() {
                                    const file = this.files[0];

                                    if (file) {
                                        const reader = new FileReader();

                                        reader.addEventListener('load', function() {
                                            imagePreview.src = reader.result;
                                        });

                                        reader.readAsDataURL(file);
                                    } else {
                                        imagePreview.src = '#';
                                    }
                                });
                                </script>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" value="Submit" id="submit" name="submit">&nbsp;&nbsp;&nbsp;
                            <?php include 'bak_add_adopt.php'; ?>
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
                url: "bak_show_petdata.php",
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
                url: "bak_search_petdata.php",
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