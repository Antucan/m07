<!DOCTYPE html>
<html>

<body>
    <h1>Práctica Pr1 – Intro PHP - Antonio Herrero</h2>
        <h2>Exercice 03</h2>
        <?php
        echo "<b>1. Se declaren dos variables con valores numéricos superiores a 10 y seguidamente:
</b><br>";
        $num1 = rand(11, 100);
        $num2 = rand(11, 100);
        echo "$num1 y $num2";
        echo "<br><br><b>2. Muestra la progresión numérica de los números pares desde 0 hasta el valor de la
primera con un bucle for.</b><br>";
        for ($i = 0; $i <= $num1; $i++) {
            if ($i % 2 == 0) {
                echo "| $i |";
            }
        }
        echo "<br><br><b>3. Muestra la progresión numérica desde la segunda variable hasta 0 con un bucle
while. </b><br>";
        while ($num2 > 0) {
            echo --$num2;
        }
        echo "<br><br><b>4. Muestra la progresión numérica desde la primera variable a la segunda con un bucle
do/while. 
</b>";
        echo "<br>";
        $num11 = rand(11, 100);
        $num22 = rand(11, 100);
        echo "$num11 y $num22<br>";
        do {
            echo $num11;
            ++$num11;
        } while ($num11 <= $num22)
        ?>
</body>

</html>