<?php
/**
 * Created by PhpStorm.
 * User: daniela
 * Date: 11.8.18
 * Time: 18:25
 */
include_once '../Model/Course.php';
$id = $_GET['id'];
$delete = new Course();
$delete->delete($id);
