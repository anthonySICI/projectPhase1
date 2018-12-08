<?php

$users = [
    ['username' => 'anthony.acevedo', 'password' => 'test1'],
    ['username' => 'omar.soto2', 'password' => 'test2']
];

function checkLoginData(){
    global $users;
    
    $inputUser = strtolower(trim($_POST['username']));
    $password = $_POST['password'];
    
    foreach ($users as $u){
        $user = strtolower(trim($u['username']));
        if ($inputUser == $user){
            if ($password == $u['password']){
                return true;
            }
            break;
        }
    }
    return false;
}

if (checkLoginData()){

    session_start();
    
    $_SESSION['username'] = strtolower(trim($_POST['username']));
    
    header('Location: menu.php');
} else {
    header('Location: login.php');
}
?>