<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION["arrayNum"])) {
    $_SESSION["arrayNum"] = [10, 20, 30];
}
if (isset($_POST["modify"])) {
    $pos = $_POST["pos"];
    $_SESSION["arrayNum"][$pos] = $_POST["number"];
}
?>

<body>
    <h1>Práctica Pr1 – Intro PHP - Antonio Herrero</h2>
        <h2>Exercise Session 2</h2>
        <h3>a) Crea un formulario que permita modificar el valor en una posición en concreto.
            <br>b) Consigue que se mantenga las modificaciones en el array.
            <br>c) Añade un botón para calcular el valor medio.
        </h3>
        <h2>Modify array saved in session</h2>
        <form action="" method="POST">
            Position to modify:<select name="pos">
                <?php
                foreach ($_SESSION["arrayNum"] as $numero => $pos) {
                    echo "<option value=$numero>$numero</option>";
                }
                ?>
            </select>
            <br>
            New value:<input type="number" name="number"><br>
            <input type="submit" name="modify" value="Modify">
            <input type="submit" name="average" value="Average">
            <input type="reset" value="reset">
            <div id="array">
                <?php
                echo "<br>Current array: ";
                foreach ($_SESSION["arrayNum"] as $numero) {
                    echo "-$numero-";
                }
                if (isset($_POST["average"])) {
                    $sum = array_sum($_SESSION["arrayNum"]);
                    $cont = count($_SESSION["arrayNum"]);
                    if ($cont > 0) {
                        $average = $sum / $cont;
                        echo "<br><br>Average: " . number_format($average, 2);
                    } else {
                        echo "<br><br>Average: Array is empty!";
                    }
                }
                ?>
            </div>
        </form>
</body>

</html>