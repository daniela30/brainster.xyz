<?php
/**
 * Created by PhpStorm.
 * User: daniela
 * Date: 7.8.18
 * Time: 19:10
 */
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row  img-bar">
                <?php include_once './BackEnd/Model/Course.php';
                $course = new Course();
                $niza = $course->getAll();

                foreach ($niza as $value) {

                    ?>
                    <div class="col-sm-6 col-md-4 ">
                        <a href="<?php echo $value['destination']; ?>  " target="_blank">
                            <div class="thumbnail">

                                <span><img src="<?php echo $value['image'] ?>" height=70px;></span>
                                <div class="caption">
                                    <h3><?php echo $value['title']; ?></h3>
                                    <h4>
                                        <?php echo $value['subtitle']; ?>
                                    </h4>
                                    <p><?php echo $value['description']; ?></p>
                                </div>
                                </span>
                            </div>
                        </a>
                    </div>
                    <?php

                }
                ?>
            </div>
        </div>
    </div>

</div>


