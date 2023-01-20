<?php
require '../Models/QueriesBD.php';

$Jugadores = QueriesBD::ObtenerJugadores();
$MejorJugador = QueriesBD::ObtenerMejorJugador();
$PeorJugador = QueriesBD::ObtenerPeorJugador();
?>

<html>
<head>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Liga</title>
</head>
<body class='bg-dark container'>
    <header class='bg-light'>
        <center>
            <a href='AgregarJugador.php' class='fs-4'>¿Quieres registrar algún jugador?</a>
        </center>
    <header>
    <div class='d-flex justify-content-center align-items-center' style='height:100vh'>
        <section class=' container bg-light d-flex justify-content-center align-items-center m-5 p-5' style='height:100vh'>
            <h1 class='fst-italic'>Reporte de anotaciones</h1>
            <table>
                <tr class='fst-italic'>
                    <th>NOMBRE DEL JUGADOR</th>
                    <th>TOTAL PUNTOS</th>
                    <th>NIVEL DE ANOTACIÓN</th>
                </tr>
                <?php foreach ($Jugadores as $Jugador):?>
                    <tr>
                        <td> <?php echo $Jugador[0] ?> </td>
                        <td> <?php echo $Jugador[1] ?> </td>
                        <td> <?php echo $Jugador[2] ?> </td>
                    </tr>
                <?php endforeach ?>
                <table>
                    <tr class='fst-italic'>
                        <th>JUGADOR CON MAYOR PUNTAJE</th>
                        <th>TOTAL DE PUNTOS</th>
                    </tr>
                    <tr>
                        <td> <?php echo $MejorJugador[0] ?> </td>
                        <td> <?php echo $MejorJugador[1] ?> </td>
                    </tr>
                    <tr class='fst-italic'>
                        <th>JUGADOR CON MENOR PUNTAJE</th>
                        <th>TOTAL DE PUNTOS</th>
                    </tr>
                    <tr>
                        <td> <?php echo $PeorJugador[0] ?> </td>
                        <td> <?php echo $PeorJugador[1] ?> </td>
                    </tr>
                </table>
            </table>
        </section>
    </div>
</body>
</html>