<!DOCTYPE html>
<html>

<body>
        <h1>Práctica Pr1 – Intro PHP - Antonio Herrero</h2>
                <h2>Exercise Session 1</h2>
                <h3>Crea un formulario que permita gestionar la cantidad de refresco o leche que hay en un
                        supermercado</h3>
                <?php
                echo "<b>a) Se debe mantener el nombre del trabajador que está utilizando la aplicación.</b><br>";
                echo "<b>b) Se debe poder añadir y quitar leche o refresco seleccionando de una lista</b><br>";
                echo "<b>c) Se debe controlar que no se pueden quitar mas unidades de las que haya, en ese
caso mostrar error.</b><br><br>";
                ?>
                <h2>Supermarket management</h2>
                Worker name:<input type="text" id="name" required>
                <h2>Choose product:</h2>
                <select name="products" id="products" required>
                        <option value="soft">Soft Drink</option>
                        <option value="milk">Milk</option>
                </select>
                <h2>Product quantity:</h2>
                <input type="number" required><br><br>
                <button id="add">add</button>
                <button id="remove">remove</button>
                <button id="reset">reset</button>
                <h2>Inventary:</h2>
                <div id="result"></div>
                <?php
                if (isset($_POST[""])) {
                
                }else{
                        echo "<div id='result'>EMPTY FIELDS</div>";
                }
                ?>
</body>

</html>