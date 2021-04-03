<?php
    session_start();

    if(isset($_SESSION['username'])){
        require_once('../pizza_house/templates/header1.php');
       
    }
        else{
            require_once('../pizza_house/templates/header2.php');

        }
?>
    
   