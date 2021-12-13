<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <title>Examen_CV | Instalación</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">    
    </head>

    <body class="bg-dark p-4">
        <div class="container-fluid px-1 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-9 col-11">
                    <div class="text-center">
                    <img src="assets\img\logo_car.png" class="mx-auto d-block mb-4 p-1">
                    </div>
                    <h5 class="text-center text-warning mb-4">
                    <?php
                    include("php\conexionBase.php");
                    ?></h5>
                    <div class="card p-3">
                        <p class="text-center mb-4">Haga click en <b>Siguiente</b> para continuar con la aplicación.</p>
                        <div class="row justify-content-center text-center">
                            <div class="btn-group justify-content-center">
                            <div class="col-sm-2 d-flex"> 
                                    <a href="tabla.html"><button type="next" name ="siguiente" value="siguiente" class="btn btn-block btn-warning button">Siguiente</button></a>
                                </div>
                                <div class="col-sm-2 d-flex">
                                    <a href="index.html"><button type="return" name ="atras" value="atras" class="btn btn-block btn-outline-warning button">Atrás</button></a>                      
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
        
    </body>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="assets/js/myscript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <section>
        <footer class=" container text-sm-center text-warning">
            <strong>Copyright &copy; 2021 Vallejo</a></strong>
            <br> 
            Todos los derechos reservados.<br>
            <b>Version</b> 1.1
            </div>
        </footer>
    </section>

</html>