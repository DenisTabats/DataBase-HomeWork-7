<?php
include "functions.php";
$update=getInfoById($_GET['id']);
$list=listCity();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Форма редактирования</title> 
    </head>
    <body> 
        <div>
            <form action="updateController.php" method="POST" role='form'>
                <div>
                    <input id="IDtravel" type="hidden" name="IDtravel" value="<?php echo $update['IDtravel'];?>"/>
                    <div>
                        <label for="dateDeparture">Дата отправления</label>
                        <div>
                            <input id="dateDeparture" type="date" name="dateDeparture" value="<?php echo $update['dateDeparture'];?>"/>
                        </div>
                    </div>
                    <div>
                        <label for="routeDeparture">Номер отправления</label>
                        <div>
                            <input id="routeDeparture" type="text" name="routeDeparture" value="<?php echo $update['routeDeparture'];?>"/>
                        </div>
                    </div>
                    <div>
                        <label for="IDtour">Код тура</label>
                        <div>
                            <select id="IDtour" name="IDtour">
                                <?php
                                for($i=0; $i<count($list); $i++)
                                {
                                    $idTour=$list[$i]['IDtour'];
                                    $city=$list[$i]['city'];
                                    if($idTour==$list['idTour'])
                                    {
                                        echo "<option selected value='$idTour'>$city</option>";
                                    }
                                    else
                                    {
                                        echo "<option value='$idTour'>$city</option>";  
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <button type="submit" name="add">Редактировать</button>
                </div>
            </form>
        </div>
    </body>
<html></html>