<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="../dist/css/loadManual.css">
    <link rel="stylesheet" href="../dist/css/Bootstrap.css">
    <title>CloudFact-load</title>
</head>


<body style="background: rgb(42, 43, 45);">



    <div class="container-load-manual">

        <div class="container-register-card">

            <article class="card-install">
                <div class="item-install-right">
                    <div class="cont-top">
                        <h6>Registro de Instalación</h6>
                        <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, aliquid!</small>
                    </div>
                    <!--INPUT GROUP FORM-->
                    <?php include("../load_manual.php"); ?>

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
                            <textarea name="LOCATION" class="form-control" id="exampleFormControlTextarea1" rows="3"
                                required placeholder="Ingrese Ubicacion del Equipo"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Fecha de Carga</label>
                            <input name="DATE" type="date" class="form-control" id="exampleFormControlInput1"
                                placeholder="" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Contador Anterior B/N</label>
                            <input name="CONT_BN" type="number" class="form-control" id="exampleFormControlInput1"
                                required placeholder="Ingrese Contador sin caracteres especiales Ejemplo: 1050"
                                value="0">
                        </div>


                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Contador Actual B/N</label>
                            <input name="CONT_COLOR" type="number" class="form-control" id="exampleFormControlInput1"
                                required placeholder="Ingrese Contador sin caracteres especiales Ejemplo: 1050"
                                value="0">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Volumen B/N</label>
                            <input name="CONT_COLOR" type="number" class="form-control" id="exampleFormControlInput1"
                                required placeholder="Ingrese Contador sin caracteres especiales Ejemplo: 1050"
                                value="0">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Contador Anterior Color</label>
                            <input name="CONT_BN" type="number" class="form-control" id="exampleFormControlInput1"
                                required placeholder="Ingrese Contador sin caracteres especiales Ejemplo: 1050"
                                value="0">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Contador Actual Color</label>
                            <input name="CONT_COLOR" type="number" class="form-control" id="exampleFormControlInput1"
                                required placeholder="Ingrese Contador sin caracteres especiales Ejemplo: 1050"
                                value="0">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Volumen Color</label>
                            <input name="CONT_COLOR" type="number" class="form-control" id="exampleFormControlInput1"
                                required placeholder="Ingrese Contador sin caracteres especiales Ejemplo: 1050"
                                value="0">
                        </div>

                        <div class="btn-carga">
                            <button type="submit" class="btn btn-dark" name="carga" value="submit">Cargar Lecturas</button>
                        </div>

                    </form>


                </div>
            </article>

        </div>

    </div>


</body>

</html>