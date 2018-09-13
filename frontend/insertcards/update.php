<?php
/**
 * Created by PhpStorm.
 * User: daniela
 * Date: 12.8.18
 * Time: 23:51
 */
include_once '/var/www/html/brainster.xyz/BackEnd/Controllers/CoursesUpdateController.php';

if ($_GET['message'] == 'LogIn') {

    ?>
    <!DOCTYPE html>
    <html>
    <?php include_once '/var/www/html/brainster.xyz/frontend/insertcards/headcards.php' ?>
    <body>
    <form class="" action="/brainster.xyz/BackEnd/Controllers/UpadateController.php" method="post">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 login-form col-sm-6 col-sm-offset-3">

                    <div class="form-control hidden">
                        <input type="text" name="id" value="<?php echo $course[0]['id']; ?>">

                    </div>

                    <div class="form-group">
                        <h2 class="text-center">Insert Cards</h2>
                        <input type="url" name="image" required value="<?php echo $course[0]['image'] ?>"
                               placeholder="Image"
                               class="form-control">
                    </div>
                    <div class="form-group">


                        <input type="url" name="destination" required value="<?php echo $course[0]['destination'] ?>"
                               placeholder="Destination"
                               class="form-control">


                    </div>
                    <div class="form-group">


                        <input type="text" name="title" required maxlength="15"
                               value="<?php echo $course[0]['title'] ?>" placeholder="Title"
                               class="form-control">


                    </div>
                    <div class="form-group">


                        <input type="text" name="subtitle" required maxlength="60"
                               value="<?php echo $course[0]['subtitle'] ?>"
                               placeholder="Subtitle" class="form-control">


                    </div>
                    <div class="form-group">


                    <textarea name="description" required rows="10" maxlength="200" class="form-control"
                              placeholder="Description here...."><?php echo $course[0]['description'] ?></textarea>

                        <button type="submit" name="<?php echo $course[0]['id'] ?>" class="btn btn-block button">Insert
                        </button>


                    </div>


                </div>
            </div>
        </div>

    </form>
    </body>
    </html>
<?php } else {
    header('Location:http://localhost/brainster.xyz/admin.php');
}


?>