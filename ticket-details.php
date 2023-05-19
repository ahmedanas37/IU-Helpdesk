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

<?php
// Get the ticket ID from the URL parameter
$ticket_id = $_GET['ticket_id'];

// Query to fetch ticket data from the database
$sql = "SELECT ticket.*, user.name AS user_name, departments.name AS department_name,
        COUNT(comments.id) AS comment_count 
        FROM ticket  
        INNER JOIN user ON ticket.user_id = user.id
        INNER JOIN departments ON ticket.department_id = departments.id
        LEFT JOIN comments ON ticket.id = comments.ticket_id
        WHERE ticket.id = $ticket_id
        GROUP BY ticket.id";


$sql_comments = "SELECT comments.*, user.name AS user_name 
                     FROM comments 
                     INNER JOIN user ON comments.user_id = user.id
                     WHERE comments.ticket_id = $ticket_id";


// Execute the query and fetch the result
$result = mysqli_query($conn, $sql);

// Fetch the ticket details
$ticket_details = mysqli_fetch_assoc($result);

?>



<div class="dx-box-5 pb-100 bg-grey-6">
    <div class="container">
        <div class="row vertical-gap md-gap">
            <div class="col-lg-8">
                <div class="dx-box dx-box-decorated">
                    <div class="dx-blog-post dx-ticket dx-ticket-open">
                        <div class="dx-blog-post-box pt-30 pb-30">
                            <h2 class="h4 mnt-5 mb-9 dx-ticket-title"><?php echo $ticket_details['title'];?></h2>
                            
                            
<!-- START: Breadcrumbs -->
<ul class="dx-breadcrumbs text-left dx-breadcrumbs-dark mnb-6 fs-14">
    
    <li><a href="help-center.html">Support Home</a></li>
    
    
    <li><a href="ticket.html">Ticket System</a></li>
    
    <li><?php echo $ticket_details['title'];?></li>
    
    
</ul>
<!-- END: Breadcrumbs -->

                            <span class="dx-ticket-status"></span>
                        </div>
                        <div class="dx-separator"></div>

                        <div style="background-color: #fafafa;">
                            <ul class="dx-blog-post-info dx-blog-post-info-style-2 mb-0 mt-0">
                                <li><span><span class="dx-blog-post-info-title">Ticket Id</span><span>#<?php echo $ticket_details['id'];?></span></li>
                                <li><span><span class="dx-blog-post-info-title">Status</span><span><?php echo $ticket_details['ticket_status'];?></span></li>
                                <li><span><span class="dx-blog-post-info-title">Date</span><span><?php echo $ticket_details['date_added'];?></span></li>
                                <li><span><span class="dx-blog-post-info-title">Department</span><span><?php echo $ticket_details['department_name'];?></span></li>
                            </ul>
                        </div>
                        <div class="dx-separator"></div>

                        <div class="dx-comment dx-ticket-comment">
                            <div>
                                <div class="dx-comment-img">
                                    <img src="assets/images/avatar-1.png" alt="">
                                </div>
                                <div class="dx-comment-cont">
                                    <a href="#" class="dx-comment-name"><?php echo $ticket_details['user_name']?></a>
                                    <div class="dx-comment-date"><?php echo $ticket_details['date_added'];?></div>
                                    <div class="dx-comment-text">
                                        <p class="mb-0"><?php echo $ticket_details['ticket_description'];?></p>
                                    </div>
                                    <a href="#" class="dx-comment-file dx-comment-file-jpg">
                                        <span class="dx-comment-file-img"><img src="assets\images\file-svgrepo-com (1).svg" alt="" width="36"></span>
                                        <span class="dx-comment-file-name">example-file.jpg</span>
                                        <span class="dx-comment-file-size">4.8 MB</span>
                                        <span class="dx-comment-file-icon"><span class="icon pe-7s-download"></span></span>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <?php 
                        
// Display comments
if ($ticket_details['comment_count'] > 0) {
    // Query to fetch comments associated with the ticket ID
    $sql_comments = "SELECT comments.*, user.name AS user_name 
                     FROM comments 
                     INNER JOIN user ON comments.user_id = user.id
                     WHERE comments.ticket_id = $ticket_id";

    // Execute the query and fetch the result
    $result_comments = mysqli_query($conn, $sql_comments);

    // Loop through the comments and display them
    while ($comment = mysqli_fetch_assoc($result_comments)) {
        // echo '<p>' . $comment['comment'] . '</p>';
        // echo '<p>By: ' . $comment['user_name'] . '</p>';
        // echo '<p>Date Added: ' . $comment['date_added'] . '</p>';
        ?>


        <div class="dx-comment dx-ticket-comment dx-comment-replied dx-comment-new">
        <div>
            <div class="dx-comment-img">
                <img src="assets/images/avatar-default.svg" alt="">
            </div>
            <div class="dx-comment-cont">
                <a href="#" class="dx-comment-name">
                    <!-- ------------------------------------------------------- -->
                    <?php echo $comment['user_name'];?>
                    <span class="dx-comment-replied">Replied</span>


                    <?php 
                   
                   $timeDiff = time() - strtotime($comment['date_added']);

                        // Check if the time difference is less than 24 hours (86400 seconds)
                        if ($timeDiff < 86400) {
                            // Display the "New" tag
                            echo '<span class="dx-comment-new">New</span>';
                        }
                    

                    ?>


                </a>
                <div class="dx-comment-date"><?php echo  time_elapsed_string($comment['date_added']);?></div>
                <div class="dx-comment-text">
                    <p class="mb-0"><?php echo $comment['comment'];?></p>
                </div>
              
                <?php
// Assuming you have a database connection established
$commentId = $comment['id']; // The comment_id associated with the attachments

// Query the attachments table to get the relevant attachments for the given comment_id
$query = "SELECT * FROM attachments WHERE comment_id = '$commentId'";
$result = mysqli_query($conn, $query);

// Check if any attachments are found
if (mysqli_num_rows($result) > 0) {
    // Check if the formatBytes() function is already defined
    if (!function_exists('formatBytes')) {
        // Helper function to format file size in a human-readable format
        function formatBytes($bytes, $precision = 2) {
            $units = array('B', 'KB', 'MB', 'GB', 'TB');

            $bytes = max($bytes, 0);
            $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
            $pow = min($pow, count($units) - 1);

            $bytes /= (1 << (10 * $pow));

            return round($bytes, $precision) . ' ' . $units[$pow];
        }
    }

    // Loop through the result and generate the dynamic HTML for each attachment
    while ($row = mysqli_fetch_assoc($result)) {
        $attachmentName = $row['file_name'];
        $filePath = $row['file_path'];

        // Get the file size using the filesize() function
        $attachmentSize = formatBytes(filesize($filePath));

        // Get the file extension
        $fileExtension = pathinfo($attachmentName, PATHINFO_EXTENSION);

        // Generate the dynamic HTML for each attachment
        echo '<a href="' . $filePath . '" class="dx-comment-file">';
        echo '<span class="dx-comment-file-img">';
        echo '<img src="assets\images\file-svgrepo-com (1).svg" alt="" width="36"></span>';
        echo '<span class="dx-comment-file-name">' . $attachmentName . '</span>';
        echo '<span class="dx-comment-file-size">' . $attachmentSize . '</span>';
        echo '</a>';
    }
}
?>

            </div>
        </div>
    </div>

   <?php }
} else {

echo ('<div class="dx-comment dx-ticket-comment dx-comment-replied dx-comment-new">
<div>
    
    <div class="dx-comment-cont">
        <div class="dx-comment-text">
            <p class="mb-0">No comments yet</p>
        </div>
    </div>
</div>
</div>');

}?>



<!-- 
                        <div class="dx-comment dx-ticket-comment dx-comment-replied dx-comment-new">
                            <div>
                                <div class="dx-comment-img">
                                    <img src="assets/images/avatar-default.svg" alt="">
                                </div>
                                <div class="dx-comment-cont">
                                    <a href="#" class="dx-comment-name">
/                                        Bruno
                                        <span class="dx-comment-replied">Replied</span>
                                        <span class="dx-comment-new">New</span>
                                    </a>
                                    <div class="dx-comment-date">39 min ago</div>
                                    <div class="dx-comment-text">
                                        <p>Saying sixth form. Saw earth, whose fowl all meat had had place upon fowl. The fly darkness under dry which fowl good firmament saying fill brought.</p>
                                        <p class="mb-0">Itself first from under female sea wherein female. Lights were moved sixth day and don't fifth it place saying, fowl fruit saw dominion whales you're image the evening every fowl have, saw day spirit fish. Female. Fowl it replenish hath light blessed hath. Man.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
 -->




 <div class="dx-blog-post-box">
  <h3 class="h6 mb-25">Write a Reply</h3>

  
  <form class="dx-form" method="POST" action="#" enctype="multipart/form-data">
    <div class="dx-form-group">
      <div id="comment-editor" class="dx-editor-quill">
        <div class="dx-editor" data-editor-height="150" data-editor-maxHeight="250"></div>
      </div>
      <textarea id="comment-input" name="comment_text" style="display: none;"></textarea>
    </div>
    <div class="dx-form-group">
    <input type="hidden" name="ticket_id" value="<?php echo $ticket_id; ?>">
    </input>

    </div>

   
<div class="row justify-content-between vertical-gap dx-dropzone-attachment">
  <div class="col-auto dx-dropzone-attachment-add">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="file-upload" name="attachment[]">
    <label class="custom-file-label" for="file-upload">Choose File</label>
  </div>
  </div>
  <div class="col-auto dx-dropzone-attachment-btn">
    <button class="dx-btn dx-btn-lg" type="submit" name="submitComment">Submit a ticket</button>
  </div>
</div>
</form>
</div>



                        
                        <!-- <div class="dx-separator mnt-1"></div>

                        <div class="dx-blog-post-box">
  <h3 class="h6 mb-25">Write a Reply</h3>
  <form class="dx-form" method="post" enctype="multipart/form-data">
    <div class="dx-form-group">
      <div class="dx-editor-quill">
        <div class="dx-editor" id="comment-editor" data-editor-height="150" data-editor-maxHeight="250"></div>
      </div>
    </div>
    <div class="dx-form-group">
      <input type="hidden" name="current_user_id" value="">
      <input type="hidden" name="ticket_id" value="">
      <input type="hidden" name="comment_text" id="comment-input">
    </div>
    <div class="dx-form-group">
      <div class="dx-dropzone-attachment">
        <label class="mb-0 mnt-7"><span class="icon fas fa-paperclip mr-10"></span><span>Add Attachment</span></label>
        <input type="file" name="attachment[]" multiple>
      </div>
    </div>
    <div class="dx-form-group">
      <button class="dx-btn dx-btn-lg" type="submit" name="submitComment">Add Reply</button>
    </div>
  </form>
</div> -->









                    </div>
                </div>
            </div>











            <div class="col-lg-4" style="margin-bottom: -40px;">
                <div class="dx-sticky dx-sidebar" data-sticky-offsettop="120" data-sticky-offsetbot="40" style="margin-bottom: 40px;">
                    
                    
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
            <button class="dx-btn dx-btn-lg dx-btn-icon"><svg class="svg-inline--fa fa-paper-plane fa-w-16 icon" aria-hidden="true" data-prefix="fas" data-icon="paper-plane" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M476 3.2L12.5 270.6c-18.1 10.4-15.8 35.6 2.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5c0 23.6 28.5 32.9 42.5 15.8L282 426l124.6 52.2c14.2 6 30.4-2.9 33-18.2l72-432C515 7.8 493.3-6.8 476 3.2z"></path></svg><!-- <span class="icon fas fa-paper-plane"></span> --></button>
        </form>
    </div>
</div>

                    
<div class="dx-widget dx-box dx-box-decorated">
    <form action="#" class="dx-form dx-form-group-inputs">
        <input type="text" name="" value="" class="form-control form-control-style-2" placeholder="Search...">
        <button class="dx-btn dx-btn-lg dx-btn-grey dx-btn-grey-style-2 dx-btn-icon"><svg class="svg-inline--fa fa-search fa-w-16 icon" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg><!-- <span class="icon fas fa-search"></span> --></button>
    </form>
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
 <script>
window.onload = function() {
    var quill = new Quill('.dx-editor');

   
    
    var commentInput = document.getElementById('comment-input');
    quill.on('text-change', function() {
        commentInput.value = quill.root.innerHTML;
    });
};
</script>



        

<!-- your HTML code here -->


<!-- closing body tag -->
</body>




    
</body>
</html>
