<html>
<head>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Liga</title>
</head>
<body class='bg-dark'>
    <?php if( isset($_POST['CantidadPartidos']) && isset($_POST['Nombre']) ): ?>
        <section class='d-flex justify-content-center align-items-center' style='height:100vh'>
            <form action="CalcularCantidades.php" method='post' class='container bg-light m-5 p-5 rounded'>
                <center>
                    <h1 class='fst-italic'> Ingresar cantidades </h1>
                    <input type='text' readonly name='NombreJugador' class='rounded m-1 p-2 container-fluid' value= '<?php echo $_POST['Nombre']; ?>' /> <br/>

                    <?php for($i = 0; $i < $_POST['CantidadPartidos']; $i++): ?>
                        <input type='text' placeholder='Agrega la cantidad de puntos que reliazó en el partido' required='true' class='rounded m-1 p-2 container-fluid' name='<?php echo 'Cantidad' . $i ?>' /> <br/>
                    <?php endfor ?>

                    <input type='text' hidden name='CantidadTotal' class='rounded m-1 p-2 container-fluid' value= '<?php echo $_POST['CantidadPartidos'];?>' />
                    <input type='submit' value='  Enviar datos  ' class='btn btn-dark rounded m-3 p-2'/>
                </center>
            </form>
        </section>
    <?php else : ?>

        <h1> Contenido no disponible </h1>

    <?php endif ?>
</body>
</html>