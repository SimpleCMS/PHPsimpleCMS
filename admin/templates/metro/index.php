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
        <link rel="stylesheet" type="text/css" href="templates/metro/css/admin.css" />
        <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="templates/metro/js/script.js"></script>
        <script type="text/javascript" src="templates/metro/js/admin.js"></script>
    </head>
<body>
    <header class="header">
        <div>
            <h1 class="title"><?php Site::title(); ?></h1>
            <h2 class="description"><em>Admin</em></h2>
        </div>
    </header>
    <div class="page">
		<div class="menu-container">
			<h2>Content</h2>
			<nav class="admin-nav">
				<a href="#">
					<h2>Add new article</h2>
				</a>
			</nav>
		</div>
	</div>
</body>
</html>