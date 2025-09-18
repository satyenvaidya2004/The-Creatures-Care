<?php
    include 'bak_forgotpassword.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="photos/logo1.png">
    <title>Forgot Password | The Creature's Care</title>
    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Javascript link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <style>
        /* body */
        body {
            color: rgb(248, 188, 48);
            background-color: black;
            font-family: 'Cedarville Cursive';
            font-style:italic;
            font-size: 20px;
        }

        /* Forgot Password Left Side */
        .forgotpassword-left {
            width: 40%;
            height: 600px;
            float: left;
            margin: 64px 80px 64px 80px;
            border: 4px solid rgb(248, 188, 48);
            border-radius: 10%;
        }

        /* Forgot Password Right Side */
        .forgotpassword-right {
            float: left;
            width:49%;
            padding:130px 150px 94px 0px;
            /* border:1px solid white; */
        }

        /* Form Part for display and direction */
        form {
            display: flex; 
            flex-direction: column;
            margin-left: 60px;
        }

        /* Set Fieldset using label on textbox */
        .fieldcno,.fieldpassword,.fieldcpassword{
            position:relative;
            margin-top: 10px;
        }

        .contactnolbl,.passwdlbl,.cpasswdlbl{
            position:absolute;
            top:0;
            left:0;
            padding: 12px 5px 0px 10px;
            translate: 0.625rem 0.625rem;
            color:white;
            transition: translate 250ms,background-color 250ms, border-color 250ms;
        }
        
        .fieldcno:focus-within label,.fieldcno:not(:has(:placeholder-shown)) label,.fieldpassword:focus-within label,.fieldpassword:not(:has(:placeholder-shown)) label,.fieldcpassword:focus-within label,.fieldcpassword:not(:has(:placeholder-shown)) label{
            translate: 0.265rem -1rem;
            background-color: black;
            color:rgb(248, 188, 48);
            border-color:rgb(248, 188, 48);
            margin-left: 20px;
        }

        /* Text and Paasword input tags */
        input[type="text"], input[type="password"] {
            width:300px;
            margin:10px 10px 10px 0px;
            padding: 15px 10px 10px 20px;
            border: 2px solid rgb(248, 188, 48);
            box-shadow: 0.5px 0.5px 1px 1px rgb(248, 188, 48);
            border-radius: 10px;
            background-color: transparent;
            color:white;
        }

        /* Submit for Forgot Password */
        input[type="submit"] {
            width:150px;
            margin:20px 20px 20px 0px;
            padding:10px;
            background-color: black;
            color:white;
            border:2px solid rgb(248, 188, 48);
            border-radius: 10px;
            cursor: pointer;
        }

        /* Skip for move back to the login page */
        .skip {
            text-decoration: none;
            width:100px;
            margin:20px 20px 20px 0px;
            padding:14px 25px 14px 25px;
            background-color: black;
            color:white;
            border:2px solid rgb(248, 188, 48);
            border-radius: 10px;
            cursor: pointer;
        }

        /* Line Break */
        .linebreak{
            margin:-25px 0px 15px 0px;
            border:1px solid rgb(248, 188, 48);
        }
    </style>
</head>

<body>
    <div class="loginpart">
        <!-- Image Forgot Passworx Left Side -->
        <img src="photos/forgotpassword.jpg" class="forgotpassword-left">
        <!-- Form Forgot Password Right Side -->
        <div class="forgotpassword-right">
            <form method="post">
                <h1>Forgot Password</h1>
                <!-- Contact Number textbox -->
                <div class="fieldcno">
                    <input type="text" id="contactno" name="contactno" placeholder="" required>
                    <label for="contactno" class="contactnolbl">Contact Number</label>
                </div>
                <!-- Password textbox -->
                <div class="fieldpassword">
                    <input type="password" id="passwd" name="passwd" placeholder="" required>
                    <label for="passwd" class="passwdlbl">Password</label>
                </div>
                <!-- Confirm textbox -->
                <div class="fieldcpassword">
                    <input type="password" id="cpasswd" name="cpasswd" placeholder="" required>
                    <label for="cpasswd" class="cpasswdlbl">Confirm Password</label>
                </div>

                 <!-- Skip and Submit Button -->
                <div>
                    <a href="login.html" class="skip">Skip</a>&nbsp;
                    <input type="submit" value="Save Password">
                </div><br>
                <div class="linebreak"> </div>
                <p>Create a new, strong password that you don't use for other websites</p>
            </form>
        </div>
    </div>
</body>

</html>