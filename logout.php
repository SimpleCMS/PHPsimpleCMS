<?php

    require_once 'classes/user.php';
    
    if(isset($_GET['from']) && $_GET['from'] == 'admin'){
        setcookie('id', $data->id, 0, time() - 3600);
        setcookie('admin', 1, 0, time() - 3600);
        setcookie('name', $data->full_name, 0, time() - 3600);
    }elseif(isset($_GET['from']) && $_GET['from'] == 'user'){
        setcookie('id', $data->id, time() - 3600);
        setcookie('access', $data->access, time() - 3600);
        setcookie('full_name', $data->full_name, time() - 3600);
        setcookie('logged', 1);
    }else{
        exit();
    }
    
    header('Location: index.php');