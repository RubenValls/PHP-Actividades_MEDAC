<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 3 - Actividad 2</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Ejercicio 2 - Tema 3</h1>
    <h2>Solución bruta: </h2>
    <?php
        //Declaración de la matriz
        $matriz = array (
            "Fila 1" => array(),
            "Fila 2" => array(),
            "Fila 3" => array(),
            "Fila 4" => array(),
            "Fila 5" => array(),
            "Fila 6" => array()
        );

        $contador = 0;
        $numeroInicial = 0;
        $numeroFinal = 1;

        // Se relllena la primera fila de la matriz
        while($contador < 6){
            $matriz["Fila 1"][$contador] = $numeroInicial . $numeroFinal;
            echo $matriz["Fila 1"][$contador] . " ";
            $numeroFinal++;
            $contador++;
            }
        
        echo "<br>";
        $contadorInterno = 0; #Permite el recorrido interno de las columnas
        
        // Se relllena la segunda fila de la matriz    
        while($contador < 12){
            if($numeroFinal>9){
                $numeroFinal = 0;
                $numeroInicial++;
            }
            $matriz["Fila 2"][$contadorInterno] = $numeroInicial . $numeroFinal;
            echo $matriz["Fila 2"][$contadorInterno]. " ";
            $numeroFinal++;
            $contadorInterno++;
            $contador++;
            }
        echo "<br>";
        $contadorInterno = 0;
        
        // Se relllena la tercera fila de la matriz  
        while($contador < 18){
            if($numeroFinal>9){
                $numeroFinal = 0;
                $numeroInicial++;
                }
            $matriz["Fila 3"][$contadorInterno] = $numeroInicial . $numeroFinal;
            echo $matriz["Fila 3"][$contadorInterno] . " ";
            $numeroFinal++;
            $contadorInterno++;
            $contador++;
            }
                
        echo "<br>";
        $contadorInterno = 0;
        
        // Se relllena la cuarta fila de la matriz  
        while($contador < 24){
            if($numeroFinal>9){
                $numeroFinal = 0;
                $numeroInicial++;
                }
            $matriz["Fila 4"][$contadorInterno] = $numeroInicial . $numeroFinal;
            echo $matriz["Fila 4"][$contadorInterno] . " ";
            $numeroFinal++;
            $contadorInterno++;
            $contador++;
            }
                
        echo "<br>";
        $contadorInterno = 0;
        
        // Se relllena la quinta fila de la matriz  
        while($contador < 30){
            if($numeroFinal>9){
                $numeroFinal = 0;
                $numeroInicial++;
                }
            $matriz["Fila 5"][$contadorInterno] = $numeroInicial . $numeroFinal;
            echo $matriz["Fila 5"][$contadorInterno] . " ";
            $numeroFinal++;
            $contadorInterno++;
            $contador++;
            }

        echo "<br>";
        $contadorInterno = 0;
         
        // Se relllena la sexta fila de la matriz  
        while($contador < 36){
            if($numeroFinal>9){
                $numeroFinal = 0;
                $numeroInicial++;
                }
            $matriz["Fila 6"][$contadorInterno] = $numeroInicial . $numeroFinal;
            echo $matriz["Fila 6"][$contadorInterno] . " ";
            $numeroFinal++;
            $contadorInterno++;
            $contador++;
            }

        echo "<p></p>";
        
        // Se imprime todo el contenido de la matriz  
        foreach($matriz as $fila){
            foreach($fila as $columna){
                echo $columna . " ";
            }
            unset($columna);
            echo "<br>";
        }
        unset($fila);
    ?>
    
    <hr>
    <h2>Solución optimizada:</h2>
      
    <?php

        // Se declara la matriz
        $segundaMatriz = array (
            array(),
            array(),
            array(),
            array(),
            array(),
            array()
        );

        $contador = 0;
        $numeroInicial = 0;
        $numeroFinal = 1;
        $filas = 0;

        //Se rellena la matriz
        foreach($segundaMatriz as $fila){
            while($contador<6){
                if($numeroFinal>9){
                    $numeroFinal = 0;
                    $numeroInicial++;
                    }
                $segundaMatriz[$filas][$contador] = $numeroInicial . $numeroFinal;
                echo $segundaMatriz[$filas][$contador] . " ";
                $contador++;
                $numeroFinal++;
            }
            $filas++;
            $contador = 0;
            echo "<br>";
        }
        unset($fila);

        echo "<p></p>";

        //Se imprime todos los datos la matriz
        foreach($segundaMatriz as $fila){
            foreach($fila as $columna){
                echo $columna . " ";
            }
            unset($columna);
            echo "<br>";
        }
        unset($fila);
    ?>
</body>
</html>