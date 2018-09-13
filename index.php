<?php
/**
 * Created by PhpStorm.
 * User: daniela
 * Date: 5.8.18
 * Time: 22:02
 */
?>
<!DOCTYPE html>
<html>
<head>
    <?php
    include_once './frontend/website/head.php';
    ?>


</head>
<body <?php $message = '';
if (count($_GET) > 0 && isset($_GET)) {
    $message = $_GET['message'];
}
if (strlen($message) != '') {
    echo ' class = "modal-open"';
} else {
    echo 'class=""  ';
}


?>>
<?php
include_once './frontend/website/navbar.php';
include_once './frontend/website/header.php';
include_once './frontend/website/cards.php';
include_once './frontend/website/footer.php';
?>


</body>

</html>
