<?php
session_start();
if (!empty($_SESSION["name"])) {
    header('');
} else {
    if (
        (time()- $_SESSION['time']) > 100
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
    <title>CloudFact</title>

    <!--Styles-->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/dashboard.css">
    <link rel="stylesheet" href="./CSS/FRAMEWORK/Bootstrap.css">
    <!--Styles-->

</head>

<body style="background-color: rgba(208, 218, 237, 0.296);">

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

    <div class="menu-dashboard">
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
                <span><?php echo $_SESSION['name'] . ' ' . $_SESSION['surname'];?></span><br>
                <small><?php echo $_SESSION['email']; ?></small>
            </div>
        </div>
        <!-- MENU -->
        <div class="menu">
            <div class="enlace">
                <i class='bx bxs-dashboard'></i>
                <a href="./dashboard.php"><span>Panel</span></a>
            </div>

            <div class="enlace">
                <i class="bx bx-printer"></i>
                <a href="./parck.php"><span>Parque</span></a>
            </div>

            <div class="enlace">
                <i class='bx bx-barcode-reader'></i>
                <a href=""><span>Lectura</span></a>
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
    </div>


    <main class="main" id="main">
        <div class="container-top">

            <div class="title-top">
                <h6>Benvenid@ <?php echo $_SESSION['name'] . ' ' . $_SESSION['surname'];?></h6>
                <small>Monitorea metricas clave. Consulta Informes y analiza la informacion</small>
            </div>

            <!--cards-->
            <div class="componets-card">

                <div class="card">
                    <span><b>Ventas</b></span>
                    <small>Numero de Ventas</small>
                    <div class="content">
                        <span>1.200</span>
                        <i class='bx bx-credit-card-alt' style='color:#002134'></i>
                    </div>
                    <small>comentario</small>
                </div>

                <div class="card">
                    <span><b>Contrato SGD</b></span>
                    <small>Clientes</small>
                    <div class="content">
                        <span>100</span>
                        <i class='bx bx-user' style='color:#002134'  ></i>
                    </div>
                    <small>comentario</small>
                </div>

                <div class="card">
                    <span><b>Otro grafico</b></span>
                    <small>Numero de Ventas</small>
                    <div class="content">
                        <span>100</span>
                        <i class='bx bx-credit-card-alt' style='color:#002134'></i>
                    </div>
                    <small>comentario</small>
                </div>


            </div>
            <!--cards-->

        </div>


          <!--GRAFICOS-->
          <div class="container-graficos">
            <div class="row my-4">

                <div class="col-ms12 col-md6 col-lg-6 col-xl-6">
                    <div id="chart1" class="chart"></div>
                </div>

                <div class="col-ms12 col-md6 col-lg-6 col-xl-6">
                    <div id="chart2" class="chart"></div>
                </div>

            </div>
        </div>
        <!--GRAFICOS-->
        
    </main>


    <!--SCRIPTS-->
    <script src="./js/app.js" defer></script>
    <script src="./JS/main.js"></script>
    <script src="./JS/echarts.js"></script>
    <script src="./JS/Bootstrap.js"></script>
    <!--SCRIPTS-->
</body>

</html>