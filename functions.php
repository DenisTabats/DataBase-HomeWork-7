<?php
$link=false;
function OpenDB()
{
    global $link;
    $link = mysqli_connect("localhost", "root", "", "turfirma");
    mysqli_query($link, "SET NAMES UTF8");
}
function CloseDB()
{
    global $link;
    mysqli_close($link);
}
function getInfo()
{
    global $link;
    OpenDB();
    $result=mysqli_query($link, "SELECT * FROM scheduletravel");
    CloseDB();
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
function addInfo($city, $dateDDeparture, $routeDDeparture)
{
    global $link;
    OpenDB();
    $add=mysqli_query($link, "INSERT into scheduletravel (idTour, dateDeparture, routeDeparture) value ('$city', '$dateDDeparture', '$routeDDeparture')");
    CloseDB();
    return $add;
}
function listCity()
{
    global $link;
    OpenDB();
    $list=mysqli_query($link, "SELECT * FROM tours");
    CloseDB();
    return mysqli_fetch_all($list, MYSQLI_ASSOC);
}
function getInfoById($idTravel)
{
    global $link;
    OpenDB();
    $info=mysqli_query($link,"SELECT * FROM scheduletravel WHERE IDtravel=$idTravel");
    CloseDB();
    return mysqli_fetch_assoc($info);
}
function updateInfo($idTravel, $idTour, $dateDDeparture, $routeDDeparture)
{
    global $link;
    OpenDB();
    $update=mysqli_query($link, "UPDATE scheduletravel SET IDtour='$idTour', dateDeparture='$dateDDeparture', routeDeparture='$routeDDeparture' WHERE IDtravel=$idTravel");
    CloseDB();
    return $update;
}
?>