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
        <link rel="stylesheet" type="text/css" href="templates/main/css/main.css" />
        <link rel="stylesheet" type="text/css" href="templates/main/css/admin.css" />
        <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="templates/main/js/admin.js"></script>
        <script type="text/javascript" src="editor/tinymce/tinymce.min.js"></script>
        <script>
            tinymce.init({selector:'.editor'});
        </script>
    </head>
<body>
    <header class="header">
        <div>
            <h1 class="title"><?php Site::title(); ?></h1>
            <h2 class="description"><em>Admin</em></h2>
        </div>
    </header>
    <div class="page">
        <div id="epiceditor">
            <h1>Add new article</h1>
            <form action="" method="POST">
                <input type="text" name="title" placeholder="Title goes here" required="" />
                <hr />
                <textarea name="content" class="editor"></textarea>
                <input type="hidden" name="add_article" value="1" />
                <hr />
                <input type="submit" value="Post" />
            </form>
        </div>
    </div>
</body>
</html>