<!DOCTYPE html>
<html data-ng-app="myApp">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <base href="<?= base_url() ?>"></base>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="templateboom/bootstrap/css/bootstrap.min.css" />

    <link rel="stylesheet" href="css/boom.css" />
    <!--<link rel="stylesheet/less" type="text/css" href="css/styles.less" />-->
    <link rel="stylesheet" type="text/css" href="templateboom/css/styles.css" />
    <link rel="stylesheet" href="templateboom/css/animations.min.css" />
    <link rel="stylesheet" href="templateboom/css/social.min.css" />

    <!--fonts-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" />
</head>
<body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h1 class="text-center">Iniciar Sesión</h1>
            </div>
            <div class="modal-body">
                <form class="form" action="<?= base_url('login/loginUser') ?>" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Email" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input-lg" placeholder="Contraseña" name="password" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Entrar</button>
                    </div>
                </form>
            </div><!--/modal-body-->
            <div ng-show="flash">
                <div data-alert class="alert-box alert round">{{ flash }}</div>
            </div>
        </div><!--/modal-content-->

    </div><!--/dialog-->
</div><!--/modal-->

</body>
</html>