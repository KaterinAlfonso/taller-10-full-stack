<?php include "./controller/calculationController.php";  ?>


<form method="post">
    <h2>Calculadora</h2>
    <div class="form__row">
        <div>
            <label for="first-number">Primer número</label>
            <input id="first-number" type="text" name="first_number" placeholder="10">
        </div>
        <div>
            <label for="second-number">Segundo número</label>
            <input id="second-number" type="text" name="second_number" placeholder="20">
        </div>
        <div>
            <label for="operation-type">Operación a realizar</label>
            <select name="operation_type" id="operation-type">
                <option value="sumar">Sumar</option>
                <option value="restar">Restar</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="dividir">Dividir</option>
            </select>
        </div>
    </div>
    <button>Calcular</button>
</form>