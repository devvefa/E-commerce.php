<?php
require_once("Setting/Setting.php");
require_once("Setting/functions.php");

?>

<!doctype html>
<html lang="tr-TR">
<head>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta charset="UTF-8">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="revisit-after" content="7 Days">

    <title>aaa <?php echo $siteTitle; ?> </title>
    <meta name="description" content=" <?php echo $siteDescription; ?>">
    <meta name="keyword" content=" <?php echo $siteKeywords; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="Setting/functions.js" language="JavaScript"></script>
    <link rel="stylesheet" href="Setting/style.css">
    <script type="text/javascript" src="Frameworks/JQuery/jquery-3.5.1.min.js" language="JavaScript"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="static/images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="static/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="static/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="static/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="static/fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="static/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="static/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="static/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="static/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="static/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="static/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="static/vendor/MagnificPopup/magnific-popup.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="static/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="static/css/util.css">
    <link rel="stylesheet" type="text/css" href="static/css/main.css">
</head>

<body>

<img src="https://flo-assets.mncdn.com/media/spotlights/b/y/byaram-1920x60-290720.gif" width="100%" height="60px"
     style="object-fit: cover;" alt="ust-bant">

<div class="multi_color_border"></div>
<!--navbar -->



<!--Navbar-->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">


        <a class="navbar-brand" href="#">
            <div class="wrapper">
                <div class="top_nav">
                    <div class="left">
                        <div class="logo"><p><span>Coding</span>Market</p></div>
                    </div>

                </div>
            </div>

        </a>



    </a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">Dropdown 1</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink1">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>

        </ul>
        <!-- Links -->

        <form class="form-inline">
            <div class="md-form my-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
        </form>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->



<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">

            <picture>
                <source srcset="https://dummyimage.com/2000x500/007aeb/4196e5" media="(min-width: 1400px)">
                <source srcset="https://dummyimage.com/1400x500/#007aeb/4196e5" media="(min-width: 769px)">
                <source srcset="https://dummyimage.com/800x500/007aeb/4196e5" media="(min-width: 577px)">
                <img srcset="https://dummyimage.com/600x500/007aeb/4196e5" alt="responsive image"
                     class="d-block img-fluid">
            </picture>

            <div class="carousel-caption">
                <div>
                    <h2>Digital Craftsmanship</h2>
                    <p>We meticously build each site to get results</p>
                    <span class="btn btn-sm btn-outline-secondary">Learn More</span>
                </div>
            </div>

        </div>
        <!-- /.carousel-item -->
        <div class="carousel-item">
            <a href="https://bootstrapcreative.com/">
                <picture>
                    <source srcset="https://dummyimage.com/2000x500/007aeb/4196e5" media="(min-width: 1400px)">
                    <source srcset="https://dummyimage.com/1400x500/007aeb/4196e5" media="(min-width: 769px)">
                    <source srcset="https://dummyimage.com/800x500/007aeb/4196e5" media="(min-width: 577px)">
                    <img srcset="https://dummyimage.com/600x500/007aeb/4196e5" alt="responsive image"
                         class="d-block img-fluid">
                </picture>

                <div class="carousel-caption justify-content-center align-items-center">
                    <div>
                        <h2>Every project begins with a sketch</h2>
                        <p>We work as an extension of your business to explore solutions</p>
                        <span class="btn btn-sm btn-outline-secondary">Our Process</span>
                    </div>
                </div>
            </a>
        </div>
        <!-- /.carousel-item -->
        <div class="carousel-item">
            <a href="https://bootstrapcreative.com/">
                <picture>
                    <source srcset="https://dummyimage.com/2000x500/007aeb/4196e5" media="(min-width: 1400px)">
                    <source srcset="https://dummyimage.com/1400x500/007aeb/4196e5" media="(min-width: 769px)">
                    <source srcset="https://dummyimage.com/800x500/007aeb/4196e5" media="(min-width: 577px)">
                    <img srcset="https://dummyimage.com/600x500/007aeb/4196e5" alt="responsive image"
                         class="d-block img-fluid">
                </picture>

                <div class="carousel-caption justify-content-center align-items-center">
                    <div>
                        <h2>Performance Optimization</h2>
                        <p>We monitor and optimize your site's long-term performance</p>
                        <span class="btn btn-sm btn-secondary">Learn How</span>
                    </div>
                </div>
            </a>
        </div>
        <!-- /.carousel-item -->
    </div>
    <!-- /.carousel-inner -->
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- /.carousel -->


</body>
</html>

<?php
$dbConncet = null;

?>

