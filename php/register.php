<?php
    include('lib/operaciones.php');

    $operaciones = new Operaciones();

    $info = file_get_contents("php://input");
    $dataNumber = json_decode($info, true);

    $operaciones->setNumUno($dataNumber['numeroUno']);
    $operaciones->setNumDos($dataNumber['numeroDos']);

    $dataOperaciones[] = [
        "suma" => $operaciones->sumar(),
        "resta" => $operaciones->restar(),
    ];

    header('Content-Type: application/json');
    echo json_encode($dataOperaciones);

?>