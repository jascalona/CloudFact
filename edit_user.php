<?php
session_start();
if (!empty($_SESSION["name"])) {
    header('');
} else {
    if (
        (time() - $_SESSION['time']) > 100
    ) {
        header("Location: ../log.php");
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
            <img src="./images/icons/perfil.png" alt="">
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
            <a href="./edit_user.php">
                <img src="./images/profile.png" alt="">

                <div class="title-top">
                    <h6>Benvenid@
                        <?php echo $_SESSION['name'] . ' ' . $_SESSION['surname']; ?>
                    </h6>
                    <small><strong>Roll: </strong> Administrator</small>

                    <br>

                    <div class="btn-password">
                        <button>Cambiar Clave <i class='bx bx-edit-alt'></i></button>
                    </div>

                </div>
            </div>

        </div>


        <div class="container-data-user">
            <div class="componet-data-user">

                <article class="item-componet">
                    <h6>Datos de Contacto</h6>

                    <label for="">Correo electrónico</label>
                    <p><strong>example@grupoxcven.com</strong></p>
                    <br>

                    <label for="">Nº Extensión</label>
                    <p><strong>N\A</strong></p>


                    <label for="">Nº de móvil</label>
                    <p><strong>N\A</strong></p>
                    <br>

                    <label for="">Localidad</label>
                    <p><strong>N\A</strong></p>

                    <div class="btn-componet">

                        <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                            Actualizar Datos
                        </button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Datos de Contacto</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Message:</label>
                                                <textarea class="form-control" id="message-text"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary">Actualizar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </article>


                <article class="item-componet">
                    <h6>Datos Personales</h6>

                    <label for="">Nombres</label>
                    <p><strong>Jose Escalon</strong></p>
                    <br>

                    <label for="">Apellidos</label>
                    <p><strong>Escalona Blanco</strong></p>

                    <label for="">Documento de Identidad</label>
                    <p><strong>22.215.443.654</strong></p>
                    <br>

                    <label for="">Departamento</label>
                    <p><strong>Developer</strong></p>

                    <div class="btn-componet">

                        <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">
                            Actualizar Datos
                        </button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Datos Personales</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Message:</label>
                                                <textarea class="form-control" id="message-text"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary">Actualizar</button>
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