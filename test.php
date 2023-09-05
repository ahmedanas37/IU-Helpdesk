<?php
include ('php_scripts\customScripts.php');




if (sendStyledEmail("fahad.49808@iqra.edu.pk", "Test Email From IU Service Management", "This is a test email")) {
    echo 'Email sent successfully!';
} else {
    echo 'Email could not be sent.';
}




?>