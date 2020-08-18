<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mini Market Camarena</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!--CDN Bootstrap (CSS)-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!--CDN JQuery,Popper,Bootstrap (JS)-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/27d40e429f.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php require_once "views/header.php" ?>
               
        <div class="d-flex justify-content-center" style="padding-top:100px">
            <h2 style="color:##09ea1a"><strong><i class="fas fa-gift pr-2"></i>PROMOCIONES</strong></h2>
        </div>
        <form>
            <div class="col-md-12" style="margin-left:auto;margin-right:auto;margin-top:auto;margin-bottom:auto">
            <div class="container" >
                <div class="row py-2">
                  <div class="col-md-1"></div>
                  <div class="col-md-5">
                    <div class="form-row py-2">
                        <div class="col-md-4">
                            <p><strong>CODIGO:</strong></p>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Ingrese el codigo...">
                        </div>
                    </div>
                    <div class="form-row py-2">
                        <div class="col-md-4">
                            <p><strong>NOMBRE:</strong></p>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Ingrese nombre...">
                        </div>
                    </div>
                    <div class="form-row py-2">
                        <div class="col-md-4">
                            <p><strong>COSTO:</strong></p>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Ingrese el costo...">
                        </div>
                    </div>
                  </div>

                  <div class="col-md-5">
                    <div class="form-row py-2">
                        <div class="col-md-4">
                            <p><strong>DESCRIPCION:</strong></p>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Ingrese una descripcion...">
                        </div>
                    </div>
                    <div class="form-row py-2">
                        <div class="col-md-4">
                            <p><strong>CANTIDAD:</strong></p>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Ingrese la cantidad...">
                        </div>
                    </div>
                  </div>
                </div>
            </div>
                    <div class="d-flex flex-row justify-content-center mt-2">
                    <div class="col-md-2">
                        <button type="button" class="btn btn-primary btn-block"><i class="fas fa-plus-circle"></i> AÑADIR</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

 <div class="container d-flex flex-row-reverse" >
    <section class="row">    
        <div class="form-row" > 
            <div class="col-md-9">
                 <input type="text" class="form-control" placeholder="Buscar...">
            </div>
            <div class="col-md-1">
                <button type="button" class="btn btn-primary btn-dark"><i class="fas fa-search"></i></button>
            </div>
         </div>
    </section>
  </div>

    <center>
        <div class="container mt-4">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Codigo</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Costo s/.</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Actividad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">PR01</th>
                            <td>3x1 Agua San Mateo</td>
                            <td>Por compra mayor a s/.10</td>
                            <td>1.5</td>
                            <td>20</td>
                            <td>
                                <div role="group" class="mb-2 btn-group-md btn-group">
                                    <button class="btn-shadow btn-hover-shine btn btn-success btn-md btn-pill pl-3" title="Editar">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                    <button class="btn-shadow btn-hover-shine btn btn-danger btn-md btn-pill pr-3" title="Eliminar">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>                    
                        <tr>
                            <th scope="row">PR02</th>
                            <td>2x1 leche Gloria</td>
                            <td>tarro</td>
                            <td>3.2</td>
                            <td>30</td>                            
                            <td>
                                <div role="group" class="mb-2 btn-group-md btn-group">
                                    <button class="btn-shadow btn-hover-shine btn btn-success btn-md btn-pill pl-3" title="Editar">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                    <button class="btn-shadow btn-hover-shine btn btn-danger btn-md btn-pill pr-3" title="Eliminar">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </center>
    <?php require_once "views/footer.php" ?>
</body>
</html>