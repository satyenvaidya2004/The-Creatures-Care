<!-- Navigation open button -->
<nav class="navbar navbar-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
            aria-label="Toggle navigation" style="border:2px solid rgb(248, 188, 48);">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Logo Image etc. -->
        <div>
            <img src="Photos/logo1.png" id="logo">
        </div>

        <!-- Navigation Headings with List -->
        <div class="offcanvas offcanvas-start offcanvas-size-sm .offcanvas-md" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h3 class="offcanvas-title" id="offcanvasDarkNavbarLabel">The Creature's Care</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>

            <!-- Navigation List and anchors -->
            <div class="offcanvas-body">
                <div class="profile">
                    <img src="Photos/profile.png" alt="" class="profileimage">
                    <h4>Hello, Admin</h4>
                </div>
                <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link nav-link-list" aria-current="page" href="admin_user.php">User Manage</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-link-list" aria-current="page" href="admin_rescue.php">Rescue Manage</a>
                    </li>
                    
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-list" aria-current="page" href="admin_pet.php">Pet Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-list" aria-current="page" href="admin_adopt_request.php">Adopt Request Manage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-list" aria-current="page" href="admin_contact_us.php">Contact Us Manage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-list" aria-current="page" href="bak_logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>