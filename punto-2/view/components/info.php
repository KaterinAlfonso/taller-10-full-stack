<div class="user-info__container">
    <div>
        <b>Nombre del usuario</b>
        <span><?php echo $_GET["full_name"] ?></span>
    </div>
    <div>
        <b>Edad del usuario</b>
        <span><?php echo $_GET["age_user"] ?></span>
    </div>
</div>

<?php
    $fullName = $_GET["full_name"];
    $ageUser = intval($_GET["age_user"]);

    if ($ageUser >= 18) {
        echo "Bienvenido " . $fullName . " " . "cumples con la edad para acceder al sitio web";
    } else {
        echo "Lo sentimos, no tienes la edad suficiente para acceder al sitio web";
    }
?>

