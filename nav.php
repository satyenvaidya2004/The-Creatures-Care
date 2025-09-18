<!-- Navigation open button -->
<nav class="navbar navbar-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
            aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation"
            style="border:2px solid rgb(248, 188, 48);">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Logo Image etc. -->
        <div>
            <img src="photos/logo1.png" id="logo">
        </div>
        <!-- hyperlinks in Navigation -->
        <div class="img">
            <a href="animalrescue.php" style="text-decoration:none;">
                <img src="photos/rescue.png" id="rescue">
                <p class="text_rescue">Rescue</p>
            </a>
            <a href="adopt.php">
                <img src="photos/adopt.png" id="adopt">
                <p class="text_adopt">Adopt</p>
            </a>
        </div>

        <!-- Navigation Headings with List -->
        <div class="offcanvas offcanvas-start offcanvas-size-sm .offcanvas-md" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h6 class="offcanvas-title" id="offcanvasDarkNavbarLabel">The Creature's Care</h6>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>

            <!-- Navigation List and anchors -->
            <div class="offcanvas-body">
                <div class="profile">
                    <img src="photos/profile.png" alt="" id="profileimage"><br>
                    <?php
                            error_reporting(0);
                            // When User will logged in the name will be stored in session and session name will be save in the below variable
                            $user=$_SESSION['user'];
                            // if condition check the user is login or not
                            if (!isset($_SESSION['user'])) {
                                // when user will not login and open the navbar it will see the hello,user and Login,signup button
                                echo '
                                <div class="input" style="text-align:center;">
                                <a href="login1.php"><input type="submit" name="submit" value="Login" class="submit"></a>&nbsp;&nbsp;
                                <a href="registration1.php"><input type="submit" name="submit" value="Signup" class="submit"></a>
                                </div>
                                ';
                            }
                            else{
                                // when the user logged in it will show hello,name of the user stored from session and login signup button not seen due to user already login
                                echo "<h4>Hello,$user</h4>";
                            }
                            // echo $_SESSION['contact_no'];
                            ?>
                </div>
                <!-- Navbar Page Links and lists -->
                <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link nav-link-list" href="home1.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-list" href="animalrescue.php">Aniaml Rescue</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-list" href="adopt.php">Adopt</a>
                    </li>
                    <?php
                        error_reporting(0);
                        $user='';
                        // When User will logged in the name will be stored in session and session name will be save in the below variable
                        $user=$_SESSION['user'];
                        // if condition check the user is login or not for the page lists shown in navigation
                        if (!isset($_SESSION['user'])) {
                            // if user are not login then it will display above all page links
                        }
                        else{
                            // if user are logged in then it will show the below additional links
                            echo'
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    My Profile
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="account.php">Account</a></li>
                                    <li><a class="dropdown-item" href="rescue_request.php">Rescue Request</a></li>
                                    <li><a class="dropdown-item" href="adopt_request.php">Adopt Request</a></li>
                                </ul>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link nav-link-list" aria-current="page" href="bak_logout.php">Logout</a>
                            </li>
                            ';
                        }
                    ?>

                </ul>
            </div>
        </div>
    </div>
</nav>