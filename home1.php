<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="photos/logo1.png">
    <title>Home | The Creature's Care</title>
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
    /* Carousel or Slider */
    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .carousel-hadding {
        font-size: 84px;
        font-weight: bold;
        /* color: white; */
        color: rgb(248, 188, 48);
        filter: drop-shadow(3px 3px black);
        margin-top: 260px;
    }

    .linebreak {
        border: 1px solid white;
        width: 35%;
        margin: -2px 180px 20px 180px;
    }

    .caption {
        font-size: 28px;
        font-weight: bolder;
        filter: drop-shadow(3px 3px black);
        color: white;
        text-align: center;
    }

    /* About Creature part-1 */
    .aboutpart1 {
        margin: 0px 160px 0px 140px;
        padding-left: 18px;
    }

    .aboutimage1 {
        margin-top: 40px;
        width: 430px;
        height: 430px;
        float: left;
        border: 4px solid rgb(248, 188, 48);
        border-top-right-radius: 30%;
        border-bottom-left-radius: 30%;
    }

    .aboutdetails1 {
        width: 60%;
        float: right;
        padding: 0px 20px 10px 50px;
    }

    /* About Creature part-2 */
    .aboutpart2 {
        margin: 550px 160px 0px 140px;
        padding-left: 18px;
    }

    .aboutimage2 {
        margin-top: 40px;
        width: 430px;
        height: 430px;
        float: right;
        border: 4px solid rgb(248, 188, 48);
        border-top-left-radius: 30%;
        border-bottom-right-radius: 30%;
    }

    .aboutdetails2 {
        width: 60%;
        float: left;
        padding: 0px 20px 10px 50px;
    }

    .aboutdetails1 ul,
    .aboutdetails2 ul {
        font-size: 24px;
        color: white;
    }    
    </style>
</head>

<body>
    <!-- Header & Navigation -->
    <header>
        <?php include 'nav.php';?>
        <div style="border: 1px solid white; margin-bottom: 2px;"></div>
    </header>

    <!-- Carousel or Slider -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <!-- Slider Page 1 -->
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="photos/banner1.jpg" width="950" height="650" class="d-block w-100" alt="...">
                <div class="centered img_font">
                    <h1 class="carousel-hadding">Protect Wildlife</h1>
                    <div class="linebreak"></div>
                    <p class="caption">We Move The World To Protect Animals</p>
                </div>
            </div>
            <!-- Slider Page 2 -->
            <div class="carousel-item" data-bs-interval="2000">
                <img src="photos/banner2.jpg" width="950" height="650" class="d-block w-100" alt="...">
                <div class="centered img_font">
                    <h1 class="carousel-hadding">Animal Foundation</h1>
                    <div class="linebreak" style="margin-left: 225px;"></div>
                    <p class="caption">We Move The World To Protect Animals</p>
                </div>
            </div>
            <!-- Slider Page 3 -->
            <div class="carousel-item" data-bs-interval="2000">
                <img src="photos/banner3.jpg" width="950" height="650" class="d-block w-100" alt="...">
                <div class="centered img_font">
                    <h1 class="carousel-hadding">Discover Creature</h1>
                    <div class="linebreak" style="margin-left: 200px;"></div>
                    <p class="caption">We Move The World To Protect Animals</p>
                </div>
            </div>
        </div>
        <!-- Coursel or Slider left-right move button -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div style="border: 1px solid white; margin-top: 2px;"></div><br><br><br>

    <!-- About Creature part-1 -->
    <div class="aboutpart1">
        <img src="photos/about1.jpg" class="aboutimage1">
        <div class="aboutdetails1"><br>
            <h1>About Creature</h1>
            <h6>HELPING ANIMALS & WORKING ON ENVIRONMENTAL ISSUES.</h6><br>
            <ul style="list-style-type:disc">
                <li>Our mission is crystal clear: to provide a help to animal and a lifeline for animals in need.</li>
            </ul>
            <ul style="list-style-type:disc">
                <li>Within these virtual pages, you will discover rescue information on animal care, resources, and a
                    network of dedicated volunteers and organizations working tirelessly to make the world a better
                    place for animals.</li>
            </ul>
            <ul style="list-style-type:disc">
                <li> We believe that every creature deserves a chance at a safe, happy, and healthy life, and we are
                    here to make that belief a reality.</li>
            </ul>
        </div>
    </div>

    <!-- About Creature part-2 -->
    <div class="aboutpart2">
        <img src="photos/about2.jpg" class="aboutimage2">
        <div class="aboutdetails2"><br>
            <h1>Saving Animals</h1>
            <h6>HELPING ANIMALS & WORKING ON ENVIRONMENTAL ISSUES.</h6><br>
            <ul style="list-style-type:disc">
                <li> Make informed choices when buying products made from animal resources, such as seafood and wildlife
                    products. Choose sustainably sourced options.</li>
            </ul>
            <ul style="list-style-type:disc">
                <li>If you witness wildlife crimes, such as poaching or illegal trade, report them to the authorities.
                </li>
            </ul>
            <ul style="list-style-type:disc">
                <li>Remember, every small effort counts when it comes to saving animals. By taking action and supporting
                    the conservation of wildlife and their habitats, you can make a positive impact on the
                    planet's biodiversity.</li>
            </ul>
        </div>
    </div>

    <div style="border: 1px solid white; margin-top: 1130px;"></div><br><br><br>
    <!-- Footer -->
    <?php include 'footer.php';?>
</body>

</html>