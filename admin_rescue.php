<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="photos/logo1.png">
    <title>Rescue Manage - Admin | The Creature's Care</title>
    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Javascript link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="admin_header.css">
    <style>
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
    </style>
</head>

<body>
    <header>
        <?php include 'admin_nav.php';?>
        <div style="border: 1px solid white; margin-bottom: 2px;"></div>
    </header>

    <h1 style="text-align:center;">Rescue Manage</h1><br>
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
                url: "bak_show_rescuedata.php",
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
                url: "bak_search_rescuedata.php",
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