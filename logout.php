<<!DOCTYPE html>
    <html>

    <head> 
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Logout</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>
    </head>
    <?php
     session_start();
     unset($_SESSION['uname']);
     unset($_SESSION['spass']);
     header("location:index.php");
    ?>
    <body>
    </body>
    
    </html>