<!-- Begin header -->
<div class="navbar navbar-expand-lg" style="background-color: #8294C4">
    <div class="container-fluid">
        <!-- click on logo image to go to homepage -->
        <a href="index.php" class="navbar-brand mx-2 navbar-text">MovieVerse</a>
        <!-- burger button when collapses -->
        <div class="justify-content-end">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_index" aria-controls="navbar_index" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
        <!-- Navbar -->
        <div id="navbar_index" class="collapse navbar-collapse justify-content-end">
            <div class="navbar-nav">
                <a class="navbar-text nav-link <?php if ($page == 'index') echo 'active' ?>" href="index.php">Browse Movies</a>
                <?php
                // if user is logged in, show profile
                if (isset($_SESSION["firstname"])) { ?>
                    <a class="navbar-text nav-link <?php if ($page == 'profile') echo 'active' ?> " href="profile.php">Profile</a>
                    <a class='navbar-text nav-link <?php if($page == 'logout') echo 'active' ?>' href='includes/logout.inc.php'>Logout</a>
                <?php }
                // if user is not logged in, show register and login
                else { ?>
                    <a class="navbar-text nav-link <?php if ($page == "registration") echo "active" ?>" href="registration.php">Register</a>
                    <a class="navbar-text nav-link <?php if ($page == "login") echo " active" ?>" href="login.php">Login</a>
                <?php } ?>
                <a class="navbar-text nav-link <?php if ($page == "help") echo " active" ?>" href="about.php">About</a>
            </div>
        </div>
    </div>
</div>