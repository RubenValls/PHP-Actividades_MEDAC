<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba PHP</title>
</head>
<body>
    <h1>
        <?php 
            //EJERCICIO NÚMERO 1
            echo "<h1 style='text-align:center;'>EJERCICIO 1:</h1>";
            
            //Números enteros
            $numeroEntero1 = 1;
            $numeroEntero2 = 2;
            echo "<p>El primer número entero es " . $numeroEntero1 . 
                 " el segundo número entero es " . $numeroEntero2 . 
                 " la suma de los dos es: " . $numeroEntero1+$numeroEntero2 . "</p>";
            
            //Números decimales
            $numeroDecimal = 3.5;
            echo "<p> La suma de números enteros y el decimal " . $numeroDecimal . " es: "
                 . $numeroEntero1+$numeroEntero2+$numeroDecimal . "</p>";
            
            //Booleans y Strings
            $trabajo = "desarrollador";
            if($trabajo == "desarrollador"){
                echo "<p>El trabajo que desempeñas es de desarrollador. </p>";
                $booleano1 = "True"; //Se otorga este valor porque si intento imprimir un boolean se imprime "1" o nada.
            }else{
                echo "<p>El trabajo que desempeñas no es de desarrollador. </p>";
            }
            $booleano2 = "False";
            echo "<p> La frase anterior nace de una comparación que devuelve: " . $booleano1 . 
                 " o " . $booleano2 . " en función de tu trabajo. </p>";
            echo "<br>";

            echo '<hr>';
            
            //EJERCICIO NÚMERO 2
            echo "<h1 style='text-align:center;'>EJERCICIO 2:</h1>";
            $dato1 = 33;
            $dato2 = 4;
            echo "<p>La suma de los dos números es: " . $dato1+$dato2 . "</p>"; //suma
           
            echo "<p>La resta de los dos números es: " . $dato1-$dato2 . "</p>"; //resta
            
            echo "<p>La multiplicación de los dos números es: " . $dato1*$dato2 . "</p>"; //multiplicación
            
            echo "<p>La división de los dos números es: " . $dato1/$dato2 . "</p>"; //división
        ?>
    </h1>
</body>
</html>