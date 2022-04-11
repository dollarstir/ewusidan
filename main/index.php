<?php
if (isset($_POST['snd'])) {
    extract($_POST);
    $res = sendmail('www.phpyolk.com', $subject, 'phone: '.$contact.' Email: '.$email.' Services: '.$services.' Date : '.$date.'  ', 'Ewusidan Website', ['kpin463@gmail.com', 'danielewusi2@gmail.com']);

    echo '<script>alert("Request sent successfuly")</script>';
}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EWUSIDAN CONSULT - HOME</title>
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


<meta property="og:type" content="website">
    <meta property="og:url" content="ewusidanconsult.com">
    <meta property="og:title" content="EWUSIDAN CONSULT is a consultancy firm that provide Business, Education, Financial, Documentation and information technology consultation to people.">
    <meta property="og:description"
        content="EWUSIDAN CONSULT is a consultancy firm that provide Business, Education, Financial, Documentation and information technology consultation to people.">
    <meta property="og:image" content="main/assets/images/hero/2.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="ewusidanconsult.com">
    <meta property="twitter:title" content="EWUSIDAN CONSULT is a consultancy firm that provide Business, Education, Financial, Documentation and information technology consultation to people.">
    <meta property="twitter:description"
        content="EWUSIDAN CONSULT is a consultancy firm that provide Business, Education, Financial, Documentation and information technology consultation to people.">
    <meta property="twitter:image" content="main/assets/images/hero/2.jpg">


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
        <?php involve('header'); ?>
        <!--// Header -->

        <!-- Heroslider -->
        <div class="heroslider">
            <div class="heroslider-slider heroslider-animted tm-slider-arrow">

                <!-- Heroslider Item -->
                <div class="heroslider-wrapper">
                    <div class="heroslider-single" data-bgimage="main/assets/images/hero/2.jpg" data-black-overlay="8">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-lg-10">
                                    <div class="heroslider-content text-center">
                                        <div class="heroslider-animatebox">
                                            <h1>
                                                <span>We Provide Best</span>
                                                <b>Consulting Services</b>
                                            </h1>
                                        </div>
                                        <!-- <div class="heroslider-animatebox">
                                            <p>Quisquam enim consequatur magni excepturi ut id vitae. Accusamus quod
                                                minus
                                                libero
                                                cum. Excepturi numquam quam quo quam. Nobis labore quis.</p>
                                        </div> -->
                                        <div class="heroslider-animatebox">
                                            <div class="tm-buttongroup">
                                                <a href="about" class="tm-button">About Us <b></b></a>
                                                <a href="services" class="tm-button tm-button-white">Our Services
                                                    <b></b></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Heroslider Item -->

                <!-- Heroslider Item -->
                <div class="heroslider-wrapper">
                    <div class="heroslider-single" data-bgimage="main/assets/images/hero/1.jpg" data-black-overlay="8">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-10">
                                    <div class="heroslider-content">
                                        <div class="heroslider-animatebox">
                                            <h1>
                                                <span>Welcome To EWUSIDAN</span>
                                                <b> CONSULTANCY</b>
                                            </h1>
                                        </div>
                                        <!-- <div class="heroslider-animatebox">
                                            <p>Quisquam enim consequatur magni excepturi ut id vitae. Accusamus quod
                                                minus
                                                libero
                                                cum. Excepturi numquam quam quo quam. Nobis labore quis.</p>
                                        </div> -->
                                        <div class="heroslider-animatebox">
                                            <div class="tm-buttongroup">
                                            <a href="about" class="tm-button">About Us <b></b></a>
                                                <a href="services" class="tm-button tm-button-white">Our Services
                                                    <b></b></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Heroslider Item -->

                <!-- Heroslider Item -->
                <div class="heroslider-wrapper">
                    <div class="heroslider-single" data-bgimage="main/assets/images/hero/2.jpg" data-black-overlay="8">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-lg-10">
                                    <div class="heroslider-content text-center">
                                        <div class="heroslider-animatebox">
                                            <h1>
                                                <span>We Provide Best</span>
                                                <b>Consulting Services</b>
                                            </h1>
                                        </div>
                                        <!-- <div class="heroslider-animatebox">
                                            <p>Quisquam enim consequatur magni excepturi ut id vitae. Accusamus quod
                                                minus
                                                libero
                                                cum. Excepturi numquam quam quo quam. Nobis labore quis.</p>
                                        </div> -->
                                        <div class="heroslider-animatebox">
                                            <div class="tm-buttongroup">
                                            <a href="about" class="tm-button">About Us <b></b></a>
                                                <a href="services" class="tm-button tm-button-white">Our Services
                                                    <b></b></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Heroslider Item -->

            </div>
            <div class="heroslider-slidecounter"></div>
        </div>
        <!--// Heroslider -->

        <!-- Main -->
        <main class="page-content">

            <!-- About Us Area -->
            <div class="tm-section about-us-area bg-white tm-padding-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-5">
                            <div class="tm-about-image">
                                <img class="wow fadeInLeft" src="main/assets/images/others/about-image.png" alt="deconsult image">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="tm-about-content">
                                <h2>WE ARE EWUSIDAN CONSULT</h2>
                                <span class="divider"><i class="fa fa-superpowers"></i></span>
                                <p>consultancy firm that provide Business, Education, Financial, Documentation and information technology consultation to people.</p>
                                <ul class="stylish-list">
                                    <li><i class="fa fa-check-square-o"></i> Financial & Business consultancy.</li>
                                    
                                    <li><i class="fa fa-check-square-o"></i>IT consultancy</li>
                                    <li><i class="fa fa-check-square-o"></i>Education consultancy</li>
                                    <li><i class="fa fa-check-square-o"></i> Identifaction Cards Consultancy</li>
                                   
                                    <li><i class="fa fa-check-square-o"></i> Documentations</li>
                                    <li><i class="fa fa-check-square-o"></i>Land consultancy</li>
                                </ul>
                                <a href="about" class="tm-button">About Us <b></b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// About Us Area -->

             <!-- Video Callback -->
             <div class="tm-section video-area tm-padding-section" data-bgimage="main/assets/images/hero/1.jpg"
                data-overlay="9">
                <!-- <iframe src="main/assets/videos/video.mp4" width="100%" frameborder="0">sfddf</iframe> -->
               
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-9 col-md-11 col-12">
                            <div class="tm-video text-center">
                                <div class="tm-videobutton tm-videobutton-lg">
                                <video controls width="100%">
                    <source src="main/assets/videos/video.mp4">
                </video>
                                </div>
                                <div class="tm-video-content">
                                    <h2>Play the video to know more about us</h2>
                                    <!-- <p>Tempora maiores amet quasi temporibus impedit. Asperiores earum maiores at.
                                        Sed autem non reiciendis qui. Sapiente necessitatibus saepe ad corporis.</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Video Callback -->

            <!-- Services Area -->
            <div class="tm-section services-area bg-grey tm-padding-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-7 col-md-10 col-12">
                            <div class="tm-section-title text-center">
                                <h2>OUR SERVICES</h2>
                                <span class="divider"><i class="fa fa-superpowers"></i></span>
                                <!-- <p>Molestiae voluptatem dolorem commodi ipsum. Odit et rerum praesentium. Dolorem animi
                                    ullam.</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="row mt-30-reverse">

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-service text-center wow fadeInUp">
                                <span class="tm-service-bgicon">
                                    <i class="flaticon-analysis"></i>
                                </span>
                                <span class="tm-service-icon">
                                    <i class="flaticon-analysis"></i>
                                </span>
                                <div class="tm-service-content">
                                    <h5><a href="services">Financial Consultancy</a></h5>
                                    <!-- <p>Quia et dolore. Et esse ut quas quisquam. Et impedit fugiat debitis eveniet
                                        similique sed perspiciatis.</p>-->
                                    <a href="services" class="tm-readmore">Read More</a> 
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-service text-center wow fadeInUp">
                                <span class="tm-service-bgicon">
                                    <i class="flaticon-consulting"></i>
                                </span>
                                <span class="tm-service-icon">
                                    <i class="flaticon-consulting"></i>
                                </span>
                                <div class="tm-service-content">
                                    <h5><a href="services">Business Consulting</a></h5>
                                    <!-- <p>Quia et dolore. Et esse ut quas quisquam. Et impedit fugiat debitis eveniet
                                        similique sed perspiciatis.</p>-->
                                    <a href="services" class="tm-readmore">Read More</a> 
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-service text-center wow fadeInUp">
                                <span class="tm-service-bgicon">
                                    <i class="flaticon-growth"></i>
                                </span>
                                <span class="tm-service-icon">
                                    <i class="flaticon-growth"></i>
                                </span>
                                <div class="tm-service-content">
                                    <h5><a href="services">IT consultancy</a></h5>
                                    <!-- <p>Quia et dolore. Et esse ut quas quisquam. Et impedit fugiat debitis eveniet
                                        similique sed perspiciatis.</p>-->
                                    <a href="services" class="tm-readmore">Read More</a> 
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-service text-center wow fadeInUp">
                                <span class="tm-service-bgicon">
                                    <i class="flaticon-planning"></i>
                                </span>
                                <span class="tm-service-icon">
                                    <i class="flaticon-planning"></i>
                                </span>
                                <div class="tm-service-content">
                                    <h5><a href="services">Education consultancy</a></h5>
                                    <!-- <p>Quia et dolore. Et esse ut quas quisquam. Et impedit fugiat debitis eveniet
                                        similique sed perspiciatis.</p>-->
                                    <a href="services" class="tm-readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-service text-center wow fadeInUp">
                                <span class="tm-service-bgicon">
                                    <i class="flaticon-money"></i>
                                </span>
                                <span class="tm-service-icon">
                                    <i class="flaticon-money"></i>
                                </span>
                                <div class="tm-service-content">
                                    <h5><a href="services">Marketing consultancy</a></h5>
                                    <!-- <p>Quia et dolore. Et esse ut quas quisquam. Et impedit fugiat debitis eveniet
                                        similique sed perspiciatis.</p>-->
                                    <a href="services" class="tm-readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-service text-center wow fadeInUp">
                                <span class="tm-service-bgicon">
                                    <i class="flaticon-management"></i>
                                </span>
                                <span class="tm-service-icon">
                                    <i class="flaticon-management"></i>
                                </span>
                                <div class="tm-service-content">
                                    <h5><a href="services">Customer service consultancy</a></h5>
                                    <!-- <p>Quia et dolore. Et esse ut quas quisquam. Et impedit fugiat debitis eveniet
                                        similique sed perspiciatis.</p>-->
                                    <a href="services" class="tm-readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-service text-center wow fadeInUp">
                                <span class="tm-service-bgicon">
                                    <i class="flaticon-management"></i>
                                </span>
                                <span class="tm-service-icon">
                                    <i class="flaticon-management"></i>
                                </span>
                                <div class="tm-service-content">
                                    <h5><a href="services">Social marketing consultancy</a></h5>
                                    <!-- <p>Quia et dolore. Et esse ut quas quisquam. Et impedit fugiat debitis eveniet
                                        similique sed perspiciatis.</p>-->
                                    <a href="services" class="tm-readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->


                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-service text-center wow fadeInUp">
                                <span class="tm-service-bgicon">
                                    <i class="flaticon-management"></i>
                                </span>
                                <span class="tm-service-icon">
                                    <i class="flaticon-management"></i>
                                </span>
                                <div class="tm-service-content">
                                    <h5><a href="services">Land consultancy</a></h5>
                                    <!-- <p>Quia et dolore. Et esse ut quas quisquam. Et impedit fugiat debitis eveniet
                                        similique sed perspiciatis.</p>-->
                                    <a href="services" class="tm-readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->


                        <!-- Single Service -->
                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-service text-center wow fadeInUp">
                                <span class="tm-service-bgicon">
                                    <i class="flaticon-management"></i>
                                </span>
                                <span class="tm-service-icon">
                                    <i class="flaticon-management"></i>
                                </span>
                                <div class="tm-service-content">
                                    <h5><a href="services">Documentations</a></h5>
                                    <!-- <p><</p> -->
                                    <a href="services" class="tm-readmore">Read More</a>
                                    
                                </div>
                            </div>
                        </div>
                        <!--// Single Service -->

                    </div>
                </div>
            </div>
            <!--// Services Area -->




            <!-- Video Callback -->
            <div class="tm-section video-area tm-padding-section" data-bgimage="main/assets/images/flyer.jpg"
                data-overlay="9">
               
               
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-9 col-md-11 col-12">
                        <img src="main/assets/images/flyer.jpg" alt="flyer"/>
                            <!-- <div class="tm-video text-center">
                           
                               
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!--// Video Callback -->

            <!-- Request Callback Area -->
            <div class="tm-section callback-area bg-white tm-padding-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="tm-callback">
                                <h2>Request a callback</h2>
                                <!-- <p>Molestiae voluptatem dolorem commodi ipsum. Odit et rerum praesentium. Dolorem animi
                                    ullam.</p> -->
                                <form action="" class="tm-form" method="post">
                                    <div class="tm-form-inner">
                                        <div class="tm-form-field">
                                            <input type="text" name="email" placeholder="Enter Email*" required>
                                        </div>
                                        <div class="tm-form-field">
                                            <select name="services">
                                                <option value="Financial consultancy">Financial consultancy</option>
                                                <option value="Business consultancy">Business consultancy</option>
                                                <option value="IT consultancy">IT consultancy</option>
                                                <option value="Education consultancy">Education consultancy</option>
                                                <option value="Marketing consultancy">Marketing consultancy</option>
                                                <option value="Customer service consultancy">Customer service consultancy</option>
                                                <option value=" Social marketing consultancy"> Social marketing consultancy</option>
                                                <option value="Documentations">Documentations</option>
                                                <option value="Land consultancy">Land consultancy</option>
                                            </select>
                                        </div>
                                        <div class="tm-form-field tm-form-fieldhalf">
                                            <input type="text" name="contact" placeholder="Phone Number*" required>
                                        </div>
                                        <div class="tm-form-field tm-form-fieldhalf">
                                            <input type="text" name="date" data-toggle="datepicker" placeholder="Select Date*"
                                                required>
                                        </div>
                                        <div class="tm-form-field">
                                            <button type="submit" name="snd" class="tm-button">Submit Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tm-successreport">
                                <h2>OUR PROGRESS REPORTS</h2>
                                <canvas id="business-growth" height="190"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Request Callback Area -->

            <!-- Funfact Area -->
          
            <!--// Funfact Area -->

            <!-- Team Area -->
            
            <!--// Team Area -->

            <!-- Our Portfolios -->
            <div class="tm-section portfolios-area bg-grey tm-padding-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-7 col-md-10 col-12">
                            <div class="tm-section-title text-center">
                                <h2>OUR PORTFOLIOS</h2>
                                <span class="divider"><i class="fa fa-superpowers"></i></span>
                                <p>Sample of our works</p>
                            </div>
                        </div>
                    </div>

                    <div class="tm-portfolio-buttons text-center">
                        <button data-filter="*" class="is-active">All</button>
                        <button data-filter=".portfolio-filter-documentation">Documentation</button>
                        <button data-filter=".portfolio-filter-business">Business</button>
                        <button data-filter=".portfolio-filter-financial">Financial</button>
                        <!-- <button data-filter=".portfolio-filter-investment">Documentation</button> -->
                        <button data-filter=".portfolio-filter-careative">Education</button>
                        <button data-filter=".portfolio-filter-technology">Technology</button>
                    </div>

                    <div class="row tm-portfolio-wrapper mt-30-reverse">

                        <!-- Portfolio Single -->
                        <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-filter-documentation">
                            <div class="tm-portfolio mt-30 wow fadeInUp">
                                <div class="tm-portfolio-image">
                                    <img src="main/assets/images/portfolio/1.jpg" alt="portfolio image" style="height: 304px;">
                                    <ul class="tm-portfolio-actions">
                                        <li class="link-button">
                                            <a href=""><i class="fa fa-link"></i></a>
                                        </li>
                                        <li class="zoom-button">
                                            <a href="main/assets/images/portfolio/1.jpg"><i class="fa fa-search-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tm-portfolio-content">
                                    <h5><a href="main/portfolio-details.html">Affidavit</a></h5>
                                    <h6><a href="">Documentation</a></h6>
                                </div>
                            </div>
                        </div>
                        <!--// Portfolio Single -->

                        <!-- Portfolio Single -->
                        <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-filter-documentation">
                            <div class="tm-portfolio mt-30 wow fadeInUp">
                                <div class="tm-portfolio-image">
                                    <img src="main/assets/images/portfolio/2.jpg" alt="portfolio image" style="height: 304px;">
                                    <ul class="tm-portfolio-actions">
                                        <li class="link-button">
                                            <a href=""><i class="fa fa-link"></i></a>
                                        </li>
                                        <li class="zoom-button">
                                            <a href="main/assets/images/portfolio/2.jpg"><i class="fa fa-search-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tm-portfolio-content">
                                    <h5><a href="main/portfolio-details.html">Passport</a></h5>
                                    <h6><a href="">Documentation</a></h6>
                                </div>
                            </div>
                        </div>
                        <!--// Portfolio Single -->

                        <!-- Portfolio Single -->
                        <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-filter-documentation">
                            <div class="tm-portfolio mt-30 wow fadeInUp">
                                <div class="tm-portfolio-image">
                                    <img src="main/assets/images/portfolio/3.jpg" alt="portfolio image" style="height: 304px;">
                                    <ul class="tm-portfolio-actions">
                                        <li class="link-button">
                                            <a href=""><i class="fa fa-link"></i></a>
                                        </li>
                                        <li class="zoom-button">
                                            <a href="main/assets/images/portfolio/3.jpg"><i class="fa fa-search-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tm-portfolio-content">
                                    <h5><a href="main/portfolio-details.html">Birth Certificate</a></h5>
                                    <h6><a href="">Documentation</a></h6>
                                </div>
                            </div>
                        </div>
                        <!--// Portfolio Single -->

                        <!-- Portfolio Single -->
                        <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-filter-documentation portfolio-filter-business">
                            <div class="tm-portfolio mt-30 wow fadeInUp">
                                <div class="tm-portfolio-image">
                                    <img src="main/assets/images/portfolio/4.jpg" alt="portfolio image" style="height: 304px;">
                                    <ul class="tm-portfolio-actions">
                                        <li class="link-button">
                                            <a href=""><i class="fa fa-link"></i></a>
                                        </li>
                                        <li class="zoom-button">
                                            <a href="main/assets/images/portfolio/4.jpg"><i class="fa fa-search-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tm-portfolio-content">
                                    <h5><a href="main/portfolio-details.html">Busineaa Certificate</a></h5>
                                    <h6><a href="">Documentation</a></h6>
                                </div>
                            </div>
                        </div>
                        <!--// Portfolio Single -->

                        <!-- Portfolio Single -->
                        <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-filter-documentation">
                            <div class="tm-portfolio mt-30 wow fadeInUp">
                                <div class="tm-portfolio-image">
                                    <img src="main/assets/images/portfolio/5.jpg" alt="portfolio image" style="height: 304px;">
                                    <ul class="tm-portfolio-actions">
                                        <li class="link-button">
                                            <a href=""><i class="fa fa-link"></i></a>
                                        </li>
                                        <li class="zoom-button">
                                            <a href="main/assets/images/portfolio/5.jpg"><i class="fa fa-search-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tm-portfolio-content">
                                    <h5><a href="main/portfolio-details.html">Birth Certificate</a></h5>
                                    <h6><a href="">Documentation</a></h6>
                                </div>
                            </div>
                        </div>
                        <!--// Portfolio Single -->

                        <!-- Portfolio Single -->
                        <div class="col-lg-4 col-md-6 col-12 tm-portfolio-item portfolio-filter-documentation portfolio-filter-business">
                            <div class="tm-portfolio mt-30 wow fadeInUp">
                                <div class="tm-portfolio-image">
                                    <img src="main/assets/images/portfolio/6.jpg" alt="portfolio image" style="height: 304px;">
                                    <ul class="tm-portfolio-actions">
                                        <li class="link-button">
                                            <a href=""><i class="fa fa-link"></i></a>
                                        </li>
                                        <li class="zoom-button">
                                            <a href="main/assets/images/portfolio/6.jpg"><i class="fa fa-search-plus"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tm-portfolio-content">
                                    <h5><a href="main/portfolio-details.html">Business Certificate</a></h5>
                                    <h6><a href="">Documentation</a></h6>
                                </div>
                            </div>
                        </div>
                        <!--// Portfolio Single -->

                    </div>
                    <!-- <div class="row">
                        <div class="col-lg-12">
                            <div class="tm-portfolio-loadmore text-center mt-50">
                                <a href="main/portfolio.html" class="tm-button tm-button-dark">View All<b></b></a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <!--// Our Portfolios -->

            <!-- Testimonial Area -->
            <!-- <div class="tm-section testimonial-area tm-padding-section tm-parallax" data-overlay="9" data-bgimage="assets/images/bg/bg-image-2.jpg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-7 col-md-10 col-12">
                            <div class="tm-section-title tm-section-title-white text-center">
                                <h2>WHAT CLIENTS SAY</h2>
                                <span class="divider"><i class="fa fa-superpowers"></i></span>
                                <p>Molestiae voluptatem dolorem commodi ipsum. Odit et rerum praesentium. Dolorem animi
                                    ullam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row testimonial-slider-active">

                       
                        <div class="col-lg-6">
                            <div class="tm-testimonial">
                                <div class="tm-testimonial-content">
                                    <i class="fa fa-quote-right"></i>
                                    <p>Maiores ut fuga aut blanditiis. Atque quia adipisci quisquam sunt quis
                                        reiciendis cumque consequatu quas laboriosam enim.</p>
                                </div>
                                <div class="tm-testimonial-bottom">
                                    <div class="tm-testimonial-authorimage">
                                        <img src="main/assets/images/authors/author-image-4.jpg" alt="author image">
                                    </div>
                                    <div class="tm-testimonial-authorcontent">
                                        <h5>Cecilia Moss</h5>
                                        <p>Team Leader</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="tm-testimonial">
                                <div class="tm-testimonial-content">
                                    <i class="fa fa-quote-right"></i>
                                    <p>Maiores ut fuga aut blanditiis. Atque quia adipisci quisquam sunt quis
                                        reiciendis cumque consequatur veniam praesentium.</p>
                                </div>
                                <div class="tm-testimonial-bottom">
                                    <div class="tm-testimonial-authorimage">
                                        <img src="main/assets/images/authors/author-image-3.jpg" alt="author image">
                                    </div>
                                    <div class="tm-testimonial-authorcontent">
                                        <h5>Cecilia Moss</h5>
                                        <p>Team Leader</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="tm-testimonial">
                                <div class="tm-testimonial-content">
                                    <i class="fa fa-quote-right"></i>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibheuismod tincidunt ut laoreet repudiandae impedit veniam.</p>
                                </div>
                                <div class="tm-testimonial-bottom">
                                    <div class="tm-testimonial-authorimage">
                                        <img src="main/assets/images/authors/author-image-2.jpg" alt="author image">
                                    </div>
                                    <div class="tm-testimonial-authorcontent">
                                        <h5>Cecilia Moss</h5>
                                        <p>Team Leader</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div> -->
            <!--// Testimonial Area -->

            <!-- Blogs Area -->
            
            <!--// Blogs Area -->

            <!-- Brandlogo Area -->

            <!--// Brandlogo Area -->

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
                                <a href="contact" class="tm-button tm-button-white">Contact Us <b></b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Call To Action Area -->

        </main>
        <!--// Main -->

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

    <!-- Js Files -->
    <script src="main/assets/js/modernizr-3.6.0.min.js"></script>
    <script src="main/assets/js/jquery.min.js"></script>
    <script src="main/assets/js/popper.min.js"></script>
    <script src="main/assets/js/bootstrap.min.js"></script>
    <script src="main/assets/js/plugins.js"></script>
    <script src="main/assets/js/chart.min.js"></script>
    <script src="main/assets/js/chart-active.js"></script>
    <script src="main/assets/js/main.js"></script>
    <!--// Js Files -->
</body>

</html>