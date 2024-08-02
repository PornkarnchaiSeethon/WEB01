<?php
namespace Core\Data;

require 'Config.php';

class Database extends Config
{
    public function insert_user($username, $email, $password)
    {
        $stmt = $this->connect->prepare('SELECT email FROM user WHERE email = :email');
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            echo 'Email already exists!';
        } else {
            $stmt = $this->connect->prepare('INSERT INTO user (username, email, password) VALUES (:username, :email, :password)');
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);

            if ($stmt->execute()) {
                echo 'User registered successfully!';
                return true;
            } else {
                echo 'Error registering user!';
                return false;
            }
        }
    }
}