<?php
include "functions.php";
updateInfo($_POST['IDtravel'], $_POST['IDtour'], $_POST['dateDeparture'], $_POST['routeDeparture']);
header("Location:index.php");
?>

