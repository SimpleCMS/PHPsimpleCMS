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
    </head>
<body class="metro">
	<div class="grid fluid">
		<div class="row">
			<div class="span12">
				<h1 class="header">Admin control panel</h1>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<!-- Content tiles -->
				<div class="tile-group two fg-black">
					<div class="tile-group-title">Content</div>
					<a href="index.php?page=article&action=new" class="tile bg-teal">
						<div class="tile-status">
							<span class="name">Add new article</span>
						</div>
					</a>
					<a href="index.php?page=article&action=manage" class="tile bg-teal"> 
						<div class="tile-status">
							<span class="name">Article manager</span>
						</div>
					</a>
					<a href="index.php?page=article&action=category" class="tile double bg-teal">
						<div class="tile-status">
							<span class="name">Category manager</span>
						</div>
					</a>
				</div>
				<!-- End content tiles -->
				
				<!-- Users tile -->
				<div class="tile-group one fg-black">
					<div class="tile-group-title">Users</div>
					<a href="index.php?page=user&action=manage" class="tile bg-red">
						<div class="tile-status">
							<span class="name">User manager</span>
						</div>
					</a>
				</div>
				<!-- End users tile -->
				
				<!-- Configuration tile -->
				<div class="tile-group two fg-black">
					<div class="tile-group-title">Configuration</div>
					<a href="index.php?page=configuration" class="tile bg-orange">
						<div class="tile-status">
							<span class="name">Global configuration</span>
						</div>
					</a>
				</div>
				<!-- End configuration tile -->
			</div>
		</div>
	</div>
</body>
</html>