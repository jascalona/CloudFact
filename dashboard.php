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


    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./CSS/daschboard.css">
    <link rel="stylesheet" href="./CSS/FRAMEWORK/Bootstrap.css">

</head>

<body style="background-color: rgba(241, 237, 237, 0.732);">

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
                <a href=""><span>Panel</span></a>
            </div>

            <div class="enlace">
                <i class="bx bx-printer"></i>
                <a href=""><span>Parque</span></a>
            </div>

            <div class="enlace">
                <i class='bx bx-barcode-reader'></i>
                <a href=""><span>Lectura</span></a>
            </div>

            <div class="enlace">
                <i class='bx bx-data'></i>
                <a href=""><span>Instalaciones</span></a>
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


        Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis debitis explicabo quasi iste, obcaecati earum! Voluptate explicabo commodi fuga reiciendis laboriosam modi illum, veniam officiis voluptates atque placeat maiores quod, eos similique, quia minima quae ratione soluta? Saepe consectetur ab excepturi voluptatibus. Dicta aliquid non officiis distinctio, fuga unde voluptate ratione quidem voluptates. Quod magnam eligendi et recusandae cumque culpa, veritatis quis quaerat accusantium in veniam delectus reiciendis vel magni pariatur eum minus officia. Corrupti, esse, quidem ducimus necessitatibus expedita pariatur tenetur nulla recusandae possimus ratione excepturi odit nam. Fuga laboriosam asperiores necessitatibus quasi enim consequuntur voluptate? Nostrum eum quos ut sapiente eius magnam facere, incidunt consequuntur quibusdam vero, repudiandae doloremque error aliquam exercitationem tempore fugiat explicabo quod quisquam aut nam cum! Veniam magni officia voluptatum dolore harum ut rerum eaque placeat molestiae aliquid illum natus, quas minima nostrum, laboriosam ducimus nisi rem veritatis ipsa excepturi at. Aliquid qui debitis atque error nesciunt culpa laboriosam aliquam accusamus ex, provident reiciendis, amet, placeat officiis voluptates cupiditate sint voluptatem perspiciatis nam nihil minus libero corrupti consectetur. Vel voluptates ipsum praesentium voluptatum recusandae id fugiat est quod iste! Voluptatum excepturi amet quia quae quasi, rem autem, soluta blanditiis optio, atque maiores natus quo quam ducimus ab fugiat tenetur? Quidem eius officiis sit sed dolores voluptas alias molestiae quos natus aliquam ad, blanditiis nisi distinctio, consectetur ullam odio iure. Excepturi voluptatibus quidem minus cum vero! Earum sapiente a distinctio, cumque voluptates quis nemo nisi nesciunt, impedit amet quam, illo alias ipsam doloremque magni doloribus porro molestias incidunt eligendi qui quasi commodi quas. Repellendus iste dicta provident eum, veritatis dolor esse odit nihil commodi, reiciendis dolore labore ipsam harum recusandae dignissimos, quaerat tenetur totam delectus quas accusantium repudiandae. Voluptate beatae consequatur et, facere in excepturi optio ipsum nam id perferendis eius voluptatibus eveniet veniam, magnam iste laudantium quos obcaecati vero hic fugit. Blanditiis quasi ullam tempore veritatis, amet labore id doloremque ipsa mollitia provident rem laboriosam totam illo iste, dolor dolores accusantium aut odio minima nihil. Perspiciatis ipsam, mollitia omnis numquam, sapiente, quibusdam illo dolorum nemo fugit ullam quod nesciunt provident aliquid laborum dolores quia hic consectetur ab. Quaerat, doloremque cupiditate aspernatur libero alias aliquam! Minus vitae iste nesciunt inventore temporibus mollitia quibusdam modi ipsa nemo debitis, minima exercitationem voluptate tempora eum voluptas blanditiis ea dolores voluptates perferendis? Illo, vel provident eos animi in accusamus ducimus blanditiis quibusdam officia. Aperiam eum sed illum consectetur ex!

    </main>


    <!--SCRIPTS-->
    <script src="./js/app.js" defer></script>
    <script src="./JS/Bootstrap.js"></script>
    <!--SCRIPTS-->
</body>

</html>