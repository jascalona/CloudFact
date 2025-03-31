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
    <title>CloudFact-Park-Customer</title>

    <!--Styles-->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./CSS/Maquetado.css">
    <link rel="stylesheet" href="./CSS/style.css">
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
                <a href="./install.php"><span>Instalaciones</span></a>
            </div>

            <div class="enlace">
                <i class='bx bx-message-square-x'></i>
                <a href="./disincorporation.php"><span>Desincorporación</span></a>
            </div>

            <div class="enlace">
                <i class='bx bx-folder-minus'></i>
                <a href=""><span>Contratos</span></a>
            </div>

        </div>
    </nav>




    <article class="main">
        <div class="container-top">

            <div class="title-top">
                <h6>Bienvenid@
                    <?php echo $_SESSION['name'] . ' ' . $_SESSION['surname']; ?>
                </h6>
                <small>Monitorea metricas clave. Consulta Informes y analiza la informacion</small>
            </div>

        </div>



        <!--SECTION FILTERS PARK-->
        <div class="container-filters">

            <!--SEARCH-->
            <!-- start search filter -->
            <div class="search-reading" data-aos="fade-up" data-aos-duration="1000" id="search">
                <div class="container">
                    <form class="">
                        <input class="form-control me-2 light-table-filter" data-table="table" type="text"
                            placeholder="Search...">
                    </form>
                </div>
            </div>
            <!-- end search filter -->
            <!--SEARCH-->

            <br>

            <!--Filters-->
            <div class="container-form">

                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Selecciona un Modelo</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <label for="floatingSelect">Modelo</label>
                </div>



                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Selecciona una Localidad</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <label for="floatingSelect">Localidad</label>
                </div>


                <button type="button" class="">Aplicar Filtro</button>

            </div>
            <!--Filters-->


        </div>
        <!--SECTION FILTERS PARK-->





        <!--table-park-->
        <!--Include Controller-->
        <div class="container-table">
            <div class="head-t">
                <p>Customer's: <small>Park</small></p> <br>

                <?php
                include("./CONTROLLER/conexion.php");

                $row = mysqli_query($conexion, "SELECT *FROM park;");
                $num_rows = mysqli_num_rows($row);
                ?>

                <span>Cantidad de Registros: <b>
                        <?php echo $num_rows; ?>
                    </b></span>
            </div>

            <div class="icons-pages">
                <button id="scroll-button-left"><i class='bx bx-chevron-left'></i></button>
                <button id="scroll-button-right"><i class='bx bx-chevron-right'></i></button>
            </div>

            <div class="content-table">

                <table class="table">

                    <thead>
                        <tr class="table-primary">
                            <th scope="col">Cliente</th>
                            <th scope="col">RIF</th>
                            <th scope="col">Serial</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Localidad</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Cont. Anterior</th>
                            <th scope="col">Cont. Actual</th>
                            <th scope="col">Volumen B/N</th>
                            <th scope="col">Cont. Actual</th>
                            <th scope="col">Cont. Actual</th>
                            <th scope="col">Volumen Color</th>

                        </tr>
                    </thead>

                    <?php

                    $sql = $conexion->query(" SELECT *FROM park ");
                    while ($datos = $sql->fetch_object()) {
                        ?>

                        <tbody>
                            <tr>
                                <td>
                                    <?= $datos->CLIENT ?>
                                </td>
                                <td>
                                    <?= $datos->RIF ?>
                                </td>
                                <td>
                                    <?= $datos->SERI ?>
                                </td>
                                <td>
                                    <?= $datos->MODEL ?>
                                </td>
                                <td style="min-width: 400px;">
                                    <?= $datos->LOCATION ?>
                                </td>
                                <td>
                                    <?= $datos->DATE ?>
                                </td>
                                <td>
                                    <?= $datos->CONT_ANTE_BN ?>
                                </td>
                                <td>
                                    <?= $datos->CONT_ACTU_BN ?>
                                </td>
                                <td>
                                    <?= $datos->VOLUM_BN ?>
                                </td>
                                <td>
                                    <?= $datos->CONT_ANTE_COLOR ?>
                                </td>
                                <td>
                                    <?= $datos->CONT_ACTU_COLOR ?>
                                </td>
                                <td>
                                    <?= $datos->VOLUM_COLOR ?>
                                </td>

                            </tr>

                            <?php
                    }
                    ?>

                    </tbody>



                </table>
            </div>

        </div>
        <!--table-park-->


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