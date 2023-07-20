<?php  
$result= "";
$bDay = 0;
$fechaActual = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bDay = $_POST['user_birth_date'];
    $fechaActual = date('Y-m-d');
    $diff = date_diff(date_create($bDay), date_create($fechaActual));
    $age = $diff->y;
    if ($age <18) {
      $result =  "Tu edad es " . $age . ", No eres mayor de edad";
    } else {
      $result = "Tu edad es " . $age . ", Eres mayor de edad";
    }
}
?>