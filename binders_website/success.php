<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success page</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
        
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/magnific-popup.css" rel="stylesheet">

    <link href="css/binders-project.css" rel="stylesheet">
</head>
<body>
    
   
    <form class="custom-form contact-form" action="success.php" method="post">
        <p>Your message has been sent successfully <br>
        we will get back to you shortly</p>

        <button name="logout" class="form-control">Logout</button>
    </form>
</body>
</html>

<?php

    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: index.html");

    }
?>