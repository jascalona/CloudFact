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
    <title>CloudFact-client-reading</title>

    <!--Styles-->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./CSS/Maquetado.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/parck.css">
    <link rel="stylesheet" href="./CSS/dashboard.css">
    <link rel="stylesheet" href="./CSS/FRAMEWORK/Bootstrap.css">
    <!--Styles-->

</head>

<body class="grip-container" style="background-color: rgba(208, 218, 237, 0.296);">

    <header>

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
                <a href="./park.php"><span>Parque</span></a>
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


    <article class="main" id="main">
        <div class="container-top">

            <div style="padding-top: 70px;" class="title-top">
                <h6>Binvenid@
                    <?php echo $_SESSION['name'] . ' ' . $_SESSION['surname']; ?>
                </h6>
                <small>Monitorea metricas clave. Consulta Informes y analiza la informacion</small>
            </div>

            <br>


            <!--Uloap-->
            <div class="container-learning">
                <article>
                    <div class="contenct">
                        <img src="./images/panel.png" alt="">
                        <small><b>Comunicado Servicio</b></small>
                        <p>
                            Deshazte de las malas prácticas y herramientas no optimizadas. El portal de entrenamiento
                            XDV
                            ofrece un acceso exclusivo a documentación y herramientas eficaces y de facil manejo.

                            Mejora tu experiencia a la hora de atender una llamada de servicio, este portal fue diseñado
                            con el proposito brindar a cada técnico y/o aliado de servicio, una formación completa sobre
                            cada producto comercializado a nivel nacional en la gama de prodcutos Xerox y aliados
                            comerciales
                            tales como plataformas de control, herramientas para automatización de procesos y por su
                            puesto equipos

                            <br><br>
                            <button class="btn btn-dark"><a href="">Cargar Lecturas</a></button>

                        </p>
                    </div>
                    

                </article>
            </div>

            <!--Uloap-->


            <!--CRDS CUSTOMER-->
            <div class="componets-card-customer">

                <div class="card-customer">
                    <span><b>Seguros Venezuela</b></span>
                    <br>
                    <small>J-0191765552-2</small>
                    <div class="content">
                        <a href="./Components/graficos_sv.php"><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>


                <div class="card-customer">
                    <span><b>Seguros Venezuela</b></span>
                    <br>
                    <small>J-0191765552-2</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>Seguros Venezuela</b></span>
                    <br>
                    <small>J-0191765552-2</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>


                <div class="card-customer">
                    <span><b>Seguros Venezuela</b></span>
                    <br>
                    <small>J-0191765552-2</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>



                <div class="card-customer">
                    <span><b>Seguros Venezuela</b></span>
                    <br>
                    <small>J-0191765552-2</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>


                <div class="card-customer">
                    <span><b>Seguros Venezuela</b></span>
                    <br>
                    <small>J-0191765552-2</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>



                <div class="card-customer">
                    <span><b>Seguros Venezuela</b></span>
                    <br>
                    <small>J-0191765552-2</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>


                <div class="card-customer">
                    <span><b>Seguros Venezuela</b></span>
                    <br>
                    <small>J-0191765552-2</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>Seguros Venezuela</b></span>
                    <br>
                    <small>J-0191765552-2</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>


                <div class="card-customer">
                    <span><b>Seguros Venezuela</b></span>
                    <br>
                    <small>J-0191765552-2</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

            </div>
            <!--cards-->

        </div>


    </article>


    <!--SCRIPTS-->
    <script src="./js/app.js" defer></script>
    <script src="./JS/main.js"></script>
    <script src="./JS/echarts.js"></script>
    <script src="./JS/Bootstrap.js"></script>
    <!--SCRIPTS-->
</body>

</html>