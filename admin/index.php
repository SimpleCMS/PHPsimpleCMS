<?php

/**
 * @author loopByte
 * @copyright 2014
 */
    
    require_once '../classes/db.php';
    require_once '../classes/site.php';
    require_once '../classes/admin.php';
    require_once '../classes/template.php';
    require_once '../classes/article.php';
    
    Admin::login();
    
    session_start();
    
    $template = new Template('metro');
    
    if(!empty($_COOKIE['admin']) && $_COOKIE['admin'] == 1){
    	(!empty($_GET['page'])) ? $page = $_GET['page'] : $page = '';
    	switch($page){
    		case '':
    			$template->render('index');
    		break;
    		
  			case 'article':
  				$template->render('content');
  			break;
  			
  			case 'user':
  				$template->render('user');
  			break;
  			
  			case 'configuration':
  				$template->render('configuration');
  			break;
  			
  			default:
  				exit('<h1>Error. Page not found.</h1>');
  			break;
    	}
    }else{
    	?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php Site::title(); ?> - Admin</title>
        <link rel="stylesheet" type="text/css" href="templates/metro/css/main.css" />
        <link rel="stylesheet" type="text/css" href="templates/metro/css/metro-bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="templates/metro/css/metro-bootstrap-responsive.min.css" />
        <script src="templates/metro/js/script.js"></script>
        <script src="templates/metro/js/metro-ui/metro.min.js"></script>
        <script src="templates/metro/js/jquery/jquery-1.10.2.js"></script>
        <script src="templates/metro/js/jquery/jquery.ui.widget.min.js"></script>
    </head>
<body class="metro">
	<div class="login-box bg-teal">
		<h1 class="header fg-white">Control panel</h1>
		<form action="" method="POST">
			<input data-transform="input-control" type="text" name="username" placeholder="Username" required /><br /><br />
			<input data-transform="input-control" type="password" name="password" placeholder="Password" required /><br /><br />
			<input type="hidden" name="login"/>
			<button class="primary">Login</button>
		</form>
	</div>
</body>
</html>
       <?php
    }
    

?>