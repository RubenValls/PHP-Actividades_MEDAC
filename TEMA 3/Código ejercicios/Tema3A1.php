<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema3 - Actividad 1</title>
    <style>
        body{
            text-align:center;
        }
    </style>
</head>
<body>
    <h1>Actividad 1</h1>
    <?php
        echo "<hr>";
        //Prueba 1
        $numeroEntero = 1234;
        $nombreUsuario = "User 1";
        echo "<h3>Prueba 2 - El resultado obtenido en base al usuario " .$nombreUsuario. " y número " .$numeroEntero. " es: </h3>";
        if ($nombreUsuario === "User 1" && $numeroEntero === 1234){
            echo "<p>Genial, puedes pasar!!</p>";
        }elseif($nombreUsuario === "User 1" && $numeroEntero != 1234){
            echo "<p>Lo siento, el usuario es correcto, pero la contraseña no.</p>";
        }elseif($nombreUsuario != "User 1" && $numeroEntero === 1234){
            echo "<p>Lo siento, este usuario no es válido.</p>";
        }else{
            echo "<p>No has acertado ninguna</p>";
        }

        //Prueba 2
        $numeroEntero = 1254;
        $nombreUsuario = "User 2";
        echo "<h3>Prueba 2 - El resultado obtenido en base al usuario " .$nombreUsuario. " y número " .$numeroEntero. " es: </h3>";
        if ($nombreUsuario === "User 1" && $numeroEntero === 1234){
            echo "<p>Genial, puedes pasar!!</p>";
        }elseif($nombreUsuario === "User 1" && $numeroEntero != 1234){
            echo "<p>Lo siento, el usuario es correcto, pero la contraseña no.</p>";
        }elseif($nombreUsuario != "User 1" && $numeroEntero === 1234){
            echo "<p>Lo siento, este usuario no es válido.</p>";
        }else{
            echo "<p>No has acertado ninguna</p>";
        }

        //Prueba 3
        $numeroEntero = 1234;
        $nombreUsuario = "User 3";
        echo "<h3>Prueba 2 - El resultado obtenido en base al usuario " .$nombreUsuario. " y número " .$numeroEntero. " es: </h3>";
        if ($nombreUsuario === "User 1" && $numeroEntero === 1234){
            echo "<p>Genial, puedes pasar!!</p>";
        }elseif($nombreUsuario === "User 1" && $numeroEntero != 1234){
            echo "<p>Lo siento, el usuario es correcto, pero la contraseña no.</p>";
        }elseif($nombreUsuario != "User 1" && $numeroEntero === 1234){
            echo "<p>Lo siento, este usuario no es válido.</p>";
        }else{
            echo "<p>No has acertado ninguna</p>";
        }

        //Prueba 4
        $numeroEntero = 1235;
        $nombreUsuario = "User 1";
        echo "<h3>Prueba 2 - El resultado obtenido en base al usuario " .$nombreUsuario. " y número " .$numeroEntero. " es: </h3>";
        if ($nombreUsuario === "User 1" && $numeroEntero === 1234){
            echo "<p>Genial, puedes pasar!!</p>";
        }elseif($nombreUsuario === "User 1" && $numeroEntero != 1234){
            echo "<p>Lo siento, el usuario es correcto, pero la contraseña no.</p>";
        }elseif($nombreUsuario != "User 1" && $numeroEntero === 1234){
            echo "<p>Lo siento, este usuario no es válido.</p>";
        }else{
            echo "<p>No has acertado ninguna</p>";
        }
    ?>
</body>
</html>