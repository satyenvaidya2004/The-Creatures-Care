<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5">
    <link rel="icon" type="image/x-icon" href="photos/logo1.png">
    <title>Animal Rescue Request | The Creature's Care</title>
    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Javascript link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="head3.css">
    <style>
    .rescuecard {
        width: 99%;
        /* border:1px solid white; */
        display: flex;
        flex-wrap: wrap;
        overflow-x: auto;
    }

    .card {
        background-color: black;
        color: rgb(248, 188, 48);
        /* border:1px solid rgb(248, 188, 48); */
        box-shadow: 0.5px 0.5px 5px 5px rgb(248, 188, 48);
        width: 44%;
        font-size: 24px;
        /* text-align: center; */
        padding: 20px;
        /* margin: 70px 44px 10px 44px; */
        margin: 50px 0px 25px 62px;
    }

    .card:hover{
        transform:scale(1.05);
        transition: 2s;
    }

    .card_img {
        width: 185px;
        height: 185px;
        border: 3px solid white;
        border-radius: 10px;
        display: flex;
        position: absolute;
        top: 10;
        right: 0;
        /* align-items:center; */
        /* margin: 15px 0px 0px 0px; */
        margin: 67px 35px 0px 0px;
    }

    td:nth-child(even) {
        color: white;
    }

    .bin_img {
        position: absolute;
        top: 10;
        right: 0;
        margin: 0px 20px;

    }
    div{
        /* border:1px solid white; */
    }
    </style>
</head>

<body>
    <!-- Header & Navigation -->
    <header>
        <?php include 'nav.php';?>
        <div style="border: 1px solid white; margin-bottom: 2px;"></div>
    </header>
    
    <!-- Heading -->
    <h1 style="text-align:center;">Rescue Requests</h1>
    <div class="rescuecard">
        <?php include 'bak_show_rescue_request.php';?>
    </div>
</body>

</html>