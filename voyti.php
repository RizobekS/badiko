<?php ?>
<!DOCTYPE html>
<html  lang="en" class="no-js">
<head>
   <meta charset="utf-8"/>
        <title>Badiko</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/logo_style.css">

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
        <link rel="icon" href="img/icon_B.jpg" type="image/x-icon"> 
        <link rel="shortcut icon" href="img/icon_B.jpg" type="image/x-icon">
</head>
<body  id="body" data-spy="scroll" data-target=".header">
    <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only"></span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="#body">
                                <span class="name_logo">Badiko</span>
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="Badiko.php">Гланая</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="Badiko.php#products">Компании</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="Badiko.php#service">Сервис</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="Badiko.php#work">Проекты</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="Badiko.php#pricing">Цены</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="Badiko.php#contact">Контакты</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#registration">Войти</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
<div class="promo-block">
    <div class="container">
        <form class="form" method="post" action="/feedback.php">
            <div class="form-row">
                <div class="form-group col-6">
                    <input type="email" name="mail" id="email" onkeyup="checkParams()" placeholder="Email:" required />
                </div>
                <div class="form-group col-6">
                    <input type="password" name="password" id="name" onkeyup="checkParams()" placeholder="Пароль:" required />
                </div>
            </div>

    <div class="pt-3">
        <a href="registration.html" class="reg">Регистрироваться</a>
        <a href="#" class="zabil">Забыли пароль?</a>
        <input type="submit" id="submit" class="btn" value="Войти"  />
    </div>

</form>

    </div>
</div>
            <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U&amp;callback=initMap" async defer></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="js/components/maginific-popup.min.js" type="text/javascript"></script>
        <script src="js/components/masonry.min.js" type="text/javascript"></script>
        <script src="js/components/gmap.min.js" type="text/javascript"></script>
</form>
</body>
</html>
