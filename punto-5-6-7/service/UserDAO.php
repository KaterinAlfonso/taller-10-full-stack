<?php
include "connection.php";

function getAllUsers() {
    return mysqli_query(CONNECTION, "SELECT * FROM usuarios");
}

function getUserByNumber($idNumber) {
    return mysqli_query(CONNECTION, "SELECT * FROM usuarios WHERE cedula = $idNumber");
}
?>