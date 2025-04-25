<?php
include "functions.php";
$info=getInfo();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Домашнее задание по базам данных</title> 
    </head>
    <body> 
        <div>
           
            <table>
                <thead><th>Код</th><th>КодТура</th><th>Дата отправления</th><th>Номер отправления</th><th>Редактировать</th></thead>
                <?php
                for($i=0; $i<count($info); $i++)
                {
                    $idTravel=$info[$i]["IDtravel"];
                    $idTour=$info[$i]["IDtour"];
                    $dateDDeparture=$info[$i]["dateDeparture"];
                    $routeDDeparture=$info[$i]["routeDeparture"];
                    echo "<tr><td>$idTravel</td><td>$idTour</td><td>$dateDDeparture</td><td>$routeDDeparture</td><td><a href='updateForm.php?id=".$idTravel."'>Редактировать</a></td></tr>";
                }
                ?>
            </table>
        </div>
    </body>
<html>