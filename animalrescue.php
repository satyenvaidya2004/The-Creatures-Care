<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="photos/logo1.png">
    <title>Animal Rescue | The Creature's Care</title>
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
    /* page banner */
    .centered {
        position: absolute;
        top: 90%;
        left: 50%;
        transform: translate(-50%, -50%);
        color:white;
        text-align:center;
        font-size:24px;
        h1{
            font-size:42px;
            font-weight: bold;
            /* text-shadow:3px 3px black; */
            filter: drop-shadow(5px 5px black);
        }
    }

    /* Story Left Side */
    .story-left {
        width: 42%;
        float: left;
        margin: 78px 30px 78px 80px;
        padding: 30px;
        color: white;
        font-size: 24px;
    }

    /* animal rescue form Right Side */
    .story-right {
        width: 46%;
        float: left;
        margin: 0px 0px 0px 40px;
        padding: 30px;
        font-size: 24px;
    }

    /* input tags of all animal rescue form */
    .rescuestory input[type="text"] {
        width: 300px;
        margin: -7px 0px 30px 0px;
        padding: 8px 10px 8px 20px;
        border: 2px solid rgb(248, 188, 48);
        box-shadow: 0.5px 0.5px 1px 1px rgb(248, 188, 48);
        border-radius: 10px;
        background-color: black;
        color: white;
    }
    
    /* location icon shown image */
    .img_location {
        float: right;
        height: 50px;
        width: 45px;
        padding: 10px 8px 13px 10px;
        margin:-81px 120px 0px 0px;
        opacity: 0.7;
        cursor:pointer;
    }

    /* Animal type and Animal Situation input tags */
    .animal,
    .situation {
        margin: -100px 0px 30px 0px;
        color: white;
        background-color: black;
        border: 2px solid rgb(248, 188, 48);
        box-shadow: 0.5px 0.5px 1px 1px rgb(248, 188, 48);
        border-radius: 10px;
        padding: 5px;
    }

    /* Upload Image of animal current situation */
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

    /* for see uploaded image preview */
    #image-preview {
        /* max-width: 100%; */
        /* max-height: 200px; */
        max-height: 100px;
        max-width: 100px;
        border: 2px solid white;
    }

    /* Submit for move on your request for view your request and Reset for reset the form */
    .rescuestory input[name="submit"],input[type="reset"],.banner_button{
        width: 100px;
        margin: 20px 0px 20px 0px;
        padding: 5px;
        background-color:black;
        color: white;
        border: 2px solid rgb(248, 188, 48);
        border-radius: 10px;
        cursor: pointer;
    }
    </style>

    <!-- script for get live location -->
    <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            document.getElementById("exactlocation").value = latitude + ", " + longitude;
        }
    </script>
</head>

<body>
    <!-- Header & Navigation -->
    <header>
        <?php
            include 'nav.php';
            include 'bak_res_request.php';
        ?>
        <div style="border: 1px solid white; margin-bottom: 2px;"></div>
    </header>
    
    <!-- Rescue page Banner -->
    <img src="photos/rescuebanner.jpg" width="950" height="600" class="d-block w-100" alt="...">
    <div class="centered">
        <h1>You can't buy love,but you can rescue it.</h1>
        <!-- button for fill the rescue form of animal and onclick button it will move the page to the animal rescue form -->
        <button onclick="scrollToDiv(4400)" class="banner_button">Rescue</button>
    </div>
    <div style="border: 1px solid white; margin-top: 2px;"></div><br><br><br>
    
    <!-- Heading -->
    <h1 style="text-align: center;">The Creature's Care Runs a Rescue Program for the Thousands of Animals</h1><br>
    
    <div class="rescuestory" id="rescuestory">
        <!-- Rescue Page left side -->
        <div class="story-left">
            <p>Every day we respond to calls on our helpline to come to the aid of animals injured after being hit by a
                vehicle, to severe wounds, illnesses, burns, etc.. when she was only 4 month old when she was rescued
                and near death due to a life-threatening wound infested with maggots. Watch her miraculou recovery that
                was only possible due to generous animal lovers like youl
                <br><br>Most cities across India don't have helpline, a hospital, or a shelter for suffering street
                animals. In those places, animals must suffer without any help and possibly die slow painful deaths. We
                work to end the the ongoing suffering of our homeless community dogs. <br><br>
            </p>
            
        </div>
        <!-- Rescue Page left side -->
        <div class="story-right">
            <form action="" method="post" enctype="multipart/form-data">
                <h1 style="text-align: center;">Animal Rescue</h1><br>
                
                <div class="row">
                    <!-- Requester Name -->
                    <div class="col-md-4">
                        <label for="uname">Name:</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="uname" id="uname" required>
                    </div>
                    
                    <!-- Requester Contact Details -->
                    <div class="col-md-4">
                        <label for="contactno">Contact No:</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="contactno" id="contactno">
                    </div>
                    
                    <!-- Animal Type -->
                    <div class="col-md-4">
                        <label for="animal">Animal:</label>
                    </div>
                    <div class="col-md-8">
                        <select id="animal" name="animal" class="animal" required>
                            <option value="Birds">Birds</option>
                            <option value="Cow">Cow</option>
                            <option value="Dog">Dog</option>
                            <option value="Cat">Cat</option>
                            <option value="Snake">Snake</option>
                        </select>
                    </div>
                    
                    <!-- Animal Situation -->
                    <div class="col-md-4">
                        <label for="situation">Situation:</label>
                    </div>
                    <div class="col-md-8">
                        <select id="situation" name="situation" class="situation" required>
                            <option value="Normal">Normal</option>
                            <option value="Critical">Critical</option>
                            <option value="Very Critical">Very Critical</option>
                        </select>
                    </div>
                    
                    <!-- Exact Location -->
                    <div class="col-md-4">
                        <label for="exactlocation">Exact Location:</label>
                    </div>
                    <div class="col-md-8">
                        <!-- here we can enter the address manually and we get the current location on click the location icon -->
                        <input type="text" name="exactlocation" id="exactlocation" class="exactlocation">
                        <img src="photos/location.png" alt="" title="Click to Live Location" class="img_location" onclick="getLocation()">
                    </div>
                    
                    <!-- Animal Photo -->
                    <div class="col-md-4">
                        <label for="photo">Photo:</label>
                    </div>
                    <div class="col-md-8 button-wrap">
                        <input type="file" name="photo" id="photo" required>
                        <!-- after upload image it we can see image preview -->
                        <img id="image-preview" src="#">
                    </div>

                    <!-- Submit and Reset button -->
                    <div class="col-md-12" style="text-align:center;">
                        <input type="submit" value="Submit" name="submit">&nbsp;&nbsp;&nbsp;
                        <input type="reset" id="reset" name="reset" value="Reset">
                    </div>
                </div><br>
            </form>
        </div>
    </div>

    <div style="border: 1px solid white; margin-top: 750px;"></div><br><br><br>
    <?php include 'footer.php';?>
</body>
<!-- script for the image preview upload by user -->
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

<!-- script for scroll to the rescue form onclick button availabel at banner -->
<script>
    function scrollToDiv(duration) {
        var targetElement = document.getElementById('rescuestory');
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