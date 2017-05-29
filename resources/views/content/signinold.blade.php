<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Title -->
        <title>..:: Login IPA ::..</title>
        <!-- Favicon -->
        <link href="/template/images/favicon.ico" rel="icon" type="image/x-icon" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Stylesheet -->
        <link href="{{ mix('css/bundle.css')}}" rel="stylesheet" type="text/css" />
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
                                            <form id=ipa-login action="{{ route('/') }}" class="checkout woocommerce-checkout" method="post" autocomplete="off">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-sm-8 col-sm-offset-2">
                                                        <div class="woocommerce-info">
                                                            <div class="col-sm-12">
                                                                @if (session()->has('flash_notification'))
                                                                <div class="alert alert-danger alert-bordered">
                                                                    <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                                                                    {{ session()->get('flash_notification.message') }}
                                                                </div>
                                                                @endif
                                                                <p class="input-required">
                                                                    <label>
                                                                        <span class="first-letter">Email Address</span>  
                                                                        <span class="second-letter">*</span>
                                                                    </label>
                                                                    <input type="email" class="input-text" name="email" value="{{ old('email') }}">
                                                                </p>
                                                                <p class="input-required">
                                                                    <label>
                                                                        <span class="first-letter">Password</span>  
                                                                        <span class="second-letter">*</span>
                                                                    </label>
                                                                    <input type="password" class="input-text" name="password">
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
        <script type="text/javascript" src="{{ mix('js/bundle.js')}}"></script>
    </body>
</html>