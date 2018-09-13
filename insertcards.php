<?php
/**
 * Created by PhpStorm.
 * User: daniela
 * Date: 11.8.18
 * Time: 15:34
 */

if ($_GET['messages'] == 'LogIn') {


    ?>
    <!DOCTYPE html>
    <html>
    <?php include_once './frontend/insertcards/headcards.php'; ?>

    <body>
    <p class="logo"><img src="./frontend/images/brainster_logo.png" alt=""></p>


    <?php include_once './frontend/forms/InsertCards.php'; ?>

    </body>
    </html>
<?php } else {
    header('Location:http://localhost/brainster.xyz/admin.php');
}

?>
