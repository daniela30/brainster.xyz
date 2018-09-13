<?php
/**
 * Created by PhpStorm.
 * User: daniela
 * Date: 12.8.18
 * Time: 23:41
 */

include_once '/var/www/html/brainster.xyz/BackEnd/Model/Course.php';


$id = $_GET['id'];
$update = new Course();
$course = $update->select($id);
