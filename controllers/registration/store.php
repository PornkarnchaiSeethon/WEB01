<?php
session_start();
require base_part('Core/Database.php');
use Core\Data\Database;
$db = new Database();
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
if (empty($username) || empty($email) || empty($password)) {
    $errors['error'] = "username or email or password is empty";
}
if (!empty($errors)) {
    return view("register.view.php", [
        'error' => $errors
    ]);
}
$resute = $db->insert_user($username, $email, $password);
if ($resute) {
    $data = $db->find_user_with_email($email);
    mkdir(BASE_PART . '/Folder/' . $data["id_user"], 0777, false);
    $_SESSION['user'] = [
        'username' => $username,
        'email' => $email,
        'password' => $password
    ];
    header('location:/');
    exit();
} else {
    $errors['error'] = "some thing worng";

    view('register.view.php', [
        'error' => $errors
    ]);
    exit();
}
