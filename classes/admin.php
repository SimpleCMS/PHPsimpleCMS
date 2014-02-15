<?php

/**
 * @author MacTavish
 * @copyright 2014
 */

    class Admin{
        public $id;
        public $name;
        public $logged;
        
        public function __construct(){
            if(isset($_COOKIE['admin'])){
                $this->id       = $_COOKIE['id'];
                $this->name     = $_COOKIE['name'];
                $this->logged   = true;
            }
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
                
                if($data->access == 3){
                    setcookie('id', $data->id, 0);
                    setcookie('admin', 1, 0);
                    setcookie('name', $data->full_name, 0);
                    header('Location: index.php');
                }else{
                    exit("You are not an admin");
                }
            }
        }
    }
    
    $admin = new Admin();

?>