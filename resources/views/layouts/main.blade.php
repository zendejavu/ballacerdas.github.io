
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Balla Cerdas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="BallaCerdas" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio" />
    <meta name="author" content="lmpixels" />
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/animations.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

    <script src="js/modernizr.custom.js"></script>
</head>

<body>
    <!-- Loading animation -->
    <div class="preloader">
        <div class="preloader-animation">
            <div class="preloader-spinner">
            </div>
        </div>
    </div>
    <!-- /Loading animation -->

    <div id="page" class="page">
        @include('partials.navbar')

        <!-- Main Content -->
        <div id="main" class="site-main">
            <!-- Page changer wrapper -->
            <div class="pt-wrapper">
                <!-- Subpages -->
                <div class="subpages">

                    <!-- Home Subpage -->
                    <section class="pt-page" data-id="about-me">
                        @include('about')
                    </section>
                    <!-- End of Home Subpage -->

                    <!-- Resume Subpage -->
                    <section class="pt-page" data-id="resume">
                        @include('resume')
                    </section>
                    <!-- End of Resume Subpage -->


                    <!-- Portfolio Subpage -->
                    <section class="pt-page" data-id="portfolio">
                        @include('portfolio')
                    </section>
                    <!-- /Portfolio Subpage -->

                    <!-- Blog Subpage -->
                    <section class="pt-page" data-id="management">
                        @include('management')
                    </section>
                    {{-- <section class="pt-page" data-id="blog">
                        @include('blog')
                    </section> --}}
                    <!-- /Blog Subpage -->

                    <!-- Contact Subpage -->
                    <section class="pt-page" data-id="contact">
                        @include('contact')
                    </section>
                    <!-- End Contact Subpage -->

                </div>
            </div>
            <!-- /Page changer wrapper -->
        </div>
        <!-- /Main Content -->
    </div>

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/pages-switcher.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/validator.js"></script>
    <script src="js/jquery.shuffle.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    {{-- <script src='https://www.google.com/recaptcha/api.js'></script> --}}
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR-API-KEY"></script>-->
    {{-- <script src="https://maps.googleapis.com/maps/api/js"></script> --}}
    <script src="js/jquery.googlemap.js"></script>
    <script src="js/main.js"></script>
</body>

</html>