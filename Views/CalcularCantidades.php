<?php
require '../Models/QueriesBD.php';
?>

<html>
<head>
<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Liga</title>
</head>
<body class='bg-dark'>
    <?php if( isset($_POST['NombreJugador']) || isset($_POST['CantidadTotal'])): ?>
        <?php 
            $CantidadTotal = 0; 
            $Nivel = '';
            for($i = 0; $i < $_POST['CantidadTotal']; $i++) 
            {
                $CantidadTotal += $_POST['Cantidad'. $i];
            }

            if($CantidadTotal <= 100)
                $Nivel = 'Bajo';
            elseif($CantidadTotal > 100 && $CantidadTotal <= 200)
                $Nivel = 'Medio';
            elseif($CantidadTotal > 200)
                $Nivel = 'Alto';

            QueriesBD::Agregar($_POST['NombreJugador'], $CantidadTotal, $Nivel);
        ?>
        <div class='d-flex justify-content-center align-items-center' style='height:100vh;'> 
            <section>    
                <h1 class='text-light fst-italic row'> 
                    ¡El registro del jugador "<?php echo $_POST['NombreJugador'] ?>" se ha realizado correctamente!
                <h1>
                <center>
                    <a href='ListaJugadores.php' class='fs-5'> Ver la tabla de jugadores </a> <br/>
                    <a href='AgregarJugador.php' class='fs-5'> Agregar un nuevo jugador </a>
                </center>
            </section>
        </div>
        
    <?php else: ?>
        <h1> Contenido no disponible </h1>
    <?php endif ?>
</body>
</html>