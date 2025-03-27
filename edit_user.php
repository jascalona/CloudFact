<?php
session_start();
if (!empty($_SESSION["name"])) {
    header('');
} else {
    if (
        (time() - $_SESSION['time']) > 100
    ) {
        header("Location: ./log.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloudFact-User-Edition</title>

    <!--Styles-->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/Maquetado.css">
    <link rel="stylesheet" href="./CSS/parck.css">
    <link rel="stylesheet" href="./CSS/FRAMEWORK/Bootstrap.css">
    <!--Styles-->

</head>


<body class="grid-container" style="background-color: rgba(208, 218, 237, 0.296);">


    <header class="header">

        <div class="logo">
            <img src="./images/icons/cloud.svg" alt="">
            <span>CloudFact</span>
        </div>



        <div class="icons">

            <button type="button" class="btn btn-dark position-relative" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">
                <i class='bx bxs-bell-ring'></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    99+
                    <span class="visually-hidden">unread messages</span>
                </span>
            </button>


            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Centro de Notificaciones</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Modal-->

            <button><i class='bx bx-power-off'></i> </button>
        </div>

    </header>


    <nav class="menu-dashboard">
        <!-- TOP MENU -->
        <div class="top-menu">

            <div class="toggle">
                <i class='bx bx-menu' style="color: #fff;"></i>
            </div>


        </div>
        <!-- INPUT SEARCH -->
        <div class="perfil-user">
            <a href="./edit_user.php">
                <img src="./images/icons/perfil.png" alt="">
            </a>
            <br>
            <div class="text">
                <span>
                    <?php echo $_SESSION['name'] . ' ' . $_SESSION['surname']; ?>
                </span><br>
                <small>
                    <?php echo $_SESSION['email']; ?>
                </small>
            </div>
        </div>
        <!-- MENU -->
        <div class="menu">
            <div class="enlace">
                <i class='bx bxs-dashboard'></i>
                <a href="./dashboard.php"><span>Panel</span></a>
            </div>

            <div class="enlace">
                <i class='bx bx-barcode-reader'></i>
                <a href="./client_reading.php"><span>Lecturas</span></a>
            </div>

            <div class="enlace">
                <i class='bx bx-printer'></i>
                <a href="./parck.php"><span>Parque</span></a>
            </div>

            <div class="enlace">
                <i class='bx bx-data'></i>
                <a href="./install.html"><span>Instalaciones</span></a>
            </div>

            <div class="enlace">
                <i class='bx bx-message-square-x'></i>
                <a href=""><span>Desincorporación</span></a>
            </div>

            <div class="enlace">
                <i class='bx bx-folder-minus'></i>
                <a href=""><span>Contratos</span></a>
            </div>

        </div>
    </nav>




    <article style="width: 100%;" class="main">
        <div class="container-top">

            <div class="user-edition">
                <img src="./images/profile.png" alt="">

                <div class="title-top">
                    <h6>Bienvenid@
                        <?php echo $_SESSION['name'] . ' ' . $_SESSION['surname']; ?>
                    </h6>
                    <small><strong>Roll: </strong> <?php echo $_SESSION['roll']; ?></small>

                    <br>

                    <div class="btn-password">
                        <button>Cambiar Clave <i class='bx bx-edit-alt'></i></button>
                    </div>

                </div>
            </div>

        </div>


        <div class="container-data-user">
            <div class="componet-data-user">

                <?php  include ("./CONTROLLER/update_data_user.php");?>

                <article class="item-componet">
                    <h6>Datos de Contacto</h6>

                    <label for="">Correo electrónico</label>
                    <p><strong><?php echo $_SESSION['email']; ?></strong></p>
                    <br>

                    <label for="">Nº Extensión</label>
                    <p><strong><?php echo $_SESSION['n_extension']; ?></strong></p>


                    <label for="">Nº móvil</label>
                    <p><strong><?php echo $_SESSION['n_movil']; ?></strong></p>
                    <br>

                    <label for="">Localidad</label>
                    <p><strong><?php echo $_SESSION['geo']; ?></strong></p>

                    <div class="btn-componet">

                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modal_datos_contact"
                            data-bs-whatever="@getbootstrap">
                            Actualizar Datos
                        </button>

                        <div class="modal fade" id="modal_datos_contact" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Datos de Contacto
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" >

                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Correo:</label>
                                                <input type="email" name="email" class="form-control" id="recipient-name" value="<?php echo $_SESSION['email']; ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Nº Extensión:</label>
                                                <input type="text" name="n_extension" class="form-control" id="recipient-name" value="<?php echo $_SESSION['n_extension']; ?>" >
                                            </div>

                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Nº móvil:</label>
                                                <input type="text" name="n_movil" class="form-control" id="recipient-name" value="<?php echo $_SESSION['n_movil']; ?>">
                                            </div>


                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Localidad:</label>
                                                <input type="text" name="geo" class="form-control" id="recipient-name" value="<?php echo $_SESSION['geo']; ?>">
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" name="btn-update-contact" class="btn btn-primary">Actualizar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </article>


                <article class="item-componet">
                    <h6>Datos Personales</h6>

                    <label for="">Nombres</label>
                    <p><strong><?php echo $_SESSION['name'] . " " . $_SESSION['name_two']; ?></strong></p>
                    <br>

                    <label for="">Apellidos</label>
                    <p><strong><?php echo $_SESSION['surname'] . " " . $_SESSION['surname_two']; ?></strong></p>

                    <label for="">Documento de Identidad</label>
                    <p><strong><?php echo $_SESSION['ci']; ?></strong></p>
                    <br>

                    <label for="">Departamento</label>
                    <p><strong><?php echo $_SESSION['depart']; ?></strong></p>

                    <div class="btn-componet">

                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modal_datos_personales"
                            data-bs-whatever="@getbootstrap">
                            Actualizar Datos
                        </button>

                        <div class="modal fade" id="modal_datos_personales" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Datos Personales
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>

                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Departamento:</label>
                                                <input type="text" name="depart" class="form-control" id="recipient-name" value="<?php echo $_SESSION['depart']; ?>">
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                        <button type="submit" name="btn-update-customer" class="btn btn-primary">Actualizar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </article>
            </div>
        </div>







    </article>



    <!--
    <footer class="footer">FOOTER</footer>
    -->


    <!--SCRIPTS-->
    <script src="./JS/search.js"></script>
    <script src="./JS/app.js"></script>
    <script src="./JS/main.js"></script>
    <script src="./JS/scroller_tables.js"></script>
    <script src="./JS/echarts.js"></script>
    <script src="./JS/Bootstrap.js"></script>
    <!--SCRIPTS-->
</body>

</html>