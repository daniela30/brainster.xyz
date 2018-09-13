<?php
/**
 * Created by PhpStorm.
 * User: daniela
 * Date: 11.8.18
 * Time: 17:37
 */

if ($_GET['message'] == 'LogIn') {


    ?>
    <!DOCTYPE html>
    <html>

    <?php include_once '/var/www/html/brainster.xyz/frontend/website/head.php'; ?>
    <body class="background">
    <div class="container-fluid ">
        <div class="row ">
            <div class="col-md-12 nav-bar-yellow cards ">
                <p style="margin-left: 10%;padding-top: 5px">
                    <img src="/brainster.xyz/frontend/images/brainster_logo.png" height="50px" "></p>
            </div>
        </div>

    </div>
    <div>
        <a class="log-out" href="/brainster.xyz/index.php">
            <button class="btn logOut "> Log out</button>
        </a>
    </div>
    <div class="fixed">
        <a href="http://localhost/brainster.xyz/insertcards.php?messages=LogIn">
            <button class="button">+</button>
        </a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row  img-bar">
                    <?php include_once '/var/www/html/brainster.xyz/BackEnd/Model/Course.php';
                    $course = new Course();
                    $niza = $course->getAll();

                    foreach ($niza as $value) {

                        ?>
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail showcards ">

                                <span><img src="<?php echo $value['image'] ?>" height=90px "></span>
                                <div class="caption">
                                    <h3><?php echo $value['title']; ?></h3>
                                    <h4>
                                        <?php echo $value['subtitle']; ?>
                                    </h4>
                                    <p><?php echo $value['description']; ?></p>
                                </div>

                                <a class="delete"
                                   href="http://localhost/brainster.xyz/BackEnd/Controllers/CoursesDeleteController.php?id=<?php echo $value['id']; ?>"
                                   type="submit">Delete</a>
                                <a class="update"
                                   href="http://localhost/brainster.xyz/frontend/insertcards/update.php?id=<?php echo $value['id']; ?>&message=LogIn"
                                   type="submit">Update</a>

                            </div>
                        </div>
                        <?php

                    }
                    ?>


                </div>
            </div>
        </div>

    </div>

    </body>
    </html>
<?php } else {
    header('Location:http://localhost/brainster.xyz/admin.php');
}

?>