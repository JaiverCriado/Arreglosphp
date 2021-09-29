<?php

        /*
        Jaiver Orlando Criado Arias
        Curso Desarrollo web con PHP
        Evidencia_AA2: Taller uso de arreglos
        */

        // En este apartado realizaremos un recorrido por el array de Colores
        
        $arregloColores = array (
            "Amarillo" => "Riqueza y Alegria",
            "Verde" => "Paz y Esperanza",
            "Azul" => "Pureza y Tranquilidad",
        );
        
        // En este apartado realizaremos un recorrido por el array de datos
        
        $arregloDatos = array(
            array("Juan Perez","Cra. 45 #45-56","3456789","23/12/1997","Amarillo"),
            array("Pablo Manrique","Clle. 23 #12 - 19 Sur","3214567","12/10/1980","Verde"),
            array("Nancy Peña","Av. 34 # 16 - 12","2135423","07/06/2000","Azul"),
        );
        
 
        // En este apartado realizaremos un recorrido por el array

            for($i=0;$i<3;$i++){
                $color=$arregloDatos[$i][4];
                  if(empty($arregloColores[$color])){
                      $arregloDatos[$i][5]='No se encuentra el significado';
                }
            else {
                $arregloDatos[$i][5]=$arregloColores[$color];
                }
            }
?>         

<!-- Acá empieza el código HTML -->

<!DOCTYPE html>    
<html>
    <head>
        <title>Taller Uso Arreglos - Jaiver Criado</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />  
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Trocchi&display=swap" rel="stylesheet">     
    </head>

    <style>

        h3{
            color:#2471A3
            font-size : 18px;
            font font-family: sans-serif;
        }

        table{
            width: 100%;
            aling: center;
            border: 1;
        }

        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            /*border-spacing: 5px;*/
            padding: 5px;
        }

        th{
            color:#f1faee;
            background-color: #1d3557;
        }
        /*renglones pares*/
        tr:nth-child(even){
            background-color: #f1faee;
        }
        /*renglones impares*/
        tr:nth-child(odd){
            background-color: #a8dadc;
        }

    </style>    
    <body style="text-align: center;">
    
        <h3>Uso de arreglos</h3>

        <table>
        <!-- Cabecera con los titulos de la tabla -->    
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Fecha de cumpleaños</th>
                    <th>Color favorito</th>
                    <th>Significado</th>
                </tr>
            </thead>
        <?php
    
        // El foreach recorre el arreglo 

             foreach ($arregloDatos as $fila){
                echo "<tr>";
                   foreach ($fila as $celda){
                   echo "<td> $celda </td>";
                }
                echo "</tr>";
            }
      ?>
    </body>
</html>
