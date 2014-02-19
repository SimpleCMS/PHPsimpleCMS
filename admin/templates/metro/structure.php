<?php

/**
 * @author loopByte
 * @copyright 2014
 */
 
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
        <script src="editor/tinymce/tinymce.min.js"></script>
        <script>
            tinymce.init({selector:'.editor'});
        </script>
    </head>
<body class="metro">
	<div class="grid fluid">
		<div class="row">
			<div class="span12">
				<h1 class="header">Admin control panel <span onclick="goBack()" style="color: blue;">&larr; Back</span></h1>
			</div>
		</div>
		<br />
	</div>
</body>
</html>