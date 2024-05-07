<div class="navbar" id="myNavbar">
        <div class="nav1">
            <h1 class="logo"><i class="fa-solid fa-cloud"></i> Weather Whirl</h1>
            <a href="/weatherphp">Home</a>
            <a href="/weatherphp/weather.php">Weather</a>
            <a href="/weatherphp/about.php">About</a>
            <a href="/weatherphp/signUp.php">SignUp</a>
            <a href="/weatherphp/login.php">Login</a>
            <span class="span" style="margin-right:50px;">
                <i class="fas fa-user" id="userIcon"></i>
                <span class="span2"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>
            </span>
           
            <i class="fa-solid fa-bars" id="barsIcon" style="    position: absolute;
    right: 0;
    bottom: 24px;"></i>
        </div>
        <div class="nav2" style="z-index: 2;">
            <a href="/weatherphp">Home</a>
            <a href="/weatherphp/weather.php">Weather</a>
            <a href="/weatherphp/about.php">About</a>
            <a href="/weatherphp/signUp.php">SignUp</a>
            <a href="/weatherphp/login.php">Login</a>
        </div>

    </div>