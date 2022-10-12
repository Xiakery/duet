<?php
require_once '../class/classGetAtributes.php';
$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];

$newUser = NEW newUser($login,$password,$email);
print ($newUser->getLogin())."<br>";
print ($newUser->getPassword())."<br>";
print ($newUser->getEmail())."<br>";
?>