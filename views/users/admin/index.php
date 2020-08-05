<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin - Tienda Camarena</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <!--CDN Bootstrap (CSS)-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

        <!-- Nuestros css-->
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>/public/css/main.css">
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>/public/css/index.css">
        <link rel="stylesheet" href="<?php echo constant('URL'); ?>/public/css//user_admin.css">
    </head>
    <body>    

    <?php require 'views/header.php'; ?>
    <div class="col-sm-8 main-section2">
        <div class="modal-content2">
            <div class="welcome text-center">
                </br>
                <h1 style="color:##09ea1a"><strong> Bienvenido </strong><i class="fa fa-home"></i></h1>
                <h1 style="color:#252546"><strong>Administrador Julio Perez</strong></h1></br>  
                <h3 style="color:##09ea1a"><strong>¿Qué desea hacer hoy?</strong></h3>
            </div>
            </br>     
            <div class="asd-spin-nested-loading text-center">
                <div class="asd-spin-container">
                    <div class="container-fluid no-gutters paddingless-xl">
                        <div class="row">
                            <div class="resultunit col-md-6 margin-bottom-15">
                                <article class="minimumunit">
                                    <a href="">
                                        <div class="minimumunitBody">
                                            <div class="minimumunitContainer">
                                                <img class="minimumunitLogo" src="public/img/consultar_reportes.png" th:src="@{public/img/consultar_reportes.png}" height="180" width="180" />
                                            </div>
                                            <h4 class="minimumunitTitle">Consultar reportes</h4> </br>
                                        </div>
                                    </a>
                                </article>
                            </div>
                            <div class="resultunit col-md-6 margin-bottom-15">
                                <article class="minimumunit">
                                    <a href="">
                                        <div class="minimumunitBody">
                                            <div class="minimumunitContainer">
                                                <img class="minimumunitLogo" src="public/img/user.png" th:src="@{public/img/user.png}" height="180" width="180" />
                                            </div>
                                            <h4 class="minimumunitTitle">Usuarios</h4>  </br>
                                        </div>                   
                                    </a>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'views/footer.php'; ?>
    </body>
</html>