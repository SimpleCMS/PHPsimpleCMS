<?php

    class User{
        public $id;
        public $username;
        public $full_name;
        public $access;
        
        public function __construct(){
            
        }
        
        public static function login(){
            if(isset($_POST['login'])){
                global $mysqli;
                
                $username = $_POST['username'];
                $password = $_POST['password'];
                $password = md5($password);
            
                $query = "SELECT id, full_name, access FROM users WHERE username='".$username."' AND password='".$password."'";
                $result = $mysqli->query($query);
                $data = $result->fetch_object();
                
                setcookie('id', $data->id);
                setcookie('access', $data->access);
                setcookie('full_name', $data->full_name);
                setcookie('logged', 1);
                
                header("location: index.php");
            }
        }
        
        public static function new_user(){
            if(isset($_POST['new_user'])){
                global $mysqli;
                
                $username       = $_POST['username'];
                $full_name      = $_POST['full_name'];
                $email          = $_POST['email'];
                $password       = md5($_POST['password']);
                $registered_by  = $_POST['registered_by'];
                
                $query = "INSERT INTO users(username, full_name, email, password)
                    VALUES('".$username."', '".$full_name."', '".$email."', '".$password."')";
                $mysqli->query($query);
                if($registered_by == 'admin'){
                    $location = "index.php?page=user&action=manage";
                }else{
                    $location = "index.php";
                }
                header("Location: " . $location);
            }
        }
        
        public static function edit_user(){
            if(isset($_POST['edit_user'])){
                global $mysqli;
                
                $username   = $_POST['username'];
                $full_name  = $_POST['full_name'];
                $email      = $_POST['email'];
                $password   = md5($_POST['password']);
                $access     = $_POST['access'];
                $id         = $_POST['id'];
                
                $query = "UPDATE users ";
                $query .= "SET username='".$username."', ";
                $query .= "full_name='".$full_name."', ";
                $query .= "email='".$email."', ";
                if(!empty($password)){ $query .= "password='".$password."', "; }
                $query .= "access='".$access."' ";
                $query .= "WHERE id='".$id."'";
                
                $mysqli->query($query);
                $location = "index.php?page=user&action=manage";
                header("Location: " . $location);
            }
        }
        
        public static function remove(){
            if(isset($_GET['id']) && $_GET['action'] == 'remove'){
                global $mysqli;
                
                $id = $_GET['id'];
                
                $query = "DELETE FROM users WHERE id='".$id."'";
                $mysqli->query($query);
                header("Location: index.php?page=user&action=manage");
            }
        }
    }