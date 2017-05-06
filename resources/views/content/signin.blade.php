<!DOCTYPE html>
<html lang="zxx">
    <head>

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

        <!-- Title -->
        <title>..:: LIBRARIA ::..</title>

        <!-- Favicon -->
        <link href="/template/images/favicon.ico" rel="icon" type="image/x-icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="/template/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <!-- Mobile Menu -->
        <link href="/template/css/mmenu.css" rel="stylesheet" type="text/css" />
        <link href="/template/css/mmenu.positioning.css" rel="stylesheet" type="text/css" />

        <!-- Stylesheet -->
        <link href="/template/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>


    <body>

        <!-- Start: Header Section -->

        @include('layout.navbar')

        <!-- End: Header Section -->

        <!-- Start: Page Banner -->
        <section class="page-banner services-banner" style="min-height:100px">
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a href="http://ipa.or.id">Home</a></li>
                        <li>Signin</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->
        <!-- Start: Cart Checkout Section -->
        <div id="content" class="site-content">
            <main id="main" class="site-main">
                <div class="checkout-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <article class="page type-page status-publish hentry">
                                    <div class="entry-content">
                                        <div class="woocommerce">
                                            <form action="/" class="checkout woocommerce-checkout" method="post">
                                                <div class="row">
                                                    <div class="col-sm-8 col-sm-offset-2">
                                                        <div class="woocommerce-info">
                                                            <div class="col-sm-12">
                                                                <p class="input-required">
                                                                    <label>
                                                                        <span class="first-letter">Email Address</span>  
                                                                        <span class="second-letter">*</span>
                                                                    </label>
                                                                    <input type="text" value="" class="input-text">
                                                                </p>
                                                                <p class="input-required">
                                                                    <label>
                                                                        <span class="first-letter">Password</span>  
                                                                        <span class="second-letter">*</span>
                                                                    </label>
                                                                    <input type="password" value="" class="input-text">
                                                                </p>
                                                                <input type="submit" class="btn btn-default" name="Login" value="Login">
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                    </div><!-- .entry-content -->
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <!-- End: Cart Checkout Section -->

        <!-- Start: Footer -->
        <footer class="site-footer">
            <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-text col-md-6">
                            <p>&copy; {{ date("Y") }} Indonesia Petroleum Association. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End: Footer -->

        <!-- jQuery Latest Version 1.x -->
        <script type="text/javascript" src="/template/js/jquery-1.12.4.min.js"></script>

        <!-- jQuery UI -->
        <script type="text/javascript" src="/template/js/jquery-ui.min.js"></script>

        <!-- jQuery Easing -->
        <script type="text/javascript" src="/template/js/jquery.easing.1.3.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="/template/js/bootstrap.min.js"></script>

        <!-- Mobile Menu -->
        <script type="text/javascript" src="/template/js/mmenu.min.js"></script>

        <!-- Harvey - State manager for media queries -->
        <script type="text/javascript" src="/template/js/harvey.min.js"></script>

        <!-- Waypoints - Load Elements on View -->
        <script type="text/javascript" src="/template/js/waypoints.min.js"></script>

        <!-- Facts Counter -->
        <script type="text/javascript" src="/template/js/facts.counter.min.js"></script>

        <!-- MixItUp - Category Filter -->
        <script type="text/javascript" src="/template/js/mixitup.min.js"></script>

        <!-- Owl Carousel -->
        <script type="text/javascript" src="/template/js/owl.carousel.min.js"></script>

        <!-- Accordion -->
        <script type="text/javascript" src="/template/js/accordion.min.js"></script>

        <!-- Responsive Tabs -->
        <script type="text/javascript" src="/template/js/responsive.tabs.min.js"></script>

        <!-- Responsive Table -->
        <script type="text/javascript" src="/template/js/responsive.table.min.js"></script>

        <!-- Masonry -->
        <script type="text/javascript" src="/template/js/masonry.min.js"></script>

        <!-- Carousel Swipe -->
        <script type="text/javascript" src="/template/js/carousel.swipe.min.js"></script>

        <!-- bxSlider -->
        <script type="text/javascript" src="/template/js/bxslider.min.js"></script>

        <!-- Custom Scripts -->
        <script type="text/javascript" src="/template/js/main.js"></script>

    </body>
</html>
