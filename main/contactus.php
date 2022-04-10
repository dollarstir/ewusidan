<?php
if (isset($_POST['snd'])) {
    extract($_POST);
    $res = sendmail('www.phpyolk.com', $subject, 'Username: '.$name.' Email: '.$email.' Message <br> '.$message.' ', 'Ewusidan Website', ['kpin463@gmail.com']);

    echo '<script>alert("Request sent successfuly")</script>';
}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EWUSIDAN CONSULT - CONTACT</title>
    <meta name="description" content="EWUSIDAN CONSULT is a consultancy firm that provide Business, Education, Financial, Documentation and information technology consultation to people.">
    <meta name="keywords" content="EWUSIDAN,CONSULTANCY, Business Consultancy,Financial Consultancy,Business Certifcate,online Passport,Affidavit,Birth Certificate">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="main/assets/icons.ico/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="main/assets/icons.ico/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="main/assets/icons.ico/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="main/assets/icons.ico/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="main/assets/icons.ico/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="main/assets/icons.ico/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="main/assets/icons.ico/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="main/assets/icons.ico/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="main/assets/icons.ico/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="main/assets/icons.ico/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="main/assets/icons.ico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="main/assets/icons.ico/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="main/assets/icons.ico/favicon-16x16.png">
<link rel="manifest" href="main/assets/icons.ico/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="main/assets/icons.ico/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

    <!-- Google Font (font-family: 'Karla', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700" rel="stylesheet">
    <!-- Google Font (font-family: 'Rubik', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,700" rel="stylesheet">

    <link rel="stylesheet" href="main/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="main/assets/css/plugins.css">
    <link rel="stylesheet" href="main/assets/css/style.css">

    <link rel="stylesheet" href="main/assets/css/custom.css">
</head>

<body>

    <!-- Preloader -->
    <div class="tm-preloader">
        <span class="tm-preloader-box"></span>
        <button class="tm-button tm-button-sm tm-button-white">Cancel Preloader <b></b></button>
    </div>
    <!--// Preloader -->

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">

        <!-- Header -->
        <?php  involve('header'); ?>
        <!--// Header -->

        <!-- Breadcrumb Area -->
        <div class="tm-breadcrumb-area tm-padding-section text-center" data-overlay="1" data-bgimage="main/assets/images/hero/1.jpg">
            <div class="container">
                <div class="tm-breadcrumb">
                    <!-- <h2 class="tm-breadcrumb-title">Contact Us</h2> -->
                    <ul>
                        <li><a href="home">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--// Breadcrumb Area -->

        <!-- Main Content -->
        <main class="main-content">

            <!-- Contact Us -->
            <div class="tm-section contact-us-area tm-padding-section bg-white">
                <div class="container">
                    <div class="row justify-content-center mt-30-reverse">

                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-contact-block text-center">
                                <span class="tm-contact-icon">
                                    <i class="flaticon-pin"></i>
                                </span>
                                <h5>Address</h5>
                                <p>C/O P.O.Box 7,Aboso -Western Region<br>WT-0037-2342</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-contact-block text-center">
                                <span class="tm-contact-icon">
                                    <i class="flaticon-phone"></i>
                                </span>
                                <h5>Phone</h5>
                                <p><a href="tel:+233556267002">+233556267002</a></p>
                                <p><a href="tela:+233209785016">+233209785016</a></p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-contact-block text-center">
                                <span class="tm-contact-icon">
                                    <i class="flaticon-mail"></i>
                                </span>
                                <h5>Address</h5>
                                <p>Email: <a href="mailto:danielewusi2@gmail.com">danielewusi2@gmail.com</a></p>
                                <p>Skype: <a href="main/#">daniel.ewusi</a></p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container tm-padding-section-top">
                    <div class="row no-gutters">
                        <div class="col-lg-7">
                            <div class="tm-contact-formwrapper">
                                <h5>Let’s get in touch</h5>
                                <form action="" id="tm-contactform" class="tm-form" method="post">
                                    <div class="tm-form-inner">
                                        <div class="tm-form-field">
                                            <input type="text" name="name" placeholder="Name*">
                                        </div>
                                        <div class="tm-form-field">
                                            <input type="email" name="email" placeholder="Email*">
                                        </div>
                                        <div class="tm-form-field">
                                            <input type="text" name="subject" placeholder="Subject*">
                                        </div>
                                        <div class="tm-form-field">
                                            <textarea name="message" cols="30" rows="5" placeholder="Message*"></textarea>
                                        </div>
                                        <div class="tm-form-field">
                                            <button type="submit" class="tm-button" name="snd">Send Message <b></b></button>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messages"></p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="tm-contact-map">
                                <div id="google-map"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Contact Us -->

            <!-- Call To Action Area -->
            <div class="tm-section call-to-action-area bg-theme">
                <div class="container">
                    <div class="row align-items-center tm-cta">
                        <div class="col-lg-9 col-md-8 col-12">
                            <div class="tm-cta-content">
                                <h3>Are you worried about your business?</h3>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="tm-cta-button">
                                <a href="" class="tm-button tm-button-white">Contact Us <b></b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Call To Action Area -->

        </main>
        <!--// Main Content -->

        <!-- Footer Area -->
        <?php  involve('footer'); ?>
        <!--// Footer Area -->

        <!-- Login Register Popup -->
        <div class="tm-loginregister-popup modal fade" id="tm-loginregister-popup" role="dialog" aria-hidden="true">
            <div class="container">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-9 col-md-10 col-sm-10 col-12">
                                <div class="tm-loginregister">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <ul class="nav tm-tabgroup" id="bstab1" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="bstab1-area1-tab" data-toggle="tab" href="main/#bstab1-area1"
                                                role="tab" aria-controls="bstab1-area1" aria-selected="true">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="bstab1-area2-tab" data-toggle="tab" href="main/#bstab1-area2"
                                                role="tab" aria-controls="bstab1-area2" aria-selected="false">Register</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="bstab1-ontent">
                                        <div class="tab-pane fade show active" id="bstab1-area1" role="tabpanel"
                                            aria-labelledby="bstab1-area1-tab">

                                            <form action="#" class="tm-form tm-login-form tm-form-bordered">
                                                <h4>Login</h4>
                                                <div class="tm-form-inner">
                                                    <div class="tm-form-field">
                                                        <label for="login-email">Username or email address*</label>
                                                        <input type="email" id="login-email" required="required">
                                                    </div>
                                                    <div class="tm-form-field">
                                                        <label for="login-password">Password*</label>
                                                        <input type="password" id="login-password" required="required">
                                                    </div>
                                                    <div class="tm-form-field">
                                                        <input type="checkbox" name="login-remember" id="login-remember">
                                                        <label for="login-remember">Remember Me</label>
                                                    </div>
                                                    <div class="tm-form-field">
                                                        <button type="submit" class="tm-button">Login <b></b></button>
                                                    </div>
                                                    <div class="tm-form-field">
                                                        <a href="main/#">Forgot your password?</a>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                        <div class="tab-pane fade" id="bstab1-area2" role="tabpanel" aria-labelledby="bstab1-area2-tab">

                                            <form action="#" class="tm-form tm-register-form tm-form-bordered">
                                                <h4>Create an account</h4>
                                                <div class="tm-form-inner">
                                                    <div class="tm-form-field">
                                                        <label for="register-username">Username</label>
                                                        <input type="text" id="register-username" required="required">
                                                    </div>
                                                    <div class="tm-form-field">
                                                        <label for="register-email">Email address</label>
                                                        <input type="email" id="register-email" required="required">
                                                    </div>
                                                    <div class="tm-form-field">
                                                        <label for="register-password">Password</label>
                                                        <input type="password" id="register-password" required="required">
                                                    </div>
                                                    <div class="tm-form-field">
                                                        <input type="checkbox" id="register-terms">
                                                        <label for="register-terms">I have read and agree to the
                                                            website terms and conditions</label>
                                                    </div>
                                                    <div class="tm-form-field">
                                                        <button type="submit" class="tm-button">Register <b></b></button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Login Register Popup -->

    </div>
    <!--// Wrapper -->

    <!-- Google Map -->
    <script src="main/https://maps.googleapis.com/maps/api/js?key=AIzaSyBgwgIuDRkO7HlxvpWN-vPePnGVWss5r5g"></script>
    <script src="main/https://thememarch.com/demo/html/deconsult/deconsult/assets/js/google-map.js"></script>


    <!-- Js Files -->
    <script src="main/assets/js/modernizr-3.6.0.min.js"></script>
    <script src="main/assets/js/jquery.min.js"></script>
    <script src="main/assets/js/popper.min.js"></script>
    <script src="main/assets/js/bootstrap.min.js"></script>
    <script src="main/assets/js/plugins.js"></script>
    <script src="main/https://thememarch.com/demo/html/deconsult/deconsult/assets/js/ajaxmail.js"></script>
    <script src="main/assets/js/main.js"></script>
    <!--// Js Files -->
</body>

</html>