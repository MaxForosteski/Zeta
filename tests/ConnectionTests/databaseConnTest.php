<?php
    require("../../Dependencies-Manager.php");

    $database = new DatabaseConnLINK();
    $status = $database->getStatus();

    $statusArray = (array) $status;

    echo json_encode($statusArray);
?>