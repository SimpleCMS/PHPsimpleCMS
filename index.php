<?php

/**
 * @author loopByte
 * @copyright 2014
 */
    
    require_once 'classes/db.php';
    require_once 'classes/article.php';
    require_once 'classes/site.php';
    require_once 'classes/template.php';
    require_once 'classes/user.php';
    
    User::login();
    
    session_start();
    
    $template = new Template('main');
    
    (!empty($_GET['page'])) ? $page = $_GET['page'] : $page = '';
    switch($page){
        case '':
            $template->render('index');
        break;
        
        case 'article':
            $template->render('article');
        break;
        
        case 'login':
            $template->render('login');
        break;
        
        case 'register':
            $template->render('register');
        break;
        
        case 'logout':
            $template->render('logout');
        break;
    }

?>