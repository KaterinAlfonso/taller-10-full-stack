<?php include "./controller/calculationController.php" ?>


<form method="post">
    <h2>Registro de usuario</h2>
    <div class="form__row">
        <div>
            <label for="user-name">Ingresa tu Nombre: </label>
            <input id="user-name" type="text" name="user_name" placeholder="Betty">
        </div>
        <div>
            <label for="user-birth-date">Ingresa tu Fecha de nacimiento: </label>
            <input id="user-birth-date" type="date" name="user_birth_date" placeholder="01/01/2001">
        </div>
    </div>
    <button>Enviar datos</button>
</form>

