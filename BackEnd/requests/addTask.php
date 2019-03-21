<?php

include_once("../dataLayer.php");

if (isset($_POST["taskName"]))
{
$taskName = $_POST["taskName"];
}else{
    echo ("ERROR: No taskName in request.");
}

if (isset($_POST["taskMax"]))
{
$taskMax = $_POST["taskMax"];
}else{
    echo ("ERROR: No task in request.");
}

if (isset($_POST["taskMin"]))
{
$taskMax = $_POST["taskMin"];
}else{
    echo ("ERROR: No task in request.");
}


$dl = new dataLayer();
$addedtask = $dl-> d_saveNewTask($taskName, $taskMax, $taskMin);
echo(json_encode($addedtask));

return;



?>