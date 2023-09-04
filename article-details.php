
<?php
include ('php_scripts\database.php');

if (isset($_GET['id'])) {
    $articleId = $_GET['id'];

    // Update the page view count in the database
    $updateSql = "UPDATE articles SET view_count = view_count + 1 WHERE id = $articleId";
    mysqli_query($conn, $updateSql);
}
?>


<!DOCTYPE html>

    
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Service Management | IU </title>

    <meta name="description" content="Helpdesk platform designed for IQRA University">
    <meta name="keywords" content="helpdesk, forum, template, HTML template, responsive, clean">
    <meta name="author" content="nK">

    <link rel="icon" type="image/png" href="assets/images/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700%7cMaven+Pro:400,500,700" rel="stylesheet"><!-- %7c -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- Fancybox -->
    <link rel="stylesheet" href="assets/vendor/fancybox/dist/jquery.fancybox.min.css">

    <!-- Pe icon 7 stroke -->
    <link rel="stylesheet" href="assets/vendor/pixeden-stroke-7-icon/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">

    <!-- Swiper -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/swiper/dist/css/swiper.min.css">

    <!-- Bootstrap Select -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">

    <!-- Dropzone -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/dropzone/dist/min/dropzone.min.css">

    <!-- Quill -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/quill/dist/quill.snow.css">

    <!-- Font Awesome -->
    <script defer src="assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="assets/vendor/fontawesome-free/js/v4-shims.js"></script>

    <!-- IU -->
    <link rel="stylesheet" href="assets/css/amdesk.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/custom.css">
    
    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    
    
</head>


<body>
    
        
<?php
include ('php_scripts\header.php');
?>

    <div class="dx-main">
        


<header class="dx-header dx-box-3">
    <div class="container">
        
        <div class="bg-image  ">
         
        <video playsinline="true" width="100%" style="object-fit: cover;" autoplay="true" muted="true" loop="true" preload="auto"><source src="https://iqra.edu.pk/wp-content/uploads/2021/09/bg-new-building.mp4" type="video/mp4">Sorry,
        your browser doesn't support embedded videos.</video>          
          <div style="background-color: rgba(27, 27, 27, .8);">
</div>
        </div>

<div class="row">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <h1 class="display-3 text-white">IQRA University Service Management</h1>
                        <p class="lead text-1">A Helpdesk platform designed specifically to streamline operations in IQRA University.</p>
                    </div>
                </div>




       
    </div>
</header>




<div class="dx-box bg-grey-6">
    <div class="container" style="padding: 60px;">
    <div class="row justify-content-center">
            <div class="col-xl-7">
                <h1 class="h2 mb-30 text-main-1 text-center">How can we help you?</h1>
                <form action="#" class="dx-form dx-form-group-inputs">
                    <input type="text" name="" value="" class="form-control" placeholder="Keyword search...">
                    <button class="dx-btn dx-btn-lg">Search</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="dx-separator"></div>

<div class="dx-box bg-white">
    <div class="container">
        <ul class="dx-links text-center">
            <li class="active"><a href="index.php">Support Home</a></li>
            <li><a href="documentations.php">Documentations</a></li>
            <li><a href="knowledgebase.php">Knowledge Base</a></li>
            <!-- <li><a href="forums.html">Forums</a></li> -->
            <li><a href="ticket.php">Ticket System</a></li>
        </ul>
    </div>
</div>
<div class="dx-separator"></div>



<div class="dx-box-5 pb-100 bg-grey-6">
        <div class="container">
            <div class="row vertical-gap md-gap">







            <?php

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the article ID from the URL parameter
if (isset($_GET['id'])) {
    $articleId = $_GET['id'];

    // Query to fetch the article based on the article ID
    $sql = "SELECT * FROM articles WHERE id = $articleId";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $articleTitle = $row["title"];
            $articleContent = $row["content"];
            $articleCategory = $row["category"];
            $datePublished = $row["date_published"];
            $viewCount = $row["view_count"];
        }
    } else {
        echo "Article not found";
    }
} else {
    echo "Article ID not provided";
}

// Close the database connection
$conn->close();
?>



<div class="col-lg-8">
    <div class="dx-box dx-box-decorated">
        <div class="dx-blog-post">
            <div class="dx-blog-post-box pt-30 pb-30">
                <h2 class="h4 mnt-5 mb-8"><?php echo $articleTitle; ?></h2>

                <!-- START: Breadcrumbs -->
                <ul class="dx-breadcrumbs text-left dx-breadcrumbs-dark mnb-8">

                    <li><a href="help-center.html">Support Home</a></li>


                    <li><a href="articles.html">Articles</a></li>


                    <li><a href="single-article-category.html"><?php echo $articleCategory?></a></li>

                    <li><?php echo $articleTitle; ?></li>

                </ul>
                <!-- END: Breadcrumbs -->

            </div>
            <div class="dx-separator"></div>
            <div class="dx-blog-post-box">

                <h4 class="h6"><?php echo $articleContent; ?></h4>
               

            </div>
            <div class="dx-separator"></div>
            <div class="dx-blog-post-box pt-30 pb-30">
                <ul class="dx-blog-post-info mnt-15 mnb-2">
                    <li>Date Published: <?php echo $datePublished?></li>
                    <li>Views: <?php echo $viewCount?></li>
                </ul>
                <ul class="dx-social-links dx-social-links-style-2 mt-20">
                    <li>
                        <a href="#" class="dx-social-twitter"><span class="icon fab fa-twitter"></span> Twitter</a>
                    </li>
                    <li>
                        <a href="#" class="dx-social-facebook"><span class="icon fab fa-facebook"></span> Facebook</a>
                    </li>
                    <li>
                        <a href="#" class="dx-social-google"><span class="icon fab fa-google"></span> Google</a>
                    </li>
                    <li>
                        <a href="#" class="dx-social-pinterest"><span class="icon fab fa-pinterest"></span> Pinterest</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="dx-box dx-box-content dx-box-decorated mt-40">
        <div class="row vertical-gap align-items-center justify-content-center">
            <div class="col-auto">
                <h3 class="h5 mnt-6 mnb-6">Was this helpful to you?</h3>
            </div>
            <div class="col-auto d-flex">
                <a href="#" class="dx-btn dx-btn-md dx-btn-main-1">Yes</a>
                <a href="#" class="dx-btn dx-btn-md dx-btn-grey-2 ml-20">No</a>
            </div>
        </div>
    </div>
</div>










            



            





          


           
           
                <div class="col-lg-4">
                    <div class="dx-sticky dx-sidebar" data-sticky-offsetTop="120" data-sticky-offsetBot="40">
                        
                        
<div class="dx-widget dx-box dx-box-decorated">
    <div class="dx-widget-title">
        Subscribe to Newsletter
    </div>
    <div class="dx-widget-subscribe">
        <div class="dx-widget-text">
            <p>Join the newsletter to receive news, updates, new products and freebies in your inbox.</p>
        </div>
        <form action="#" class="dx-form dx-form-group-inputs">
            <input type="email" name="" value="" aria-describedby="emailHelp" class="form-control form-control-style-2" placeholder="Your Email Address">
            <button class="dx-btn dx-btn-lg dx-btn-icon"><span class="icon fas fa-paper-plane"></span></button>
        </form>
    </div>
</div>

                        
<div class="dx-widget dx-box dx-box-decorated">
    <form action="#" class="dx-form dx-form-group-inputs">
        <input type="text" name="" value="" class="form-control form-control-style-2" placeholder="Search...">
        <button class="dx-btn dx-btn-lg dx-btn-grey dx-btn-grey-style-2 dx-btn-icon"><span class="icon fas fa-search"></span></button>
    </form>
</div>

                        
<div class="dx-widget dx-box dx-box-decorated">
    <div class="dx-widget-title">Articles Categories</div>
    <ul class="dx-widget-categories">
        <li>
            <a href="single-article.html">
                <span class="icon pe-7s-angle-right"></span>
                <span class="dx-widget-categories-category">Quantial</span>
                <span class="dx-widget-categories-badge">(4)</span>
            </a>
        </li>
        <li>
            <a href="single-article.html">
                <span class="icon pe-7s-angle-right"></span>
                <span class="dx-widget-categories-category">Sensific</span>
                <span class="dx-widget-categories-badge">(4)</span>
            </a>
        </li>
        <li>
            <a href="single-article.html">
                <span class="icon pe-7s-angle-right"></span>
                <span class="dx-widget-categories-category">Minist</span>
                <span class="dx-widget-categories-badge">(8)</span>
            </a>
        </li>
        <li>
            <a href="single-article.html">
                <span class="icon pe-7s-angle-right"></span>
                <span class="dx-widget-categories-category">Desty</span>
                <span class="dx-widget-categories-badge">(2)</span>
            </a>
        </li>
        <li>
            <a href="single-article.html">
                <span class="icon pe-7s-angle-right"></span>
                <span class="dx-widget-categories-category">Silies</span>
                <span class="dx-widget-categories-badge">(3)</span>
            </a>
        </li>
    </ul>
</div>

                        
<div class="dx-widget dx-box dx-box-decorated">
    <div class="dx-widget-title">
        Latest Articles
    </div>
    <a href="single-article.html" class="dx-widget-link">
        <span class="dx-widget-link-text">How to manually import Demo data (if you faced with problems in one-click demo import)</span>
        <span class="dx-widget-link-date">6 Sep 2018</span>
    </a>
    <a href="single-article.html" class="dx-widget-link">
        <span class="dx-widget-link-text">Make menu dropdown working without JavaScript</span>
        <span class="dx-widget-link-date">2 Sep 2018</span>
    </a>
    <a href="single-article.html" class="dx-widget-link">
        <span class="dx-widget-link-text">Add top menu link inside dropdown on mobile devices</span>
        <span class="dx-widget-link-date">27 Aug 2018</span>
    </a>
</div>

                        
<div class="dx-widget dx-box dx-box-decorated">
    <div class="dx-widget-title">
        Latest Forum Topics
    </div>
    <a href="single-article.html" class="dx-widget-link">
        <span class="dx-widget-link-text">Need help with customization. Some options are not appearing...</span>
        <span class="dx-widget-link-date">6 Sep 2018</span>
    </a>
    <a href="single-article.html" class="dx-widget-link">
        <span class="dx-widget-link-text">My images on profile and item pages doesnt show up?! Whats the matter?</span>
        <span class="dx-widget-link-date">2 Sep 2018</span>
    </a>
    <a href="single-article.html" class="dx-widget-link">
        <span class="dx-widget-link-text">Theme not updating in downloads</span>
        <span class="dx-widget-link-date">27 Aug 2018</span>
    </a>
</div>

                    </div>
                </div>
            </div>
        </div>
    </div>




<div class="dx-separator"></div>

<div class="dx-box-1">

            <div class="container">
                <div class="row vertical-gap lg-gap">
                    <div class="col-lg-4">


                        <div class="dx-feature dx-feature-1">
                            <div class="dx-feature-decorated"></div>
                            <div class="dx-feature-icon">
                                <span class="icon pe-7s-diamond"></span>
                            </div>
                            <div class="dx-feature-cont">
                                <div class="dx-feature-title">100%</div>
                                <div class="dx-feature-text">User Satisfaction</div>
                            </div>
                        </div>


                        <div class="dx-feature dx-feature-1">
                            <div class="dx-feature-decorated"></div>
                            <div class="dx-feature-icon">
                                <span class="icon pe-7s-like"></span>
                            </div>
                            <div class="dx-feature-cont">
                                <div class="dx-feature-title">4.9</div>
                                <div class="dx-feature-text">User Rating</div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <h2>Who we are</h2>
                        <p class="mb-0">At IQRA University, our helpdesk and ticketing portal team is dedicated to providing exceptional support and ensuring a seamless experience for all users.</p>
                    </div>
                </div>
            </div>
        </div>



        <div class="dx-box-1 bg-dark-1">
            <div class="container">
                <div class="row mnt-40 mnb-40">

                    <div class="col-12 col-md-6 col-lg-4">

                        <div class="dx-feature dx-feature-2">
                            <div class="dx-feature-cont">
                                <div class="dx-feature-icon">
                                    <span class="icon pe-7s-chat"></span>
                                </div>
                                <div class="dx-feature-title">Chat Support</div>
                                <div class="dx-feature-text">Instantly connect with a support representative for real-time assistance.</div>
                            </div>
                            <span class="dx-decorated" style="background-image: url('assets/images/decorated-pattern-dark.svg');"></span>
                        </div>

                    </div>
                    <div class="col-12 col-md-6 col-lg-4">

                        <div class="dx-feature dx-feature-2">
                            <div class="dx-feature-cont">
                                <div class="dx-feature-icon">
                                    <span class="icon pe-7s-ticket"></span>
                                </div>
                                <div class="dx-feature-title">Ticket Management</div>
                                <div class="dx-feature-text">Submit, track, and manage support requests for efficient issue resolution.</div>
                            </div>
                            <span class="dx-decorated" style="background-image: url('assets/images/decorated-pattern-dark.svg');"></span>
                        </div>

                    </div>
                    <div class="col-12 col-md-6 col-lg-4">

                        <div class="dx-feature dx-feature-2">
                            <div class="dx-feature-cont">
                                <div class="dx-feature-icon">
                                    <span class="icon pe-7s-info"></span>
                                </div>
                                <div class="dx-feature-title">Knowledgebase</div>
                                <div class="dx-feature-text">Access a library of helpful resources and guides for navigating the system.</div>
                            </div>
                            <span class="dx-decorated" style="background-image: url('assets/images/decorated-pattern-dark.svg');"></span>
                        </div>

                    </div>
                    <div class="col-12 col-md-6 col-lg-4">

                        <div class="dx-feature dx-feature-2">
                            <div class="dx-feature-cont">
                                <div class="dx-feature-icon">
                                    <span class="icon pe-7s-phone"></span>
                                </div>
                                <div class="dx-feature-title">Mobile-optimized</div>
                                <div class="dx-feature-text">Access the helpdesk and ticketing portal on-the-go via mobile devices.</div>
                            </div>
                            <span class="dx-decorated" style="background-image: url('assets/images/decorated-pattern-dark.svg');"></span>
                        </div>

                    </div>
                    <div class="col-12 col-md-6 col-lg-4">

                        <div class="dx-feature dx-feature-2">
                            <div class="dx-feature-cont">
                                <div class="dx-feature-icon">
                                    <span class="icon pe-7s-mail"></span>
                                </div>
                                <div class="dx-feature-title">Email Integration</div>
                                <div class="dx-feature-text">Create and raise support tickets directly from email.</div>
                            </div>
                            <span class="dx-decorated" style="background-image: url('assets/images/decorated-pattern-dark.svg');"></span>
                        </div>

                    </div>
                    <div class="col-12 col-md-6 col-lg-4">

                        <div class="dx-feature dx-feature-2">
                            <div class="dx-feature-cont">
                                <div class="dx-feature-icon">
                                    <span class="icon pe-7s-graph3"></span>
                                </div>
                                <div class="dx-feature-title">Reporting and Analytics</div>
                                <div class="dx-feature-text">Gain insights into ticket volume, response times etc to optimize support operations.</div>
                            </div>
                            <span class="dx-decorated" style="background-image: url('assets/images/decorated-pattern-dark.svg');"></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>





        <div class="dx-box-5 pb-100">
    <div class="container mt-4 mnb-7">
        <div class="row align-items-center vertical-gap mnt-30 sm-gap mb-50">
            <h2 class="col-auto h4 mb-0 mt-0">Popular Articles</h2>
            <div class="col pl-30 pr-30 d-none d-sm-block">
                <div class="dx-separator"></div>
            </div>
            <div class="col-auto dx-slider-arrows-clone"></div>
        </div>
        <!-- START: Slider Articles

    Additional Classes:
        .dx-slider-arrows (clone arrows)

    Additional Attributes:
        data-swiper-speed                (numbers)
        data-swiper-space                (numbers)
        data-swiper-autoPlay             (numbers)
        data-swiper-slides               (numbers)
        data-swiper-slidesAuto           (true or false)
        data-swiper-arrows-clone         (true or false)
        data-swiper-grabCursor           (true or false)
        data-swiper-lazy                 (true or false)
        data-swiper-breakpoints          (true or false)
        data-swiper-arrows               (true or false)
        data-swiper-pagination           (true or false)
        data-swiper-pagination-dynamic   (true or false)
        data-swiper-pagination-scrollbar (true or false)
        data-swiper-autoHeight           (true or false)
        data-swiper-freeMode             (true or false)
        data-swiper-loop                 (true or false)

-->




<div class="swiper-container dx-slider dx-slider-arrows dx-slider-articles"
    data-swiper-speed="400"
    data-swiper-space="50"
    data-swiper-slides="3"
    data-swiper-breakpoints="true"
    data-swiper-arrows="true"
    data-swiper-arrows-clone="true"
    data-swiper-loop="true"
    data-swiper-autoHeight="true"
    data-swiper-grabCursor="true">

     <div class="swiper-wrapper">
         <div class="swiper-slide">
             <div class="dx-article dx-article-list">
                 <h4 class="h6 mt-0">Quantial</h4>
                 <ul class="dx-list">
                    <li><a href="single-article.html">Make menu dropdown working without JavaScript</a></li>
                    <li><a href="single-article.html">Google Analytics</a></li>
                    <li><a href="single-article.html">How to manually import Demo data (if you faced with problems in one-click demo import)</a></li>
                 </ul>
             </div>
         </div>
         <div class="swiper-slide">
             <div class="dx-article dx-article-list">
                 <h4 class="h6 mt-0">Sensific</h4>
                 <ul class="dx-list">
                    <li><a href="single-article.html">WordPress Themes FAQ</a></li>
                    <li><a href="single-article.html">Change navbar background color</a></li>
                    <li><a href="single-article.html">Change images and banners overlay color</a></li>
                 </ul>
             </div>
         </div>
         <div class="swiper-slide">
             <div class="dx-article dx-article-list">
                 <h4 class="h6 mt-0">Minist</h4>
                 <ul class="dx-list">
                    <li><a href="single-article.html">Add top menu link inside dropdown on mobile devices</a></li>
                    <li><a href="single-article.html">Google Map API Warning (NoApiKeys)</a></li>
                    <li><a href="single-article.html">Make dropdown items links working</a></li>
                 </ul>
             </div>
         </div>
     </div>

     <div class="swiper-button-prev"><span class="icon pe-7s-angle-left"></span></div>
     <div class="swiper-button-next"><span class="icon pe-7s-angle-right"></span></div>
</div>
<div class="dx-box-1">
                    <span class="dx-decorated" style="background-image: url('assets/images/decorated-pattern-light.svg');"></span>
                </div>


                <h2 class="text-center mb-40">Reviews</h2>



                <div class="dx-box">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <!-- START: Slider Reviews

    Additional Classes:
        .dx-slider-arrows (clone arrows)

    Additional Attributes:
        data-swiper-speed                (numbers)
        data-swiper-space                (numbers)
        data-swiper-autoPlay             (numbers)
        data-swiper-slides               (numbers)
        data-swiper-slidesAuto           (true or false)
        data-swiper-arrows-clone         (true or false)
        data-swiper-grabCursor           (true or false)
        data-swiper-lazy                 (true or false)
        data-swiper-breakpoints          (true or false)
        data-swiper-arrows               (true or false)
        data-swiper-pagination           (true or false)
        data-swiper-pagination-dynamic   (true or false)
        data-swiper-pagination-scrollbar (true or false)
        data-swiper-autoHeight           (true or false)
        data-swiper-freeMode             (true or false)
        data-swiper-loop                 (true or false)

-->


                            <div class="swiper-container dx-slider dx-slider-arrows dx-slider-reviews swiper-container-horizontal" data-swiper-speed="400" data-swiper-space="0" data-swiper-slides="2" data-swiper-arrows="true" data-swiper-arrows-clone="true" data-swiper-pagination-dynamic="true" data-swiper-breakpoints="true" data-swiper-loop="true" data-swiper-grabcursor="true" style="cursor: grab;">

                                <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-970px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" style="width: 485px;">
                                        <div class="dx-swiper-slide">
                                            <div class="dx-review dx-block-decorated">
                                                <div>
                                                    <div class="dx-review-title">Matthew Stewart</div>
                                                    <div class="dx-review-subtitle">Themeforest User</div>
                                                    <div class="dx-review-text lead">Theme is brilliantly designed. I
                                                        will see how much is customizable and leave another review when
                                                        planned is done on the theme. Good job guys.</div>
                                                </div>
                                                <div class="dx-review-rating">
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="5" style="width: 485px;">
                                        <div class="dx-swiper-slide">
                                            <div class="dx-review dx-block-decorated">
                                                <div>
                                                    <div class="dx-review-title">Paula Daniel</div>
                                                    <div class="dx-review-subtitle">Themeforest User</div>
                                                    <div class="dx-review-text lead">Quality template. Built-in design
                                                        features made it applicable not only to game portals but also to
                                                        a business/industrial sites.</div>
                                                </div>
                                                <div class="dx-review-rating">
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 485px;">
                                        <div class="dx-swiper-slide">
                                            <div class="dx-review dx-block-decorated">
                                                <div>
                                                    <div class="dx-review-title">Matthew Stewart</div>
                                                    <div class="dx-review-subtitle">Themeforest User</div>
                                                    <div class="dx-review-text lead">Theme is brilliantly designed. I
                                                        will see how much is customizable and leave another review when
                                                        planned is done on the theme. Good job guys.</div>
                                                </div>
                                                <div class="dx-review-rating">
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" style="width: 485px;">
                                        <div class="dx-swiper-slide">
                                            <div class="dx-review dx-block-decorated">
                                                <div>
                                                    <div class="dx-review-title">Paula Daniel</div>
                                                    <div class="dx-review-subtitle">Themeforest User</div>
                                                    <div class="dx-review-text lead">Quality template. Built-in design
                                                        features made it applicable not only to game portals but also to
                                                        a business/industrial sites.</div>
                                                </div>
                                                <div class="dx-review-rating">
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide" data-swiper-slide-index="2" style="width: 485px;">
                                        <div class="dx-swiper-slide">
                                            <div class="dx-review dx-block-decorated">
                                                <div>
                                                    <div class="dx-review-title">Robert Chase</div>
                                                    <div class="dx-review-subtitle">Themeforest User</div>
                                                    <div class="dx-review-text lead">It took a little while but I was
                                                        finally able to get the demo data up and was able to get a
                                                        handle on this theme. I am impressed with the
                                                        features/functionality and with the responsiveness of the
                                                        support group.</div>
                                                </div>
                                                <div class="dx-review-rating">
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide" data-swiper-slide-index="3" style="width: 485px;">
                                        <div class="dx-swiper-slide">
                                            <div class="dx-review dx-block-decorated">
                                                <div>
                                                    <div class="dx-review-title">Oliver Harris</div>
                                                    <div class="dx-review-subtitle">Themeforest User</div>
                                                    <div class="dx-review-text lead">Thanks, so much I love it... So
                                                        far, I've never seen a theme like it...I want to thank you
                                                        for your quick response as well... thanks</div>
                                                </div>
                                                <div class="dx-review-rating">
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide" data-swiper-slide-index="4" style="width: 485px;">
                                        <div class="dx-swiper-slide">
                                            <div class="dx-review dx-block-decorated">
                                                <div>
                                                    <div class="dx-review-title">Matthew Stewart</div>
                                                    <div class="dx-review-subtitle">Themeforest User</div>
                                                    <div class="dx-review-text lead">Theme is brilliantly designed. I
                                                        will see how much is customizable and leave another review when
                                                        planned is done on the theme. Good job guys.</div>
                                                </div>
                                                <div class="dx-review-rating">
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="5" style="width: 485px;">
                                        <div class="dx-swiper-slide">
                                            <div class="dx-review dx-block-decorated">
                                                <div>
                                                    <div class="dx-review-title">Paula Daniel</div>
                                                    <div class="dx-review-subtitle">Themeforest User</div>
                                                    <div class="dx-review-text lead">Quality template. Built-in design
                                                        features made it applicable not only to game portals but also to
                                                        a business/industrial sites.</div>
                                                </div>
                                                <div class="dx-review-rating">
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 485px;">
                                        <div class="dx-swiper-slide">
                                            <div class="dx-review dx-block-decorated">
                                                <div>
                                                    <div class="dx-review-title">Matthew Stewart</div>
                                                    <div class="dx-review-subtitle">Themeforest User</div>
                                                    <div class="dx-review-text lead">Theme is brilliantly designed. I
                                                        will see how much is customizable and leave another review when
                                                        planned is done on the theme. Good job guys.</div>
                                                </div>
                                                <div class="dx-review-rating">
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 485px;">
                                        <div class="dx-swiper-slide">
                                            <div class="dx-review dx-block-decorated">
                                                <div>
                                                    <div class="dx-review-title">Paula Daniel</div>
                                                    <div class="dx-review-subtitle">Themeforest User</div>
                                                    <div class="dx-review-text lead">Quality template. Built-in design
                                                        features made it applicable not only to game portals but also to
                                                        a business/industrial sites.</div>
                                                </div>
                                                <div class="dx-review-rating">
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                    <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <span class="fas fa-star"></span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div></div>
                                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-bullets-dynamic" style="width: 140px;"><span class="swiper-pagination-bullet swiper-pagination-bullet-active swiper-pagination-bullet-active-main" tabindex="0" role="button" aria-label="Go to slide 1" style="left: 56px;"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active-next" tabindex="0" role="button" aria-label="Go to slide 2" style="left: 56px;"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active-next-next" tabindex="0" role="button" aria-label="Go to slide 3" style="left: 56px;"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4" style="left: 56px;"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5" style="left: 56px;"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6" style="left: 56px;"></span></div>

                                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"><span class="icon pe-7s-angle-left"></span></div>
                                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"><span class="icon pe-7s-angle-right"></span></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                            <!-- END: Slider Reviews -->

                        </div>
                    </div>
                    <div class="dx-slider-arrows-clone dx-slider-arrows-reviews"><div class="swiper-button-prev"><span class="icon pe-7s-angle-left"></span></div><div class="swiper-button-next"><span class="icon pe-7s-angle-right"></span></div></div>
                </div>

    </div>
</div>




<div class="row no-gutters">
            <div class="col-lg-6 bg-dark-1">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="container">
                            <div class="dx-box-1">
                                <h2 class="text-white">Trending Forums</h2>
                                <p class="text-2">Join the conversation and stay up-to-date on the latest discussions in IQRA University.</p>
                                <a data-fancybox="" data-touch="false" data-src="#subscribe" href="javascript:;" class="dx-btn dx-btn-lg dx-btn-transparent">Visit Forums</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 bg-main-1">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="container">
                            <div class="dx-box-1">
                                <h2 class="text-white">Visit IU Service Desk</h2>
                                <p class="text-white op-8">Get the support you need - visit the IU Service Desk.</p>
                                <a href="help-center.html" class="dx-btn dx-btn-lg dx-btn-transparent">Raise an Issue</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<?php
include ('php_scripts\footer.php');

 ?>




        





    
</body>
</html>
