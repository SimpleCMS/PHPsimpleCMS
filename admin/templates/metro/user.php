<?php

/**
 * @author loopByte
 * @copyright 2014
 */
    User::new_user();
    User::edit_user();
    User::remove();
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
				<h1 class="header">Admin control panel <span onclick="goBack()" style="color: blue;">&larr; Back</span></h1>
			</div>
		</div>
		<br />
	<?php
        switch($_GET['action']){
            case 'manage': ?>
        <div class="row">
            <!-- Listing users -->
            <dvi class="span6">
                <h1 class="subheader">List of users</h1>
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Full name</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                <?php
                    global $mysqli;
                    $query = "SELECT id, full_name FROM users";
                    $result = $mysqli->query($query);
                    while($row = $result->fetch_object()){
                        echo '<tr>';
                        echo '<td>' . $row->id . '</td>';
                        echo '<td>' . $row->full_name . '</td>';
                        echo '<td>
                                <a href="index.php?page=user&action=edit&id='.$row->id.'">Edit</a>
                                <a href="index.php?page=user&action=remove&id='.$row->id.'">Remove</a>
                            </td>';
                        echo '</tr>';
                    }
                ?>
                    </tbody>
                </table>
            </div>
            <!-- End listing users -->
            
            <!-- Adding new user -->
            <dvi class="span5">
                <h1 class="subheader">Add new user</h1>
                <form action="" method="POST">
                    <input type="text" name="username" placeholder="Username" required data-transform="input-control" /><br />
                    <input type="password" name="password" placeholder="Password" required data-transform="input-control" /><br />
                    <input type="text" name="full_name" placeholder="Full name" required data-transform="input-control" /><br />
                    <input type="email" name="email" placeholder="E-mail" required data-transform="input-control" /><br />
                    <input type="hidden" name="new_user" value="1" />
                    <input type="hidden" name="registered_by" value="admin" />
                    <button class="primary">Add user</button>
                </form>
            </div>
            <!-- End adding new user -->
		</div>    
            
            <?php
            break;
            
            case 'edit':
                global $mysqli;
                $id = $_GET['id'];
                $query = "SELECT * FROM users WHERE id='".$id."'";
                $result = $mysqli->query($query);
                while($row = $result->fetch_object()){ ?>
                    <form action="" method="POST">
                        <input value="<?php echo $row->username ?>" type="text" name="username" placeholder="Username" required data-transform="input-control" /><br />
                        <input type="password" name="password" placeholder="Change password" data-transform="input-control" /><br />
                        <input value="<?php echo $row->full_name ?>" type="text" name="full_name" placeholder="Full name" required data-transform="input-control" /><br />
                        <input value="<?php echo $row->email ?>" type="email" name="email" placeholder="E-mail" required data-transform="input-control" /><br />
                        <input value="<?php echo $row->access ?>" type="number" name="access" min="0" required data-transform="input-control" /><br />
                        <input type="hidden" name="edit_user" value="1" />
                        <input type="hidden" name="id" value="<?php echo $row->id; ?>" />
                        <button class="primary">Edit user</button>
                    </form>
                <?php    
                }
            break;
        }
	?>
	</div>
</body>
</html>