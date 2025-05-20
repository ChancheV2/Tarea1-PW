<?php require('partes/head.php'); ?>

<style>
    .inputx {
        margin: 10px 0;
    }
    .inputx label {
        display: inline-block;
        width: 70px;
    }
    .inputx input, .inputx select {
        padding: 5px;
        width: 200px;
    }
    .inputx button {
        padding: 5px 10px;
        background-color: #007BFF;
        color: white;
        border: none;
        cursor: pointer;
    }
    .inputx button:hover {
        background-color: #0056b3;
    }

</style>

<form method="GET" action="calculadora_resultado.php">
    <h2>📟Calculadora</h2>
    <div class="inputx">
        <label>Num1: </label> <input required type="number" name="num1"/>
    </div>

    <div>
        <label>Num2: </label> <input required type="number" name="num2"/>
    </div>

    <div>
    <div class="inputx">
    <select name="operacion" required>
        <option value="">Seleccione una operacion</option>
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicacion</option>
        <option value="division">Division</option>
    </select>
    </div>
    <div class="inputx">
        <button type="submit">🔢 Calcular</button>
    </div>
    </div>

</form>


<?php require('partes/foot.php'); ?>
