<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Distri Market</title>
  </head>
  <body>
    <div class="container">
        <div class="row mt-2">
            <div class="col-4 col-sm-3 col-lg-2 text-center">
                <img src="img/logo_transparent.png" alt="" width="100%">
            </div>

            <div class="col-8 col-sm-9 col-lg-10 pt-5">
                <h1 class="text-center fw-bolder">Distri-Market</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-md-8">
                <div class="card">
                    <h5 class="card-header">
                    Bienvenido
                    </h5>
                    <div class="card-body">
                        <img src="img/virtualreality.svg" alt="" width="100%">
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <h5  class="card-header">
                    Autenticacion
                    </h5>
                    <div class="card-body">
                        <form action="autenticar.php?pid=" <?php echo base64_encode('presentacion/autenticar.php') ?> " method="post">
                            <div class="form-floating mb-3">
                                <input type="email" name="correo" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Correo</label>
                            </div>
                            <div class="mb-3 form-floating">
                                <input type="password" name="clave" class="form-control" id="floatingPassword" placeholder="Clave">
                                <label for="floatingPassword">Clave</label>
                            </div>
                            <div class="form-group ">
                                <button type="submit" class="btn btn-primary form-control ">Iniciar Sesion</button>
                            </div>
                        </form>
                        <?php
                        if(isset($_GET["error"])){
                            ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Correo y clave</strong> Contrasenia o correo mal
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php
                        }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>