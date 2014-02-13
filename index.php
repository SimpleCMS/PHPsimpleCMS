<?php

/**
 * @author loopByte
 * @copyright 2014
 */
    
    require_once 'classes/db.php';
    require_once 'classes/article.php';
    require_once 'classes/site.php';
    require_once 'classes/template.php';
    
    $template = new Template();
    
    $template->assign('title', 'SimpleCMS');
    $template->render('main');

?>