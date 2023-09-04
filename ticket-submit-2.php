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
        <div class="row justify-content-center">
            <div class="col-xl-7">
                <div class="dx-box dx-box-decorated">
                    <div class="dx-box-content">
                        <h2 class="h6 mb-6">Submit a Ticket</h2>
                        
                        
<!-- START: Breadcrumbs -->
<ul class="dx-breadcrumbs text-left dx-breadcrumbs-dark mnb-6 fs-14">
    
    <li><a href="help-center.html">Support Home</a></li>
    
    
    <li><a href="ticket.html">Ticket System</a></li>
    
    <li>Submit Ticket</li>
    
    
</ul>
<!-- END: Breadcrumbs -->

                    </div>
                    <div class="dx-separator"></div>
                   
                 
                    <form method="post" class="dx-form" enctype="multipart/form-data">
    <div class="dx-box-content">
        <div class="dx-form-group">
            <label for="select-product" class="mnt-7">Selected Category</label>
            <select class="form-control dx-select-ticket" name="category" id="select-product" disabled>
                <?php
                // Retrieve the selected category ID from the form data
                $category_id = $_POST['category_id'];

                // Query the database to get the name of the selected category
                $sql = "SELECT name FROM departments WHERE id = $category_id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                $category_name = $row['name'];

                // Create an option element with the selected category ID as the value and the name as the label
                echo '<option value="' . $category_id . '">' . $category_name . '</option>';
                ?>
            </select>
        </div>
        <div class="dx-form-group">
            <div class="alert dx-alert dx-alert-primary" role="alert">* Your License. Purchase Date: 5 Nov 2018</div>
        </div>
    </div>
    <div class="dx-separator"></div>

    <div class="dx-box-content">
        <div class="dx-form-group">
            <label for="subject" class="mnt-7">Subject</label>
            <input type="text" name="title" class="form-control form-control-style-2" id="subject" placeholder="Enter Subject">
        </div>
        
        <div class="dx-form-group">
        <input type="hidden" name="category_id" value="<?php echo $category_id; ?>">
        </div>
        <div class="dx-form-group">
            <label class="mnt-7">Description</label>
            <div class="dx-editor-quill">
                <div class="dx-editor" id="description-editor" data-editor-height="150" data-editor-maxHeight="250"></div>
            </div>
            <!-- Add a hidden input field to submit the content of the Quill editor -->
            <input type="hidden" name="description" id="description-input">
        </div>
    </div>




                    <div class="dx-box-content pt-0">
                        <!-- STRART: Dropzone

                            Additional Attributes:
                            data-dropzone-action
                            data-dropzone-maxMB
                            data-dropzone-maxFiles
                        -->


                        
                        <!-- <form class="dx-dropzone" method="post" action="#" data-dropzone-maxMB="5" data-dropzone-maxFiles="5">
                            <div class="dz-message">
                                <div class="dx-dropzone-icon">
                                    <span class="icon pe-7s-cloud-upload"></span>
                                </div>
                                <div class="h6 dx-dropzone-title">Drop files here or click to upload</div>
                                <div class="dx-dropzone-text">
                                    <p class="mnb-5 mnt-1">You can upload up to 5 files (maximum 5 MB each) of the following types: .jpg, .jpeg, .png, .zip.</p>
                                </div>
                            </div>
                        </form> -->
                        <div class="row justify-content-between vertical-gap dx-dropzone-attachment">
  <div class="col-auto dx-dropzone-attachment-add">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="file-upload" name="attachments[]" >
    <label class="custom-file-label" for="file-upload">Choose File</label>
  </div>
  </div>
  <div class="col-auto dx-dropzone-attachment-btn">
    <button class="dx-btn dx-btn-lg" type="submit" name="ticketSubmitted2">Submit a ticket</button>
  </div>
</div>
</form>
                        <!-- END: Dropzone -->
                    </div>
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
                                <a href="ticket-submit-1.php" class="dx-btn dx-btn-lg dx-btn-transparent">Raise an Issue</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<?php
include ('php_scripts\footer.php');



 ?>




        
<!-- Add a script to update the hidden input field with the content of the Quill editor -->
<script>
    var quill = new Quill('#description-editor');
    var descriptionInput = document.getElementById('description-input');
    quill.on('text-change', function() {
        descriptionInput.value = quill.root.innerHTML;
    });
</script>




    
</body>
</html>
