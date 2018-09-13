<?php
/**
 * Created by PhpStorm.
 * User: daniela
 * Date: 11.8.18
 * Time: 14:56
 */
include_once '../Model/Admin.php';
$email = $_POST['email'];
$password = $_POST['password'];
$admin = new Admin(md5($password), $email);
$promenliva = $admin->logIn();
if ($promenliva) {
    header('Location:http://localhost/brainster.xyz/frontend/insertcards/showallcards.php?message=LogIn');
} else {
    header('Location:http://localhost/brainster.xyz/admin.php?message=Invalid email or password');
}