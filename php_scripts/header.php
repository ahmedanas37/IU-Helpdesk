
<script src="assets/vendor/jquery/dist/jquery.min.js"></script>

<!--
    START: Navbar

    Additional Classes:
        .dx-navbar-sticky || .dx-navbar-fixed
        .dx-navbar-autohide
        .dx-navbar-dropdown-triangle
        .dx-navbar-dropdown-dark - only <ul>
        .dx-navbar-expand || .dx-navbar-expand-lg || .dx-navbar-expand-xl
-->

<?php 
include('php_scripts\customScripts.php');
include('php_scripts\database.php');

?>




<nav class="dx-navbar dx-navbar-top dx-navbar-collapse dx-navbar-sticky dx-navbar-expand-lg dx-navbar-dropdown-triangle dx-navbar-autohide">
    <div class="container">
        
        <a href="index.php" class="dx-nav-logo">
            <img src="https://iulms.edu.pk/theme/Iqra_Ver2/pix/logo2.png" alt="" width="200px">
        </a>
        

        <button class="dx-navbar-burger">
            <span></span><span></span><span></span>
        </button>

        <div class="dx-navbar-content">
            
            <ul class="dx-nav dx-nav-align-left">
                
        
        <li class="dx-drop-item">
            <a href="blog.html">
                Blog
            </a><ul class="dx-navbar-dropdown">
                    
        <li>
            <a href="blog.html">
                Blog
            </a>
        </li>
        <li>
            <a href="single-post.html">
                Single Post
            </a>
        </li>
                </ul>
        </li>
        <li class="dx-drop-item active">
            <a href="help-center.html">
                Help Center
            </a><ul class="dx-navbar-dropdown">
                    
        <li class=" active">
            <a href="help-center.html">
                Help Center
            </a>
        </li>
        <li class="dx-drop-item">
            <a href="documentations.html">
                Documentations
            </a><ul class="dx-navbar-dropdown">
                    
        <li>
            <a href="documentations.html">
                Documentations
            </a>
        </li>
        <li>
            <a href="single-documentation.html">
                Single documentation
            </a>
        </li>
                </ul>
        </li>
        <li class="dx-drop-item">
            <a href="articles.html">
                Knowledge Base
            </a><ul class="dx-navbar-dropdown">
                    
        <li>
            <a href="articles.html">
                Knowledge Base
            </a>
        </li>
        <li>
            <a href="single-article-category.html">
                Single Article Category
            </a>
        </li>
        <li>
            <a href="single-article.html">
                Single Article
            </a>
        </li>
                </ul>
        </li>
        <li class="dx-drop-item">
            <a href="forums.html">
                Forums
            </a><ul class="dx-navbar-dropdown">
                    
        <li>
            <a href="forums.html">
                Forums
            </a>
        </li>
        <li>
            <a href="topics.html">
                Topics
            </a>
        </li>
        <li>
            <a href="single-topic.html">
                Single Topic
            </a>
        </li>
                </ul>
        </li>
        <li class="dx-drop-item">
            <a href="ticket.html">
                Ticket System
            </a><ul class="dx-navbar-dropdown">
                    
        <li>
            <a href="ticket.html">
                Ticket System
            </a>
        </li>
        <li>
            <a href="ticket-submit.html">
                Submit Ticket
            </a>
        </li>
        <li>
            <a href="ticket-submit-2.html">
                Submit Ticket 2
            </a>
        </li>
        <li>
            <a href="single-ticket.html">
                Single Ticket
            </a>
        </li>
                </ul>
        </li>
                </ul>
        </li>
        <li class="dx-drop-item">
            <a href="account.html">
                Account
            </a><ul class="dx-navbar-dropdown">
                    
        <li>
            <a href="account.html">
                Account
            </a>
        </li>
        <li>
            <a href="account-licenses.html">
                Licenses
            </a>
        </li>
        <li>
            <a href="account-settings.html">
                Settings
            </a>
        </li>
                </ul>
        </li>
            </ul>

            
            <ul class="dx-nav dx-nav-align-right">


           
             
                
               <!-- <li>
                    <a data-fancybox data-touch="false" data-close-existing="true" data-src="#login" href="javascript:;">Log In</a>
                </li>  -->
                <!-- <li>
                    <span><a data-fancybox data-touch="false" data-close-existing="true" data-src="#login" href="javascript:;" class="dx-btn dx-btn-md dx-btn-transparent">Log In</a></span>
                </li> -->

             
             
                <?php
                
                if(isset($_SESSION['loggedin']) == true)
                {
                    echo('<li>
                    <div class="dropdown dx-dropdown dx-dropdown-signin">
                        <a class="dx-nav-signin" href="account.html" role="button" id="dropdownSignin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="dx-nav-signin-img"><img src="assets/images/avatar-1.png" alt=""></span>
                            <span class="dx-nav-signin-name">' . $_SESSION['username'] . '</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownSignin">
                            <li>
                                <a href="account.html"><span class="icon pe-7s-user"></span> Account</a>
                            </li>
                            <li>
                                <a href="account-licenses.html"><span class="icon pe-7s-download"></span> Items &amp; Licenses</a>
                            </li>
                            <li>
                                <a href="account-settings.php"><span class="icon pe-7s-config"></span> Settings</a>
                            </li>
                            <li>
                            <a href="php_scripts\logout.php"><span class="icon pe-7s-back"></span> Logout</a>


                            </li>
                        </ul>
                    </div>
                </li>');


                }

                else 
                {
                    echo('<li>
                    <span><a data-fancybox data-touch="false" data-close-existing="true" data-src="#login" href="javascript:;" class="dx-btn dx-btn-md dx-btn-transparent">Log In</a></span>
                </li>');

                }


                ?>





               


                


            </ul>
        </div>
    </div>
</nav>
<div class="dx-navbar dx-navbar-fullscreen">
    <div class="container">
        <button class="dx-navbar-burger">
            <span></span><span></span><span></span>
        </button>
        <div class="dx-navbar-content">
            
            <ul class="dx-nav dx-nav-align-left">
                
        <li class="dx-drop-item">
            <a href="store.html">
                Store
            </a><ul class="dx-navbar-dropdown">
                    
        <li>
            <a href="store.html">
                Store
            </a>
        </li>
        <li>
            <a href="product.html">
                Product
            </a>
        </li>
        <li>
            <a href="checkout.html">
                Checkout
            </a>
        </li>
                </ul>
        </li>
        <li class="dx-drop-item">
            <a href="blog.html">
                Blog
            </a><ul class="dx-navbar-dropdown">
                    
        <li>
            <a href="blog.html">
                Blog
            </a>
        </li>
        <li>
            <a href="single-post.html">
                Single Post
            </a>
        </li>
                </ul>
        </li>
        <li class="dx-drop-item active">
            <a href="help-center.html">
                Help Center
            </a><ul class="dx-navbar-dropdown">
                    
        <li class=" active">
            <a href="help-center.html">
                Help Center
            </a>
        </li>
        <li class="dx-drop-item">
            <a href="documentations.html">
                Documentations
            </a><ul class="dx-navbar-dropdown">
                    
        <li>
            <a href="documentations.html">
                Documentations
            </a>
        </li>
        <li>
            <a href="single-documentation.html">
                Single documentation
            </a>
        </li>
                </ul>
        </li>
        <li class="dx-drop-item">
            <a href="articles.html">
                Knowledge Base
            </a><ul class="dx-navbar-dropdown">
                    
        <li>
            <a href="articles.html">
                Knowledge Base
            </a>
        </li>
        <li>
            <a href="single-article-category.html">
                Single Article Category
            </a>
        </li>
        <li>
            <a href="single-article.html">
                Single Article
            </a>
        </li>
                </ul>
        </li>
        <li class="dx-drop-item">
            <a href="forums.html">
                Forums
            </a><ul class="dx-navbar-dropdown">
                    
        <li>
            <a href="forums.html">
                Forums
            </a>
        </li>
        <li>
            <a href="topics.html">
                Topics
            </a>
        </li>
        <li>
            <a href="single-topic.html">
                Single Topic
            </a>
        </li>
                </ul>
        </li>
        <li class="dx-drop-item">
            <a href="ticket.html">
                Ticket System
            </a><ul class="dx-navbar-dropdown">
                    
        <li>
            <a href="ticket.html">
                Ticket System
            </a>
        </li>
        <li>
            <a href="ticket-submit.html">
                Submit Ticket
            </a>
        </li>
        <li>
            <a href="ticket-submit-2.html">
                Submit Ticket 2
            </a>
        </li>
        <li>
            <a href="single-ticket.html">
                Single Ticket
            </a>
        </li>
                </ul>
        </li>
                </ul>
        </li>
        <li class="dx-drop-item">
            <a href="account.html">
                Account
            </a><ul class="dx-navbar-dropdown">
                    
        <li>
            <a href="account.html">
                Account
            </a>
        </li>
        <li>
            <a href="account-licenses.html">
                Licenses
            </a>
        </li>
        <li>
            <a href="account-settings.html">
                Settings
            </a>
        </li>
                </ul>
        </li>
            </ul>
            
            <ul class="dx-nav dx-nav-align-right">
                
                <li>
                    <a class="dx-nav-icon" href="checkout.html">
                        <span class="dx-nav-badge">2</span>
                        <span class="icon dx-icon-bag"></span>
                    </a>
                </li>
                <li>
                    <a data-fancybox data-touch="false" data-close-existing="true" data-src="#login" href="javascript:;">Log In</a>
                </li>
                <li>
                    <span><a data-fancybox data-touch="false" data-close-existing="true" data-src="#signup" href="javascript:;" class="dx-btn dx-btn-md dx-btn-transparent">Sign Up</a></span>
                </li>
                
            </ul>
        </div>
    </div>
</div>
<!-- END: Navbar -->

    