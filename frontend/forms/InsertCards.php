<?php
/**
 * Created by PhpStorm.
 * User: daniela
 * Date: 11.8.18
 * Time: 15:30
 */

$message = '';
if (count($_GET) > 0 && isset($_GET)) {
    if (isset($_GET['message']) && strlen($_GET['message']) > 0) {
        $message = $_GET['message'];

    } else {
        $message = '';
    }
}
?>

<form class="" action="./BackEnd/Controllers/ValidationCardsController.php" method="post">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 login-form col-sm-6 col-sm-offset-3">
                <div class="form-group">
                    <h2 class="text-center">Insert Cards</h2>
                    <input type="text" name="image"
                           value="<?php if (isset($_GET['image']) && strlen($_GET['image']) > 0) {
                               echo $_GET['image'];

                           } ?>" placeholder="Image" class="form-control border">
                </div>
                <div class="form-group">
                    <input type="text" name="destination"
                           value="<?php if (isset($_GET['destination']) && strlen($_GET['destination']) > 0) {
                               echo $_GET['destination'];

                           } ?>" placeholder="Destination"
                           class="form-control border">
                </div>
                <div class="form-group">
                    <input type="text" name="title"
                           value="<?php if (isset($_GET['title']) && strlen($_GET['title']) > 0) {
                               echo $_GET['title'];

                           } ?>"" placeholder="Title" class="form-control border">
                </div>
                <div class="form-group">
                    <input type="text" name="subtitle" value="<?php
                    if (isset($_GET['subtitle']) && strlen($_GET['subtitle']) > 0) {
                        echo $_GET['subtitle'];

                    } ?>" placeholder="Subtitle" class="form-control border">
                </div>

                <div class="form-group">
                    <textarea name="description" rows="10" class="form-control border"
                              placeholder="Description here...."><?php if (isset($_GET['description']) && strlen($_GET['description']) > 0) {
                            echo $_GET['description'];

                        } ?></textarea>
                    <?php echo '<h4 style="color:red;" class="text-center">' . $message . '</h4>' ?>
                    <button type="submit" name="button" class="btn btn-block button">Insert</button>
                </div>
            </div>
        </div>
    </div>

</form>
