<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../assets/favicon_io/site.webmanifest">
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Nunito&family=Nunito+Sans&display=swap" rel="stylesheet">
    <!--Icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--BOOTSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Animate CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--Bootstrap Jquery, popper, js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- JQUERY -->
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <script defer src="../js/modal.js"></script>
    <script defer src="../js/index.js"></script>
    <title>Libreria</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
            <div class="container-fluid px-lg-5 px-sm-0">
                <a class="navbar-brand" href="./inicio.html">
                    <img src="../assets/img/logo2.jpg" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-4">
                            <a class="nav-link active" aria-current="page" href="./inicio.html">Inicio</a>
                        </li>
                        <li class="nav-item dropdown mx-4">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Usuarios
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="./listadoUsuarios.php">Listado de usuarios</a></li>
                                <li><a class="dropdown-item" href="./altaUsuario.html">Alta de usuario</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown mx-4">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Libros
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="./listadoLibros.php">Listado de libros</a></li>
                                <li><a class="dropdown-item" href="./nuevoLibro.html">Agregar libro</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container py-5">
        <section>
            <button id="btnTop" class="btnTop" title="Volver a arriba"><i class="fas fa-chevron-up"></i></button>
        </section>
        <div class="container">
            <div class="modal" tabindex="-1" id="modalProyecto">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content modal-content-ok">
                        <div class="modal-header">
                            <h4 class="modal-title text-success"><i class="fas fa-check-circle"></i> Alta exitosa!</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>El usuario y contraseña fueron guardados correctamente.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="text-center py-3 bg-dark text-white">Alta de Nuevo Usuario</h2>
            <div class="main-bg alta-bg">
                <form action="../controller/altaUsuario.php" method="post" class="col-lg-6 col-xs-12 mx-auto p-5 box-alta-dark">
                    <div class="mt-4 box-input">
                        <label for="newUser" class="form-label">Usuario: </label>
                        <input type="email" class="form-control" id="newUser" name="newUser" placeholder="Utiliza tu correo electrónico." minlength="8" required>
                        <div id="msgEmail"></div>
                    </div>
                    <div class="mt-5 box-input">
                        <label for="newPass" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="newPass" name="newPass" placeholder="Utiliza al menos 4 caracteres" minlength="4" required>
                        <div id="msgPass"></div>
                    </div>
                    <div class="form-check mb-4 mt-5">
                        <input type="checkbox" class="form-check-input" id="newData" required>
                        <label class="form-check-label" for="newData">No soy un robot</label>
                    </div>
                    <button type="submit" class="btn btn-light mt-3">Confirmar Datos</button>
                </form>
            </div>
        </div>
    </main>

</body>

</html>