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
		<div class="row">
		<?php
		    switch($_GET['action']){
		        case 'new': ?>
		            <?php Article::add(); ?>
                    <div class="span7">
                        <form action="" method="POST">
                            <input type="text" name="title" placeholder="Title" data-transform="input-control" />
                            <br /><br />
                            <textarea name="content" class="editor"></textarea>
                            <br />
                            <input type="hidden" name="add_article" value="1" />
                            <button class="default">Add article</button>
                        </form>
                    </div>
		        <?php
		        break;
		        
		        case 'manage': ?>
                    <div class="span6">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    global $mysqli;
                                    $query = "SELECT id, title FROM article";
                                    $result = $mysqli->query($query);
                                    while($row = $result->fetch_object()){
                                        echo '<tr>';
                                        echo '<td>' . $row->title . '</td>';
                                        echo '<td>
                                                <a href="index.php?page=article&action=delete&id='.$row->id.'">Delete</a>
                                                <a href="index.php?page=article&action=edit&id='.$row->id.'">Edit</a>
                                            </td>';
                                        echo '</tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
		        <?php 
		        break;
		        
		        case 'category':
		            
		        break;
		        
		        case 'edit': ?>
                    <?php
                        global $mysqli;
                        $id = $_GET['id'];
                        $query = "SELECT id, title, content FROM article WHERE id='".$id."'";
                        $result = $mysqli->query($query);
                        $data = $result->fetch_object();
                        
                        Article::edit();
                    ?>
		            <div class="span7">
                        <form action="" method="POST">
                            <input type="text" name="title" value="<?php echo $data->title; ?>" placeholder="Title" data-transform="input-control" />
                            <br /><br />
                            <textarea name="content" class="editor"><?php echo $data->content; ?></textarea>
                            <br />
                            <input type="hidden" name="article_edit" value="1" />
                            <button class="default">Edit article</button>
                        </form>
                    </div>
		        <?php
		        break;
		        
		        case 'delete':
		            Article::remove();
		        break;
		    }
		?>
		</div>
	</div>
</body>
</html>