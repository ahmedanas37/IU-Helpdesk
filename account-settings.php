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

<div class="dx-box-5 pb-100 bg-grey-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-7">
                <div class="dx-box-decorated">
                    <div class="dx-box-content">
                        <h2 class="h6 mnt-5 mnb-5">Profile Information</h2>
                    </div>
                    <div class="dx-separator"></div>
                   
                   
                   
                   <?php


// Replace with the appropriate SQL query to retrieve user data by ID
$user_id = $_SESSION['userid'];
$sql = "SELECT * FROM user WHERE id = $user_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Output the HTML form with the retrieved user data
  $row = mysqli_fetch_assoc($result);
  ?>
  <form action="#" class="dx-form">
    <div class="dx-box-content">
      <div class="dx-form-group">
        <label for="first-name" class="mnt-7">Name</label>
        <input type="text" class="form-control form-control-style-2" id="first-name" name="name" value="<?php echo $row['name']; ?>">
      </div>

      <div class="dx-form-group">
        <label for="email-address" class="mnt-7">Primary Email Address</label>
        <input type="email" aria-describedby="emailHelp" class="form-control form-control-style-2" id="email-address" name="email" value="<?php echo $row['email']; ?>">
      </div>

      <div class="dx-form-group">
        <label for="line-one" class="mnt-7">Created At</label>
        <input type="text" class="form-control form-control-style-2" id="line-one" name="created_at" value="<?php echo $row['created_at']; ?>">
      </div>

      <div class="dx-form-group">
        <label for="line-two" class="mnt-7">Phone Number</label>
        <input type="text" class="form-control form-control-style-2" id="line-two" name="phone" value="<?php echo $row['phone_number']; ?>">
      </div>

      <div class="dx-form-group">
        <label for="city" class="mnt-7">Department</label>
        <input type="text" class="form-control form-control-style-2" id="city" name="department" value="<?php echo $row['department_id']; ?>">
      </div>

      <div class="dx-form-group">
        <button class="dx-btn dx-btn-xl dx-btn-block">Save Changes</button>
      </div>
    </div>
  </form>
  <?php
} else {
  echo "User not found";
}

// Close connection
mysqli_close($conn);
?>


                </div>
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
