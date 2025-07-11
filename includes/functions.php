<?php
// Utility functions can be added here
require_once("db.php");

function validate_user(string $email, string $password): int{
    global $conn;

    
    $sql = "SELECT id, email, password FROM users WHERE email = '$email'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $db_passwd = $row["password"];
        if(password_verify($password, $db_passwd) == true) {
            return 0;
        } else {
            return 1;
        }
    } else {
        return -1;
    }
}

function register_user(string $username, string $email, string $password): int{
    global $conn;
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users(name, email, password) VALUES('$username', '$email', '$password_hash')";
    if($conn->query($query)){
        return 0;
    }else{
        return -1;
    }
}