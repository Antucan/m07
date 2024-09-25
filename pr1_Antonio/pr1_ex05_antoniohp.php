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
                do {
                        $num = rand(0, 20);
                        $total += $num;
                        echo "| $num + $total |<br>";
                } while ($total < 100);
                ?>
</body>

</html>