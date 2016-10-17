<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hisfa Dashboard</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="/js/hisfa.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>


</head>
<body>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <nav role="navigation">
            <div id="menuToggle">

                <input type="checkbox" />

                <span></span>
                <span></span>
                <span></span>

                <ul id="menu">
                    <div class="profile-info">
                        <img class="settingsiconwhite" src="images/settingswhite.svg" alt="settings_wastesilo's">
                        <img src="images/profile.svg" alt="profile image">
                        <p class="profilename">Jens</p>
                    </div>
                    <div class="lightdiv"><a href="#"><li>add incoming resources</li></a></div>
                    <div class="darkdiv"><a href="#"><li>add blocks to stock</li></a></div>
                    <div class="lightdiv"><a href="#"><li>update waste silo's</li></a></div>
                    <div class="darkdiv"><a href="#"><li>update prime silo's</li></a></div>

                </ul>
            </div>
        </nav>
        <div class="headertext">Dashboard</div>
        @yield('dashboardbar')
    </div>
    <div>
        @yield('content')
    </div>


</body>
</html>
