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
    <link rel="stylesheet" href="./CSS/dashboard.css">
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


    <article class="main" id="main">
        <div class="container-top">

            <div style="padding-top: 70px;" class="title-top">
                <h6>
                    Lecturas
                </h6>
                <small>Monitorea metricas clave. Consulta Informes y analiza la informacion</small>
            </div>

            <br>


            <!--Uloap-->
            <div class="card-all">

                <div class="images-head">
                    <img src="./images/xdv.png" alt="">
                </div>

                <div class="container-card">

                    <article class="item-card-all">

                        <div class="item-cont">
                            <h3>Informe Detallado Global</h3>
                            <p>Total de Clientes: <strong>150</strong></p>
                            <p>Cantidad de Registros: <strong>1605</strong></p>
                            <p>Ultima Carga realizada: <strong>10/10/10</strong></p>

                            <button class="btn btn-dark"><a href="./Components/load_general.php" target="_blank">Ver
                                    Lecturas</a></button>

                        </div>
                    </article>

                    <article class="item-card-all">
                        <div class="item-cont">
                            <!--GRAFICOS-->
                            <div class="container-graficos-reading">
                                <div class="row my-4">

                                    <div style="display: none;" class="col-ms12 col-md6 col-lg-6 col-xl-6">
                                        <div id="chart1" class="chart"></div>
                                    </div>

                                    <div class="col-ms12 col-md6 col-lg-6 col-xl-6">
                                        <div id="chart2" class="chart"></div>
                                    </div>

                                </div>
                            </div>
                            <!--GRAFICOS-->
                        </div>
                    </article>
                </div>

            </div>

            <!--Uloap-->


            <!--CRDS CUSTOMER-->
            <div class="componets-card-customer">

                <div class="card-customer">
                    <span><b>SEGUROS VENEZUELA C.A.</b></span>
                    <br>
                    <small>J000340366</small>
                    <div class="content">
                        <a href="./Components/graficos_sv.php"><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>


                <div class="card-customer">
                    <span><b>Farmatodo C.A.</b></span>
                    <br>
                    <small>J000202001</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>A.C.Centro Medico Docente La Trinidad</b></span>
                    <br>
                    <small>J000585512</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>


                <div class="card-customer">
                    <span><b>AGROBIGOTT, C.A.</b></span>
                    <br>
                    <small>J312492414</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>



                <div class="card-customer">
                    <span><b>ALIMENTOS POLAR COMERCIAL, C.A.</b></span>
                    <br>
                    <small>J000413126</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>


                <div class="card-customer">
                    <span><b>AMWAY DE VENEZUELA LLC</b></span>
                    <br>
                    <small>J304907605</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>



                <div class="card-customer">
                    <span><b>ARMI LOGISTICS INVERSIONES, S.A.</b></span>
                    <br>
                    <small>J400538653</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>


                <div class="card-customer">
                    <span><b>ASO.CIV.CTRO.ATE.NUT.INFAN.ANT</b></span>
                    <br>
                    <small>J301765389</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>BAKER HUGHES VENEZUELA, S.C.P.A</b></span>
                    <br>
                    <small>J301255690</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>


                <div class="card-customer">
                    <span><b>BANCO PROVINCIAL, S.A. BANCO UNIVERSAL</b></span>
                    <br>
                    <small>J000029679</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>BBVA SEGUROS C.A</b></span>
                    <br>
                    <small>J000340269</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b> C.A. CIGARRERA BIGOTT SUCS</b></span>
                    <br>
                    <small>J000067481</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>CERVECERIA POLAR, C.A</b></span>
                    <br>
                    <small>J000036729</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>Cirion Technologies, S.A.</b></span>
                    <br>
                    <small>J300462390</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>CONSORCIO DE VALORES E INVERSIONES COVAIN, C.A</b></span>
                    <br>
                    <small>J304025882</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>Consorcio Grano Alto</b></span>
                    <br>
                    <small>J410353147</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>Defensa Publica</b></span>
                    <br>
                    <small>G200017210</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>DESARROLLOS HOTELEROS LA CASTELLANA, S.C.S</b></span>
                    <br>
                    <small>J296415781</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>Dhl Express Aduanas Venezuela C.A.</b></span>
                    <br>
                    <small>J002443731</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>Dhl Fletes Aereos, C.A.</b></span>
                    <br>
                    <small>J001438092</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>Distribuidora Bigott, C.A.</b></span>
                    <br>
                    <small>J302385490</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>DIVISION 365 SEGURIDAD A.C.</b></span>
                    <br>
                    <small>J002870311</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>EMBAJADA DE LA REPUBLICA DE PANAMA</b></span>
                    <br>
                    <small>G200057130</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>Empresas Tecnoconsult Grupo Tecno S.A.</b></span>
                    <br>
                    <small>J001862692</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>Fundacion Bigott</b></span>
                    <br>
                    <small>J000596620</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>FUNDACION DANAC</b></span>
                    <br>
                    <small>J302923263</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>FUNDACION VENEZOLANO ALEMANA COLEGIO HUMBOLDT</b></span>
                    <br>
                    <small>J000071080</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>Huawei Technologies De Venezuela, S.A.</b></span>
                    <br>
                    <small>J309545728</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>INVERSIONES BARCELONA ORIENTE, C.A.</b></span>
                    <br>
                    <small>J294734677</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>INVERSIONES MIMI C.A</b></span>
                    <br>
                    <small>J001646310</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>INVERSORA LOCKEY C.A.</b></span>
                    <br>
                    <small>J001198490</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>Itochu Venezuela S.A.</b></span>
                    <br>
                    <small>J000447713</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>JOHN CRANE VENEZUELA, C.A.</b></span>
                    <br>
                    <small>J085041150</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>LABORATORIOS LETI S.A.V</b></span>
                    <br>
                    <small>J000215006</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>Manufacturas De Papel CA (Manpa) SACA</b></span>
                    <br>
                    <small>J000235309</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>Medicos Unidos Los Jabillos, C.A</b></span>
                    <br>
                    <small>J001370510</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>Mercadolibre Venezuela, S.R.L.</b></span>
                    <br>
                    <small>J306842675</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>Mms Comunicaciones De Venezuela, S.A.</b></span>
                    <br>
                    <small>J000572321</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>MPP DE ECON.FINANZAS Y COMERCIO EXTERIOR</b></span>
                    <br>
                    <small>G200123516</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>OMNITEC INTEGRADORES, C.A.</b></span>
                    <br>
                    <small>J402371365</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>OSTOS VELÁZQUEZ & ASOCIADOS</b></span>
                    <br>
                    <small>J002569107</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>


                <div class="card-customer">
                    <span><b>Pastas Capri, C.A</b></span>
                    <br>
                    <small>J000272417</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>


                <div class="card-customer">
                    <span><b>PEPSI-COLA VENEZUELA,C.A.</b></span>
                    <br>
                    <small>J301370139</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>PERFUMES FACTORY, C.A</b></span>
                    <br>
                    <small>J310289093</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>


                <div class="card-customer">
                    <span><b>Principe del Este C.A.</b></span>
                    <br>
                    <small>J503877650</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>PRODUCTOS EFE SA</b></span>
                    <br>
                    <small>J000301255</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>PROVENCESA, S.A</b></span>
                    <br>
                    <small>J085019731</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>PROYECTOS SURADEM, C.A.</b></span>
                    <br>
                    <small>J314876961</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>SABORES DEL MAR 2022, C.A</b></span>
                    <br>
                    <small>J503007532</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>Siemens Energy, S.A.</b></span>
                    <br>
                    <small>J000343543</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>

                <div class="card-customer">
                    <span><b>TODOTICKET 2004,C.A.</b></span>
                    <br>
                    <small>J503007532</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>


                <div class="card-customer">
                    <span><b>Transporte Polar, C.A.</b></span>
                    <br>
                    <small>J000919640</small>
                    <div class="content">
                        <a href=""><i class='bx bx-error-circle'></i></a>
                        <img src="https://images.contactout.com/companies/1fce909f06b86d437680e5625a6a9867" alt="">
                    </div>
                    <div class="viw">
                    </div>
                    <small>Tipo: SGD</small>
                </div>


                <div class="card-customer">
                    <span><b>VENSECAR INTERNACIONAL C.A.</b></span>
                    <br>
                    <small>J002245700</small>
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
    <script src="./JS/main.js"></script>
    <script src="./js/app.js" defer></script>
    <script src="./JS/echarts.js"></script>
    <script src="./JS/Bootstrap.js"></script>
    <!--SCRIPTS-->
</body>

</html>