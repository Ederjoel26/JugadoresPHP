<html>
<head>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Liga</title>
</head>
<body class='bg-dark'>
    
    <div class='d-flex justify-content-center align-items-center' style='height:100vh;'>
        <form action="AgregarCantidades.php" method="post" class='container bg-light m-5 rounded p-5'>
            <center>
                <h1 class='fst-italic'> Agregar un jugador </h1> <br/>
                <input type='text' required='true' name='Nombre' placeholder='Nombre del jugador' class='m-1 p-2 rounded container-fluid'/> <br/>
                <input type='text' required='true' name='CantidadPartidos' placeholder='Cantidad de partidos jugados' class='m-1 p-2 rounded container-fluid'/> <br/>
                <input type='submit' value='  Enviar datos  ' class='btn btn-dark m-3 p-2 rounded fst-italic'/> <br/>
                <a href='ListaJugadores.php'> Ver lista de jugadores </a>
            </center>
        </form>
    </div>
</body>
</html>