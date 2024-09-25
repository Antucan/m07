<!DOCTYPE html>
<html>

<body>
    <h1>Práctica Pr1 – Intro PHP - Antonio Herrero</h2>
        <h2>Exercice 02</h2>
        <?php
        echo "<b>1. Se declara una variable con un valor numérico. Utlizando una estructura switch/case
genera un mensaje que indique a qué día de la semana se corresponde.
</b><br>";
        echo "<b>a. En caso de que no sea un valor entre el 1 y el 7 indica que no se corresponde
con ningún día.</b><br>";
        $num = rand(0, 10);
        echo "El numero aleatorio es: $num<br>";
        switch ($num) {
            case 1:
                echo "Lunes";
                break;
            case 2:
                echo "Martes";
                break;
            case 3:
                echo "Miercoles";
                break;
            case 4:
                echo "Jueves";
                break;
            case 5:
                echo "Viernes";
                break;
            case 6:
                echo "Sabado";
                break;
            case 7:
                echo "Domingo";
                break;
            default:
                echo "No es ningun dia";
        }
        ?>

</body>

</html>