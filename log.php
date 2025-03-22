<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/icons/cloud.svg">
    <title>CloudFact-login</title>

    <!--STYLE ICON-->
    <link rel="stylesheet" href="./CSS/log.css">
    <link rel="stylesheet" href="./CSS/FRAMEWORK/Bootstrap.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--STYLE ICON-->


</head>

<body>


    <div class="bacgraund-container"></div>


    <main>
        <div class="container-log">
            <div class="logo">
                <i class='bx bxs-user-circle' style='color:#00f6ff'></i>
            </div>

            <div class="title">
                <h3>Sign In</h3>
            </div>

            <!--START FORM-->
            <form action="" method="POST">
                <?php include './CONTROLLER/validation.php'; ?>

                <div class="formulario-log">
                    <br>
                    <input type="email" class="form-control" name="user" id="user" placeholder="Usuario">
                    <br>

                    <br>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
                </div>

                <div class="btn">
                   <!-- <button style="background: #72717189;" type="button" class="btn btn" data-bs-dismiss="modal"><a
                            style="text-decoration: none; color: #fff; " href="./index.html">Volver</a></button> -->
                    <button type="submit" name="btn" value="submit">Ingresar</button>
                </div>

            </form>
            <!--END FORM-->

        </div>
    </main>

</body>

</html>