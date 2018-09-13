<?php
/**
 * Created by PhpStorm.
 * User: daniela
 * Date: 16.8.18
 * Time: 13:17
 */
include_once '/var/www/html/brainster.xyz/BackEnd/Model/Validation.php';
include_once '../Model/Company.php';
if (isset($_POST) && count($_POST) > 0) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $telnumber = $_POST['tel-number'];


    $mail = new Validation();
    if ($mail->emailValidation($email)) {
        $company = new Company($name, $telnumber, $email);
        $company->saveAs();

    } else {
        if (strlen($email) == 0 || strlen($name) == 0 || strlen($telnumber) == 0) {
            header('Location:http://localhost/brainster.xyz/index.php?message= All fields are required');
        } else {
            header('Location:http://localhost/brainster.xyz/index.php?message= Invalid email');
        }
    }

}
