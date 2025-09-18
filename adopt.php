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
    <link rel="stylesheet" href="footer2.css">
    <style>
    .adoptcard {
        width: 98%;
        display: flex;
        flex-wrap: wrap;
        overflow-x: auto;
        /* justify-content:space-evenly; */
    }

    .card {
        background-color: black;
        color: rgb(248, 188, 48);
        /* border:1px solid rgb(248, 188, 48); */
        box-shadow: 0.5px 0.5px 5px 5px rgb(248, 188, 48);
        width: 300px;
        font-size: 24px;
        text-align: center;
        padding: 20px;
        /* margin: 70px 44px 10px 44px; */
        margin: 50px 0px 25px 62px;
    }

    .card_img {
        height: 150px;
        width: 150px;
        /* display: block; */
        border: 3px solid white;
        margin: 0px auto;
        border-radius: 10px;
    }

    .card p {
        /* align-items: left; */
        color: white;
        text-align: left;
        margin: 0px;
    }

    .linebreak {
        border: 1px solid white;
        margin: 7px;
        opacity: 0.4;
    }

    .card:hover {
        cursor: pointer;
        transform: scale(1.1);
        transition: 2s;
    }

    .card button {
        text-align: right;
        text-decoration: none;
        /* align-items: center; */
        color: white;
        background-color:black;
        border:0px;
    }

    .card button:hover{
        text-decoration:underline;
        /* color:rgb(248, 188, 48); */
    }

    .adopt_button{
        height:75px;
        width:275px;
        margin:-272px 0px 0px 35px;
        filter:drop-shadow(5px 5px black);
        cursor:pointer;
    }
    
    </style>
</head>

<body>
    <!-- Header & Navigation -->
    <header>
        <?php include 'nav.php';?>
        <div style="border: 1px solid white; margin-bottom: 2px;"></div>
    </header>
    <img src="photos/adopt_banner.png" alt="" height="480" width="1510">
    <img src="photos/adopt_button1.png" onclick="scrollToDiv(2000)" alt="" class="adopt_button">
    <div class="adoptcard" id="adoptcard">
        <?php include 'bak_adopt.php'?>
    </div>

    <div style="border: 1px solid white; margin-top: 80px;"></div><br><br><br>
    <?php include 'footer.php';?>
</body>
<script>
    function scrollToDiv(duration) {
        var targetElement = document.getElementById('adoptcard');
        var targetPosition = targetElement.getBoundingClientRect().top;
        var startPosition = window.pageYOffset || document.documentElement.scrollTop;
        var startTime = null;
        
        function animation(currentTime) {
            if (startTime === null) startTime = currentTime;
            var timeElapsed = currentTime - startTime;
            var run = ease(timeElapsed, startPosition, targetPosition, duration);
    window.scrollTo(0, run);
    if (timeElapsed < duration) requestAnimationFrame(animation);
  }

  function ease(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return c / 2 * t * t + b;
    t--;
    return -c / 2 * (t * (t - 2) - 1) + b;
  }

  requestAnimationFrame(animation);
}
</script>

</html>