<?php
/**
 * Created by PhpStorm.
 * User: daniela
 * Date: 13.8.18
 * Time: 00:59
 */
include_once '/var/www/html/brainster.xyz/BackEnd/Model/Course.php';
$id = $_POST['id'];
$image = $_POST['image'];
$title = $_POST['title'];
$subtitle = $_POST['subtitle'];
$description = $_POST['description'];
$destination = $_POST['destination'];
$course = new Course();
$course->update($id, $image, $title, $subtitle, $description, $destination);