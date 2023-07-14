<?php

$result = "";
$message = "";

if (isset($_POST["first_number"]) && isset($_POST["operation_type"])) {
    $firstNumber = intval($_POST["first_number"]);
    $secondNumber = intval($_POST["second_number"]);
    $operationType = $_POST["operation_type"];

    switch($operationType) {
        case "sumar":
            $result = $firstNumber + $secondNumber ;
            break;
        case "restar":
            $result = $firstNumber - $secondNumber;
            break;
        case "multiplicar":
            $result = $firstNumber * $secondNumber;
            break;
        case "dividir":
            $result = $firstNumber / $secondNumber;
            break;
        default: 
            $message = "Operación invalida";
    }
}
