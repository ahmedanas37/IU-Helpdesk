
 
        <!-- START: Footer -->



        <footer class="dx-footer">
    <div class="dx-box-1">
        <div class="container">
            <div class="row vertical-gap lg-gap">
                
                <div class="col-sm-6 col-lg-4">
                    
<div class="dx-widget-footer">
    <div class="dx-widget-title">
        <a href="index.php" class="dx-widget-logo">
            <img src="https://iqra.edu.pk/wp-content/uploads/2021/03/favicon-1.png" alt="" width="80px">
        </a>
    </div>
    <div class="dx-widget-text">
        <p class="mb-0">&copy; 2023 <span class="dib">All rights reserved.</span> <span class="dib">IQRA University</span></p>
    </div>
    <div class="dx-widget-text">
        <ul class="dx-social-links mnt-3">
            <li><a href="https://www.facebook.com/IUMainCampus"><span class="fab fa-facebook"></span></a></li>
            <li><a href="https://www.instagram.com/iqra_university/"><span class="fab fa-instagram"></span></a></li>
            <li><a href="https://www.linkedin.com/school/iqra-university-official/"><span class="fab fa-linkedin"></span></a></li>
            <li><a href="https://www.youtube.com/channel/UCeu0uTN42AVuVsVvCNizBxw"><span class="fab fa-youtube"></span></a></li>
            <li><a href="https://twitter.com/IqraUniOfficial"><span class="fab fa-twitter"></span></a></li>

        </ul>
    </div>
</div>

                </div>
                <div class="col-sm-6 col-lg-4">
                    
<div class="dx-widget-footer">
    <div class="dx-widget-title">
        Useful Links
    </div>
    <ul class="dx-widget-list">
        <li><a href="ticket-submit-1.php">Raise a Ticket</a></li>
        <li><a href="documentations.php">Documentations</a></li>
        <li><a href="knowledgebase.php">Knowledgebase</a></li>
    </ul>

    <ul class="dx-widget-list">
        <li><a href="index.php">Help Center</a></li>
       
        <li>
            <a data-fancybox data-touch="false" data-close-existing="true" data-src="#login" href="javascript:;">Log In</a>
        </li>

    </ul>
</div>

                </div>
                
                <div class="col-sm-6 col-lg-4">
                <?php
// Define your database credentials
$host = "localhost"; // Your database host name
$user = "root"; // Your database username
$password = ""; // Your database password
$database = "project"; // Your database name

// Create a new database connection
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to fetch the 2 latest knowledge base articles
$sql = "SELECT * FROM articles ORDER BY date_published DESC LIMIT 2";

// Execute the query
$result = $conn->query($sql);

// Check for errors
if (!$result) {
    die("Query failed: " . $conn->error);
}

// Process the query result
if ($result->num_rows > 0) {
    echo '<div class="dx-widget-footer">';
    echo '<div class="dx-widget-title">Latest Posts</div>';

    // Loop through the fetched articles
    while ($row = $result->fetch_assoc()) {
        echo '<a href="article-details.php?id=' . $row['id'] . '" class="dx-widget-post">';
        echo '<span class="dx-widget-post-text">';
        echo '<span class="dx-widget-post-title">' . $row['title'] . '</span>';
        echo '<span class="dx-widget-post-date">' . date('d M Y', strtotime($row['date_published'])) . '</span>';
        echo '</span>';
        echo '</a>';
    }

    echo '</div>'; // Close dx-widget-footer
} else {
    echo "No results found.";
}

// Close the new database connection
mysqli_close($conn);
?>



                </div>
            </div>
        </div>
    </div>

</footer>
<!-- END: Footer -->

    </div>

    <div class="dx-popup dx-popup-signin" id="login">
    <button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="Close"><svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path></svg></button>
    <div class="dx-signin-content dx-signin text-center">
        <h1 class="h3 text-white mb-30">Log In</h1>

        <form method="post" class="dx-form">
          
            <div class="dx-form-group-md">
                <div class="dx-signin-or">Please Login Using Your Credentials</div>
            </div>
            <div class="dx-form-group-md">
                <input name="username" type="text" class="form-control form-control-style-4" placeholder="Username Or Email">
            </div>
            <div class="dx-form-group-md">
                <input name="password" type="password" class="form-control form-control-style-4" placeholder="Password">
            </div>
            <div class="dx-form-group-md">
                <button type="submit" class="dx-btn dx-btn-block dx-btn-popup" name="btnLogin">Log In</button>
            </div>
            <div class="dx-form-group-md">
                <div class="d-flex justify-content-between">
                    <a data-fancybox data-touch="false" data-close-existing="true" data-src="#reset-password" href="javascript:;">Reset your password</a>
                    <a data-fancybox data-touch="false" data-close-existing="true" data-src="#signup" href="javascript:;">Sign Up</a>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="dx-popup dx-popup-signin" id="signup">
    <button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="Close"><svg xmlns="http://www.w3.org/2000/svg" version="10" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path></svg></button>
    <div class="dx-popup-content dx-signin text-center">
        <h1 class="h3 text-white mb-30">Sign Up</h1>

        <form action="#" class="dx-form">
            <div class="dx-form-group-md">
                <a href="account.html" class="dx-btn dx-btn-block dx-btn-popup dx-btn-envato d-flex align-items-center justify-content-center">
                    <span class="fas fa-leaf mr-20"></span><span>Sign Up with Envato</span>
                </a>
            </div>
            <div class="dx-form-group-md">
                <div class="dx-signin-or">OR</div>
            </div>
            <div class="dx-form-group-md">
                <input type="text" class="form-control form-control-style-4" placeholder="Username">
            </div>
            <div class="dx-form-group-md">
                <input type="email" class="form-control form-control-style-4" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="dx-form-group-md">
                <input type="password" class="form-control form-control-style-4" placeholder="Password">
            </div>
            <div class="dx-form-group-md">
                <input type="password" class="form-control form-control-style-4" placeholder="Confirm password">
            </div>
            <div class="dx-form-group-md">
                <a href="account.html" class="dx-btn dx-btn-block dx-btn-popup">Sign Up</a>
            </div>
        </form>
    </div>
</div>

<div class="dx-popup dx-popup-signin" id="reset-password">
    <button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="Close"><svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path></svg></button>
    <div class="dx-popup-content dx-signin text-center">
        <h1 class="h3 text-white mb-30">Reset Password</h1>

        <form action="#" class="dx-form">
            <div class="dx-form-group-md">
                <input type="email" class="form-control form-control-style-4" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="dx-form-group-md">
                <button class="dx-btn dx-btn-block dx-btn-popup">Reset My Password</button>
            </div>
        </form>
    </div>
</div>

<div id="subscribe" class="dx-popup dx-popup-modal dx-popup-subscribe">
    <button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="Close"><svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path></svg></button>
    <div class="dx-box dx-box-decorated">
        <div class="dx-box-content">
            <h6 class="mnt-5 mnb-5">Subscribe to Newsletter</h6>
        </div>
        <div class="dx-separator"></div>
        <div class="dx-box-content">
            <p class="mnt-5 fs-15">Join the newsletter to receive news, updates, new products and freebies in your inbox.</p>
            <form action="#" class="dx-form dx-form-group-inputs">
                <input type="email" name="" value="" aria-describedby="emailHelp" class="form-control form-control-style-2" placeholder="Your Email Address">
                <button class="dx-btn dx-btn-lg dx-btn-icon"><span class="icon fas fa-paper-plane"></span></button>
            </form>
        </div>
    </div>
</div>

    

    
<!-- START: Scripts -->


<!-- Object Fit Images -->
<script src="assets/vendor/object-fit-images/dist/ofi.min.js"></script>

<!-- Popper -->
<script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>

<!-- Bootstrap -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Fancybox -->
<script src="assets/vendor/fancybox/dist/jquery.fancybox.min.js"></script>

<!-- Cleave -->
<script src="assets/vendor/cleave.js/dist/cleave.min.js"></script>

<!-- Validator -->
<script src="assets/vendor/validator/validator.min.js"></script>

<!-- Sticky Kit -->
<script src="assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

<!-- Jarallax -->
<script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script>

<!-- Isotope -->
<script src="assets/vendor/isotope-layout/dist/isotope.pkgd.min.js"></script>

<!-- ImagesLoaded -->
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

<!-- Swiper -->
<script src="assets/vendor/swiper/dist/js/swiper.min.js"></script>

<!-- Gist Embed -->
<script src="assets/vendor/gist-embed/gist-embed.min.js"></script>

<!-- Bootstrap Select -->
<script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

<!-- Dropzone -->
<script src="assets/vendor/dropzone/dist/min/dropzone.min.js"></script>

<!-- Quill -->
<script src="assets/vendor/quill/dist/quill.min.js"></script>

<!-- The Amdesk -->
<script src="assets/js/amdesk.min.js"></script>
<script src="assets/js/amdesk-init.js"></script>






<!-- END: Scripts -->

