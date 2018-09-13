<?php
$message = '';
if (count($_GET) > 0 && isset($_GET)) {
    $message = $_GET['message'];
}


?>
<nav class="navbar navbar-default nav-bar-yellow ">
    <div class="container-fluid margin">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu"
                    aria-expanded="false">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="logo-link" href="https://brainster.co/" target="_blank"><img
                        src="./frontend/images/brainster_logo.png" class="logo-img "></a>
        </div>
        <div class="collapse navbar-collapse <?php if (strlen($message) != '') {
            echo '" class = "in" aria-expanded="true" style="display: block;"';
        } else {
            echo 'class=""aria-expanded="fales" style="height: 0px;" ';
        } ?> " id="menu">
            <ul class="nav navbar-nav navbar-right  ">
                <li class="nav-lista"><a href="http://codepreneurs.co/" target="_blank">Академија за програмирање </a>
                </li>
                <li class="nav-lista"><a href="http://www.brainster.io/marketpreneurs" target="_blank">Академија за
                        маркетинг</a></li>
                <li class="nav-lista  list-padding"><a href="https://blog.brainster.co/" target="_blank">Блог</a></li>
                <li class="nav-lista"><a data-toggle="modal" data-target="#myModal">Вработи наши студенти</a></li>
                <div tabindex="-1" <?php if (strlen($message) != '') {
                    echo '" class = "modal fade in" style="display: block;"';
                } else {
                    echo 'class="modal fade" style="display: none;" ';
                }


                ?> role="dialog" id="myModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <p style="float: left;"><img src="./frontend/images/brainster_logo.png" height="30px">
                                </p>
                                <a href="/brainster.xyz/index.php" type="button" class="close" id="close"
                                   data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></a>

                            </div>
                            <div class="modal-body">
                                <?php if (count($_GET) > 0 && isset($_GET)) {
                                    echo '<h4 style="color:red;">' . $message . '</h4>';
                                } ?>
                                <?php include_once './frontend/forms/HireOurStudents.php'; ?>

                            </div>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

        </div>

    </div>
</nav>
