<?php include "./controller/dataController.php"; ?>

<form action="./view/page/user-info-page.php" method="GET">

    <h2>Registro de usuario</h2>
    <div class="form__row">
        <div>
            <label for="user-name">Ingresa tu Nombre: </label>
            <input id="user-name" type="text" name="user_name" placeholder="Betty">
        </div>
        <div>
            <label for="user-lastName">Ingresa tu Apellido: </label>
            <input id="user-lastName" type="text" name="user_lastName" placeholder="Cooper">
        </div>
        <div>
            <label for="user-id">Ingresa tu numero de cedula: </label>
            <input id="user-id" type="text" name="user_id"    placeholder="1003002000">
        </div>
    </div>
    <button>Enviar datos</button>
</form>