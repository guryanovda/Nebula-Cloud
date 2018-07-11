<?php
include('Kernel/System.php');
$configuration = \Kernel\System::systemInit();
if ($_POST['username'] && $_POST['password']){
    $login = $_POST['username'];
    $password = $_POST['password'];
    \Kernel\System::authorise($login,$password,$configuration);
}
\Kernel\System::onlyForAnonimous();
?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?=$configuration['System']['system_name'] ?> | <?=$configuration['Translation']['login']['authorisation'] ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="style/css/login.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="style/libs/bootstrap/css/bootstrap.css">

</head>

<body>

<div class="container-fluid">
    <form method="post">
        <div class="modal fade bd-example-modal-sm" id="loginModal">

            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?=$configuration['System']['system_name'] ?></h5>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <img src="style/img/nebula.png" class="col-12" style="height: 250px">
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <br>
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control" placeholder="<?=$configuration['Translation']['login']['username'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="<?=$configuration['Translation']['login']['password'] ?>">
                                    </div>
                                    <?php if ($_SESSION['loginerror']): ?>
                                    <div class="alert alert-danger" role="alert">
                                        Ошибка входа
                                    </div>
                                    <?php endif ?>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="<?=$configuration['Translation']['login']['sign_in'] ?>">
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="style/libs/bootstrap/js/bootstrap.js"></script>

<script>
    $('#loginModal').modal({backdrop: 'static'});
</script>

</body>
</html>
