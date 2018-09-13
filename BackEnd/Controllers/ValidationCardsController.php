<?php
/**
 * Created by PhpStorm.
 * User: daniela
 * Date: 16.8.18
 * Time: 15:18
 */
include_once '/var/www/html/brainster.xyz/BackEnd/Model/Validation.php';
include_once '/var/www/html/brainster.xyz/BackEnd/Model/Course.php';
if (isset($_POST) && count($_POST) > 0) {
    $image = $_POST['image'];
    $description = $_POST['description'];
    $destination = $_POST['destination'];
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];


    $parametars = new Validation();
    if ($parametars->urlValidation($image) && $parametars->urlValidation($destination) && $parametars->textareaValidation($description) && $parametars->titleValidation($title) && $parametars->subtitleValidation($subtitle)) {
        $course = new Course($image, $title, $subtitle, $description, $destination);
        $course->saveAs();
    } else {
        if (strlen($image) == 0 || strlen($description) == 0 || strlen($destination) == 0 || strlen($title) == 0 || strlen($subtitle) == 0) {
            header('Location:http://localhost/brainster.xyz/insertcards.php?message= All fields are required&messages=LogIn');
        } else {
            if ($parametars->urlValidation($image) == false) {
                header('Location:http://localhost/brainster.xyz/insertcards.php?message= Invalid image url&messages=LogIn&image=' . $image . '&destination=' . $destination . '&title=' . $title . '&subtitle=' . $subtitle . '&description=' . $description);
            } elseif ($parametars->urlValidation($destination) == false) {
                header('Location:http://localhost/brainster.xyz/insertcards.php?message= Invalid destination url&messages=LogIn&image=' . $image . '&destination=' . $destination . '&title=' . $title . '&subtitle=' . $subtitle . '&description=' . $description);
            } elseif ($parametars->textareaValidation($description) == false) {
                header('Location:http://localhost/brainster.xyz/insertcards.php?message= The description can have a maximum 200 characters&messages=LogIn&image=' . $image . '&destination=' . $destination . '&title=' . $title . '&subtitle=' . $subtitle . '&description=' . $description);
            } elseif ($parametars->titleValidation($title) == false) {
                header('Location:http://localhost/brainster.xyz/insertcards.php?message= The title can have a maximum  15 characters&messages=LogIn&image=' . $image . '&destination=' . $destination . '&title=' . $title . '&subtitle=' . $subtitle . '&description=' . $description);

            } else {
                header('Location:http://localhost/brainster.xyz/insertcards.php?message= The subtitle can have a maximum  60 characters&messages=LogIn&image=' . $image . '&destination=' . $destination . '&title=' . $title . '&subtitle=' . $subtitle . '&description=' . $description);
            }
        }

    }

}