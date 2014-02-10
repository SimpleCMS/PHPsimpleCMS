<?php

/**
 * @author loopByte
 * @copyright 2014
 */
    
    require_once 'classes/db.php';
    require_once 'classes/site.php';
    require_once 'classes/admin.php';
    
    Admin::login();
    
    session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php Site::title(); ?> - Admin</title>
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </head>
<body>
    <?php
        if($_COOKIE['admin'] == 1){ ?>
            
    
    <header class="header">
        <div>
            <h1 class="title"><?php Site::title(); ?></h1>
            <h2 class="description"><em>Admin</em></h2>
        </div>
    </header>
    <div class="page">
        
    </div>
    <?php }else{ ?>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username" required /><br />
            <input type="password" name="password" placeholder="Password" required /><br />
            <input type="hidden" name="login"/>
            <input type="submit" value="Login" />
        </form>
    <?php } ?>
</body>
</html>