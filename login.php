<?php
include('Kernel/kernel.php');
if ($_SESSION["username"] != '') :
    header("Location: user/" . $_SESSION['username'] . "/index.php");
endif;
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Nebula V Cloud Builder | Авторизация</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="style/css/login.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>

<body>

<div class="container-fluid">
    <form>
        <div class="modal fade bd-example-modal-sm" id="exampleModalCenter">

            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Nebula Cloud Builder</h5>
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
                                        <input type="email" class="form-control" placeholder="Имя пользователя">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Пароль">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Войти">
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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>

<script>
    $('#exampleModalCenter').modal({backdrop: 'static'});
    <?
    if ($_GET['error'] == 1) :
        print 'alert(1324);
                document.getElementById("log").value="' . $_GET['login'] . '";';
    endif;
    ?></script>


</body>
</html>
