<?php
/**
 * Created by PhpStorm.
 * User: daniela
 * Date: 11.8.18
 * Time: 15:49
 */
include_once '../Model/Course.php';
$image = $_POST['image'];
$title = $_POST['title'];
$subtitle = $_POST['subtitle'];
$description = $_POST['description'];
$destination = $_POST['destination'];
$course = new Course($image, $title, $subtitle, $description, $destination);
$course->saveAs();
