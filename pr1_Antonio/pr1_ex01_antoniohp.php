<!DOCTYPE html>
<html>

<body>
    <h1>Práctica Pr1 – Intro PHP - Antonio Herrero</h2>
        <h2>Exercice 01</h2>
        <?php
        echo "<b>1. Declare dos variables numéricas, las sume, reste, dividí y muestre los valores de las
variables y los resultados de sus operaciones</b><br>";
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        echo "SUMA: ";
        echo "$num1 + $num2 = ";
        echo $num1 + $num2;
        echo "<br>RESTA: ";
        echo "$num1 - $num2 = ";
        echo $num1 - $num2;
        echo "<br>DIVISION: ";
        echo "$num1 / $num2 = ";
        echo $num1 / $num2;

        echo "<br><br><b>2. Muestra cuál es mayor, cuál menor o si son iguales.</b><br>";
        if ($num1 == $num2) {
            echo "Los dos numeros son iguales";
        } else if ($num1 > $num2) {
            echo "$num1 es mayor a $num2";
        } else {
            echo "$num2 es mayor a $num1";
        }

        echo "<br><br><b>3. Si las dos variables son valores superiores a 1,
a. calcula el área del triángulo con base y altura igual a los valores de las
variables.</b><br>";
        if ($num1 > 1 && $num2 > 1) {
            echo "La base del triangulo es: ";
            echo ($num1 * $num2) / 2;
        }
        ?>

</body>

</html>