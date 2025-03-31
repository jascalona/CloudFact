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
    <title>CloudFact-Install</title>

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
                <h6>Bienvenid@
                    <?php echo $_SESSION['name'] . ' ' . $_SESSION['surname']; ?>
                </h6>
                <small>Monitorea metricas clave. Consulta Informes y analiza la informacion</small>
            </div>

        </div>


        <div class="container-componet-installation">

            <article class="card-install">
                <div class="item-install-left">
                    <h6>Componente de Carga</h6>
                    <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit voluptate perspiciatis quas
                    </small>
                    <br>

                    <button><a href="">Ver Video</a></button>
                </div>

            </article>


            <article class="card-install">
                <div class="item-install-right">
                    <div class="cont-top">
                        <h6>Registro de Instalación</h6>
                        <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, aliquid!</small>
                    </div>
                    <!--INPUT GROUP FORM-->
                    <?php include("./CONTROLLER/Load_Install.php"); ?>

                    <form action="" method="POST">


                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Cliente</label>
                            <input name="CLIENT" type="text" class="form-control" id="exampleFormControlInput1" required
                                placeholder="Nombre del Cliente">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">RIF</label>
                            <input name="RIF" type="text" class="form-control" id="exampleFormControlInput1" required
                                placeholder="RIF del Cliente">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Serial</label>
                            <input name="SERI" type="text" class="form-control" id="exampleFormControlInput1" required
                                placeholder="Serial del Equipo">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Modelo</label>
                            <input name="MODEL" type="text" class="form-control" id="exampleFormControlInput1" required
                                placeholder="Modelo del Equipo">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Direccion Exacta</label>
                            <textarea name="LOCATION" class="form-control" id="exampleFormControlTextarea1" rows="3" required
                                placeholder="Ingrese Ubicacion del Equipo"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Ciudad</label>
                            <input name="CITY" type="text" class="form-control" id="exampleFormControlInput1" required
                                placeholder="Ciudad donde se Instalo el Equipo">
                        </div>


                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Fecha de Instalacion</label>
                            <input name="DATE" type="date" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Modalidad de Intalación</label>
                            <select name="N_PORT" id="status" class="form-select form-select-lg mb-3" required
                                aria-label="Large select example">
                                <option></option>
                                <option value="USB">USB</option>
                                <option value="IPv4">IPv4</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Contador de Instalación B/N</label>
                            <input name="CONT_BN" type="number" class="form-control" id="exampleFormControlInput1" required
                            placeholder="Ingrese Contador sin caracteres especiales Ejemplo: 1050" value="0">
                            </div>


                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Contador de Instalación
                                Color</label>
                            <input name="CONT_COLOR" type="number" class="form-control" id="exampleFormControlInput1" required
                                placeholder="Ingrese Contador sin caracteres especiales Ejemplo: 1050" value="0">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Observaciones:</label>
                            <textarea name="OBSER" class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="Agrege un comentario (Opcional) " required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Anexar Carta de Instalación</label>
                            <input name="DOC" type="file" class="form-control" id="exampleFormControlInput1"
                                placeholder="Ingrese Contador sin caracteres especiales Ejemplo: 1050" required>
                        </div>

                        <div class="btn-carga">
                            <button type="submit" class="btn btn-dark" name="carga" value="submit">Cargar</button>
                        </div>

                    </form>


                </div>
            </article>
            <!--INPUT GROUP FORM-->


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