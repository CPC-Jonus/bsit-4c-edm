<?php
include_once('../controller/database.php');
include_once('../controller/userController.php');
if (isset($_POST['choice'])) {
    switch ($_POST['choice']) {
        case 'login':
            $ctr = new userController();
            echo $ctr->login($_POST['user'],$_POST['pass']);
            break;
        case 'register':
            $ctr = new userController();
            echo $ctr->register();
            break;
        
        default:
            echo "Request not found.";
            break;
    }
}