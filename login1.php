<?php
    include 'bak_login.php';
    // session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="photos/logo1.png">
    <title>Login | The Creature's Care</title>
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

        /* Login Left Side */
        .login-left {
            width: 40%;
            height: 600px;
            float: left;
            margin: 64px 80px 64px 80px;
            border: 4px solid rgb(248, 188, 48);
            border-radius: 10%;
        }

        /* Login Right Side */
        .login-right {
            float: left;
            width:49%;
            padding:135px 150px 135px 0px;
        }

        /* Form Part for display and direction */
        form {
            display: flex;
            flex-direction: column;
            margin-left: 60px;
        }

        /* Set Fieldset using placeholder on textbox */
        .fielduser,.fieldpassword{
            position:relative;
            margin-top: 10px;
        }

        .userlbl,.passwdlbl{
            position:absolute;
            top:0;
            left:0;
            padding: 12px 5px 0px 10px;
            translate: 0.625rem 0.625rem;
            color:white;
            transition: translate 250ms,background-color 250ms, border-color 250ms;
        }
        
        .fielduser:focus-within label,.fielduser:not(:has(:placeholder-shown)) label,.fieldpassword:focus-within label,.fieldpassword:not(:has(:placeholder-shown)) label{
            translate: 0.265rem -1rem;
            background-color: black;
            color:rgb(248, 188, 48);
            border-color:rgb(248, 188, 48);
            margin-left: 20px;
        }

        /* Text and Paasword input tags */
        input[type="text"],input[type="password"] {
            width:300px;
            margin:10px 10px 10px 0px;
            padding: 15px 10px 10px 20px;
            border: 2px solid rgb(248, 188, 48);
            box-shadow: 0.5px 0.5px 1px 1px rgb(248, 188, 48);
            border-radius: 10px;
            background-color: transparent;
            color:white;
        }

        /* Show Password Checkbox Tag */
        .showpasswd{
            margin:20px 0px 5px 10px;
            color:black;
            background-color: black;
            border:1px solid rgb(248, 188, 48);
            box-shadow: 0.5px 0.5px 1px 1px rgb(248, 188, 48);
            border-radius: 510px;
            padding:10px;
        }

        /* Submit for Login */
        input[type="submit"] {
            width:100px;
            margin:20px 20px 20px 0px;
            padding:5px;
            background-color: black;
            color:white;
            border:3px solid rgb(248, 188, 48);
            border-radius: 10px;
            cursor: pointer;
        }

        /* Line Break */
        .linebreak{
            /* width:550px; */
            margin:-30px 0px 15px 0px;
            /* margin:-30px 0px 15px 0px; */
            border:1px solid rgb(248, 188, 48);
        }
    </style>
</head>

<body>
    <div class="loginpart">
        <!-- Image Login Left Side -->
        <img src="photos/login.jpg" class="login-left">
        <!-- Form Login Right Side -->
        <div class="login-right">
            <form method="post">
                <h1>Login Page</h1>
                <!-- Id hidden textbox -->
                <input type="hidden" name="id" id="id">
                <input type="hidden" name="access" id="access">
                <!-- Username textbox -->
                <div class="fielduser">
                    <input type="text" id="user" name="user" placeholder="" required>
                    <label for="user" class="userlbl">Username</label>
                </div>
                <!-- Password textbox -->
                <div class="fieldpassword">
                    <input type="password" id="passwd" name="passwd" placeholder="" required>
                    <label for="passwd" class="passwdlbl">Password</label>
                </div>
                <!-- for Show password checkbox -->
                <div>
                    <input type="checkbox" name="showpasswd" id="showpasswd" class="showpasswd" onclick="togglePassword()">&nbsp;&nbsp;Show Password
                </div>
                <!-- Your Role Select -->
                <input type="hidden" name="role" id="role">

                <input type="submit" name="submit" value="Sign In"><br>
                <div class="linebreak"> </div>
                <p>Don't have an account? &nbsp;<a href="registration1.php">Register Here</a></p>
                <a href="forgotpassword.php">Forgot password?</a>
            </form><vr>
        </div>
    </div>
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("passwd");
            var checkBox = document.getElementById("showpasswd");

            // Check if the checkbox is checked
            if (checkBox.checked) {
                // Change the input type to 'text' to show the password
                passwordField.type = "text";
            } else {
                // Change the input type back to 'password' to hide the password
                passwordField.type = "password";
            }
        }
    </script>
</body>

</html>