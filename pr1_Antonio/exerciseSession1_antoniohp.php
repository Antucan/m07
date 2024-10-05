<!DOCTYPE html>
<html>
<?php
session_start();
?>

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
                <form action="" method="post">
                        <h2>Supermarket management</h2>
                        Worker name:<input type="text" name="name" required>
                        <h2>Choose product:</h2>
                        <select name="products" name="products" required>
                                <option value="soft">Soft Drink</option>
                                <option value="milk">Milk</option>
                        </select>
                        <h2>Product quantity:</h2>
                        <input type="number" name="number" required><br><br>
                        <input type="submit" name="add" value="add">
                        <input type="submit" name="remove" value="remove">
                        <input type="reset" value="reset">
                </form>
                <h2>Inventory:</h2>
                <div id="result"></div>
                <?php
                $name = "";
                $milk = 0;
                $softDrink = 0;
                if (!isset($_SESSION["name"])) {
                        $_SESSION["name"] = "";
                }
                if (!isset($_SESSION["milk"])) {
                        $_SESSION["milk"] = 0;
                }
                if (!isset($_SESSION["soft"])) {
                        $_SESSION["soft"] = 0;
                }
                if (isset($_POST["add"])) {
                        if (isset($_POST["name"])) {
                                $name = $_POST["name"];
                                $_SESSION["name"] = $name;
                        }
                        if (isset($_POST["products"])) {
                                $product = $_POST["products"];
                                $_SESSION["products"] = $product;
                        }
                        if (isset($_POST["number"])) {
                                $quantity = $_POST["number"];
                                $_SESSION["number"] = $quantity;
                        }
                        if ($product == "milk") {
                                $_SESSION["milk"] += $quantity;
                        } elseif ($product == "soft") {
                                $_SESSION["soft"] += $quantity;
                        }
                }
                if (isset($_POST["remove"])) {
                        if (isset($_POST["name"])) {
                                $name = $_POST["name"];
                                $_SESSION["name"] = $name;
                        }
                        if (isset($_POST["products"])) {
                                $product = $_POST["products"];
                                $_SESSION["products"] = $product;
                        }
                        if (isset($_POST["number"])) {
                                $quantity = $_POST["number"];
                                $_SESSION["number"] = $quantity;
                        }
                        if ($product == "milk") {
                                if ($_SESSION["milk"] > $quantity) {
                                        $_SESSION["milk"] -= $quantity;
                                }
                        } elseif ($product == "soft") {
                                if ($_SESSION["soft"] > $quantity) {
                                        $_SESSION["soft"] -= $quantity;
                                }
                        }
                }
                echo "Worker: " . $_SESSION["name"] . "<br><br>";
                echo "Units Milk: " . $_SESSION["milk"] . "<br><br>";
                echo "Units Soft Drink: " . $_SESSION["soft"];
                ?>
</body>

</html>