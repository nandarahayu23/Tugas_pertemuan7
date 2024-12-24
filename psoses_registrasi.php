<?php
include "crud/koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST("username");
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

    $sql = "INSERT INTO user(uesrname, password) VALUES ('$username', '$password')";
    $mysqli->query($sql);

    header("Location: login.php");
}
?>