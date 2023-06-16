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
    <!--====== animate css ======-->
    <link rel="stylesheet" href="build/css/animate.css" />
    <!--====== Style css ======-->
    <link rel="stylesheet" href="build/css/auth.css" />
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
    <?php echo $content; ?>
</body>

</html>