<?php
session_start();
require base_part('Core/Database.php');
use Core\Data\Database;

$db = new Database();

$email = $_POST['email'];
$password = $_POST['password'];

if(empty($email) || empty($password)){
    $errors['error'] = "username or email or password is empty"; 
}

if(!empty($errors)){
    return view("login.view.php",[
        'error' => $errors
    ]);
}

$resute = $db->login_user($email);
var_dump($resute);

// if($resute['email'] == $email && $resute['password'] == $password){
//     $_SESSION['user'] = [
//         'username' => $resute['username'],
//         'email' => $resute['email'],
//         'password' => $resute['password']
//     ];

//     header('location:/');
//     exit();
// }else{
//     header('location:/login');
//     exit();
// }