<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="photos/logo1.png">
    <title>Account | The Creature's Care</title>
    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Javascript link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="head3.css">
    <!-- <link rel="stylesheet" href="footer.css"> -->
    <style>
    .account_banner {
        width: 1528px;
        height: 350px;
    }

    .profile_update {
        margin: 10px 40px 0px 40px;
        /* border: 1px solid white; */
        align-items: center;
    }

    #profile {
        height: 140px;
        width: 140px;
        border: 4px solid rgb(248, 188, 48);
        border-radius: 50%;
        /* margin: 0px auto; */
        display: block;
        float: left;
    }

    h1 {
        margin: 150px 0px 0px -28px;
        text-align: center;
        color: white;
        font-size: 36px;
    }

    .col-md-3 {
        color: white;
        font-size: 26px;
        /* margin: 30px 0px; */
        width: 180px;
    }

    .lbl {
        padding-top: 20px;
    }

    .col-md-8 {
        /* float:left; */
        color: white;
    }

    .pf {
        width: 170px;
        font-size: 24px;
    }

    .set {
        margin: 20px auto;
        width: 780px;
        justify-content: center;
    }

    .edit {
        float: left;
        width: 150px;
        background-color: black;
        color: white;
        font-size: 24px;
        border: 2px solid rgb(248, 188, 48);
        border-radius: 10px;
        padding:5px;
        margin: 50px 0px 0px 130px;
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

    .modal input[type="submit"],
    .modal input[type="reset"] {
        width: 100px;
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
    
    <?php include 'bak_account.php';?>
</body>

</html>