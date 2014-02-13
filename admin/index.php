<?php

/**
 * @author loopByte
 * @copyright 2014
 */
    
    require_once '../classes/db.php';
    require_once '../classes/site.php';
    require_once '../classes/admin.php';
    require_once '../classes/template.php';
    
    Admin::login();
    
    session_start();
    
    $template = new Template('main');
    
    if(!empty($_COOKIE['admin']) && $_COOKIE['admin'] == 1){
        $template->render('index');
    }else{
    echo '<form action="" method="POST">
            <input type="text" name="username" placeholder="Username" required /><br />
            <input type="password" name="password" placeholder="Password" required /><br />
            <input type="hidden" name="login"/>
            <input type="submit" value="Login" />
        </form>';
    }
    

?>