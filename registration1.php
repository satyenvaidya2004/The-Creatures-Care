<?php
    include 'bak_registration.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="photos/logo1.png">
    <title>Registration | The Creature's Care</title>
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

        /* Registration Left Side */
        .registration-left {
            width: 40%;
            height: 600px;
            float: left;
            margin: 64px 80px 64px 80px;
            border: 4px solid rgb(248, 188, 48);
            border-radius: 10%;
        }

        /* Registration Right Side */
        .registration-right {
            float: left;
            width:48%;
            margin:45px 0px 37px 0px;
        }

        /* Form Heading */
        .formheading{
            margin-left:140px;
        }

        /* Form Part for display and direction */
        form {
            display: flex;
            flex-direction: column;
            margin-left: 60px;
        }

        /* Text, Email and Paasword input tags */
        input[type="text"], input[type="password"], input[type="email"]{
            width:300px;
            margin:14px 10px 14px 0px;
            padding: 10px 10px 10px 20px;
            border: 2px solid rgb(248, 188, 48);
            box-shadow: 0.5px 0.5px 1px 1px rgb(248, 188, 48);
            border-radius: 10px;
            background-color: transparent;
            color:white;
        }

        /* Your Role and City Select Tag */
        .city{
            margin:-100px 0px 5px 0px;
            color:white;
            background-color: black;
            border:2px solid rgb(248, 188, 48);
            box-shadow: 0.5px 0.5px 1px 1px rgb(248, 188, 48);
            border-radius: 10px;
            padding:10px;
        }

        /* Label for set the form */
        .lbl{
            padding-top:20px;
        }

        /* Submit and Reset for Signup and Reset */
        input[type="submit"], input[type="reset"] {
            width:100px;
            margin:20px 0px 20px 0px;
            padding:10px;
            background-color: black;
            color:white;
            border:3px solid rgb(248, 188, 48);
            border-radius: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="registrationpart">
        <!-- Image Signup Left Side -->
        <img src="photos/registration.jpg" class="registration-left">
        <!-- Form Signup Right Side -->
        <div class="registration-right">
            <form method="post">
                <h1 class="formheading">Registration Page</h1>
                <div class="row">
                    <!-- Username textbox -->
                    <div class="col-md-4">                    
                        <label for="user" class="lbl"> Username: </label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="user" name="user" required>
                    </div>
                    
                    <!-- Password textbox -->
                    <div class="col-md-4">
                        <label for="passwd" class="lbl"> Password: </label>
                    </div>
                    <div class="col-md-8" class="lbl">
                        <input type="password" id="passwd" name="passwd" required>
                    </div>

                    <!-- Confirm Password textbox -->
                    <div class="col-md-4">
                        <label for="cpasswd" class="lbl"> Confirm Password: </label>
                    </div>        
                    <div class="col-md-8">
                        <input type="password" id="cpasswd" name="cpasswd" required>
                    </div>
                    
                    <!-- Email textbox -->
                    <div class="col-md-4">
                        <label for="email" class="lbl"> Email: </label>
                    </div>
                    <div class="col-md-8">
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <!-- Contact Number textbox -->
                    <div class="col-md-4">
                        <label for="contactno" class="lbl"> Contact No.: </label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="contactno" name="contactno" required>
                    </div>
                    
                    <!-- Gender Select -->
                    <div class="col-md-4">
                        <label for="gender"> Gender: </label>
                    </div>
                    <div class="col-md-8">
                        <input type="radio" id="male" name="gender" value="Male"> Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" id="Female" name="gender" value="Female"> Female
                    </div>

                    <!-- City Select -->
                    <div class="col-md-4"><br>
                        <label for="city"> City: </label>
                    </div>
                    <div class="col-md-8"><br>
                        <select name="city" id="city" class="city" alt="Select city name">
                            <option value="Navsari">Navsari</option>
                            <option value="Surat">Surat</option>
                            <option value="Valsad">Valsad</option>
                            <option value="Ahmedabad">Ahmedabad</option>
                            <option value="Gandhinagar">Gandhinagar</option>
                            <option value="Vadodra">Vadodra</option>
                            <option value="Bardoli">Bardoli</option>                                    
                            <option value="Jamnagar">Jamnagar</option>
                            <option value="Bhavnagar">Bhavnagar</option>
                            <option value="Rajkot">Rajkot</option>
                        </select>
                    </div>

                    <!-- Submit and Reset Button -->
                    <div class="col-md-12" style="text-align:center;">
                        <input type="submit" value="Submit" id="submit" name="submit">&nbsp;&nbsp;&nbsp;
                        <input type="reset" value="Reset" id="reset" name="reset">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>