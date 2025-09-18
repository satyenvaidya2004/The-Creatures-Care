<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="photos/logo1.png">
    <title>Adopt Animal | The Creature's Care</title>
    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Javascript link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="head3.css">
    <link rel="stylesheet" href="footer.css">
    <style>
    .heading {
        text-align: center;
        margin: 5px 0px;
        font-size: 52px;
        font-weight: bold;
    }

    .describe {
        color: white;
        margin: -30px 160px;
    }

    /* Adopt Left Side */
    .adopt-left {
        height: 500px;
        width: 700px;
        display: block;
        float: left;
        margin: 0px 0px 0px 70px;
        border: 3px solid white;
    }

    /* Registration Right Side */
    .adopt-right {
        float: left;
        width: 48%;
        margin: 48px 0px;
    }

    .row {
        font-size: 26px;
        margin: 0px 0px 0px 80px;

        .col-md-8 {
            color: white;
            width: 300px;
        }
    }

    input[type="Submit"],
    input[type="reset"] {
        width: 100px;
        margin: 20px 0px 20px 0px;
        padding: 5px;
        background-color: black;
        color: white;
        border: 2px solid rgb(248, 188, 48);
        border-radius: 10px;
        cursor: pointer;
    }

    div {
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

        <?php include 'bak_more_adopt.php'; ?>
</body>

</html>