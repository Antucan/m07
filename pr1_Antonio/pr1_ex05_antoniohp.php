<!DOCTYPE html>
<html>

<body>
        <h1>Práctica Pr1 – Intro PHP - Antonio Herrero</h2>
                <h2>Exercice 05</h2>
                <?php
                echo "<b>1. Se genere un número aleatorio entre 0 y 20 y se muestre por pantalla.  
</b><br><br>";
                $num = rand(0, 20);
                echo "$num<br><br>";
                echo "<b>2. Se repita la operación hasta que el total de valores sumados sea superior a 100. 
</b><br><br>";
                $total = 0;
                $pares = 0;
                $impares = 0;
                do {
                        $num = rand(0, 20);
                        if ($num % 2 == 0) {
                                ++$pares;
                        } else if ($num % 2 == 1) {
                                ++$impares;
                        }
                        echo "| $total";
                        $total += $num;
                        echo " + $num |<br>";
                } while ($total < 100);
                echo "<br><b>3. Muestra la suma de los valores generados.  
</b><br><br>";
                echo $total;
                echo "<br><br><b>4. Muestra el total de números pares e impares generados.  
</b><br><br>";
                echo "Hay $pares numero pares<br>";
                echo "Hay $impares numero pares";
                ?>
</body>

</html>