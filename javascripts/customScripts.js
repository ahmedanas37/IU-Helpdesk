function logout() {
    $.ajax({
       type: "POST",
       url: "logout.php",
       data: {},
       success: function(response) {
          // Redirect to index.php on successful logout
          window.location.href = "index.php";
       },
       error: function(xhr, status, error) {
          console.log("Error: " + error);
       }
    });
 }