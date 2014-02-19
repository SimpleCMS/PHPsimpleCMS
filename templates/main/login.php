<?php

/**
 * @author loopByte
 * @copyright 2014
 */
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php Site::title(); ?> - <?php Site::description(); ?></title>
        <link rel="stylesheet" type="text/css" href="templates/main/css/main.css" />
        <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="templates/main/js/script.js"></script>
    </head>
<body>
    <header class="header">
        <div>
            <h1 class="title"><?php Site::title(); ?></h1>
            <h2 class="description"><em><?php Site::description(); ?></em></h2>
        </div>
    </header>
    <div class="navigation">
        <div>
            <?php Template::menu(); ?>
        </div>
    </div>
    <div class="page">
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username" data-transform="input-control" required /><br />
            <br />
            <input type="password" name="password" placeholder="Password" data-transform="input-control" required /><br />
            <br />
            <input type="hidden" name="login" value="1" />
            <input type="submit" value="Login" />
        </form>
    </div>
    <footer class="footer">
        <div>
            <br />
            <?php echo '&copy;'; Site::title(); ?>
        </div>
    </footer>
</body>
</html>