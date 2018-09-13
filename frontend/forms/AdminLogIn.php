<?php
/**
 * Created by PhpStorm.
 * User: daniela
 * Date: 11.8.18
 * Time: 14:46
 */
$mesage = "";
if (count($_GET) > 0 && isset($_GET)) {
    $mesage = $_GET['message'];
}
?>
<form action="./BackEnd/Controllers/AdminController.php" method="post">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 login-form col-sm-4 col-sm-offset-4 ">
                <div class="form-group">
                    <h2 class="text-center">Admin Login</h2>
                    <input type="email" name="email" value="" placeholder="E-mail" class="form-control border">
                </div>
                <div class="form-group">
                    <input type="password" name="password" value="" placeholder="Password" class="form-control border">
                    <button type="submit" class="btn  button btn-block  ">LogIn</button>
                    <p style="color: white" class="text-center"><?php echo $mesage ?></p>
                </div>
            </div>
        </div>
    </div>

</form>
