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
		<div class="row">
			<div class="span6">
				<table class="table">
					<thead>
						<th>ID</th>
						<th>Title</th>
						<th>Value</th>
						<th>Save</th>
					</thead>
					<tbody>
						<?php
							global $mysqli;
							$query = "SELECT * FROM config";
							$result = $mysqli->query($query);
							while($row = $result->fetch_object()){ ?>
								<tr>
									<td><?php echo $row->id; ?></td>
									<td><?php echo $row->title; ?></td>
									<td>
										<form action="" method="POST">
										<input type="text" name="value" value="<?php echo $row->value; ?>" />
										<input type="hidden" name="name" value="<?php echo $row->name; ?>"
									</td>
									<td>
										<input class="primary" type="submit" value="Save" />
										</form>
									</td>
								</tr>
							<?php	
							}
							
							if(isset($_POST['name'])){
								$value = $_POST['value'];
								$name = $_POST['name'];
								
								$query = "UPDATE config SET value='".$value."' WHERE name='".$name."'";
								$mysqli->query($query);
								header("Location: index.php?page=configuration");
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>