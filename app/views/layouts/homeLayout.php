<!DOCTYPE html>
<html lang="es">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--====== Title ======-->
    <title><?php echo $title ?? 'San Jose' ?></title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="build/images/favicon.ico" type="image/png" />
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="build/css/bootstrap.min.css" />
    <!--====== Fontawesome pro css ======-->
    <link rel="stylesheet" href="build/css/all.css" />
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="build/css/magnific-popup.css" />
    <!--====== animate css ======-->
    <link rel="stylesheet" href="build/css/animate.css" />
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="build/css/slick.css" />
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="build/css/slick-menu.css" />
    <!--====== Default css ======-->
    <link rel="stylesheet" href="build/css/default.css" />
    <!--====== Style css ======-->
    <link rel="stylesheet" href="build/css/style.css" />
    <!--====== Style css ======-->
    <link rel="stylesheet" href="build/css/auth.css" />
    <!--====== Style css ======-->
    <link rel="stylesheet" href="build/css/responsive.css" />
</head>

<body>
    <!--======  PRELOADER PART START ======-->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
            </div>
        </div>
    </div>
    <!--======  HEADER PART START ======-->
    <?php include_once __DIR__.'/../components/homeHeader.php' ?>

    <?php echo $content; ?>

    <!--======  FOOTER PART START ======-->
    <?php include_once __DIR__.'/../components/homeFooter.php' ?>
    <!--======  BACK-TO-TOP PART START ======--><a id="button"><i class="fa fa-arrow-up"></i></a>
    <!--====== jquery js ======-->
    <script src="build/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="build/js/vendor/jquery-1.12.4.min.js"></script>
    <!--====== Bootstrap js ======-->
    <script src="build/js/bootstrap.min.js"></script>
    <script src="build/js/popper.min.js"></script>
    <!--====== Slick js ======-->
    <script src="build/js/slick.min.js"></script>
    <!--====== Slick js ======-->
    <script src="build/js/slick-menu.min.js"></script>
    <!--====== counterup js ======-->
    <script src="build/js/jquery.counterup.min.js"></script>
    <!--====== Magnific Popup js ======-->
    <script src="build/js/jquery.magnific-popup.min.js"></script>
    <!--====== onepage-nav Popup js ======-->
    <!--====== Main js ======-->
    <script src="build/js/main.js"></script>
</body>

</html>